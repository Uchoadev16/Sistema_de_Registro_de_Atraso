<?php

/*Se existe um post registrar e não estiver vazío nomephp e não estiver vazío matriculaphp e não estiver vazío turmaphp e não estiver vazío diaphp e não estiver vazío horaphp*/
if (isset($_POST['registrar']) && !empty($_POST['nomephp']) && !empty($_POST['matriculaphp']) && !empty($_POST['turmaphp']) && !empty($_POST['diaphp']) && !empty($_POST['horaphp'])) {

    /*crianda as varíaveis */
    $nome = $_POST['nomephp'];
    $matricula = $_POST['matriculaphp'];
    $turma = $_POST['turmaphp'];
    $dia = $_POST['diaphp'];
    $hora = $_POST['horaphp'];

    /*Requerindo o arquivo model.php*/
    require('../model/model.php');

    /*chamando a função registrar, passando com paramatros nome, matricula, turma, dia e hora */
    registrar($nome, $matricula, $turma, $dia, $hora);
}

/*Se existe um get certo, ele redireciona para o arquivo index.php*/
if (isset($_GET['certo'])) {

    header('location:../view/index.php?certo');
}

/*Se existe um get certo, ele redireciona para o arquivo index.php*/
if (isset($_GET['erro'])) {

    header('location:../view/index.php?erro');
}

/*Se existe um get certo, ele redireciona para o arquivo index.php*/
if (isset($_GET['NaoExiste'])) {

    header('location:../view/index.php?NaoExiste');
}
