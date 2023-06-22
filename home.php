<?php require_once('includes/header.php'); ?>

<div style="clear:both;"></div>

<div id="principal">
    <div id="texto-principal" style="width:30%;">
        <h1>
            <?= $site['descriptionTitle']; ?>
        </h1>
        <br>
        <p>
            <?= $site['description']; ?>
        </p>
        <br><br>
        <center><button type="button" class="principal" data-href="<?= $site['btnPrincipalLink']; ?>"><?= $site['btnPrincipalTitle']; ?></button></center>
    </div>
    <div id="hero" style="width:40%;">
        <center>
            <img src="assets/img/heroimg.png" width="100%">
        </center>
    </div>
</div>


<script>
    let btnPrincipal = document.querySelector('button.principal');
    btnPrincipal.onclick = function () {
        window.location.href = btnPrincipal.dataset.href;
    }
</script>

<style>
    #principal {
        text-align: justify;
        display: flex;
        align-items: flex-start;
        flex: auto;
        margin: 22vh 0 0 0;
        align-content: center;
        justify-content: center;
    }

    #principal h1 {
        font-size: 3em;
        text-align: center;
    }

    #texto-principal {
        margin-right: 40px;
    }

    #texto-principal p {
        font-size: 2.1em;
        margin-top: 15px;
    }

    #hero {
        position: relative;
        top: -50px;
    }

    @media screen and (max-width: 1312px) {
        #principal {
            margin-top: 10vh;
            flex-direction: column-reverse;
        }

        #hero img {
            width: 50%;
        }

        #texto-principal {
            margin-top: -70px;
            margin-right: 0;
            padding: 25px;
            background: white;
        }

        #texto-principal,
        #hero {
            width: fit-content !important;
        }
    }
</style>
<?php require_once('includes/footer.php'); ?>