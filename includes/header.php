<?php require_once('src/Siteconfig.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/bootstrap5/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
    <title><?= $site['title']; ?> - <?= $site['slogan']; ?></title>
    <script src="assets/js/responsiveMenu.js"></script>
</head>
<body>
    <header>
        <div id="logo" title="<?= $site['title']; ?>">
            <a href="index"><?= $site['title']; ?> <img src="assets/img/logo.png" height="25px"></a>
        </div>
        <nav class="navbar">
            <div class="responsive toggled">
                <button class="toggle">≡</button>
                <button class="close">⨉</button>
            </div>
            <div class="clear"></div>
            <ul id="menu">
                <li><a href="index">inicio</a></li>
                <li><a href="blog">artigos</a></li>
                <li><a href="quem_somos">quem somos</a></li>
                <li><a href="adota_gatinhos">gatinhos</a></li>
                <li><a href="adota_doguinhos">doguinhos</a></li>
                <li><a href="doação">doação</a></li>
                <li><a href="contato">contato</a></li>

                <div class="mobile" style="display:none;">
                    <li><a href="portal">Cadastre-se</a></li>
                    <li><a href="/admin/index.php">Acesso funcionários</a></li>
                </div>
            </ul>
        <div class="portal">
            <div id="icons" style="display:none;">
                <a href="portal"><img src="assets/img/iconfriendly.png" height="50px"></a>
                <a href="admin/"><img src="assets/img/iconadmin.png" height="50px"></a>
            </div>
        </div>           
        </nav>

    </header>
