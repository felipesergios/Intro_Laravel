<div class="input-field">
    <input type="text" name="titulo" value="{{isset($registro->titulo) ? $registro->titulo :'' }}">
    <label for="">Titulo</label>
</div>

<div class="input-field">
    <input type="text" name="descricao" value="{{isset($registro->descricao) ? $registro->descricao :'' }}">
    <label for="">Descrição</label>
</div>

<div class="input-field">
    <input type="text" name="valor" value="{{isset($registro->valor) ? $registro->valor :'' }}">
    <label for="">Valor</label>
</div>

<div class="file-field input-field">
    <div class="btn deep-blue">
    <span>Imagem</span>
    <input type="file" name="imagem">
    </div>
    <div class="file-path-wrapper">
    <input class="file-path validate" type="text">
    </div>
</div>
@if(isset($registro->imagem))
<div class='input-field'>
    <img width="150" src="{{asset($registro->imagem)}}">
</div>
@endif
<br>
<div class="center input-field">
    <p>
      <label>
        <input type="checkbox" name="publicado" {{isset($registro->publicado) && $registro->publicado == "sim" ? 'checked':''}} value="true" />
        <span>Publicado ?</span>
      </label>
    </p>


<br><br>
</div>