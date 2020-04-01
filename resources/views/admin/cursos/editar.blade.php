@extends('layout.site')
@section('titulo','Cursos')

@section('conteudo')
    <div class="container">
    <h3 class="center">Editando Curso</h3>

    </div>
    <div class="row">
    <form action="{{route('admin.cursos.atualizar',$registro->id)}}"method="post" enctype="multipart/form-data">
        {{csrf_field()}}<!--Passando o Token de autenticação-->
        <input type="hidden" name="_method" value="put">
        @include('admin.cursos._form')<!--Carregando o blade do form-->
        <button class="btn deep-orange" type="submit" name="btn-salvar">atualizar</button>
    </form>
  
    </div>
    
   
    
@endsection   