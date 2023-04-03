<html>
<head>
    <meta charset="utf-8">
    <title> Página </title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
<form action="" method="get">
<?php 
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
    $genero = $_GET['genero'];
    $email = $_GET['email'];
    $telefone = $_GET['telefone'];
    $cpf = $_GET['cpf'];
    $senha = $_GET['senha'];
    ?>
     

    <table border="">
            <tr>
                <th>  <h1 class="meio"> 
                      <?php echo("Cadastro feito com sucesso!"); ?>    
                      <br>
                      <?php echo("Seja bem vindo(a) $nome"); ?> 
                      </h1>
            </tr>
    </table> 
</form>    

</body>
</html>
