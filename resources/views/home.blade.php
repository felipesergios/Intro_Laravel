@extends('layout.site')
@section('titulo','Cursos')

@section('conteudo')
    <div class="container">
    <h3 class="center">Teste</h3>

      
    <div class="row">
    @foreach($cursos as $curso)
    <div class="col s12 m4">
      <div class="card medium">
        <div class="card-image">
          <img src="{{asset($curso->imagem)}}">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
            <h4>{{$curso->titulo}}</h4>
          <p>{{$curso->descricao}}</p>
        </div>
        <div class="card-action">
          <a href="#">Ler Mais...</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  <div class="row" algin="center">
  {{$cursos->links()}}
  </div>
   
  
    
@endsection   