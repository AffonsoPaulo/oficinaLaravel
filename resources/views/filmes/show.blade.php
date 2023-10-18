@extends('filmes.layout')

@section('content')

    <div class="row justify-content-center mt-3">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        Informações do Filme
                    </div>
                    <div class="float-end">
                        <a href="{{ route('filmes.index') }}" class="btn btn-primary btn-sm"><i class="bi bi-arrow-left"></i> Voltar</a>
                    </div>
                </div>
                <div class="card-body">

                    <div class="row">
                        <label for="titulo" class="col-md-4 col-form-label text-md-end text-start"><strong>Titulo:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $filme->titulo }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="diretor" class="col-md-4 col-form-label text-md-end text-start"><strong>Diretor:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $filme->diretor }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="genero" class="col-md-4 col-form-label text-md-end text-start"><strong>Gênero:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $filme->genero }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="classificacao" class="col-md-4 col-form-label text-md-end text-start"><strong>Classificação:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $filme->classificacao }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="sinopse" class="col-md-4 col-form-label text-md-end text-start"><strong>Sinopse:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $filme->sinopse }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="data_lancamento" class="col-md-4 col-form-label text-md-end text-start"><strong>Data de Lançamento:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $filme->data_lancamento }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="nota" class="col-md-4 col-form-label text-md-end text-start"><strong>Nota:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $filme->nota }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
