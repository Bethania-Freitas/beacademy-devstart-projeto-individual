@extends('_partials/head')
@section('title', 'Ensaio')
@section('body')
    <div class='container'>
        <h1>Ensaio {{ date('d/m', strtotime($rehearsal->Data)) }}</h1>

        <table class="table">
        <thead class="text-center">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Data e Hora</th>
            <th scope="col">Local</th>
            <th scope="col">Custo</th>
            <th scope="col">Editar</th>
            <th scope="col">Deletar</th>
            </tr>
        </thead>
        <tbody class="text-center">
                <tr>
                    <th scope="row">{{ $rehearsal->id }}</th>
                    <td>{{ date('d/m/Y H:m', strtotime($rehearsal->Data)) }}</td>
                    <td>{{ $rehearsal->Local }}</td>
                    <td>{{ $rehearsal->Custo }}</td>
                    <td><a href="{{ route('rehearsal.edit', $rehearsal->id) }}" class="btn btn-warning text-white">Editar</a></td>
                    <td>
                        <form action="{{ route('rehearsal.destroy', $rehearsal->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger text-white">Deletar</button>
                        </form>
                    </td>
                </tr>

        </tbody>
        </table>
    </div>
@endsection