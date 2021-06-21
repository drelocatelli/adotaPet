<?php

    require_once("../../src/mysqlConnect.php");

    if(isset($_GET['id'])){

        $sql = "DELETE FROM mensagem WHERE id='".$_GET['id']."'";

        if ($conn->query($sql) === TRUE) {
            header("Location: ../lixeira_mensagens.php?status=success");
        } else {
            echo $conn->error;
            header("Location: ../lixeira_mensagens.php?status=error");
    }
}