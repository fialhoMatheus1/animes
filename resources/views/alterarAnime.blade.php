@extends('padrao')
@section('content')
<section class="altura">
    <div class="conteudo">
        <h1 class="titulo">Alterar Anime</h1>

        <center><img class="img-cadastro" src="{{'/imgs/alterar.gif'}}"></center>

        <form class="row g-3 cadastro" method="post" action="{{route('alterar-banco', $registrosFinais->id)}}">
            @csrf
            @method('put')
            <div class="col-md-6">
                <label for="inputNome" class="form-label">Nome:</label>
                <input type="text" name="nome" value="{{old('nome', $registrosFinais->nome)}}" class="form-control" id="inputNome" placeholder="Fullmetal Alchemist">
                @error('nome')
                <div class="text-danger">
                    *Preencher o campo <b>NOME</b>!!
                </div>
                @enderror
            </div>
            <div class="col-md-4">
                <label for="inputGenero" class="form-label">Genero:</label>
                <select name="genero" value="{{old('genero', $registrosFinais->genero)}}" id="inputGenero" class="form-select">
                    <option selected>Escolha...</option>
                    <option>Comédia</option>
                    <option>Shoujo</option>
                    <option>Comédia Romântica</option>
                    <option>Mecha</option>
                    <option>Shonen</option>
                    <option>Seinen</option>
                    <option>Ecchi</option>
                    <option>Seinen</option>
                    <option>Slice of Life</option>
                    <option>Isekai</option>
                    <option>Outro...</option>
                </select>
                @error('genero')
                <div class="text-danger">
                    *Preencher o campo <b>GENERO</b>!!
                </div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="inputEpisodios" class="form-label">Número de Episódios:</label>
                <input type="text" name="episodios" value="{{old('episodios', $registrosFinais->episodios)}}" class="form-control" id="inputEpisodios" placeholder="64">
                @error('episodios')
                <div class="text-danger">
                    *Preencher o campo <b>EPISÓDIOS</b>!!
                </div>
                @enderror
            </div>
            <div class="col-md-4">
                <label for="inputStatus" class="form-label">Status:</label>
                <select name="status" value="{{old('status', $registrosFinais->status)}}" id="inputStatus" class="form-select">
                    <option selected>Escolha...</option>
                    <option>Não assisti</option>
                    <option>Assistindo</option>
                    <option>Finalizado</option>
                    <option>Não finalizado</option>
                </select>
                @error('status')
                <div class="text-danger">
                    *Preencher o campo <b>STATUS</b>!!
                </div>
                @enderror
            </div>
            <center><button type="submit" class="btn btn-light botaoCard botaoCadastro">Alterar</button></center>
        </form>
    </div>
</section>
@endsection