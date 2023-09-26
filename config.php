<?php

    $dbHost = 'Localhost';
    $dbUsername = 'MySQL Schema';
    $dbName = 'projeto-gustavo';
    
    $conexao = new mysqli($dbHost,$dbUsername,$dbName);

    // if($conexao->connect_errno)
    // {
    //     echo "Erro";
    // }
    // else
    // {
    //     echo "Conexão efetuada com sucesso";
    // }

?>