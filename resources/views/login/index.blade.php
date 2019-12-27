@extends('layout.site')

@section("titulo","Cursos")

@section('conteudo')
    <h3> Login</h3>
    <div class="row">
        <form class="" action="{{route('site.entrar')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="input-field">
                <input type="text" name="email"/>
                <label>E-mail</label>
            </div>
            <div class="input-field">
                <input type="password" name="senha"/>
                <label>Senha</label>
            </div>

            <button class="btn deep-orange">Entrar</button>
        </form>
    </div>
@endsection