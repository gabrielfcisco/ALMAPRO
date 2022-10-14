@extends('professores.master')
@section('content')
<div class="row">
	<div class="col-12 col-md-10">
		<h3>Inserir professor</h3>
	</div>
	<div class="col-12 col-md-2 text-end">
		<a class="btn btn-primary" href="{{route('professores.index')}}">Voltar</a>
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
		<form method="POST" action="{{route('professores.store')}}">
			@csrf
			<div class="mb-3">
			    <label for="RP" class="form-label">RP</label>
			    <input type="text" class="form-control" id="RP" name="RP" placeholder="RP">
		  	</div>
		  	<div class="mb-3">
			    <label for="Nome" class="form-label">Nome</label>
			    <input type="text" class="form-control" id="Nome" name="Nome" placeholder="Nome">
		  	</div>
              <div class="mb-3">
			    <label for="Sobrenome" class="form-label">Sobrenome</label>
			    <input type="text" class="form-control" id="Sobrenome" name="Sobrenome" placeholder="Sobrenome">
		  	</div>
		  	<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>

</div>
@endsection