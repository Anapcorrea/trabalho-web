@extends('templates.main')
@section('content')

    <div class="card mt-4">
  <div class="card-header">
    <b>{{$curso ->nome}}</b> ({{$curso->abreviatura}})
  </div>
  <div class="card-body">
    <h5 class="card-title">Informações do Curso</h5>
    <p class="card-text">
        <b>Duração:</b> {{$curso-> duracao}} ano(s)
    </p>
    <p class="card-text">
        <b>Eixo:</b> {{$curso-> eixo-> name}} ano(s)
    </p>
    <a href="{{route('curso.index')}}" class="btn btn-primary">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
        </svg>
    </a>
  </div>
</div>
    
@endsection
    