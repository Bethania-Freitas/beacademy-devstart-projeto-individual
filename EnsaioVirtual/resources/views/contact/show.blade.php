@extends('_partials/head')
@section('title', 'Mensagens')
@section('body')

<div class="container">
    <h1>Mensagens dos Usuários:</h1>
            @foreach ($contact->reverse() as $contact)
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-10">
                                <h5 class="card-title">{{ $contact->id }} - {{ $contact->name}}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">E-mail: {{ $contact->email }}</h6>
                                <h6 class="card-subtitle mb-2 text-muted">Telefone: {{ $contact->tel }}</h6>
                                <p class="card-text">Mensagem: {{ $contact->messageClient }}</p>
                            </div>
                            <div class="col-2">                      
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" name="read" id="answered" value="0">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Lida</label>
                                 </div>
                                 <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" name="answered" id="answered" value="0">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Respondida</label>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>          
                <br>
            @endforeach         
</div>

@endsection