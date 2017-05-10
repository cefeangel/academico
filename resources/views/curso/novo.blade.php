@extends('layout.template')

@section('titulo')
@stop

@section('conteudo')
<form action="/curso/adiciona" method="post">
    <!--   segurança contra ataque web Cross-site request forgery, usando quando envia dados post -->
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <label for="curso">Curso:</label>
        <input type="text" class="form-control" name="curso" id="curso">
    </div>
    <div class="form-group">
            <label for="descrisao">Descrição:</label>
            <input type="text" class="form-control" name="descrisao" id="descrisao">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
@stop
