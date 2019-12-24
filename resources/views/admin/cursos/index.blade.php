@extends('layout.site')

@section("titulo","Cursos")

@section('conteudo')
    <h3> Lista de cursos </h3>
    <div class="row">
        <table>
            <thread>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Descrição</th>
                    <th>Imagem</th>
                    <th>Publicado</th>
                    <th>Ação</th>
                </tr>
            </thread>
            <tbody>
            @foreach($registros as $registro)
                <tr>
                    <td>{{$registro->id}}</td>
                    <td>{{$registro->titulo}}</td>
                    <td>{{$registro->descricao}}</td>
                    <td><img width="120" src="asset({{$registro->imagem}})" alt=""</td>
                    <td>{{$registro->publicado}}</td>
                    <td>
                        <a class="btn deep-orange" href="{{route('admin.cursos.editar', $registro->id)}}"> Editar </a>
                        <a class="btn red" href="{{route('admin.cursos.deletar', $registro->id)}}"> Deletar </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="row">
            <a class="btn blue" href="{{route('admin.cursos.adicionar')}}"> Adicionar </a>
        </div>
    </div>
@endsection