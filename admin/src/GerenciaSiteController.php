<?php

    require_once("../../src/mysqlConnect.php");

    $_POST['siteTitle'] = strip_tags($_POST['siteTitle']);
    $_POST['siteSlogan'] = strip_tags($_POST['siteSlogan']);
    $_POST['descriptionTitle'] = strip_tags($_POST['descriptionTitle']);
    $_POST['descricao'] = $conn->real_escape_string(strip_tags($_POST['descricao']));
    $_POST['about'] = $conn->real_escape_string(strip_tags($_POST['about']));
    $_POST['btnPrincipalTitle'] = $conn->real_escape_string(strip_tags($_POST['btnPrincipalTitle']));
    $_POST['btnPrincipalLink'] = $conn->real_escape_string(strip_tags($_POST['btnPrincipalLink']));


    if(isset($_POST)){
        $sql = "UPDATE siteConfig SET titulo = '".$_POST['siteTitle']."', slogan = '".$_POST['siteSlogan']."', descTitle = '".$_POST['descriptionTitle']."', descricao = '".$_POST['descricao']."', sobre = '".$_POST['about']."', btnPrincipalTitle = '".$_POST['btnPrincipalTitle']."', btnPrincipalLink = '".$_POST['btnPrincipalLink']."', senha = '".$_POST['senha']."' WHERE id=1";

        if(mysqli_query($conn, $sql)){
            header("Location: ../gerencia_site.php?status=success");
        }else{
            header("Location: ../gerencia_site.php?status=error");
        }
      
        mysqli_close($conn);
    }
    
?>