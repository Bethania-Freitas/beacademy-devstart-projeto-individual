@extends('_partials/head')
@section('title', 'Agenda de Ensaio')
@section('body')
<div class="container">
    <h1>Próximos Ensaios:</h1>
        <div class="row">
            <div class="col-sm mt-2 mb-5">
                <a class="btn btn-outline-dark" href="{{ route('rehearsal.create') }}">Agendar novo ensaio</a>
            </div>
            <div class="col-sm mt-2 mb-5">
                <form action="{{ route('rehearsal.index') }}" method="GET">
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
    <div class="pagination justify-content-center">
         {{ $rehearsals->links('pagination::bootstrap-4') }}
    </div>
@endsection