@extends('_partials/head')

<div class='container'>
    <h1>Agenda de Ensaios</h1>

    <table class="table">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">DATA</th>
        <th scope="col">HORA</th>
        <th scope="col">Local</th>
        <th scope="col">Custo</th>
        <th scope="col">Data Cadastro </th>
        <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rehearsals as $rehearsal)
            <tr>
                <th scope="row">{{ $rehearsal->id }}</th>
                <td>{{ date('d/m/Y', strtotime($rehearsal->Data)) }}</td>
                <td>{{ date( 'H:m' , strtotime($rehearsal->Hora)) }}</td>
                <td>{{ $rehearsal->Local }}</td>
                <td>{{ $rehearsal->Custo }}</td>
                <td>{{ date('d/m/Y', strtotime($rehearsal->created_at)) }}</td>

            </tr>
        @endforeach
    </tbody>
    </table>
</div>