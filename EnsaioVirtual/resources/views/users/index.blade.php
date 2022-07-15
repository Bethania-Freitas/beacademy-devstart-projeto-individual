@extends('_partials/head')
@section('title', 'Usuários')
@section('body')

    <div class="container">
    <h1>Adminsiradores</h1>
       <div class="row">
           <div class="col-sm mt-2 mb-5">
               <a class="btn btn-outline-dark" href="{{ route('users.create') }}">Cadastrar Usuário</a>
           </div>
           <div class="col-sm mt-2 mb-5">
               <form action="{{ route('users.index') }}" method="GET">
                   <div class="input-group">
                        <input type="search" class="form-control rounded" placeholder="Pesquisar: " name="search" />
                        <button type="submit" class="btn btn-dark">Procurar</button>
                   </div>
               </form>
           </div>
       </div>
        <table class="table">
       <thead class="text-center">
           <tr>
               <th scope="col">Foto</th>
               <th scope="col">Nome</th>
               <th scope="col">Email</th>
               <th scope="col">Data Cadastro</th>
               <th scope="col">Ações</th>
           </tr>
       </thead>
       <tbody class="text-center">
           @foreach($users as $user)
               <tr>
                   @if($user->image)
                   <th><img src="{{ asset('profile/'.$user->image) }}" width="50px" height="50px" class="rounded-circle" alt=""></th>
                   @else
                       <th><img src="/profile/avatar.jpg" width="50px" height="50px" class="rounded-circle" alt=""></th>
                   @endif
                    <td>{{ $user->name }}</td>
                   <td>{{ $user->email }}</td>
                   <td>{{ date('d/m/Y - H:i', strtotime( $user->created_at )) }}</td>
                   <td><a href="{{ route('users.show', $user->id) }}" class="btn btn-info text-white">Visualizar</a></td>
               </tr>
           @endforeach
       </tbody>
   </table>
   <div class="justify-content-center pagination">
        {{ $users->links('pagination::bootstrap-4') }}
   </div>
@endsection
