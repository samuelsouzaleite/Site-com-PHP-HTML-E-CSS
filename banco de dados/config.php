<?php
    $dbhost ="localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "samuel";

    $conexao = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);
    $conexao->set_charset('utf8mb4');
?>