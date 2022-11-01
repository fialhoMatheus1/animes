<?php

namespace App\Http\Controllers;

use Illuminate\support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Anime;

class AnimeController extends Controller
{
    public function Cadastrar()
    {
        return view('cadastrarAnime');
    } //fim da funcao

    public function SalvarBanco(Request $request)
    {
        $dadosAnime = $request->validate([
            'nome' => 'string|required',
            'genero' => 'string|required',
            'episodios' => 'string|required',
            'status' => 'string|required'
        ]);

        Anime::create($dadosAnime);

        return Redirect::route('home');
    } //fim da funcao

    public function MostrarLista(Request $request)
    {
        //função para buscar por nome do anime:
        $dadosAnime = Anime::query();
        $dadosAnime->when($request->nome, function ($query, $vl) {
            $query->where('nome', 'like', '%' . $vl . '%');
        });
        //guardar os dados do banco em uma outra variavel.
        $dadosAnime = $dadosAnime->get();
        return view('listarAnime', ['registrosAnime' => $dadosAnime]);
    } //fim da funcao

    public function MostrarEditar(Request $request)
    {
        //função para buscar por nome do anime:
        $dadosAnime = Anime::query();
        $dadosAnime->when($request->nome, function ($query, $vl) {
            $query->where('nome', 'like', '%' . $vl . '%');
        });
        //guardar os dados do banco em uma outra variavel.
        $dadosAnime = $dadosAnime->get();
        return view('editarAnime', ['registrosAnime' => $dadosAnime]);
    } //fim da funcao

    //editar anime:
    public function Alterar(Anime $registrosFinais)
    {
        return view('alterarAnime', ['registrosFinais' => $registrosFinais]);
    } //fim da funcao

    //botao alterar anime:
    public function AlterarBanco(Anime $registrosFinais, Request $request)
    {
        $banco = $request->validate([
            'nome' => 'string|required',
            'genero' => 'string|required',
            'episodios' => 'string|required',
            'status' => 'string|required'
        ]);
        $registrosFinais->fill($banco);
        $registrosFinais->save();
        return Redirect::route('editar-anime');
    } //fim da funcao

    //botao deletar:
    public function ApagarBancoAnime(Anime $registrosFinais)
    {
        $registrosFinais->delete();
        return Redirect::route('editar-anime');
    }//fim da funcao
    
}//fim da classe
