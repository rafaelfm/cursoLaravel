<div class="input-field">
    <input type="text" name="titulo" value="{{isset($registro->titulo) ? $registro->titulo : ""}}">
    <label>titulo</label>
</div>

<div class="input-field">
    <input type="text" name="titulo" value="{{isset($registro->descricao) ? $registro->descricao : "" }}">
    <label>Descrição</label>
</div>

<div class="input-field">
    <input type="text" name="valor" value="{{isset($registro->valor) ? $registro->valor : "" }}">
    <label>Valor</label>
</div>


<div class="file-field input-field">
    <div class="btn blue">
        <span>Imagem</span>
        <input type="file" name="imagem">
    </div>
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
    </div>
</div>
@if(isset($registro->imagem))
    <div class="input-field">
        <img src="{{asset($registro->imagem)}}"
    </div>
@endif
<div class="input-field">
    <p>
        <label>
            <input id="publicado" type="checkbox" {{isset($registro->publicado) && $registro->publicado =="sim"? "checked" : ""}} value="true" />
            <span for="publicado">Publicar?</span>
        </label>
    </p>
</div>