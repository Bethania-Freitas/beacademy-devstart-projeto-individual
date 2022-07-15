@extends('_partials/head')
@section('title', 'SetList')
@section('body')
<div class="container">
    <h1>SetList:</h1>
        <div class="row">
            <div class="col-sm mt-2 mb-5">
                <a class="btn btn-outline-dark" href="{{ route('setlist.create') }}">Incluir Musica</a>
            </div>
            <div class="col-sm mt-2 mb-5">
                <form action="{{ route('setlist.index') }}" method="GET">
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
            <th scope="col">ID</th>
            <th scope="col">Musica</th>
            <th scope="col">Interprete</th>
            <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($setlists as $setlist)
                <tr>
                    <th scope="row">{{ $setlist->id }}</th>
                    <td>{{ $setlist->Musica }}</td>
                    <td>{{ $setlist->Interprete }}</td>
                    <td><a href="{{ route('setlist.show', $setlist->id) }}" class="btn btn-info text-white">Visualizar</a></td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    <div class="justify-content-end pagination">
         {{ $setlists->links('pagination::bootstrap-4') }}
    </div>
@endsection