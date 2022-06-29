@extends('_partials/head')

<div class='container'>
    <h1>Lista de Shows</h1>

    <table class="table">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Data</th>
        <th scope="col">Local</th>
        <th scope="col">Cidade</th>
        <th scope="col">Formato</th>
        <th scope="col">Cachê</th>
        <th scope="col">Data Cadastro</th>
        <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($shows as $show)
            <tr>
                <th scope="row">{{ $show->id }}</th>
                <td>{{ $show->Data }}</td>
                <td>{{ $show->Local }}</td>
                <td>{{ $show->Cidade }}</td>
                <td>{{ $show->Formato }}</td>

                <td>{{ $show->Cachê }}</td>
                <td>{{ $show->created_at }}</td>

            </tr>
        @endforeach
    </tbody>
    </table>
</div>