<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="login.css">
    <title>Formulário de Login</title>
</head>

<body>

    <div>
        <form action="" method="post">
            <img src="placeholder_logo.png" class="logo" alt="Logo">
            <h2>Login</h2>


            <label for="name">Nome completo:</label>
            <input type="text" id="name" name="nome" placeholder="Nome completo" required><br><br>


            <label for="password">Senha:</label>
            <input type="password" id="password" name="senha" placeholder="Senha" required><br><br>


            <a type="submit" href="agendamento.php" class="botao">Login</a><br><br>


            <a class="botao" href="cadastro.php">Cadastre-se</a><br><br>
        </form>
    </div>

</body>

</html>
