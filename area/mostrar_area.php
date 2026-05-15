<?php
    include '../includes/conexao.php';
    include '../includes/header.php';
    $sql = "SELECT * FROM area";
    $result = mysqli_query($conexao, $sql);
    $linhas = mysqli_num_rows($result);
?>

<h1>Visualizar Áreas Cadastradas</h1>
<div class="botao-adicionar">
        <a href="cadastro_area.php">Adicionar Nova Área</a>
    </div>
    <table>
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
    </table>

<?php include '../includes/footer.php'; ?>