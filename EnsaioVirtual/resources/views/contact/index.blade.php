@extends('_partials/head')
@section('title', 'Contato')
@section('body')

<div class="container">
    <h1>Contato</h1>

    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            @foreach($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
    @endif

    @if(session()->has('index'))
        <div class="alert alert-dark alert-dismissible fade show" role="alert">
            <strong>Atenção!</strong> {{ session()->get('index') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif  

    <div class="row justify-content-center">
        <div class="col-6">
            <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                <div class="form-label">       
                    <label for="">Digite seu nome:</label><br>
                    <input class="form-control"  type="text" name="name" id="name" required>
                </div>
                <div class="form-label">   
                    <label for="">Digite seu email:</label><br>
                    <input class="form-control" type="email" name="email" id="email">
                </div>
                <div class="form-label">   
                    <label for="">Digite seu telefone:</label><br>
                    <input class="form-control" type="tel" name="tel" id="tel">
                </div>
                <div class="form-label">   
                    <label for="">Deixe seu recado:</label><br>
                    <textarea class="form-control" name="messageClient" id="messageClient" cols="30" rows="10" required></textarea>
                </div>
                <div>
                    <button class="btn btn-dark" type="submit">Enviar</button>
                </div>
            </form>
        </div>
        <div class="col-6">
            <img src="/fotos/duo.jpg" class="rounded-4" width="100%" alt="...">
        </div>
    </div>
</div>    

@endsection