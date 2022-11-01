@extends('padrao')
@section('content')
<section class="altura">
    <div class="conteudo">
        <h1 class="titulo">Bem vindo!</h1>

        <center><img class="img-home" src="{{'/imgs/home.gif'}}"></center>

        <p class="texto">Esse é uma site dedicado a manter uma lista de animes. Aqui, você pode cadastrar os animes que quer assistir ou que já assistiu. </p>

        <p class="texto">Os animes são cadastrados com nome, número, gênero de episódios e status de assistido, não assistido, finalizado e não finalizado. Após o cadastro, o anime pode ser visto em duas listas diferentes. Uma é para edição e exclusão de dados e a outra é apenas para visualização.</p>

        <p class="texto">Muito obrigado e proveite!</p>

        <div class="controlarCards">
            <div class="card shadow-lg p-3 mb-5 bg-dark rounded">
                <div>
                    <center><img class="imgCard img-thumbnail" src="{{'/imgs/cadastrar.jpg'}}" alt=""></center>
                </div>
                <p class="txtCard">
                    Cadastre os animes que quer assitir ou que já assistiu! </p>

                <div class="botaoCard">
                    <a href="{{'cadastrar-anime'}}">
                        <button type="button" class="btn btn-light">Cadastrar</button>
                    </a>
                </div>
            </div>

            <div class="card shadow-lg p-3 mb-5 bg-dark rounded">
                <div>
                    <center><img class="imgCard img-thumbnail" src="{{'/imgs/editar.jpg'}}" alt=""></center>
                </div>
                <p class="txtCard">
                    Cadastrou algum dado errado? Sem problemas!
                    Edite os dados aqui!</p>

                <div class="botaoCard">
                    <a href="{{'editar-anime'}}">
                        <button type="button" class="btn btn-light">Editar</button>
                    </a>
                </div>
            </div>

            <div class="card shadow-lg p-3 mb-5 bg-dark rounded">
                <div>
                    <center><img class="imgCard img-thumbnail" src="{{'/imgs/lista.jpg'}}" alt=""></center>
                </div>
                <p class="txtCard">
                    Acompanhe em tempo real a sua lista de animes!
                </p>

                <div class="botaoCard">
                    <a href="{{'listar-anime'}}">
                        <button type="button" class="btn btn-light">Ver Lista</button>
                    </a>
                </div>
            </div>
        </div>
    </div>


</section>
@endsection