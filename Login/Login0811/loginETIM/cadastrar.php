<?php
require "Contato.class.php";

if( isset($_POST['email']) ){
    //copiar do post para variaveis locais
    $nome  = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //instanciar a classe Contato em uma variavel $contato
    $contato = new Contato();

    //acessar o metodo checkUser enviando o email que foi digitado no formulario
    $chkUser = $contato->checkUser($email);

    if( !empty($chkUser) ){
       echo "<script>
                alert('Usuario já Cadastrado!')
             </script>";
    }else{
        $contato->insertUser($nome, $email, $senha);
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
            <h3>Cadastro Novo Usuario</h3>
            <form action="" method="post">
                Nome:
                <input type="text" name = "nome" required class="i1">
                
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