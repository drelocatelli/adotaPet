<?php

    require_once("mysqlConnect.php");

    if($_POST['nome'] and $_POST['email'] and $_POST['assunto'] and $_POST['mensagem']){
        $_POST['nome'] = strip_tags($_POST['nome']);
        $_POST['email'] = strip_tags($_POST['email']);
        $_POST['assunto'] = strip_tags($_POST['assunto']);
        $_POST['mensagem'] = $conn->real_escape_string(stripslashes(($_POST['mensagem'])));

        $sql = "INSERT INTO mensagem (nome, email, assunto, mensagem) VALUES ('".$_POST['nome']."', '".$_POST['email']."', '".$_POST['assunto']."', '".$_POST['mensagem']."')";

        if (mysqli_query($conn, $sql)) {
          header("Location: ../contato?status=success");
        } else {
          header("Location: ../contato?status=error");
        }

        $conn->close();
        
    }
        