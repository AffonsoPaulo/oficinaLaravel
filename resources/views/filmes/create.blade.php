@extends('filmes.layout')

@section('content')
    <div class="row justify-content-center mt-3">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        Adicionar novo filme
                    </div>
                    <div class="float-end">
                        <a href="{{ route('filmes.index') }}" class="btn btn-primary btn-sm"><i class="bi bi-arrow-left"></i> Voltar</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('filmes.store') }}" method="post">
                        @csrf

                        <div class="mb-3 row">
                            <label for="titulo" class="col-md-4 col-form-label text-md-end text-start">Título</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="titulo" name="titulo">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="diretor" class="col-md-4 col-form-label text-md-end text-start">Diretor</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="diretor" name="diretor">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="genero" class="col-md-4 col-form-label text-md-end text-start">Gênero</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="genero" name="genero">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="classificacao" class="col-md-4 col-form-label text-md-end text-start">Classificação</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="classificacao" name="classificacao">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="sinopse" class="col-md-4 col-form-label text-md-end text-start">Sinopse</label>
                            <div class="col-md-6">
                                <textarea class="form-control" id="sinopse" name="sinopse" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="data_lancamento" class="col-md-4 col-form-label text-md-end text-start">Data de Lançamento</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control" id="data_lancamento" name="data_lancamento">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="nota" class="col-md-4 col-form-label text-md-end text-start">Nota</label>
                            <div class="col-md-6">
                                <input type="number" class="form-control" id="nota" name="nota">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <input type="submit" class="col-md-3 offset-md-5 btn btn-primary">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
