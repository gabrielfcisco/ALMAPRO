<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo.ico" type="image/x-icon">

    <link href="css/login.css" rel="stylesheet" type="text/css" />
    <title>Sobre - ALMAPRO</title>
</head>

<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Faça login<br>Entre para o nosso time</h1>
            <img src="trabalho.svg" class="left-login-img" alt="people-working">
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>LOGIN</h1>
                <form method="PUT" action="{{route('alunos.authenticate')}}">
                    <div class="textfield">
                        <label for="usuario">Usuário</label>
                        <input id="usuario" type="text" name=usuario placeholder="Usuário">
                    </div>
                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" nome="senha" id="senha" placeholder="Senha">
                    </div>
                    <button class="btn-login" type="submit" nome="acao" value="Enviar">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>