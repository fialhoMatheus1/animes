@extends('padrao')
@section('content')
<section class="altura">
        <form method="get" action="/listar-anime">
            <div class="pesquisar">
                <div class="input-group mb-3">
                    <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome do Anime" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-light" type="submit" id="button-addon2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg></button>
                </div>
            </div>
        </form>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="txt-coluna" scope="col">Nome</th>
                    <th class="txt-coluna" scope="col">Gênero</th>
                    <th class="txt-coluna" scope="col">N° de Episódios</th>
                    <th class="txt-coluna" scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($registrosAnime as $registrosFinais)
                <tr>
                    <td class="txt-tabela">{{$registrosFinais->nome}}</td>
                    <td class="txt-tabela">{{$registrosFinais->genero}}</td>
                    <td class="txt-tabela">{{$registrosFinais->episodios}}</td>
                    <td class="txt-tabela">{{$registrosFinais->status}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
</section>
@endsection