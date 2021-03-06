@extends('layout.template')

@section('titulo')
Lista Cursos
@stop

@section('conteudo')

@if(empty($cursos))
<div class="alert alert-danger alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    <strong>Não ha curso cadastrado!</strong>
</div>
@else
<table class="table table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Curso</th>
            <th>Descrição</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cursos as $curso)
        <tr>
            <td>{{ $curso->id }}</td>
            <td>{{ $curso->curso }}</td>
            <td>{{ $curso->descrisao }}</td>
            <td>
                <a href="{{ action('CursoController@detalhe',$curso->id)}}" >Visualizar</a>&nbsp;|&nbsp;
                <a href="{{ action('CursoController@editar',$curso->id)}}" >Editar</a>&nbsp;|&nbsp;
                <a href="{{ action('CursoController@remove',$curso->id)}}" >Remover</a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endif
@if(old('curso'))
<div class="alert alert-success alert-dismissable">
    <strong>Curso {{ old('curso')}} cadastrado com sucesso. </strong>
</div>
@endif
@if(old('id'))
<div class="alert alert-success alert-dismissable">
    <strong>Curso com id {{ old('id')}} removido com sucesso. </strong>
</div>
@endif

@stop
