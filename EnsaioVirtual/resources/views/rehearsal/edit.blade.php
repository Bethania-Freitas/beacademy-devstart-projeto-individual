@extends('_partials/head')
@section('title', 'Editar Ensaio')
@section('body')
<div class="container">
    <h1>Editar Ensaio </h1>

    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            @foreach($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
    @endif
    
    <form action="{{ route('rehearsal.update', $rehearsal->id) }}" method="POST">
    @method('PUT')
    @csrf
        <div class="mb-3">
        <label for="Data" class="form-label">Data e Hora</label>
            <input type="datetime-local" class="form-control" id="Data" name="Data" aria-describedby="Data" value="{{ $rehearsal->Data }}">
        </div>
        <div class="mb-3">
            <label for="Local" class="form-label">Local</label>
            <input type="text" class="form-control" id="Local" name="Local" aria-describedby="Local" value="{{ $rehearsal->Local }}">
        </div>
        <div class="mb-3">
            <label for="Custo" class="form-label">Custo</label>
            <input type="float" class="form-control" id="Custo" name="Custo" aria-describedby="Custo" value="{{ $rehearsal->Custo }}">
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>
@endsection