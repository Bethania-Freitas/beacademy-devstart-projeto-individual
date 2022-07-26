<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Models\Team;


class UserController extends Controller
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }
    
    
    public function index(Request $request)
    {
        
        $users = $this->model->getUsers(
            $request->search ?? ''
        );

        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        if(!$user = User::findOrFail($id))
            return redirect()->route('users.index');
        
        return view('users.show', compact('user'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(StoreUpdateUserFormRequest $request)
    {

        $data = $request->all();
        $data['password'] = bcrypt($request->password);


        if ($request->image) {
            $data['image'] = $request->image->store('profile', 'public');
        }

        $this->model->create($data);

        return redirect()->route('users.index')->with('create', 'Usuario Cadastrado com Sucesso!');
    }

    public function edit($id)
    {
        if(!$user = $this->model->find($id))
            return redirect()->route('users.index'); 
        

        return view('users.edit', compact('user')); 
    }

    public function update(StoreUpdateUserFormRequest $request, $id)
    {
        if(!$user = $this->model->find($id))
            return redirect()->route('users.index'); 
        
        $data = $request->only('name', 'email');
        if($request->password)
            $data['password'] = bcrypt($request->password);

        $user->update($data);

        return redirect()->route('users.index')->with('edit', 'Usuario atualizado com sucesso!');
    }

    public function destroy($id)
    {
        if(!$user = $this->model->find($id))
            return redirect()->route('users.index'); 
        
        $user->delete();

        return redirect()->route('users.index')->with('destroy', 'Usuario deletado com Sucesso!');
    }
}

