<?php
$base_url = "/Trabalho-LP2-BD2/";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Biblioteca</title>
    <link rel="stylesheet" href="<?= $base_url ?>assets/css/style.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="container">
                <div class="logo">
                    <a href="<?= $base_url ?>index.php">
                        <img src="<?= $base_url ?>assets/img/livros.png" alt="Logo da Biblioteca">
                        <h1>Sistema de Biblioteca</h1>
                    </a>
                </div>

                <button class="menu-hamburger" id="menu-hamburger">☰</button>
                <nav class="menu" id="menu">
                <ul>
                    <li><a href="<?= $base_url ?>index.php">Início</a></li>
                    <li><a href="<?= $base_url ?>aluno/mostrar_aluno.php">Alunos</a></li>
                    <li><a href="<?= $base_url ?>area/mostrar_area.php">Áreas</a></li>
                    <li><a href="<?= $base_url ?>livro/mostrar_livro.php">Livros</a></li>
                    <li><a href="<?= $base_url ?>reserva/mostrar_reserva.php">Empréstimos</a></li>
                    <li><a href="<?= $base_url ?>reserva/mostrar_devolucoes.php">Devolução</a></li>
                </ul>
            </div>
        </nav>
    </header>
<main class="container">