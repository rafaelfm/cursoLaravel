@extends('layout.site')

@section("titulo","Contatos")

@section('conteudo')
    <h3> Index contato Index </h3>

    @foreach($contatos as $contato)
        <p>{{ $contato->getNome() }}</p>
        <p>{{ $contato->getTelefone() }}</p>
    @endforeach

@endsection