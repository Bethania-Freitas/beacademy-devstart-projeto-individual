@extends('_partials/head')


<div class='container'>
    <h1>Set List</h1>

    <table class="table">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Musica</th>
        <th scope="col">Interprete</th>
        <th scope="col">Link</th>
        <th scope="col">Seleção</th>
        <th scope="col">Data Cadastro </th>
        <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($setlists as $setlist)
            <tr>
                <th scope="row">{{ $setlist->id }}</th>
                <td>{{ $setlist->Musica }}</td>
                <td>{{ $setlist->Interprete }}</td>
                <td>{{ $setlist->Link }}</td>
                <td>{{ $setlist->Seleção }}</td>
                <td>{{ $setlist->created_at }}</td>

            </tr>
        @endforeach
    </tbody>
    </table>
</div>