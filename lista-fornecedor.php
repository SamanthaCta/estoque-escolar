<?php
require_once "config.php";

global $db;

$sql = "SELECT * FROM fornecedor";
$sql = $db->prepare($sql);
$sql->execute();

$fornecedores= $sql -> fetchAll();

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/paginas.css">
    <link rel="stylesheet" href="./css/fornecedor.css">
    <title>Cadastrar Fornecedor</title>
</head>
<body>
    <div class="menu">  
        <?php require_once "./menu.php";?>
    </div>
    <div class="fundo-lista-forn">
        <h1>Lista de Fornecedores</h1>
        <table class="table">
            <thead>
                <th>Fornecedor</th>
                <th>CNPJ</th>
                <th>Endereço</th>
                <th>Contato</th>
                <th>Telefone 1</th>
                <th>Telefone 2</th>
                <th>Email</th>
            </thead>
           
            <tbody>
            <?php foreach($fornecedores as $fornecedor): ?>
                <tr>
                    <td><?php echo $fornecedor['nome_fornecedor']?></td>
                    <td><?php echo $fornecedor['cnpj']?></td>
                    <td><?php echo $fornecedor['endereco_fornecedor']?></td>
                    <td><?php echo $fornecedor['contato_fornecedor']?></td>
                    <td><?php echo $fornecedor['telefone1']?></td>
                    <td><?php echo $fornecedor['telefone2']?></td>
                    <td><?php echo $fornecedor['e_mail']?></td>
                </tr>
            <?php endforeach ?>
            </tbody>
           
        </table>
    </div>
</body>
</html>