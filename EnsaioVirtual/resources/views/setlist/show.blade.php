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
            <th scope="col">Seleção</th>
            </tr>
        </thead>
        <tbody class="text-center">
                <tr>
                    <th scope="row">{{ $setlist->id }}</th>
                    <td>{{ $setlist->Musica }}</td>
                    <td>{{ $setlist->Interprete }}</td>
                    <td>{{ $setlist->Link }}</td>
                    <td><a href="{{ route('setlist.edit', $setlist->id) }}" class="btn btn-warning text-white">Editar</a></td>
                    <td>
                    <form action="{{ route('setlist.destroy', $setlist->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger text-white">Deletar</button>
                    </form>
                    <td>{{ $setlist->Seleção }}</td>
                </tr>
        </tbody>
        </table>
        <div class="container">        
            <textarea type="text" readonly>{{ $setlist->content }}</textarea>
        </div>
    </div>

@endsection