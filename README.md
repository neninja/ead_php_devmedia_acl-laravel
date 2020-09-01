# ead_php_devmedia_acl-laravel

> Projeto referente a [este](https://www.devmedia.com.br/curso/controle-de-acesso-no-laravel-com-acl/2179) curso.

## Setup

1. Habilite as extensões necessárias do laravel e do seu banco
```sh
php -r "var_dump([
    extension_loaded('bcmath'),
    extension_loaded('ctype'),
    extension_loaded('json'),
    extension_loaded('xml'),
    extension_loaded('openssl'),
    extension_loaded('pdo'),
]);"

# caso precise habilitar alguma, edite seu php.ini que se encontra em:
# php --ini
```
2. Instale as dependências do php: ``composer i``
3. Crie `.env` com base no `.env.example`
4. Crie o banco de dados
```sh
# exemplo com postgresql
createdb -U postgres ead_php_devmedia_acl-laravel

# dicas do postgresql no terminal
# Entrar
psql -U postgres -d ead_php_devmedia_acl-laravel

# \?                    exibe ajuda
# \q                    sai
# \l                    lista databases
# \c <databasename>     conecta uma database
# \dt                   lista tables da database
# \d <tablename>        descreve uma tabela
```
5. Crie as tabelas com as migrations: ``php artisan migrate --seed``

## Run

```sh
php artisan serve
# localhost:8000
```
