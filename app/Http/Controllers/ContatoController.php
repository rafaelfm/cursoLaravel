<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    // teste
    public function index() {
        $contatos = [
            (object)["nome" => "Maria" , "telefone" =>"33963232"],
            (object)["nome" => "Rafael" , "telefone" =>"99996666"]
        ];
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
