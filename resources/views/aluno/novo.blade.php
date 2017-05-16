@extends('layout.template')

@section('titulo')
    Cadastro de Aluno
@stop

@section('conteudo')
<form action="{{ $aluno->action or '/aluno/adiciona' }}" method="post">
    <!--   segurança contra ataque web Cross-site request forgery, usando quando envia dados post -->
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="idAluno" id="idAluno" value="{{ $aluno->id or '' }}">
    <div class="form-group">
        <label for="curso">Nome:</label>
        <input type="text" class="form-control" name="nome" id="nome" value="{{ $aluno->nome or '' }}">
    </div>
    <div class="form-group">
            <label for="dataNascimento">Data Nascimento:</label>
            <input type="date" class="form-control" name="dataNascimento" id="dataNascimento" value="{{ $aluno->dataNascimento or '' }}">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
@stop
