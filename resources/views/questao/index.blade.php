@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-sm-12">
            <a href="{{route('questoes.create')}}" class="btn btn-success float-right">Cadastrar Questões</a>
            <a href="{{route('home')}}" class="btn btn-primary float-right">Voltar</a>
            <h2>Questões Laravel</h2>
            <div class="clear-fix"></div>
        </div>
    </div>
    <table class="table table-stripped">
        <thead>
        <tr>
            <th>#</th>
            <th>Enunciado da Questão</th>
            <th>Título do Questionário</th>
            <th>Resposta A</th>
            <th>Resposta B</th>
            <th>Resposta C</th>
            <th>Resposta D</th>
            <th>Resposta E</th>
            <th>Resposta Correta</th>
            <th>Criado em</th>
        </tr>
        </thead>
        <tbody>
        @forelse($questao as $q)
            <tr>
                <td>{{$q->id}}</td>
                <td>{{$q->enunciado}}</td>
                <td>{{$q->questionario->nome}}</td>
                <td>{{$q->respostaA}}</td>
                <td>{{$q->respostaB}}</td>
                <td>{{$q->respostaC}}</td>
                <td>{{$q->respostaD}}</td>
                <td>{{$q->respostaE}}</td>
                <td>{{$q->correta}}</td>
                <td>{{date('d/m/Y H:i:s',strtotime($q->created_at))}}</td>
                <td>
                    <div class="btn-group">
                        <a href="{{route('questoes.edit',['questo' => $q->id ])}}" class="btn btn-sm btn-primary">Editar</a>
                        </form>
                        <hr>
                        <form action="{{route('questoes.destroy',['questo' => $q->id ])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger form-control">Remover</button>
                        </form>
                    </div>
                </td>

            </tr>
        @empty
            <tr>
                <td colspan="5">Nenhum Registro</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    {{$questao->links()}}
@endsection