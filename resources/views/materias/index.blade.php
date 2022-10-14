@extends('materias.master')
@section('content')

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
                    	<a class="btn btn-info" href="{{ route('alunos.show', $aluno->id) }}">Detalhes</a>
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