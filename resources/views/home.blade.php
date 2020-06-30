@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <a href="{{route('questoes.index')}}" class="btn btn-success form-control">Questões</a>
        <a href="{{route('questionarios.index')}}" class="btn btn-primary form-control">Questionários</a>        
    </div>
</div>
@endsection
