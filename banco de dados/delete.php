<?php

if(!empty($_GET['id']))
    {
        include_once('config.php');

        $id = $_GET['id'];

        $sqlselect =  "SELECT * FROM cadastro where id=$id";

        $result = $conexao->query($sqlselect);

        if($result->num_rows > 0);
        {
           $sqldelete = "DELETE FROM cadastro WHERE id=$id";
           $resultdelete = $conexao->query($sqldelete);
        }    
    }
    header('location: sistema.php');
?>