@extends('_partials/head')
@section('title', 'Agenda de Ensaio')
@section('body')
    <div class='container'>
        <h1>Agenda de Ensaios</h1>
        <a href="{{ route('rehearsal.create') }}" class="btn btn-dark">Novo Ensaio</a>
        <table class="table">
        <thead class="text-center">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Data e Hora</th>
            <th scope="col">Local</th>
            <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($rehearsals as $rehearsal)
                <tr>
                    <th scope="row">{{ $rehearsal->id }}</th>
                    <td>{{ date('d/m/Y H:m', strtotime($rehearsal->Data)) }}</td>
                    <td>{{ $rehearsal->Local }}</td>
                    <td><a href="{{ route('rehearsal.show', $rehearsal->id) }}" class="btn btn-info text-white">Visualizar</a></td>

                </tr>
            @endforeach
        </tbody>
        </table>
    </div>
@endsection