<?php
    $dbhost ="localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "samuel";

    $conexao = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);

    // if ($conexao->connect_errno)
    // {
    //     echo "erro";
    // }
    // else
    // echo "conexao efetuada com sucesso";
?>