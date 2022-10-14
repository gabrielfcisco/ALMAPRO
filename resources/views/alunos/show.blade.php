@extends('alunos.master')
@section('content')
<div class="row">
    <div class="col-12 col-md-10">
        <h3>Detalhes - Alunos</h3>
    </div>
    <div class="col-12 col-md-2 text-end">
        <a class="btn btn-primary" href="{{route('alunos.index')}}">Voltar</a>
    </div>
</div>
<div class="row">
    <div class="col-12 mb-3">
        <strong>RA: </strong>
        {{ $aluno->RA }}
    </div>
    <div class="col-12 mb-3">
        <strong>Nome: </strong>
        {{ $aluno->Nome }}
    </div>
    <div class="col-12 mb-3">
        <strong>Sobrenome: </strong>
        {{ $aluno->Sobrenome }}
    </div>
    <div class="col-12 mb-3">
        <strong>Matérias: </strong>
            <p>
            @if(count($materias) > 0)
				@foreach($materias as $materia)
                    {{ $materia->Nome }}<br>
				@endforeach
			@else
				<option colspan="4">Record not found!</option>
			@endif
            </p>
    </div>
</div>
@endsection