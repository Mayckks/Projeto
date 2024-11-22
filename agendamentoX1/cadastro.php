<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="cadastro.css">
</head>

<body>
    <div>
        <h2>Cadastre-se</h2>
        <form action="dados.php" method="post">

            <button class="voltar-btn">
                <a href="login.php">Voltar</a>

            </button>

            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Nome completo" required><br><br>

            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" placeholder="(XX) XXXX-XXXX" required><br><br>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" placeholder="nome@exemplo.com" required><br><br>

            <label for="password">Senha:</label>
            <input type="password" id="senha" name="senha" required minlength="6"><br><br>



            <button type="submit" class="botao">
                Cadastre-se</button>
        </form>
    </div>
</body>

</html>