<?php 
    include '../includes/conexao.php';
    $codigo = $_GET['id'];
    $sqlVerifica = "SELECT * FROM reserva WHERE matricula = $codigo";
    $resultVerifica = mysqli_query($conexao, $sqlVerifica);

    if(mysqli_num_rows($resultVerifica) > 0) {
        echo "Não é possível excluir este aluno, pois ele possui emprestimos em andamento.";
    } else {
        $sql = "DELETE FROM aluno WHERE matricula = $codigo";
        $result = mysqli_query($conexao, $sql);
        $linhas = mysqli_num_rows($result);
    }
    mysqli_close($conexao);
?>