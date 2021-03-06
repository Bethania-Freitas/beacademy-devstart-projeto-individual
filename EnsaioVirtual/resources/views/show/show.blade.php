@extends('_partials/head')
@section('title', 'Detalhe do Show')
@section('body')
    <div class='container  text-center'>
        <h1>Show {{ $show->Local }}</h1>

        <table class="table">
        <thead class="text-center">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Data e Hora</th>
            <th scope="col">Local</th>
            <th scope="col">Cidade</th>
            <th scope="col">Formato</th>
            <th scope="col">Cachê</th>
            <th scope="col">Data do Cadastro</th>
            <th scope="col">Responsável</th>
            <th scope="col">Editar</th>
            <th scope="col">Excluir</th>
            </tr>
        </thead>
        <tbody class="text-center">

                <tr>
                    <th scope="row">{{ $show->id }}</th>
                    <td>{{ date('d/m/Y H:m', strtotime($show->Data)) }}</td>
                    <td>{{ $show->Local }}</td>
                    <td>{{ $show->Cidade }}</td>
                    <td>{{ $show->Formato }}</td>
                    <td>{{ $show->Cachê }}</td>
                    <td>{{ date('d/m/Y', strtotime($show->created_at)) }}</td>
                    <td>Bethânia</td>
                    <td><a href="{{ route('show.edit', $show->id) }}" class="btn btn-warning text-white" >Editar</a></td>
                    <td>
                    <form action="{{ route('show.destroy', $show->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger text-white">Deletar</button>
                    </form>
                    </td>
                </tr>

        </tbody>
        </table>
    </div>

@endsection