<?php

require_once("mysqlConnect.php");

$sql = "SELECT * FROM siteConfig";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $site['title'] = $row['titulo'];
    $site['slogan'] = $row['slogan'];
    $site['descriptionTitle'] = $row['descTitle'];
    $site['description'] = $row['descricao'];
    $site['sobre'] = $row['sobre'];
    $site['btnPrincipalTitle'] = $row['btnPrincipalTitle'];
    $site['btnPrincipalLink'] = $row['btnPrincipalLink'];
    $site['senha'] = $row['senha'];


  }
}


?>