<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Smalot\PdfParser\Parser;
use App\Models\File;

class FileController extends Controller
{
   public function index() { 
      return view('file');
   }
   public function store(Request $request) {

        $file = $request->file;

        $request->validate([
            'file' => 'required|mimes:pdf',
        ]);

        // use of pdf parser to read content from pdf 
        $fileName = $file->getClientOriginalName();

        $pdfParser = new Parser();
        $pdf = $pdfParser->parseFile($file->path());
        $content = $pdf->getText();

       $upload_file = new File;
       $upload_file->orig_filename = $fileName;
       $upload_file->mime_type = $file->getMimeType();
       $upload_file->filesize = $file->getSize();
       $upload_file->content = $content;
       $upload_file->save();
       return redirect()->back()->with('success', 'File  submitted');
}
}
