<?php

    require_once("../../src/mysqlConnect.php");

    if(isset($_GET['id'])){

        $sql = "UPDATE mensagem SET status='0' WHERE id='".$_GET['id']."'";

        if ($conn->query($sql) === TRUE) {
            header("Location: ../gerencia_mensagens.php?status=success");
        } else {
            echo $conn->error;
            header("Location: ../gerencia_mensagens.php?status=error");
    }
}