@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" class="href">
<form action="{{route('questoes.store')}}" method="post">
    @csrf

    <div class="form-group col-md-m3">
        <label for="questionario_id">Escolha o  Questionario:</label><br>
        <select name="questionario_id" id="questionario_id" class="form-control">
            @foreach($questionarios as $questionario):
            <option value="{{$questionario->id}}">{{$questionario->nome}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="enunciado">Enunciado:</label><br>
        <textarea name="enunciado" id="" value="{{old('enunciado')}}" cols="30" rows="10" class="form-control"></textarea><br>
    </div>
    <div class="form-group">
        <label for="respostaA">Resposta A</label><br>
        <input type="text" name="respostaA" value="{{old('respostaA')}}" id="respostaA" class="form-control"><br>
    </div>
    <div class="form-group">
        <label for="respostaB">Resposta B</label><br>
        <input type="text" name="respostaB" value="{{old('respostaB')}}" id="respostaB" class="form-control" ><br>
    </div>
    <div class="form-group">
        <label for="respostaC">Resposta C</label><br>
        <input type="text" name="respostaC" value="{{old('respostaC')}}" id="respostaC" class="form-control" ><br>
    </div>
    <div class="form-group">
        <label for="respostaD">Resposta D</label><br>
        <input type="text" name="respostaD" value="{{old('respostaD')}}" id="respostaD" class="form-control"><br>
    </div>
    <div class="form-group">
        <label for="respostaE">Resposta E</label><br>
        <input type="text" name="respostaE" value="{{old('respostaE')}}" id="respostaE" class="form-control"><br>
    </div>
    <div class="form-group">
        <select name="correta" id="correta" value="{{old('correta')}}" class="form-control">
            <option value="a">A</option>
            <option value="b">B</option>
            <option value="c">C</option>
            <option value="d">D</option>
            <option value="e">E</option>
        </select>
     </div>
    <button class="btn btn-lg btn-primary form-control">Cadastrar Questão</button>
</form>
@endsection