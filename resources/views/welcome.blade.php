<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo.ico" type="image/x-icon">

    <link href="css/welcome.css" rel="stylesheet" type="text/css" />
    <title>Sobre - ALMAPRO</title>
</head>

<body>
    <section>
        <div class="circle"></div>
        <header>
            <a href="/"><img src="70f7ad19c6b158d66142b2ec691e21a0.png" class="logo"></a>
            <ul>
                <li><a href="{{route('alunos.index')}}">Alunos</a></li>
                <li><a href="{{route('materias.index')}}">Materias</a></li>
                <li><a href="{{route('professores.index')}}">Professores</a></li>
                <li><a href="/sobre">Sobre</a></li>
            </ul>
        </header>
        <div class="homepage">
            <div class="text">
                <h1><span>ALMAPRO</span></h1>
                <p>Uma plataforma pra facilitar o gerenciamento da sua instituição de ensino!<br>Pensado para Alunos, Professores e Matérias</p>
                <a href="/">Saiba mais</a>
            </div>
            <div class="image">
                <img src="seminar-animate.svg" class="animation" alt="professor-teaching">
            </div>
        </div>
    </section>
</body>

</html>