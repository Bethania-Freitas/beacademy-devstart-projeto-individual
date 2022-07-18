<?php

namespace App\Http\Controllers;

use App\Models\Show;
use Illuminate\Http\Request;
use App\Http\Requests\ShowRequest;



class ShowController extends Controller
{
    public function __construct(show $show)
    {
        $this->model = $show;
    }

    public function index(Request $request)
    {
        
        $shows = $this->model->getUsers(
            $request->search ?? ''
        );

        return view('show.index', compact('shows'));
    }

    public function show($id)
    {
        $show = Show::findOrFail($id);

        return view('show.show', compact('show'));
    }

    public function create()
    {
        return view('show.create');
    }

    public function store(ShowRequest $request)
    {
        $show = new Show();
        $show->Data = $request->Data;
        $show->Local = $request->Local;
        $show->Cidade = $request->Cidade;
        $show->Formato = $request->Formato;
        $show->Cachê = $request->Cachê;
        $show->save();

        return redirect()->route('show.index')->with('edit', 'Show agendado com sucesso! 😁');
    }

    public function edit($id)
    {
        if(!$show = $this->model->find($id))
            return redirect()->route('show.index'); 

        return view('show.edit', compact('show')); 
    }

    public function update(ShowRequest $request, $id)
    {
        if(!$show = $this->model->find($id))
            return redirect()->route('show.index'); 
        
        $data = $request->all();

        $show->update($data);

        return redirect()->route('show.index')->with('edit', 'Show atualizado com sucesso! ☺');
    }

    public function destroy($id)
    {
        if(!$show = $this->model->find($id))
            return redirect()->route('show.index'); 
        
        $show->delete();

        return redirect()->route('show.index')->with('destroy', 'Show cancelado! 😥');
    }
}
