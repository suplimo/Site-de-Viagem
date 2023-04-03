<html>
<head>
    <meta charset="utf-8">
    <title> Página </title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
<form action="" method="post">
<?php 
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $genero = $_POST['genero'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
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