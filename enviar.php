<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once "head.php";?>
</head>
<body>
<div class="container">
    <?php require_once "menu.php";?>
<br><br>
    <div class="form">
    <?php
$nome   = $_POST['nome'];
$email  = $_POST['email'];
$titulo = $_POST['titulo'];
$mens   = $_POST['mens'];
?>
    <div class="table-responsive">
        <table class="table">
            <!-- On rows -->
            <tr class="active"></tr>
            <!-- On cells (`td` or `th`) -->
            <tr><td class="active"><p>Nome:</p></td>
                <td class="success"><p><?php echo $nome; ?></p></td>
            </tr>
            <tr><td class="active"><p>Email:</p></td>
                <td class="success"><p><?php echo $email; ?></p></td>
            </tr>
            <tr><td class="active"><p>Título:</p></td>
                <td class="success"><p><?php echo $titulo; ?></p></td>
            </tr>
            <tr><td class="active"><p>Mensagem:</p></td>
                <td class="success"><p><?php echo $mens; ?></p></td>
            </tr>
            <tr class="active"><p class='red'><?php echo "Dados enviados com sucesso, abaixo seguem os dados que você enviou!"; ?></p></tr>
        </table>
        </div>
    </div>
<?php require_once "rodape.php";?>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>