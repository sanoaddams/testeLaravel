@extends('layouts.app')

@section('content')


@if (\Session::has('Aprovado'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('Aprovado') !!}</li>
        </ul>
    </div>
@if (\Session::has('Reprovado'))
    <div class="alert alert-danger">
        <ul>
            <li>{!! \Session::get('Reprovado') !!}</li>
        </ul>
    </div>
    @endif
@endif



    @Auth
    <div class="form-group">
            <h2>Bem Vindo(a) {{Auth::user()->name}}</h2>
        </div>
        <div class="form-group">
            <h2>Responda as Questões a seguir</h2>
        </div>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" class="href">
    <form action="{{route('resposta',$questionario->id)}}" method="post">
    @csrf
        <div class="col-sm-12">
        <?php
        $num = 0;
        ?>
            @foreach($questionario->questao as $questao)
            
            <?php
        $num += 1;
        ?>
            
            <input type="text" id="Enunciado" name="resposta" value="{{$questao->enunciado}}" readonly="readonly" value="enunciado{{$num}}"><br>
            
            <p> A ) <input type="radio" aria-label="Radio button for following text input" id="respostaA" name="resposta{{$num}}" value="A">{{$questao->respostaA}} </p>      
            
            <p>B ) <input type="radio" aria-label="Radio button for following text input" id="respostaB" name="resposta{{$num}}" value="B">{{$questao->respostaB}} </p>
                 
           <p> C ) <input type="radio" aria-label="Radio button for following text input" id="respostaC" name="resposta{{$num}}" value="C">{{$questao->respostaC}}</p>

           <p> D ) <input type="radio" aria-label="Radio button for following text input" id="respostaD" name="resposta{{$num}}" value="D">{{$questao->respostaD}}</p>

           <p> E ) <input type="radio" aria-label="Radio button for following text input" id="respostaE" name="resposta{{$num}}" value="E">{{$questao->respostaE}}</p><br>  

            <input type="hidden" aria-label="Radio button for following text input" id="correta" name="correta{{$num}}" value="{{$questao->correta}}">              
              
            @endforeach
            <input type="hidden" id="num" name="num" value="{{$num}}">   
            <button btn btn-primary btn-success >Responder</button>
        </div>
        <div class="form-group">
            <a href="{{route('home')}}" class="btn btn-primary float-right">Voltar</a>
        </div>
       </form> 
    @endauth
@endsection
