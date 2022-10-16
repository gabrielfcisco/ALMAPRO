@extends('materias.master')
@section('content')
<div class="row">
    <div class="col-12 col-md-10">
        <h3>Detalhes - Matérias</h3>
    </div>
    <div class="col-12 col-md-2 text-end">
        <a class="btn btn-primary" href="{{route('materias.index')}}">Voltar</a>
    </div>
</div>
<div class="row">
    <div class="col-12 mb-3">
        <strong>Nome: </strong>
        {{ $materia->Nome }}
    </div>
    <div class="col-12 mb-3">
        <strong>Nome: </strong>
        {{ $materia->Creditos }}
    </div>
    <div class="col-12 mb-3">
        <strong>Sobrenome: </strong>
        {{ $materia->RP }}
    </div>
</div>
@endsection