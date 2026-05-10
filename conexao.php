<?php
$server = "localhost";
$user = "root";
$senha = "";
$bd = "biblioteca";
$conexao = mysqli_connect($server, $user, $senha, $bd);
if (!$conexao) {
    die("Conexão falhou: " . mysqli_connect_error());
}else{
    echo "Conexão bem sucedida!";
}
?>  