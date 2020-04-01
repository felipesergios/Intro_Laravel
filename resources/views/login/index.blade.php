@extends('layout.site')
@section('titulo','Cursos')

@section('conteudo')
    <div class="container">
    <h3 class="center">Entrar</h3>

    
    <div class="row">
    <form action="{{route('site.login.entrar')}}"method="post">
        {{csrf_field()}}<!--Passando o Token de autenticação-->

    <div class="input-field">
    <input type="text" name="email">
    <label for="">E-mail</label>
     </div>

     <div class="input-field">
    <input type="password" name="senha">
    <label for="">Senha</label>
     </div>
       
        <button class="btn deep-orange" type="submit" name="btn-salvar">Entrar no sistema</button>
    </form>
  </div>
    </div>
    
   
    
@endsection   