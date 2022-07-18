<?php

namespace App\Http\Controllers;

use App\Models\Setlist;
use Illuminate\Http\Request;
use App\Http\Requests\SetListRequest;
use APP\Models\File;

class SetlistController extends Controller
{
    public function __construct(setlist $setlist)
    {
        $this->model = $setlist;
    }

    public function index(Request $request)
    {
        $setlists = $this->model->getUsers(
            $request->search ?? ''
        );

        return view('setlist.index', compact('setlists')) ;
    }

    public function show($id)
    {
        $setlist = Setlist::buscarSetlistComLyrics($id);

        return view('setlist.show', compact('setlist'));
    }

    public function create()
    {
        return view('setlist.create');
    }

    public function store(SetListRequest $request)
    {
        
        $setlist = new Setlist();
        $setlist->Musica = $request->Musica;
        $setlist->Interprete = $request->Interprete;
        $setlist->Link = $request->Link;
        $setlist->save();
    
        return redirect()->route('setlist.index')->with('edit', 'Música cadastrada com sucesso! 😁');
    }

    public function edit($id)
    {
        if(!$setlist = $this->model->find($id))
            return redirect()->route('setlist.index'); 

        return view('setlist.edit', compact('setlist')); 
    }

    public function update(SetListRequest $request, $id)
    {
        if(!$setlist = $this->model->find($id))
            return redirect()->route('setlist.index'); 
        
        $data = $request->all();

        $setlist->update($data);

        return redirect()->route('setlist.index')->with('edit', 'Musica atualizada com sucesso! ☺');
    }

    public function destroy($id)
    {
        if(!$setlist = $this->model->find($id))
            return redirect()->route('setlist.index'); 
        
        $setlist->delete();

        return redirect()->route('setlist.index')->with('destroy', 'Musica deletada! 😥');
    }
}
