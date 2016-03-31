<!DOCTYPE html>
<head>
<?php require_once "head.php";?>

</head>
<body>

<?php
function rotas()
{
    $rota = ltrim(parse_url(filter_input(INPUT_SERVER, 'REQUEST_URI'), PHP_URL_PATH), "/");
    if($rota == "") {
        $rota = "index";
    }

    $rotasValidas = array("index","empresa","produtos","servicos","contato");
    if(!in_array($rota,$rotasValidas)OR!file_exists($rota .".php")){
        header("Status: 404 Not Found");
    }
    else{
        require_once ($rota.".php");
    }
}

rotas();

?>
<?php require "body.php"; ?>
</body>
</html>