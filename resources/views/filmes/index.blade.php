@extends('filmes.layout')
@section('content')

    @if($message = Session::get('success'))
        <div class="alert alert-success mt-3" role="alert">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h3 class="mt-3">Lista de Filmes</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('filmes.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i>Adicionar
                filme</a>
            <table class="table table-stripped table-bordered">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Título</th>
                    <th scope="col">Diretor</th>
                    <th scope="col">Gênero</th>
                    <th scope="col">Classificação</th>
                    <th scope="col">Sinopse</th>
                    <th scope="col">Data de Lançamento</th>
                    <th scope="col">Nota</th>
                    <th scope="col">Ações</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($filmes as $filme)
                    <tr>
                        <th>{{ $filme->id }}</th>
                        <td>{{ $filme->titulo }}</td>
                        <td>{{ $filme->diretor }}</td>
                        <td>{{ $filme->genero }}</td>
                        <td>{{ $filme->classificacao }}</td>
                        <td>{{ $filme->sinopse }}</td>
                        <td>{{ $filme->data_lancamento }}</td>
                        <td>{{ $filme->nota }}</td>
                        <td>
                            <form action="{{ route('filmes.destroy'), $filme->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('filmes.show'), $filme->id }}" class="btn btn-warning btn-sm"><i
                                        class="bi bi-eye"></i> Mostrar</a>
                                <a href="{{ route('filmes.edit'), $filme->id }}" class="btn btn-primary btn-sm"><i
                                        class="bi bi-pencil-square"></i> Editar</a>

                                <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"
                                                                                       onclick="return confirm('Você realmente quer deletar esse filme?')"></i>
                                    Deletar
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <td colspan="6">
                            <span class="text-danger">
                                <strong>Nenhum filme encontrado</strong>
                            </span>
                    </td>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

