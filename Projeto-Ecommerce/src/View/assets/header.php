<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Site Ecommerce - Programa DevStart! Be.Academy & Paylivre</title>
        <meta name="author" content="Tiago Gomes"/>
        <meta name="keywords" content="php, tabela, html, bootstrap, php"/>
        <meta name="description" content="lista de contatos com html, bootstrap e php"/>
        <!-- CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <style>
            tr td{
                font-size: 18px;
            }
            .modal-body img{
                width: 100%;
                margin: 0px auto;
                object-fit: contain;
                height: 540px;
            }
        </style>
    </head>
<body class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light mt-5">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item p-2">
                    <a href="/" class="btn btn-outline-dark">Home</a>
                </li>
                <li class="nav-item p-2">
                    <a href="/login" class="btn btn-outline-dark">Conta</a>
                </li>
                <li class="nav-item p-2">
                    <a href="/cadastrar" class="btn btn-outline-dark">Cadastrar</a>
                </li>
                <li class="nav-item p-2">
                    <a href="/categorias/listar" class="btn btn-outline-dark">Categorias</a>
                </li>
                <li class="nav-item p-2">
                    <a href="/produtos/listar" class="btn btn-outline-dark">Produtos</a>
                </li>
                <li class="nav-item p-2">
                    <a href="/relatorio" class="btn btn-outline-dark">Relatorios</a>
                </li>
                <li class="nav-item p-2">
                    <a href="/admin" class="btn btn-outline-dark">Admin</a>
                </li>
            </ul>
        <!-- <?php

            session_start();

            if(isset($_SESSION["nome"])){

                echo "<ul>
                        <li><a href='/logout' class='btn btn-outline-dark'>Logout</a></li>
                    </ul>";

            }
        ?> -->
        </div>
    </nav>
    <hr/>