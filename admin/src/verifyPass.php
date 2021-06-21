<?php

session_start();

if(!$_SESSION['loguin']){
    header("Location: loguin.php");
}