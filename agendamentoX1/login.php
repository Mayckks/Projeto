<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="login.css"> 
    <title>Formulário de Login</title>
</head>
<body>

    <div>
        <form action="mostrar_usuarios.php" method="post">

            <img src="placeholder_logo.png" class="logo" alt="Logo">
            <h2>Login</h2>

            <label for="name"></label>
            <input type="text" id="name" placeholder="Nome completo" required><br><br>

            <label for="password"></label>
            <input type="password" id="password" placeholder="Senha" name="password" required><br><br>
        
            <a class="botao" href="">Login</a><br><br>
            <a class="botao" href="cadastro.php">Cadastre-se</a><br><br>
        </form>
    </div>

</body>
</html>

