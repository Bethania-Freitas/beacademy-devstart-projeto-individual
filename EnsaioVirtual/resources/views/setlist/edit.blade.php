@extends('_partials/head')
@section('title', 'Editar Musica')
@section('body')
<div class="container">
    <h1>Editar Musica {{ $setlist->Musica }}</h1>

    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            @foreach($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
    @endif
    
    <form action="{{ route('setlist.update', $setlist->id) }}" method="POST">
    @method('PUT')
    @csrf
        <div class="mb-3">
            <label for="Musica" class="form-label">Nome da Musica</label>
            <input type="text" class="form-control" id="Musica" name="Musica" aria-describedby="Musica" value="{{ $setlist->Musica }}">
        </div>
        <div class="mb-3">
            <label for="Interprete" class="form-label">Interprete</label>
            <input type="text" class="form-control" id="Interprete" name="Interprete" aria-describedby="Interprete" value="{{ $setlist->Interprete }}">
        </div>
        <div class="mb-3">
            <label for="Link" class="form-label">Link</label>
            <input type="link" class="form-control" id="Link" name="Link" aria-describedby="Link" value="{{ $setlist->Link }}">
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>
@endsection