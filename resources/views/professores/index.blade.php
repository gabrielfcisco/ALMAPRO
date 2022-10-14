@extends('professores.master')
@section('content')
<div class="row">
	<div class="col-12 col-md-10">
		<h3>Professores</h3>
	</div>
	<div class="col-12 col-md-2 text-end">
		<a class="btn btn-primary" href="{{route('professores.create')}}">Inserir Professor</a>
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
		      <th scope="col">RP</th>
			  <th scope="col">Nome</th>
		      <th scope="col">Sobrenome</th>
		      <th scope="col">Ação</th>
		    </tr>
		  	</thead>
		  	<tbody>
	  		@if($professores->count() > 0)
			  	@foreach($professores as $professor)
			    <tr>
			      <td>{{$loop->index + 1}}</td>
				  <td>{{$professor->RP}}</td>
			      <td>{{$professor->Nome}}</td>
			      <td>{{$professor->Sobrenome}}</td>
			      <td>
  	                <form action="{{ route('professores.destroy', $professor->id) }}" method="POST">
                    	<a class="btn btn-info" href="{{ route('professores.show', $professor->id) }}">Detalhes</a>
                    	<a class="btn btn-primary" href="{{ route('professores.edit', $professor->id) }}">Editar</a>
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
		{!! $professores->links() !!}
	</div>
</div>
@endsection