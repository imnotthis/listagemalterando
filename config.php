<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'paginalogin';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    // if($conexao->conect_errno)
    // {
    //      echo "Erro";
    // }
    // else
    // {
    // echo "Conexão efetuada com sucesso";
    //}

?>