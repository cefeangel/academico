@extends('layout.template');

@section('titulo')
    Detalhe Curso
@stop

@section('conteudo')
<form action="" method="">
   
    <div class="form-group">
        <label for="curso">Curso:</label>
        <input type="text" class="form-control" name="curso" id="curso" value="{{ $curso->curso }}" disabled>
    </div>
    <div class="form-group">
            <label for="descrisao">Descrição:</label>
            <input type="text" class="form-control" name="descrisao" id="descrisao" value="{{ $curso->descrisao }}" disabled>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
@stop