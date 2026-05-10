<?php

include '../includes/conexao.php';
$sql = "SELECT livro.id, livro.titulo, livro.status, livro.autor, area.nome AS area_nome 
FROM livro INNER JOIN area 
ON livro.id_area = area.id";
$result = mysqli_query($conexao, $sql);
$linhas = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Livros</title>
</head>
<body>
    <h1>Listar Livros</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Área</th>
            <th>Status</th>
            <th>Ações</th>
        </tr>
        <?php
            for($i = 0; $i < $linhas; $i++) {
                $registro = mysqli_fetch_array($result);
                echo "<tr>";
                echo "<td>" . $registro['id'] . "</td>";
                echo "<td>" . $registro['titulo'] . "</td>";
                echo "<td>" . $registro['autor'] . "</td>";
                echo "<td>" . $registro['area_nome'] . "</td>";
                echo "<td>" . ($registro['status'] == 1 ? 'Disponível' : 'Indisponível') . "</td>";
                echo "<td><a href='editar_livro.php?id=" . $registro['id'] . "'>Editar</a> | <a href='excluir_livro.php?id=" . $registro['id'] . "'>Excluir</a></td>";
                echo "</tr>";
            }
            mysqli_close($conexao);
        ?>
        </table>
</body>
</html>
