<?php
    include '../includes/conexao.php';
    $sql = "SELECT * FROM area";
    $result = mysqli_query($conexao, $sql);
    $linhas = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Áreas</title>
</head>
<body>
    <h1>Visualizar Áreas Cadastradas</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
        <?php
            for($i = 0; $i < $linhas; $i++) {
                $registro = mysqli_fetch_array($result);
                echo "<tr>";
                echo "<td>" . $registro['id'] . "</td>";
                echo "<td>" . $registro['nome'] . "</td>";
                echo "<td><a href='editar_area.php?id=" . $registro['id'] . "'>Editar</a> | <a href='excluir_area.php?id=" . $registro['id'] . "'>Excluir</a></td>";
                echo "</tr>";
            }
            mysqli_close($conexao);
        ?>
</body>
</html>