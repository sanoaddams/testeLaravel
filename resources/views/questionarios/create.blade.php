<form action="{{route('questionarios.store')}}" method="post">
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome"  placeholder="Nome do Questionario">
    </div>
    <div class="form-group">
        <label for="pontuacao">Pontuação Maxima</label>
        <input type="text" class="form-control" id="pontuacao" placeholder="total de pontos">
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>