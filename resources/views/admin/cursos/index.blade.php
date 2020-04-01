@extends('layout.site')
@section('titulo','Cursos')

@section('conteudo')
    <div class="container">
    <h3 class="center">Listagem de cursos</h3>

    </div>
    <div class="row">
    <table class="center">
    <thead>
    <tr>
    <th>Id</th>
    <th>Titulo</th>
    <th>Descrição</th>
    <th>Imagem</th>
    <th>Publicado</th>
    <th>Ação</th>
    </tr>
    </thead>
    <tbody>
    @foreach($registros as $registro)<!--Laço para percorer as rows da variavel registros q é enviada pela view -->
        <tr>
        <td>{{$registro->id}}</td>
        <td>{{$registro->titulo}}</td>
        <td>{{$registro->descricao}}</td>
        <td><img width="90" height="90" src="{{asset($registro->imagem)}}" alt=" "/></td>
        <td>{{$registro->publicado}}</td>
       
        <td>
        <a class="btn deep-blue" href="{{route('admin.cursos.editar',$registro->id)}}">Editar</a><!--Esses links apontam para a route do controller via apelido de route -->
        <a class="btn red" href="{{route('admin.cursos.deletar',$registro->id)}}">Deletar</a>
            
            </td>
        </tr>
    </tbody>
    @endforeach 
    </table>
  
    </div>
    <div class="row">
    <a class="btn green" href="{{route('admin.cursos.adicionar')}}">Add</a>
    </div>
   
    
@endsection   