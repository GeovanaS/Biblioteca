<?php
    include '../includes/conexao.php';
    $sql = "SELECT * FROM aluno";
    $result = mysqli_query($conexao, $sql);
    $linhas = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Alunos</title>
</head>
<body>
    <h1>Visualizar Alunos Cadastrados</h1>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>CPF</th>
            <th>Data de Nascimento</th>
        </tr>
        <?php
            for($i = 0; $i < $linhas; $i++) {
                $registro = mysqli_fetch_array($result);
                echo "<tr>";
                echo "<td>" . $registro['nome'] . "</td>";
                echo "<td>" . $registro['email'] . "</td>";
                echo "<td>" . $registro['cpf'] . "</td>";
                echo "<td>" . $registro['data_nasc'] . "</td>";
                echo "</tr>";
            }
            mysqli_close($conexao);
        ?>
    </table>
</body>
</html>