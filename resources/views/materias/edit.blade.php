@extends('materias.master')
@section('content')
<div class="row">
	<div class="col-12 col-md-10">
		<h3>Editar Matéria</h3>
	</div>
	<div class="col-12 col-md-2 text-end">
		<a class="btn btn-primary" href="{{route('materias.index')}}">Voltar</a>
	</div>
</div>
@if($errors->any())
<div class="row">
	<div class="col-12">
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
		  <strong>Some error occured!</strong>
		  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  <ul>
		  	@foreach($errors->all() as $error)
		  	<li>{{$error}}</li>
		  	@endforeach
		  </ul>
		</div>
	</div>
</div>
@endif
<div class="row">
	<div class="col-12">
		<form method="POST" action="{{route('materias.update', $materia->id)}}">
			@csrf
			@method('PUT')
			<div class="mb-3">
			    <label for="RA" class="form-label">RP</label>
			    <input type="text" class="form-control" id="RP" name="RP" value="{{$materia->RP}}">
		  	</div>
			<div class="mb-3">
			    <label for="Nome" class="form-label">Nome</label>
			    <input type="text" class="form-control" id="Nome" name="Nome" value="{{$materia->Nome}}">
		  	</div>
		  	<div class="mb-3">
			    <label for="Creditos" class="form-label">Créditos</label>
			    <input type="text" class="form-control" id="Creditos" name="Creditos" value="{{$materia->Creditos}}">
		  	</div>
		  	<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>
@endsection