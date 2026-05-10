<?php
    include "conexao.php";
    $sql = "SELECT * FROM area";
    $result = mysqli_query($conexao, $sql);
    $linhas = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livro</title>
</head>
<body>
    <h1>Cadastro de Livro</h1>
    <form action="insereLivro.php" method="POST">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="tituloLivro" required>

        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autorLivro" required><br><br>

        <label for="area">Área:</label>
        <select name="area"><br>
            <option value="area">Selecione a área</option>
            <?php
                for($i=1;$i<$linhas;$i++) {
                    $registro = mysqli_fetch_array($result);
                    $area = $registro['area'];
                    $id_area = $registro['id_area'];
                    echo "<option value='$id_area'>$area</option>";
                }
            ?>

        </select>

        <input type="reset" value="Limpar">
        <input type="submit" value="Enviar">
    
</body>
</html>