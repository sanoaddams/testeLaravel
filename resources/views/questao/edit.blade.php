<form action="{{route('questoes.update',['questo' => $questoes->id ])}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="enunciado">Enunciado:</label><br>
        <textarea name="enunciado"  id="enunciado" cols="30" rows="10">{{$questoes->enunciado}}</textarea><br>
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
        <select name="correta" id="correta">
            <option value="{{$questoes->a}}">A</option>
            <option value="{{$questoes->b}}">B</option>
            <option value="{{$questoes->c}}">C</option>
            <option value="{{$questoes->d}}">D</option>
            <option value="{{$questoes->e}}">E</option>
        </select>
    </div>
    <button class="btn btn-lg btn-sucess">Cadastrar Questão</button>
</form>

<form action="{{route('questoes.destroy',['questo' => $questoes->id ])}}" method="POST">
@csrf
@method('DELETE')
    <button class="btn btn-lg btn-danger">Apagar Questão</button>
</form>

