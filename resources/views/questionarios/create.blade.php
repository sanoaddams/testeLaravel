@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" class="href">
<form action="{{route('questionarios.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="nome">Nome: </label><br>
        <input type="text" name="nome" id="nome"  class="form-control" value="{{old('nome')}}"><br>
    </div>
    <div class="form-group">
        <label for="pontuacao">Pontuação Maxima: </label><br>
        <input type="text" name="pontuacao" id="pontuacao" class="form-control" value="{{old('pontuacao')}}"><br>
    </div>
    <button type="submit" class="btn btn-primary form-control" >Cadastrar Questionário</button>
</form>
@endsection