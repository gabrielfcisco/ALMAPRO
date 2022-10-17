
# ALMAPRO

<p>Sistema Web desenvolvido com fins de estudo.
<br>Trabalho apresentado na disciplina de PI: Desenvolvimento de Sistemas Web - Professor: Leandro Alonso Xastre</p>


### Passo a passo
Clone Repositório criado a partir do template, entre na pasta e execute os comandos abaixo:

Crie o Arquivo .env
```sh
cp .env.example .env
```


Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME=Laravel
APP_URL=http://localhost:8080

DB_DATABASE=laraveldb
DB_PASSWORD=root
```


Suba os containers do projeto
```sh
docker compose up -d
```


Acessar o container
```sh
docker compose exec app bash
```


Instalar as dependências do projeto
```sh
composer install
```


Gerar a key do projeto Laravel
```sh
php artisan key:generate
```

Criar as tabelas necessárias no Banco de Dados
```sh
php artisan migrate
```

Acesse o projeto
[http://localhost:8080](http://localhost:8080)

Acesse o phpmyadmin
[http://localhost:8081](http://localhost:8081)

API de categorias e filmes utilizada no projeto:
https://www.learn-laravel.cf/

Rotas:
- (get) /categories
- (get) /category/{id}
- (get) /movies
- (get) /movie/{id}


## 🦾 Colaboradores:
-  <a href="https://github.com/gabrielfcisco/" target="_blank">gabrielfcisco</a>;
-  <a href="https://github.com/JavihFeh/" target="_blank">JavihFeh</a>;
-  <a href="https://github.com/EduardoSilvaS/" target="_blank">EduardoSilvaS</a>;
-  <a href="https://github.com/Gui019/" target="_blank">Gui019</a>;
-  <a href="https://github.com/vytakei/" target="_blank">vytakei</a>;
-  <a href="https://github.com/joaovictorvjc" target="_blank">joaovictorvjc</a>.

### ❔ Qualquer dúvida ou contribuição, é só nos contatar!
