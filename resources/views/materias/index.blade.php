@extends('materias.master')
@section('content')

<div class="row">
	<div class="col-12">
		<h3>Materias</h3>
		<table class="table table-primary">
		    <thead>
		        <tr>
		            <th scope="col">#</th>
		            <th scope="col">Nome</th>
			        <th scope="col">Creditos</th>
		            <th scope="col">RP</th>
		            <th scope="col">Ação</th>
		        </tr>
		    </thead>
		    <tbody>
	  		@if($materias->count() > 0)
			  	@foreach($materias as $materia)
			    <tr>
			      <td>{{$materia->id}}</td>
				  <td>{{$materia->Nome}}</td>
			      <td>{{$materia->Creditos}}</td>
			      <td>{{$materias->RP}}</td>
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