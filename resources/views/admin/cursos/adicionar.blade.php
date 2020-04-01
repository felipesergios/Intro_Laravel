@extends('layout.site')
@section('titulo','Cursos')

@section('conteudo')
    <div class="container">
    <h3 class="center">Listagem de cursos</h3>

    </div>
    <div class="row">
    <form action="{{route('admin.cursos.salvar')}}"method="post" enctype="multipart/form-data">
        {{csrf_field()}}<!--Passando o Token de autenticação-->
        @include('admin.cursos._form')<!--Carregando o blade do form-->
        <button class="btn deep-orange" type="submit" name="btn-salvar">Salvar</button>
    </form>
  
    </div>
    
   
    
@endsection   