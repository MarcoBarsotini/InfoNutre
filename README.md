
# Infonutre

Readme do Projeto InfoNutre.

## Abrindo o projeto

1- Clone o projeto

```bash
  git clone https://github.com/MarcoBarsotini/InfoNutre.git
```

2- Instale as dependências do composer

```bash
  composer update
```

3- Migre as tabelas ao MySql

```bash
  php artisan migrate
```

4- Popule as tabelas

```bash
  php artisan db:seed --class=ProductSeeder
```

5- Inicie o servidor

```bash
  php artisan serve
```


## Links Úteis

 - [Composer](https://getcomposer.org/download/)
 - [Laravel 9x](https://laravel.com/docs/9.x)
 - [SQL Workbench](https://dev.mysql.com/downloads/workbench/)

