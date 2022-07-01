@extends('_partials/head')
@section('title', 'Próximos Shows')
@section('body')
    <div class='container text-center'>
        <h1>Lista de Shows</h1>

        <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Data e Hora</th>
            <th scope="col">Local</th>
            <th scope="col">Cidade</th>
            <th scope="col">Formato</th>
            <th scope="col">Cachê</th>
            <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($shows as $show)
                <tr>
                    <th scope="row">{{ $show->id }}</th>
                    <td>{{ date('d/m/Y H:m', strtotime($show->Data)) }}</td>
                    <td>{{ $show->Local }}</td>
                    <td>{{ $show->Cidade }}</td>
                    <td>{{ $show->Formato }}</td>
                    <td>{{ $show->Cachê }}</td>
                    <td><a href="{{ route('show.show', $show->id) }}" class="btn btn-info text-white" >Visualizar</a></td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>
@endsection