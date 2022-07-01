@extends('_partials/head')


<div class='container'>
    <h1>Detalhes da Musica</h1>

    <table class="table">
    <thead class="text-center">
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Musica</th>
        <th scope="col">Interprete</th>
        <th scope="col">Link</th>
        <th scope="col">Ações</th>
        <th scope="col">Seleção</th>
        </tr>
    </thead>
    <tbody class="text-center">
            <tr>
                <th scope="row">{{ $setlist->id }}</th>
                <td>{{ $setlist->Musica }}</td>
                <td>{{ $setlist->Interprete }}</td>
                <td>{{ $setlist->Link }}</td>
                <td>
                    <a href="{{ route('setlist.show', $setlist->id) }}" class="btn btn-warning text-white">Editar</a>
                    <a href="{{ route('setlist.show', $setlist->id) }}" class="btn btn-danger text-white">Excluir</a>
                </td>
                <td>{{ $setlist->Seleção }}</td>
            </tr>
    </tbody>
    </table>
</div>