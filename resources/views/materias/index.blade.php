@extends('materias.master')
@section('content')
<div class="row">
	<div class="col-12 col-md-10">
		<h3>Matérias</h3>
	</div>
	<div class="btn-group" role="group" aria-label="Basic example">
		<a class="btn btn-primary" href="/" role="button">Início</a>
		<a class="btn btn-primary" href="{{route('materias.create')}}">Inserir Matéria</a>
	</div>
</div>
@if($message = Session::get('error'))
<div class="row">
	<div class="col-12">
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>{{$message}}!</strong>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
	</div>
</div>
@endif
<div class="row">
	<div class="col-12">
		<table class="table table-primary">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nome</th>
					<th scope="col">Créditos</th>
					<th scope="col">Ação</th>
				</tr>
			</thead>
			<tbody>
				@if($materias->count() > 0)
				@foreach($materias as $materia)
				<tr>
					<td>{{$loop->index + 1}}</td>
					<td>{{$materia->Nome}}</td>
					<td>{{$materia->Creditos}}</td>
					<td>
						<form action="{{ route('materias.destroy', $materia->id) }}" method="POST">
							<a class="btn btn-info" href="{{ route('materias.show', $materia->id) }}">Detalhes</a>
							<a class="btn btn-primary" href="{{ route('materias.edit', $materia->id) }}">Editar</a>
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger">Excluir</button>
						</form>
					</td>
				</tr>
				@endforeach
				@else
				<tr>
					<td colspan="4">Record not found!</td>
				</tr>
				@endif
			</tbody>
		</table>
		{!! $materias->links() !!}
	</div>
</div>
@endsection