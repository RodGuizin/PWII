<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="login.css">
    <meta charset="utf-8">
    <title>Cadastro</title>
</head>
<body>
    <div class="container">
        <div class="box">
            <h1>Cadastro</h1>
            <form action="teste.php" method="POST">
                Nome:<br>
                <input type="text" name="nome" required><br><br>
                Email:<br>
                <input type="text" name="email" required><br><br>
                Senha:<br>
                <input type="password" name="senha" required><br><br>

                <input type="submit" value="Cadastrar novo usuário">
            </form>
            <br>
            <a href="login/login.php">Já tem cadastro? Clique aqui</a>
        </div>
    </div>
</body>
</html>

<?php

session_start();
if( isset( $_SESSION['nome'])){
    $nome = $_SESSION['nome'];
    echo "Bem vindo a nossa pagina ";
    echo "<h3>".$nome."</h3>";
}else{
    echo "
    <script>
        alert('Faça login para acessar essa pagina')
    </script>";   
}

?>