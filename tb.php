<html>
    <head>
        <meta charset="UTF-8">
        <title>Identifier</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
           #corpo{
                border: 12px #146c43 ridge;
                margin-top: 20px;
            }
             body{
        
               font-size: 20;
        background-image: url("background2.jpg");
    }

            </style>
            
    </head>
    <body>
        <!--<h2 align="center"> Bem vindo ao Identifier </h2>
                <h3 align="center">Aqui você irá descobrir seus dons!</h3>
                <h4 align="center">Serão feitas diversas perguntas para você, e no final delas sua personalidade será identificada. </h4>
                <h5 align="center"> Mas antes, conclua o cadastro. </h5>>
        -->
       
        <nav class="nav navbar-dark bg-dark">
  <a class="nav-link active" aria-current="page" href="index.php">Página principal</a>

</nav>
        
        <div id="corpo" class="container">
            <h1 align="center" style="">Cadastro</h1>
            <br>
            <br>
            <form align="center" action="recebe_cadastro.php" method="post">
                     Nome completo <input type="text" name="nome" id="nome" value="" placeholder="Digite seu nome aqui">  <br> <br><br>
                     Data de Nascimento <input type="date" name="data" id="data" value="">  <br> <br><br>
                Sexo <Select name="sexo" id="sexo">
                <option value="">Escolha seu Sexo</option>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
               
           
                </select>  <br> <br><br>
                
                 Digite seu Usuário <input type="text" name="usuario" id="usuario" value="" placeholder="Digite seu usuário">
                 <br> <br><br>
                Digite sua Senha <input type="text" name="senha" id="senha" value="" placeholder="Digite sua senha">
                <br> <br><br><br><br>
                
                <input type="submit" value="Enviar" style="color: blue" > 
                <input type="reset" value="Cancelar" style="color: red">
        </form>
        </div>
        
        <?php
       
        ?>
    </body>
</html>

