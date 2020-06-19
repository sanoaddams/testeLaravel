<form action="{{route('questionarios.update',['questionario'=>$questionario->id])}}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" id="nome" class="form-control" value="{{$questionario->nome}}">
    </div>
    <div class="form-group">
        <label for="pontuacao">Potuação mínima para aprovação:</label><br>
        <input type="text" name="pontuacao" id="pontuacao" class="form-control" value="{{$questionario->pontuacao}}">
    </div> 
    
    <button class="btn btn-lg btn-success">Atualizar Questionário</button>

</form>

<form action="{{route('questionarios.destroy',['questionario'=>$questionario->id])}}" method="POST">
    @csrf
    @method('DELETE')
    <button class="btn btn-lg btn-danger">Remover Questionário</button>

</form> 