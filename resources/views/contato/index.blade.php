<html>
    <head>
        <title> Curso de Laravel</title>
    </head>
    <h3> Index contato Index </h3>

    @foreach($contatos as $contato)
        <p>{{ $contato->nome }}</p>
        <p>{{ $contato->telefone }}</p>
    @endforeach
</html>
