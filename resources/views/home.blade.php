@extends('layout.site')

@section("titulo","Cursos")

@section('conteudo')
    <h3> Lista de cursos </h3>
    <div class="row">
        @foreach($cursos as $curso)
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img width="60" src="{{asset($curso->imagem)}}">
                        <span class="card-title">{{$curso->titulo}}</span>
                    </div>
                    <div class="card-content">
                        <p>{{$curso->descricao}}</p>
                    </div>
                    <div class="card-action">
                        <a href="#">This is a link</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection