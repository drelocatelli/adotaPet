<?php

session_start();

require_once("../src/Siteconfig.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/bootstrap5/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/style.css">
    <title>
        <?= $site['title'] . " - " . $site['slogan'] . " | Área Restrita"; ?>
    </title>
</head>

<body>
    <section style="display:flex; flex-direction:column; justify-content:center; flex-wrap: wrap;">
        <form class="form-horizontal" method="post" action="src/Authentication.php">
            <fieldset>
                <legend>
                    <?= $site['title']; ?> - Administração
                </legend>
                <br>
                <?php

                if (isset($_GET['status'])) {
                    switch ($_GET['status']) {
                        case 'error':
                            echo '<div class="alert alert-danger temporary" role="alert">';
                            echo 'A senha digitada está incorreta!';
                            echo '</div><br>';
                            break;
                        case 'success':
                            echo '<div class="alert alert-success temporary" role="alert">';
                            echo 'Conectando-se ao painel ...';
                            echo '</div><br>';
                            echo ('
                            <script>
                                setTimeout(()=>{
                                    window.location.href = "index.php";
                                },2500);
                            </script>');
                            break;
                    }
                }

                ?>
                <div class="form-group">
                    <div class="col-md-12">
                        <input id="password" name="password" type="password" placeholder="******"
                            class="form-control input-md" style="text-align:center;" required autofocus>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary" style="display:none;" type="submit"
                            name="submit">Entrar</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </section>

    <style>
        .alert {
            position: absolute;
            top: 0;
            width: 100%;
            left: 0;
        }
    </style>
    <?php require_once('includes/footer.php'); ?>