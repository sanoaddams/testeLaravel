@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" class="href">
<form action="{{route('questoes.update',['questo' => $questoes->id ])}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="enunciado">Enunciado:</label><br>
        <textarea name="enunciado"  id="enunciado" cols="30" rows="10" class="form-control">{{$questoes->enunciado}}</textarea><br>
    </div>
    <div class="form-group">
        <label for="respostaA">Resposta A</label><br>
        <input type="text" name="respostaA" value="{{$questoes->respostaA}}" id="respostaA" class="form-control"><br>
    </div>
    <div class="form-group">
        <label for="respostaB">Resposta B</label><br>
        <input type="text" name="respostaB" value="{{$questoes->respostaB}}" id="respostaB" class="form-control"><br>
    </div>
    <div class="form-group">
        <label for="respostaC">Resposta C</label><br>
        <input type="text" name="respostaC" value="{{$questoes->respostaC}}" id="respostaC" class="form-control"><br>
    </div>
    <div class="form-group">
        <label for="respostaD">Resposta D</label><br>
        <input type="text" name="respostaD" value="{{$questoes->respostaD}}" id="respostaD" class="form-control"><br>
    </div>
    <div class="form-group">
        <label for="respostaE">Resposta E</label><br>
        <input type="text" name="respostaE" value="{{$questoes->respostaE}}" id="respostaE" class="form-control"><br>
    </div>
    <div class="form-group">       
        <select name="correta" id="correta" class="form-control">
            <option value="a" {{($questoes->correta == 'a')?'selected':''}}>A</option>
            <option value="b" {{($questoes->correta == 'b')?'selected':''}}>B</option>
            <option value="c" {{($questoes->correta == 'c')?'selected':''}}>C</option>
            <option value="d" {{($questoes->correta == 'd')?'selected':''}}>D</option>
            <option value="e" {{($questoes->correta == 'e')?'selected':''}}>E</option>
        </select>       
     </div>
    <button class="btn btn-lg btn-primary form-control">Atualizar Questão</button>
</form>
<hr>
<form action="{{route('questoes.destroy',['questo' => $questoes->id ])}}" method="POST">
@csrf
@method('DELETE')
    <button class="btn btn-lg btn-danger form-control">Apagar Questão</button>
</form>
@endsection
