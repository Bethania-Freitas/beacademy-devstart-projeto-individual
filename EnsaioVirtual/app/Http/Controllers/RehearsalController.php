<?php

namespace App\Http\Controllers;

use App\Models\Rehearsal;
use Illuminate\Http\Request;
use App\Http\Requests\RehearsalRequest;

class RehearsalController extends Controller
{
    public function __construct(Rehearsal $rehearsal)
    {
        $this->model = $rehearsal;
    }

    public function index()
    {
        $rehearsals = rehearsal::paginate(7);

        return view('rehearsal.index', compact('rehearsals')) ;
    }

    public function show($id)
    {
        $rehearsal = rehearsal::findOrFail($id);

        return view('rehearsal.show', compact('rehearsal'));
    }

    public function create()
    {
        return view('rehearsal.create');
    }

    public function store(RehearsalRequest $request)
    {
        $data = $request->all();

        $this->model->create($data);

        return redirect()->route('rehearsal.index')->with('edit', 'Ensaio agendado com sucesso! 😁');

    }

    public function edit($id)
    {
        if(!$rehearsal = $this->model->find($id))
            return redirect()->route('rehearsal.index'); 

        return view('rehearsal.edit', compact('rehearsal')); 
    }

    public function update(RehearsalRequest $request, $id)
    {
        if(!$rehearsal = $this->model->find($id))
            return redirect()->route('rehearsal.index'); 
        
        $data = $request->all();

        $rehearsal->update($data);

        return redirect()->route('rehearsal.index')->with('edit', 'Ensaio atualizado com sucesso! ☺');
    }

    public function destroy($id)
    {
        Rehearsal::FindOrFail($id)->delete();

        return redirect()->route('rehearsal.index')->with('destroy', 'Ensaio cancelado! 😥');
    }

}
