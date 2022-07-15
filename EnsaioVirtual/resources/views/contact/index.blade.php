@extends('_partials/head')
@section('title', 'Contato')
@section('body')

<h1>Contato</h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <form action="" method="get">
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
                    <textarea class="form-control" name="" id="" cols="30" rows="10" required></textarea>
                </div>
                <div>
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </div>
            </form>
        </div>
        <div class="col-6">
            <img src="/fotos/duo.jpg" class="rounded-4" width="100%" alt="...">
        </div>
    </div>
</div>    

@endsection