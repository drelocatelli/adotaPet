<?php require_once('includes/header.php'); ?>

<script src="assets/tinymce/tinymce.min.js"></script>
<script src="assets/importTinyMCE.js"></script>


<div style="clear:both;"></div>
        
    <section class="formulario">
        <h3>Entre em contato com a gente!</h3>
        <?php
          if(isset($_GET['status'])){
            switch($_GET['status']){
              case 'success':
                case 'success':
                  echo '<div class="alert alert-info temporary" role="alert">';
                  echo 'Mensagem enviada, aguarde a resposta no e-mail!';
                  echo '</div><br>';
                break;
                case 'error':
                  echo '<div class="alert alert-warning" role="alert">';
                  echo 'Ocorreu algum erro ao enviar a mensagem!';
                  echo '</div><br>';
                break;
              break;
            }
          }
        ?>
        <div class="container">
            <form class="form-horizontal" action="src/contatoController.php" method="post">
            <fieldset>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="Nome">Nome</label>  
              <div class="col-md-4">
              <input id="Nome" name="nome" type="text" placeholder="Digite seu nome completo" class="form-control input-md" required="">
    
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="email">E-mail</label>  
              <div class="col-md-4">
              <input id="email" name="email" type="email" placeholder="Digite seu e-mail para receber a resposta" class="form-control input-md" required="">
    
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="assunto">Assunto</label>  
              <div class="col-md-4">
              <input id="assunto" name="assunto" type="text" placeholder="Digite o assunto" class="form-control input-md" required="">
    
              </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="mensagem">Mensagem</label>
              <div class="col-md-4">                     
                <textarea id="editor" class="form-control" id="mensagem" name="mensagem"></textarea>
              </div>
            </div>

            <!-- Button -->
            <div class="form-group">
              <label class="col-md-4 control-label" for=""></label>
              <div class="col-md-4">
                <button id="" name="">Enviar mensagem</button>
              </div>
            </div>

            </fieldset>
            </form>
        </div>
        

    </section>

<?php require_once('includes/footer.php'); ?>