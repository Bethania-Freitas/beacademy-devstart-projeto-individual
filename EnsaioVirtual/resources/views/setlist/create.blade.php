@extends('_partials/head')
@section('title', 'Incluir Musica')
@section('body')
<div class="container">
    <h1>Cadastrar Musica</h1>

    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            @foreach($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
    @endif

    
    <form action="{{ route('setlist.store')}}" method="POST" >
    @csrf
        <div class="mb-3">
            <label for="Musica" class="form-label">Nome da Musica</label>
            <input type="text" class="form-control" id="Musica" name="Musica" aria-describedby="Musica">
        </div>
        <div class="mb-3">
            <label for="Interprete" class="form-label">Interprete</label>
            <input type="text" class="form-control" id="Interprete" name="Interprete" aria-describedby="Interprete">
        </div>
        <div class="mb-3">
            <label for="Link" class="form-label">Link</label>
            <input type="link" class="form-control" id="Link" name="Link" aria-describedby="Link">
        </div>
    </form>    
    <form action="{{ route('file.store') }}" enctype="multipart/form-data" method="POST">
    @csrf
        <div class="mb-3">
            <label for="file" class="form-label">Adicionar Letra em PDF</label>
            <input type="file" class="form-control" name="file" >       
        </div>
    </form>  
    <button type="submit" class="btn btn-primary">Enviar</button>
</div>
@endsection