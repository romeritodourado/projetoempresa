<div class="container">
    <?php require_once "menu.php";?>
<div class="container">
    <br>
    <div class="form">
    <h1 class="text-center">Mande uma mensagem para nós!</h1>

    <form action="enviar.php" class="form-horizontal" method="post">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Nome:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" placeholder="Nome" name="nome">
            </div>
            <br>
            <label for="inputEmail3" class="col-sm-2 control-label">Email:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
            </div>
            <br>
            <label for="inputEmail3" class="col-sm-2 control-label">Título::</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" placeholder="Título" name="titulo">
            </div>
            <br>
            <label for="inputEmail3" class="col-sm-2 control-label">Mensagem:</label>
            <div class="col-sm-10">
                <textarea class="form-control" rows="3" name="mens"></textarea>
            </div>
            <br>
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Enviar</button>
            </div>
        </div>
        <br><br>
    </form>
    </div>
    <?php

    require_once "rodape.php";?>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>