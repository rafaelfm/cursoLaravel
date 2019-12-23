<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    public function index() {
        /* chamada fixa passando parametros para view
        $contatos = [
            (object)["nome" => "Maria" , "telefone" =>"33963232"],
            (object)["nome" => "Rafael" , "telefone" =>"99996666"]
        ];
        return view('contato.index',compact('contatos'));
        */
        $contatos = [
            new Contato("Rafael","33922356"),
            new Contato("Diego" , "88844485"),
        ];
        //dd($contatos);
        return view('contato.index',compact('contatos'));
    }

    public function criar(Request $req) {
        dd($req->all());
        return "Teste criar.";
    }

    public function editar() {
        return "Teste editar.";
    }
}
