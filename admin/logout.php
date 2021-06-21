<?php

    session_start();

    if(isset($_SESSION['loguin'])){
        // session_destroy();
        unset($_SESSION['loguin']);
        header("Location: loguin.php");
    }

?>