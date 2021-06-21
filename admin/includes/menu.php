<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container">
<a class="navbar-brand" href="index.php" style="color:white;"><?= $site['title']; ?></a>

  <button class="navbar-toggler" type="button"  data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
      <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
      <a class="nav-link" href="gerencia_site.php">Gerenciar site</a>
      <?php
          require_once("../src/mysqlConnect.php");

          try{

            $sql = "SELECT * FROM mensagem WHERE status='1' ORDER BY id DESC";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
              $numberOfMsgs = " <b>($result->num_rows)</b>";
            }else{
              $numberOfMsgs = "";
            }
          }catch(Exception $e){
            echo $e->getMessage();
          }
      ?>
      <a class="nav-link" href="gerencia_mensagens.php">Mensagens<?= $numberOfMsgs; ?></a>
      <a class="nav-link" href="gerencia_pets.php">Gerenciar bichinhos</a>
      <a class="nav-link" href="estoque_doaçao.php">Estoque de doação</a>
      <a class="nav-link" href="../index.php" target="_blank">Visualizar site</a>
      <a class="nav-link" href="logout.php">Deslogar</a>
    </div>
  </div>
</nav>

