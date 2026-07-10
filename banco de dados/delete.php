<?php

if(!empty($_GET['id']))
    {
        include_once('config.php');

        $id = $_GET['id'];

        // Prepared statement: id vem separado do SQL (anti SQL Injection).
        $sqldelete = "DELETE FROM cadastro WHERE id = ?";
        $stmt = $conexao->prepare($sqldelete);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $stmt->close();
    }
    header('location: sistema.php');
?>