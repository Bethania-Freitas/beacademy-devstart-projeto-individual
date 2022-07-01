@extends('_partials/head')
@section('title', 'SetList')
@section('body')
    <div class='container'>
        <h1>Set List</h1>
        <a href="{{ route('setlist.create') }}" class="btn btn-dark">Incluir Música</a>
        <table class="table">
        <thead class="text-center">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Musica</th>
            <th scope="col">Interprete</th>
            <th scope="col">Seleção</th>
            <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($setlists as $setlist)
                <tr>
                    <th scope="row">{{ $setlist->id }}</th>
                    <td>{{ $setlist->Musica }}</td>
                    <td>{{ $setlist->Interprete }}</td>
                    <td>{{ $setlist->Seleção }}</td>
                    <td><a href="{{ route('setlist.show', $setlist->id) }}" class="btn btn-info text-white">Visualizar</a></td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>
@endsection