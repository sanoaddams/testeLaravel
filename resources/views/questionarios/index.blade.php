@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-sm-12">
            <a href="{{route('questionarios.create')}}" class="btn btn-success float-right">Cadastrar Questionario</a>
            <a href="{{route('questoes.index')}}" class="btn btn-primary float-right">Questões</a>
            <h2>Questionários Laravel</h2>
            <div class="clear-fix"></div>
        </div>
    </div>
    <table class="table table-stripped">
        <thead>
        <tr>
            <th>#</th>
            <th>Título do Questionário</th>
            <th>Pontuação</th>
            <th>Criado em</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        @forelse($questionario as $q)
            <tr>
                <td>{{$q->id}}</td>
                <td>{{$q->nome}}</td>
                <td>{{$q->pontuacao}}</td>
                <td>{{date('d/m/Y H:i:s',strtotime($q->created_at))}}</td>
                <td>
                    <div class="btn-group">
                        <a href="{{route('questionarios.show', ['questionario'=>$q->id])}}" class="btn btn-sm btn-success">Visualizar</a>
                        <a href="{{route('questionarios.edit',['questionario' => $q->id])}}" class="btn btn-sm btn-primary">Editar</a>
                        <form action="{{route('questionarios.destroy',['questionario'=>$q->id])}}" method="POST">
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
    {{$questionario->links()}}
    @endsection