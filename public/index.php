<?php
    /// deve vir antes e inicia a sessao php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Formulario</title>

        <meta name= "author" content=""></head>
        <meta name= "description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
    <p>Formulario para inscricao</p>
    <!-- get envia por query string na barrade endereco -->
    <!-- http://localhost:89/script.php?nome=21321&idade=12312 -->
    <form action="script.php" method="post">
    <!-- o codigo deve ter extensao .php para aceitar -->
    <?php
    
        $mensagemDeErro=isset($_SESSION['mensagem de erro'])?$_SESSION['mensagem de erro']:'';
        if(!empty($mensagemDeErro)){
            echo $mensagemDeErro;
        }
    ?>
    <p> Seu nome: <input type="text" name="nome" /> </p>
    <p> Sua idade: <input type="text" name="idade" /> </p>
    <p><input type="submit"></p>
    </form>
</body>
</html>