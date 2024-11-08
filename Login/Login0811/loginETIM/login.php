<?php

//toda vez que formos trabalhar com sessao, temos que inicializar a sessao:
session_start();

//importar a classe pra poder usar aqui:
require "Contato.class.php";

//checar se foi clicado no botao enviar dados
if( isset($_POST['email']) ){
    
    //copiar do post para variaveis locais
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //instanciar a classe Contato em uma variavel $contato
    $contato = new Contato();

    //acessar o metodo checkUser enviando o email que foi digitado no formulario
    $chkUser = $contato->checkUser($email);

    if( !empty($chkUser) ){
        $chkPass = $contato->checkUserPass($email, $senha);
        if( !empty($chkPass) ){
            echo "<br>Usuario e senha";
            //o usuario existe e digitou usuario e senha corretamente
            $_SESSION['nome'] = $chkPass['nome'];
            header("location:index.php");   
        }
    }else{
        echo "Usuario ou senha invalidos";
        exit();
    }
}

?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Document</title>
</head>
<body>
    <div class="topo cor">
        <div class="data cor borda">
        
        </div>
        <spam class="fonte">
            Logomarca
        </spam> 
    </div>

    <div class="centraliza">
        <div class="formulario interna">
            <h3>Login</h3>
            <form action="" method="post">
                Email:
                <input type="text" name = "email" required class="i1">
                Senha:
                <input type="password" name = "senha" required class="i1">

                <p><a href="forgotpass.html" class = "esqueceu" >Esqueceu a senha?</a></p>
                <a href="cadastrar.php" class = "esqueceu">Cadastrar Novo Usuario</a>
                <input type="submit" name = "botao" value = "Enviar Dados" class = "centralizaBotao">
            </form>
        </div>
    </div>    
</body>
</html>