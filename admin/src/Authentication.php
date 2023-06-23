<?php

session_start();

require_once('../../src/Siteconfig.php');

# default credential
$credential['password'] = $site['senha'];

$_POST['password'] = strip_tags($_POST['password']);

if (isset($_POST['submit'])) {
    if ($_POST['password'] == $credential['password']) {
        $_SESSION['login'] = true;
        header("Location: ../login.php?status=success");
    } else {
        $_SESSION['login'] = false;
        header("Location: ../login.php?status=error");
    }

}