<?php

/*Crianda a função registrar pasando com parametros: nome, matricula, turma, dia, hora*/
function registrar($nome, $matricula, $turma, $dia, $hora)
{
    /*Requerindo o arquivo conect_database.php */
    require('database/conect_database.php');

    /*Criando a varíavel com o codigo sql para selecionar todos da tabela alunos onde matricula é igual a variavel matricula*/
    $sql_check = "SELECT * FROM alunos WHERE matricula = '$matricula'";

    /*Enviando o codigo e executando no banco de dados*/
    $result_check = $conexao->query($sql_check);

    /*Se result_check for igual a 1 */
    if (mysqli_num_rows($result_check) == 1) {

        /*Criando varíavel com o código para inserir na tabela as variaveis nome, matricula, turma, dia, hora*/
        $sql = "INSERT INTO atrasos VALUES (DEFAULT,'$nome', '$matricula', '$turma', '$dia', '$hora')";

        /*Enviando o codigo e executando no banco de dados*/
        $result = $conexao->query($sql);

        /*Se result for verdadeiro*/
        if ($result) {

            /*redirecionar para o arquivo controller.php*/
            header('location:../controller/controller.php?certo');
        } else {

            /*redirecionar para o arquivo controller.php*/
            header('location:../controller/controller.php?erro');
        }
    } else {
        /*se não*/
        /*redirecionar para o arquivo controller.php*/
        header('location:../controller/controller.php?NaoExiste');
    }
}
