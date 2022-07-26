@extends('_partials/head')
@section('title', 'Mensagens')
@section('body')

<div class="container">
    @if(session()->has('destroy'))
        <div class="alert alert-dark alert-dismissible fade show" role="alert">
            <strong>Atenção!</strong> {{ session()->get('destroy') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif 
    <h1>Mensagens dos Usuários:</h1>
            @foreach ($contacts->reverse() as $contact)
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-9">
                                <h5 class="card-title">{{ $contact->id }} - {{ $contact->name}}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">E-mail: {{ $contact->email }}</h6>
                                <h6 class="card-subtitle mb-2 text-muted">Telefone: {{ $contact->tel }}</h6>
                                <p class="card-text">Mensagem: {{ $contact->messageClient }}</p>
                            </div>
                            <div class="col-3">                      
                                <p class="card-text">Recebida:{{ $contact->created_at }}</p>
                                
                            </div>
                        </div>
                    </div>  
                </div>          
                <br>
            @endforeach         
</div>
<div class="pagination justify-content-center">
    {{ $contacts->links('pagination::bootstrap-4') }}
</div>

@endsection