@extends('professores.master')
@section('content')

<div class="row">
    <div class="col-12 col-md-10">
        <h3>Detalhes - Professores</h3>
    </div>
    <div class="col-12 col-md-2 text-end">
        <a class="btn btn-primary" href="{{route('professores.index')}}">Voltar</a>
    </div>
</div>
<div class="row">
    <div class="col-12 mb-3">
        <strong>RP: </strong>
        {{ $professore->RP }}
    </div>
    <div class="col-12 mb-3">
        <strong>Nome: </strong>
        {{ $professore->Nome }}
    </div>
    <div class="col-12 mb-3">
        <strong>Sobrenome: </strong>
        {{ $professore->Sobrenome }}
    </div>
    <div class="col-12 mb-3">
        <strong>Matéria: </strong>
        {{ $professore->Materia }}
    </div>
</div>
@endsection
