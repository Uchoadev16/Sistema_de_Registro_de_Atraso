<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de atrasos</title>
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

    <a href="index.php">Fazer registro</a><br>
    <a href="alunos.php">Ver lista de alunos</a><br>
    <a href="Total_Faltas.php">Mostrar total de faltas</a><br>

    <h1>Lista de atrasos</h1>
    <?php

    /*requerindo o arquivo conect_database.php*/
    require('../model/database/conect_database.php');

    /*Criando as varíavel com o comando para mostrar todos da tabela atrasos*/
    $sql_mostrar_atrasos = "SELECT * FROM atrasos";

    /*Enviando o codigo e executando no banco de dados*/
    $result_mostrar_atrasos = $conexao->query($sql_mostrar_atrasos);
    echo "<table>";
    echo "<tr>";
    echo "<td>id</td>";
    echo "<td>Nome</td>";
    echo "<td>Matrícula</td>";
    echo "<td>Turma</td>";
    echo "<td>Dia</td>";
    echo "<td>Hora</td>";
    echo "</tr>";

    /*Enquanto matriz_alunos for igual a função mysqli_fetch_assoc($result_mostrar_aluno), ele cria a tabela com os valores*/
    while ($matriz_atrasos = mysqli_fetch_assoc($result_mostrar_atrasos)) {
        echo "<tr>";
        echo "<td>" . $matriz_atrasos['id'] . "</td>";
        echo "<td>" . $matriz_atrasos['nome'] . "</td>";
        echo "<td>" . $matriz_atrasos['matricula'] . "</td>";
        echo "<td>" . $matriz_atrasos['turma'] . "</td>";
        echo "<td>" . $matriz_atrasos['dia'] . "</td>";
        echo "<td>" . $matriz_atrasos['hora'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>

</body>

</html>