@extends('alunos.master')
@section('content')
<div class="row">
	<div class="col-12 col-md-10">
		<h3>Alunos</h3>
	</div>
	<div class="btn-group" role="group" aria-label="Basic example">
		<a class="btn btn-primary" href="/" role="button">Início</a>
		<a class="btn btn-primary" href="{{route('alunos.create')}}" role="button">Inserir Aluno</a>
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
					<th scope="col">RA</th>
					<th scope="col">Nome</th>
					<th scope="col">Sobrenome</th>
					<th scope="col">Ação</th>
				</tr>
			</thead>
			<tbody>
				@if($alunos->count() > 0)
				@foreach($alunos as $aluno)
				<tr>
					<td>{{$loop->index + 1}}</td>
					<td>{{$aluno->RA}}</td>
					<td>{{$aluno->Nome}}</td>
					<td>{{$aluno->Sobrenome}}</td>
					<td>
						<form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST">
						<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
								Detalhes
							</button>

							<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h1 class="modal-title fs-5" id="exampleModalLabel">Detalhes</h1>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
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
													<strong>Filmes: </strong>
													{{ $aluno->Filmes }}
												</div>
												<div class="col-12 mb-3">
													<strong>Matéria: </strong>
													@if(count($materias) > 0)
														@foreach($materias as $materia)
															{{ $materia->Nome }}<br>
														@endforeach
													@else
													<option colspan="4">Record not found!</option>
													@endif
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
										</div>
									</div>
								</div>
							</div>
							<a class="btn btn-primary" href="{{ route('alunos.edit', $aluno->id) }}">Editar</a>
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
		{!! $alunos->links() !!}
	</div>
</div>
@endsection