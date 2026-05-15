<?php
    include '../includes/conexao.php';
    $codigo = $_GET['id'];
     $sql = "SELECT * FROM aluno WHERE matricula = $codigo";
     $resultado = mysqli_query($conexao,$sql);
     $linhas = mysqli_num_rows($resultado);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Aluno</title>
</head>

<body>
    <h1>Editar Aluno</h1>
    <form name='editaraluno' method="post">

        <?php
    for ($i=1; $i <= $linhas; $i++){
        $registro = mysqli_fetch_array($resultado);
        $mat = $registro['matricula'];
        $nome = $registro['nome'];
        echo "Matrícula <input name='matricula' value='$mat'><br>";
        echo "Nome <input name='nome' value='$nome'>";
        echo "<br>Email <input name='email' value='" . $registro['email'] . "'>";
        echo "<br>CPF <input name='cpf' value='" . $registro['cpf'] . "'>";
        echo "<br>Data de Nascimento <input name='data_nasc' value='" . $registro['data_nasc'] . "'>";
        echo "<br><input type='submit' value='Editar'>"; 
        echo "<a href='mostrar_aluno.php'>Voltar</a>";
    }

if($_POST){

$sql = "UPDATE aluno
        SET nome = '$nome',
            email = '$email',
            cpf = '$cpf',
            data_nasc = '$data'

        WHERE matricula = '$id'";
        $resultado = mysqli_query($conexao, $sql);
if($resultado) {
    header("Location: mostrar_aluno.php");
} else {
    echo "Erro ao atualizar aluno: " . mysqli_error($conexao);
}

mysqli_close($conexao);

}
?>