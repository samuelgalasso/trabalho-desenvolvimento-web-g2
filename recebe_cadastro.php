<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Identifier</title>
        <style>
            
            body{
        
               font-size: 20;
        background-image: url("background2.jpg");
    }
            
        </style>
    </head>
    <body>
        <h1 align="center">Cadastro concluído!</h1>
        <h3 align="center"> Agora vamos começar o seu teste.</h3>
        
        <div align="center">
        <a class="nav-link active" aria-current="page" href="teste.php" align="center">Iniciar Teste</a>
        </div>
       
       
        <?php
        include 'conexao.php';
        $nome = $_POST["nome"];
        $data = $_POST["data"];
        $sexo = $_POST["sexo"];
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        
        
        
        $sql = "insert into usuario (nome, data_nasc, sexo, nome_usuario, senha) values ('$nome','$data','$sexo','$usuario','$senha')";
        $mysqli -> query ($sql);
       
        ?>
    </body>
</html>



