<form action="{{route('questionarios.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="nome">Nome: </label><br>
        <input type="text" name="nome" id="nome" class="form-control"><br>
    </div>
    <div class="form-group">
        <label for="pontuacao">Pontuação Maxima: </label><br>
        <input type="text" name="pontuacao" id="pontuacao" class="form-control"><br>
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>