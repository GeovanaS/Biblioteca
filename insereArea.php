<?php
    include "conexao.php";

    $area = $_POST['area'];

    $sql = "INSERT INTO area (nome) VALUES ('$area')";

    if (mysqli_query($conexao, $sql)) {
        echo "Área cadastrada com sucesso!";
    } else {
        echo "Erro ao cadastrar área: " . mysqli_error($conexao);
    }

?>