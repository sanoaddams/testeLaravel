@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm-12">
    <a href="{{route('questoes.create')}}" class="btn btn-success flot-right">Cadastrar Questão</a>
    <a href="{{route('questionarios.index')}}" class="btn btn-primary float-right">Voltar</a>
    <div class="clear-fix"></div>
    </div>
</div>
<table class="table table-stripped">
    <thead>
        <tr>
            <th>Título do Questionário</th>
                
        </tr>
    </thead>
    <tbody>
        @forelse ($questionario as $dados)
        <tr>
            <td>{{$dados->enunciado}}</td>
           
        </tr>            
        @empty
        <tr>
            <td>Nenhum registro encontrado!</td>
        </tr>
        @endforelse
    </tbody>
</table>
   
@endsection