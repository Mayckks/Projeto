<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php

            include "bd.php";

            $nome = $_POST['nome'];
            $telefone = $_POST['telefone'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $sql = "INSERT INTO `pessoas`( `nome`, `telefone`, `email`, `senha`) VALUES 
            ('$nome','$telefone','$email','$senha')";

           if (mysqli_query($conn, $sql)){
            echo "$nome cadastrado com sucesso";
           }else{
            echo "$nome NÂO foi cadastrado";
           }

            ?>

        </div>
    </div>
</body>
</html>