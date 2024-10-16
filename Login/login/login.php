<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="estilo1.css">
    <meta charset="utf-8">
    <title>Cadastro</title>
</head>
<body>
    <div class="container">
        <div class="box">
            <h1>Entrar</h1>
            <form action="teste.php" method="POST">
                Nome:<br>
                <input type="text" name="nome" required><br><br>
                Email:<br>
                <input type="text" name="email" required><br><br>
                <input type="submit" value="Cadastrar novo usuário">
            </form>
            <br>
            <a href="../index.php">Não tenho uma conta</a>
        </div>
    </div>
</body>
</html>