<form action="{{route('questoes.store')}}" method="post">
    @csrf

    <div class="form-group">
        <label for="enunciado">Enunciado:</label><br>
        <textarea name="enunciado" id="" value="{{old('enunciado')}}" cols="30" rows="10"></textarea><br>
    </div>
    <div class="form-group">
        <label for="respostaA">Resposta A</label><br>
        <input type="text" name="respostaA" value="{{old('respostaA')}}" id="respostaA" class="form-control"><br>
    </div>
    <div class="form-group">
        <label for="respostaB">Resposta B</label><br>
        <input type="text" name="respostaB" value="{{old('respostaB')}}" id="respostaB" class="form-control"><br>
    </div>
    <div class="form-group">
        <label for="respostaC">Resposta C</label><br>
        <input type="text" name="respostaC" value="{{old('respostaC')}}" id="respostaC" class="form-control"><br>
    </div>
    <div class="form-group">
        <label for="respostaD">Resposta D</label><br>
        <input type="text" name="respostaD" value="{{old('respostaD')}}" id="respostaD" class="form-control"><br>
    </div>
    <div class="form-group">
        <label for="respostaE">Resposta E</label><br>
        <input type="text" name="respostaE" value="{{old('respostaE')}}" id="respostaE" class="form-control"><br>
    </div>
    <div class="form-group">
       <select name="correta" id="correta">
           <option value="{{old('a')}}">A</option>
           <option value="{{old('b')}}">B</option>
           <option value="{{old('c')}}">C</option>
           <option value="{{old('d')}}">D</option>
           <option value="{{old('e')}}">E</option>
       </select>
    </div>
    <button class="btn btn-lg btn-sucess">Cadastrar Questão</button>
</form>    