<form action="{{route('questoes.store')}}" method="post">
    @csrf 
    <div class="form-group">
        <label for="enunciado">Enunciado:</label><br>
        <textarea name="enunciado" id="" cols="30" rows="10"></textarea><br>
    </div>
    <div class="form-group">
        <label for="respostaA">Resposta A</label><br>
        <input type="text" name="respostaA" id="respostaA" class="form-control"><br>
    </div>
    <div class="form-group">
        <label for="respostaB">Resposta B</label><br>
        <input type="text" name="respostaB" id="respostaB" class="form-control"><br>
    </div>
    <div class="form-group">
        <label for="respostaC">Resposta C</label><br>
        <input type="text" name="respostaC" id="respostaC" class="form-control"><br>
    </div>
    <div class="form-group">
        <label for="respostaD">Resposta D</label><br>
        <input type="text" name="respostaD" id="respostaD" class="form-control"><br>
    </div>
    <div class="form-group">
        <label for="respostaE">Resposta E</label><br>
        <input type="text" name="respostaE" id="respostaE" class="form-control"><br>
    </div>
    <div class="form-group">
       <select name="correta" id="correta">
           <option value="a">A</option>
           <option value="b">B</option>
           <option value="c">C</option>
           <option value="d">D</option>
           <option value="e">E</option>
       </select>
    </div>
    <button class="btn btn-lg btn-sucess">Cadastrar Questão</button>
</form>    