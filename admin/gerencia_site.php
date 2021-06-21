<?php require_once('includes/header.php'); ?><?php require_once('includes/menu.php'); ?>

		<section>
		<div class="container">
			<center><h2>Gerenciar site</h2></center>
			<?php
				if(isset($_GET['status'])){
					switch($_GET['status']){
						case 'success':
							echo '<div class="alert alert-info temporary" role="alert">';
							echo 'As alterações foram salvas com sucesso!';
							echo '</div><br>';
						break;
						case 'error':
							echo '<div class="alert alert-warning" role="alert">';
							echo 'Ocorreu algum erro ao salvar';
							echo '</div><br>';
						break;
					}
				}
			?>
			<form method="post" action="src/GerenciaSiteController.php">
				<div class="form-group row">
					<label class="col-4 col-form-label" for="siteTitle">Titulo do site</label> 
					<div class="col-8">
						<input id="siteTitle" name="siteTitle" type="text" class="form-control"  value="<?= $site['title']; ?>" required="required">
					</div>
				</div>
				<div class="form-group row">
					<label for="siteSlogan" class="col-4 col-form-label">Slogan</label> 
					<div class="col-8">
						<input id="siteSlogan" name="siteSlogan" type="text" class="form-control" required="required" value="<?= $site['slogan']; ?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="descriptionTitle" class="col-4 col-form-label">Titulo da descrição principal</label> 
					<div class="col-8">
						<input id="descriptionTitle" name="descriptionTitle" type="text" class="form-control" required="required" value="<?= $site['descriptionTitle']; ?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="descricao" class="col-4 col-form-label">Descrição principal</label> 
					<div class="col-8">
						<textarea id="descricao" name="descricao" cols="40" rows="5" class="form-control" required="required"><?= $site['description']; ?></textarea>
					</div>
				</div>
				<div class="form-group row">
					<label for="about" class="col-4 col-form-label">Sobre Nós</label> 
					<div class="col-8">
					<textarea id="about" name="about" cols="40" rows="5" class="form-control" required="required"><?= $site['sobre']; ?></textarea>
					</div>
				</div> 
				<div class="form-group row">
					<label for="btnPrincipalTitle" class="col-4 col-form-label">Texto botão principal</label> 
					<div class="col-8">
					<input type="text" id="btnPrincipalTitle" name="btnPrincipalTitle" cols="40" rows="5" class="form-control" required="required" value="<?= $site['btnPrincipalTitle']; ?>">
					</div>
				</div> 
				<div class="form-group row">
					<label for="btnPrincipalLink" class="col-4 col-form-label">Link botão principal</label> 
					<div class="col-8">
					<input type="text" id="btnPrincipalLink" name="btnPrincipalLink" cols="40" rows="5" class="form-control" required="required" value="<?= $site['btnPrincipalLink']; ?>">
				</div> 
				</div>

				<div class="form-group row">
					<label for="senha" class="col-4 col-form-label">Senha do painel</label> 
					<div class="col-8">
					<input type="password" id="senha" name="senha" cols="40" rows="5" class="form-control" required="required" value="<?= $site['senha']; ?>">
				</div> 
				</div>
				<div class="form-group row">
					<div class="offset-4 col-8">
					<br>
						<button type="submit" class="btn btn-primary">Salvar alterações</button>
					</div>
				</div>
			</form>
		</div>
		<br><br>
	</section>

		
<?php require_once('includes/footer.php'); ?>