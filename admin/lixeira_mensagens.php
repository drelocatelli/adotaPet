<?php require_once('includes/header.php'); ?><?php require_once('includes/menu.php'); ?>

    <section>
        <div class="container">
            <center><h2>Mensagens na lixeira</h2><br><img src="assets/img/searching.png" width="50px"></center>
            <br>
            <?php
                require_once("../src/mysqlConnect.php");

                $sql = "SELECT * FROM mensagem WHERE status='0' ORDER BY id DESC";
                $result = $conn->query($sql);

                if($result->num_rows == 0){
                    header("Location: gerencia_mensagens");
                }

            ?>

            <table class="table table-striped table-hover">
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>E-MAIL</th>
                    <th>ASSUNTO</th>
                    <th>MENSAGEM</th>
                    <th>RESTAURAR</th>
                    <th>EXCLUIR PERMANENTEMENTE</th>
                    <?php 
                        $sql2 = "SELECT * FROM mensagem WHERE status='1'";
                        $result2 = $conn->query($sql2);

                        if($result2->num_rows > 0){
                    ?>
                    <th>
                        <a href="gerencia_mensagens.php"><button type="button" class="btn btn-primary">Aberto (<?= $result2->num_rows; ?>)</button></a>

                    </th>
                    <?php } ?>
                </tr>
                <?php
                    if ($result->num_rows > 0) {

                    while($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['nome']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td><?= $row['assunto']; ?></td>
                    <td><div class="textarea"><?= $row['mensagem']; ?></div></td>
                    <td class="action">
                        <div class="icons">
                            <a href="src/resetMsgItem.php?id=<?= $row['id']; ?>"><img src="assets/img/refresh.png" width="40px"/></a>
                        </div>
                    </td>
                    <td>
                        <a href="src/excluirMsgItem.php?id=<?= $row['id']; ?>"><img src="assets/img/remove.png" width="40px"></a>
                    </td>

                </tr>

            <?php

                    }

            ?>
            </table>
            <?php
                }else{
                    echo 'Nenhuma nova mensagem a ser apresentada!<br>';
                }

            ?>
            <br>
        </div>
    </section>
    <br><br>

		
<?php require_once('includes/footer.php'); ?>