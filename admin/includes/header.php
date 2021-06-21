<?php 
  require_once("../src/Siteconfig.php"); 
  require_once('src/verifyPass.php');
  require_once("../Router.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/bootstrap5/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous"/>
    <link rel="stylesheet" href="assets/css/style.css">
    <title><?= $site['title'] . " - " . $site['slogan']  . " | Área Restrita"; ?></title>
</head>
<body>