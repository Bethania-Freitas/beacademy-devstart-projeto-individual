@extends('_partials/head')
@section('title', 'Cadastrar Show')
@section('body')
<div class="container">
    <h1>Cadastrar Show</h1>
    <form action="{{ route('show.store') }}" method="POST">
    @csrf
        <div class="mb-3">
            <label for="Data" class="form-label">Data e Hora</label>
            <input type="datetime-local" class="form-control" id="Data" name="Data" aria-describedby="Data">
        </div>
        <div class="mb-3">
            <label for="Local" class="form-label">Local</label>
            <input type="text" class="form-control" id="Local" name="Local" aria-describedby="Local">
        </div>
        <div class="mb-3">
            <label for="Cidade" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="Cidade" name="Cidade" aria-describedby="Cidade">
        </div>
        <div class="mb-3">
            <label for="Formato" class="form-label">Formato</label>
            <input type="text" class="form-control" id="Formato" name="Formato" aria-describedby="Formato">
        </div>
        <div class="mb-3">
            <label for="Cachê" class="form-label">Cachê</label>
            <input type="float" class="form-control" id="Cachê" name="Cachê" aria-describedby="Cachê">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@endsection