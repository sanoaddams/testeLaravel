@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" class="href">
<form action="{{route('questionarios.update',['questionario'=>$questionario->id])}}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" id="nome"  value="{{$questionario->nome}}" class="form-control">
    </div>
    <div class="form-group">
        <label for="pontuacao">Potuação mínima para aprovação:</label><br>
        <input type="text" name="pontuacao" id="pontuacao"  value="{{$questionario->pontuacao}}" class="form-control">
    </div> 
    
    <button class="btn btn-lg btn-success form-control">Atualizar Questionário</button>

</form>
<hr>
<form action="{{route('questionarios.destroy',['questionario'=>$questionario->id])}}" method="POST">
    @csrf
    @method('DELETE')
    <button class="btn btn-lg btn-danger form-control">Remover Questionário</button>

</form>
    @endsection