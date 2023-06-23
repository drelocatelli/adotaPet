<?php

session_start();

if (isset($_SESSION['login'])) {
    // session_destroy();
    unset($_SESSION['login']);
    header("Location: login.php");
}

?>