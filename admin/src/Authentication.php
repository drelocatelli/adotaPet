<?php

    session_start();

    require_once('../../src/Siteconfig.php');

    # default credential
    $credential['password'] = $site['senha'];

    $_POST['password'] = strip_tags($_POST['password']);

    if(isset($_POST['submit'])){
        if($_POST['password'] == $credential['password']){
            $_SESSION['loguin'] = true;
            header("Location: ../loguin.php?status=success");
        }else{
            $_SESSION['loguin'] = false;
            header("Location: ../loguin.php?status=error");
        }

    }