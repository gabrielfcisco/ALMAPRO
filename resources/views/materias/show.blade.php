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
        <strong>Créditos: </strong>
        {{ $materia->Creditos }}
    </div>
    <div class="col-12 mb-3">
        <strong>Professor: </strong>
        {{ $professor->Nome}} {{$professor->Sobrenome}}
    </div>
    <div class="col-12 mb-3">
        <strong>Alunos: </strong>
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">RA</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                </tr>
            </thead>
            <tbody>
                @if(count($alunos) > 0)
                @forelse($alunos as $aluno)
                <tr>
                    <td>{{$loop->index + 1}}</td>
                    <td>{{ $aluno['RA'] }}</td>
                    <td>{{ $aluno['Nome'] }}</td>
                    <td>{{ $aluno['Sobrenome'] }}</td>
                </tr>
                @empty
                <p>Nenhum aluno cadastrado!</p>
                @endforelse
                @else
                <tr>
                    <td colspan="4">Não há alunos cadastrados!</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection