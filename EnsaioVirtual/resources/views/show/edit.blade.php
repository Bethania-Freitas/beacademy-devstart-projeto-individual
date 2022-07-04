@extends('_partials/head')
@section('title', 'Editar Show')
@section('body')
<div class="container">
    <h1>Editar Show</h1>

    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            @foreach($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
    @endif
    
    <form action="{{ route('show.update', $show->id) }}" method="POST">
    @method('PUT')    
    @csrf
        <div class="mb-3">
            <label for="Data" class="form-label">Data e Hora</label>
            <input type="datetime-local" class="form-control" id="Data" name="Data" aria-describedby="Data" value="{{ $show->Data }}">
        </div>
        <div class="mb-3">
            <label for="Local" class="form-label">Local</label>
            <input type="text" class="form-control" id="Local" name="Local" aria-describedby="Local" value="{{ $show->Local }}">
        </div>
        <div class="mb-3">
            <label for="Cidade" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="Cidade" name="Cidade" aria-describedby="Cidade" value="{{ $show->Cidade }}">
        </div>
        <div class="mb-3">
            <label for="Formato" class="form-label">Formato</label>
            <input type="text" class="form-control" id="Formato" name="Formato" aria-describedby="Formato" value="{{ $show->Formato }}">
        </div>
        <div class="mb-3">
            <label for="Cachê" class="form-label">Cachê</label>
            <input type="float" class="form-control" id="Cachê" name="Cachê" aria-describedby="Cachê" value="{{ $show->Cachê }}">
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>
@endsection