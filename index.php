<?php
require_once "config.php";
require_once "./usuarios/Usuario.php";

$usuarios = new Usuario();

$usuarios->check_login();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    tela inicial

</body>
</html>