@extends('_partials/head')
@section('title', 'Próximos Shows')
@section('body')

    <div class="container">
    <h1>Próximos Shows:</h1>
        <div class="row">
            <div class="col-sm mt-2 mb-5">
                <a class="btn btn-outline-dark" href="{{ route('show.create') }}">Novo Show</a>
            </div>
            <div class="col-sm mt-2 mb-5">
                <form action="{{ route('show.index') }}" method="GET">
                    <div class="input-group">
                         <input type="search" class="form-control rounded" placeholder="Pesquisar: " name="search" />
                         <button type="submit" class="btn btn-dark">Procurar</button>
                    </div>
                </form>
            </div>
        </div>   
        <table class="table text-center">
        <thead>
            <tr>
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
    <div class="pagination justify-content-center">
         {{ $shows->links('pagination::bootstrap-4') }}
    </div>
@endsection