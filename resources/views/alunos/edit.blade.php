@extends('alunos.master')
@section('content')
<div class="row">
	<div class="col-12 col-md-10">
		<h3>Editar Aluno</h3>
	</div>
	<div class="col-12 col-md-2 text-end">
		<a class="btn btn-primary" href="{{route('alunos.index')}}">Voltar</a>
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
		<form method="POST" action="{{route('alunos.update', $aluno->id)}}">
			@csrf
			@method('PUT')
			<div class="mb-3">
			    <label for="RA" class="form-label">RA</label>
			    <input type="text" class="form-control" id="RA" name="RA" value="{{$aluno->RA}}">
		  	</div>
			<div class="mb-3">
			    <label for="Nome" class="form-label">Nome</label>
			    <input type="text" class="form-control" id="Nome" name="Nome" value="{{$aluno->Nome}}">
		  	</div>
		  	<div class="mb-3">
			    <label for="Sobrenome" class="form-label">Sobrenome</label>
			    <input type="text" class="form-control" id="Sobrenome" name="Sobrenome" value="{{$aluno->Sobrenome}}">
		  	</div>
			
		  	<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>
@endsection