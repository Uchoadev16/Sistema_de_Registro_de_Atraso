<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de alunos</title>
    <style>
        table {
            border: 1px solid black;
        }

        tr {
            border: 1px solid black;
        }

        td {
            border: 1px solid black;
            padding: 3px 3px 3px 3px;
        }
    </style>
</head>

<body>
    <h1>Lista de alunos</h1>
    <a href="index.php">Fazer registro</a><br>
    <a href="atrasos.php">Ver lista de atraso</a><br>
    <a href="Total_Faltas.php">Mostrar total de faltas</a><br>

    <h1>Lista de alunos</h1>
    <?php

    /*requerindo o arquivo conect_database.php*/
    require('../model/database/conect_database.php');

    /*Criando as varíavel com o comando para mostrar todos da tabela alunos*/
    $sql_mostrar_aluno = "SELECT * FROM alunos";

    /*Enviando o codigo e executando no banco de dados*/
    $result_mostrar_aluno = $conexao->query($sql_mostrar_aluno);
    echo "<table>";
    echo "<tr>";
    echo "<td>id</td>";
    echo "<td>Nome</td>";
    echo "<td>Matrícula</td>";
    echo "<td>CPF</td>";
    echo "</tr>";

    /*Enquanto matriz_alunos for igual a função mysqli_fetch_assoc($result_mostrar_aluno), ele cria a tabela com os valores*/
    while ($matriz_alunos = mysqli_fetch_assoc($result_mostrar_aluno)) {
        echo "<tr>";
        echo "<td>" . $matriz_alunos['id'] . "</td>";
        echo "<td>" . $matriz_alunos['nome'] . "</td>";
        echo "<td>" . $matriz_alunos['matricula'] . "</td>";
        echo "<td>" . $matriz_alunos['CPF'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    ?>
</body>

</html>