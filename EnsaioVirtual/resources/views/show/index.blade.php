@extends('_partials/head')
@section('title', 'Próximos Shows')
@section('body')
<div class="container">
    @if(session()->has('create'))
        <div class="alert alert-dark alert-dismissible fade show" role="alert">
            <strong>Atenção!</strong> {{ session()->get('create') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif   
    @if(session()->has('edit'))
        <div class="alert alert-dark alert-dismissible fade show" role="alert">
            <strong>Atenção!</strong> {{ session()->get('edit') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif  
    @if(session()->has('destroy'))
        <div class="alert alert-dark alert-dismissible fade show" role="alert">
            <strong>Atenção!</strong> {{ session()->get('destroy') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif 

    <h1>Próximos Shows:</h1>
        <div class="row">
            @if(Auth()->check() && auth()->user()->is_admin == 1)
                <div class="col-sm mt-2 mb-5">
                    <a class="btn btn-outline-dark" href="{{ route('show.create') }}">Novo Show</a>
                </div>
            @endif
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
                    <td><a href="{{ route('show.show', $show->id) }}" class="btn btn-dark text-white" >Visualizar</a></td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    <div class="pagination justify-content-center">
         {{ $shows->links('pagination::bootstrap-4') }}
    </div>
@endsection