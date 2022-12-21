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
                font-size:  20;
                text-align: center;
               
        background-image: url("background2.jpg");
    }
            
        </style>
    </head>
    <body>
        <h2 align="center">Login Falhou!</h2>
        
        <a class="nav-link active" aria-current="page" href="login.php">Voltar ao login</a>
       
       
        <?php
        include 'conexao.php';
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        
        
        $sql = "Select * from usuario where nome_usuario='$usuario' and senha='$senha'";
        $result = $mysqli -> query ($sql);
         $quantidade_linhas=$result->num_rows;
             if ($quantidade_linhas==1){
                 header('Location:teste.php');
}
//echo ('Olá '.$usuario .', vamos iniciar seu teste?');
echo '<br> Usuário ou senha errada. <br> Favor informar novamente.'
        ?>
    </body>
</html>