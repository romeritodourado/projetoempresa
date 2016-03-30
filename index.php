<!DOCTYPE html>
<head>
<?php require_once "head.php";?>

</head>
<body>
<?php

if (isset($_GET['a'])) {
    if ($_GET['a'] == 1) {
       return require_once 'form.php';

    }else{
        require_once "body.php";
    }
}

?>
<?php require "body.php"; ?>
</body>
</html>