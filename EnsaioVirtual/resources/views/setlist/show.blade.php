@extends('_partials/head')
@section('title', 'Musica')
@section('body')
    <div class='container'>
        <h1>Musica {{ $setlist->musica }}</h1>

        <table class="table">
        <thead class="text-center">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Musica</th>
            <th scope="col">Interprete</th>
            <th scope="col">Link</th>
            <th scope="col">Editar</th>
            <th scope="col">Deletar</th>
            </tr>
        </thead>
        <tbody class="text-center">
                <tr>
                    <th scope="row">{{ $setlist->id }}</th>
                    <td>{{ $setlist->Musica }}</td>
                    <td>{{ $setlist->Interprete }}</td>
                    <td>
                        <a href="{{ $setlist->Link }}" class="btn btn-dark">Video</a>                    
                    </td>
                    <td><a href="{{ route('setlist.edit', $setlist->id) }}" class="btn btn-warning text-white">Editar</a></td>
                    <td>
                    <form action="{{ route('setlist.destroy', $setlist->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger text-white">Deletar</button>
                    </form>
                    
                </tr>
        </tbody>
        </table>
                <div class="card-body">   
                        <h5 class="card-title">Letra: {{ $setlist->Musica }}</h5> 
                            <textarea type="text" style="height: 400px" class="col-5">{{ $setlist->file->content }}</textarea>
                </div>
    </div>

@endsection