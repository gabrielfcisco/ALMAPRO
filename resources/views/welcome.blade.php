<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
	    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
        <title>Tabelas</title>

        <style>
            
        </style>
    </head>
    <body>
        <div class="mx-0 mb-2 row col-12 border-bottom border-2 border-dark text-center cabecalho">
            <h1>Tabelas</h1>
        </div>
        <div class="align-items-center">
            <div class="align-items-center row text-center">
                <div style="padding-bottom: 10px;" class="carta-prof col-sm-12 col-lg-4 align-items-center justify-content-center d-flex">
                    <div class="card">
                        <img src="{{ URL('img/prof.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Professores</h5>
                            <a href="{{route('professores.index')}}" class="btn btn-primary">Ir para a tabela</a>
                        </div>
                    </div>
                </div>
                <div style="padding-bottom: 10px;" class="carta-aluno col-sm-12 col-lg-4 align-items-center justify-content-center d-flex">
                    <div class="card">
                        <img src="{{ URL('img/aluno.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Alunos</h5>
                            <a href="{{route('alunos.index')}}" class="btn btn-primary">Ir para a tabela</a>
                        </div>
                    </div>
                </div>
                <div style="padding-bottom: 10px;" class="carta-mat col-sm-12 col-lg-4 align-items-center justify-content-center d-flex">
                    <div class="card">
                        <img src="{{ URL('img/materias.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Matérias</h5>
                            <a href="#" class="btn btn-primary">Ir para a tabela</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <footer>
        <div class="mt-1 position-relative bottom-0 start-50 translate-middle-x border-top border-2 border-dark row col-12">
            <p class="m-0 col-12 text-center">Trabalho de PI</p>
        </div>
    </footer>
</html>
