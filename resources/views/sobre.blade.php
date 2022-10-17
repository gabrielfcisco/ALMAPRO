<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo.ico" type="image/x-icon">

    <link href="css/sobre.css" rel="stylesheet" type="text/css" />
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
                <li><a href="/">Sobre</a></li>
            </ul>
        </header>
        <div class="homepage">
            <div class="text">
                <h1><span>Sobre</span></h1>
                <p>Sistema Web desenvolvido com fins de estudo.<br>Trabalho apresentado na disciplina de PI: Desenvolvimento de Sistemas Web - Professor: Leandro Alonso Xastre</p>
                <h2>Proposta do Trabalho</h2>
                <p>Desenvolvimento de um sistema web, com interface (front-end) pensada e estruturada usando Bootstrap, para que se possibilite aos usuários o bom uso das funcionalidades abaixo listadas, que são:<br><br>

                <p><strong>CRUD de:</strong></p>
                <ul>
                    <li>Alunos;
                        <ul>
                            <li>Acrescentar N filmes de gosto do aluno, usando exclusivamente o acesso à API fornecida em apresentação.</li>
                        </ul>
                    </li>
                    <li>Professores;</li>
                    <li>Matérias</li>
                </ul>
                <p><br><strong>Possibilidade de relacionar:</strong></p>
                <ul>
                    <li>Um professor com UMA matéria;</li>
                    <li>N alunos em UMA matéria.</li>
                    <li>Listar as matérias disponíveis/cadastradas no sistema:
                        <ul>
                            <li>Ao clicar na matéria, deve-se apresentar a lista de alunos matriculados e o nome do professor.</li>
                        </ul>
                    </li>
                    <li>Listar o nome dos alunos cadastrados:
                        <ul>
                            <li>
                                Ao clicar no nome do aluno, abre-se um modal com as informações de cadastro do aluno (incluindo os filmes) e a lista de matérias que ele está matriculado.</li>
                        </ul>
                    </li>
                </ul>

                <p><br>É altamente recomendado que se desenvolva o front-end e o back-end altamente apartados. O back-end deve usar a estrutura estudada até o momento, ou seja, usar o framework Laravel com banco de dados (mysql ou mongodb ou redis, a sua escolha).</p>
            </div>
            <div class="colab">
                <h2>Colaboradores:</h2>
                <ul>
                    <li><a href="https://github.com/gabrielfcisco/" target="_blank">gabrielfcisco</a></li>
                    <li><a href="https://github.com/JavihFeh/" target="_blank">JavihFeh</a></li>
                    <li><a href="https://github.com/EduardoSilvaS/" target="_blank">EduardoSilvaS</a></li>
                    <li><a href="https://github.com/Gui019/" target="_blank">Gui019</a></li>
                    <li><a href="https://github.com/vytakei/" target="_blank">vytakei</a></li>
                    <li><a href="https://github.com/joaovictorvjc" target="_blank">joaovictorvjc</a></li>
                </ul>
            </div>
        </div>
    </section>
</body>

</html>