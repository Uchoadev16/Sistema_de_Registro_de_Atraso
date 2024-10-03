<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total de faltas</title>
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
    <a href="atrasos.php">Ver lista de atrasos</a><br>

    <h1>Total de faltas de cada aluno</h1>
    <?php

    /*requerindo o arquivo conect_database.php*/
    require('../model/database/conect_database.php');

    /*Criando as varíavel com o comando para selecionar nome alunos e contar quantos nome de atraso existe da tabela aluno e tambem da tabela atraso em matricula alunos igual a matricula atrasos, agrupando o nome aluno*/
    $sql_mostra_total_faltas =
        "SELECT alunos.nome, COUNT(atrasos.nome) FROM alunos INNER JOIN atrasos
        on alunos.matricula = atrasos.matricula
        GROUP by alunos.nome";


    /*Enviando o codigo e executando no banco de dados*/
    $result_mostrar_total_faltas = $conexao->query($sql_mostra_total_faltas);
    echo "<table>";
    echo "<tr>";
    echo "<td>Nome</td>";
    echo "<td>faltas</td>";
    echo "</tr>";

    /*Enquanto matriz_alunos for igual a função mysqli_fetch_assoc($result_mostrar_aluno), ele cria a tabela com os valores*/
    while ($matriz_Faltas = mysqli_fetch_assoc($result_mostrar_total_faltas)) {
        echo "<tr>";
        echo "<td>" . $matriz_Faltas['nome'] . "</td>";
        echo "<td>" . $matriz_Faltas['COUNT(atrasos.nome)'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>