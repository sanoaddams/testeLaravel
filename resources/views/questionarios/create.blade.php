<form action="{{route('questionarios.store')}}" method="post">
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" class="form-control">
    </div>
    <div class="form-group">
        <label for="pontuacao">Pontuação Maxima:</label>
        <input type="text" name="pontuacao" id="pontuacao" class="form-control">
    </div>
    <button class="btn btn-lg btn-sucess">Cadastrar Teste</button>
</form>