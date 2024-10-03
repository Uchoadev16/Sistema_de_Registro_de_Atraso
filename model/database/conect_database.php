<?php
/*Criando as varíaveis host, user, senha, banco */
$host = 'localhost';
$user = 'root';
$senha = '';
$banco = 'registros';

/*criando um objeto com a coneção com banco de dados */
$conexao = new mysqli($host, $user, $senha, $banco);
