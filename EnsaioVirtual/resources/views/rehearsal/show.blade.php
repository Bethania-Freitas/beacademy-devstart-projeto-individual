@extends('_partials/head')
@section('title', 'Ensaio')
@section('body')
    <div class='container'>
        <h1>Ensaio {{ date('d/m', strtotime($rehearsal->Data)) }}</h1>

        <table class="table">
        <thead class="text-center">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">DATA</th>
            <th scope="col">HORA</th>
            <th scope="col">Local</th>
            <th scope="col">Custo</th>
            <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody class="text-center">
                <tr>
                    <th scope="row">{{ $rehearsal->id }}</th>
                    <td>{{ date('d/m/Y', strtotime($rehearsal->Data)) }}</td>
                    <td>{{ date( 'H:m' , strtotime($rehearsal->Hora)) }}</td>
                    <td>{{ $rehearsal->Local }}</td>
                    <td>{{ $rehearsal->Custo }}</td>
                    <td>
                        <a href="{{ route('rehearsal.show', $rehearsal->id) }}" class="btn btn-warning text-white">Editar</a>
                        <a href="{{ route('rehearsal.show', $rehearsal->id) }}" class="btn btn-danger text-white">Excluir</a>
                    </td>
                </tr>

        </tbody>
        </table>
    </div>
@endsection