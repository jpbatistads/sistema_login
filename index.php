<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Página de Login">
    <meta name="author" content="joao.batista@a.ficr.edu.br">
    

    <title>Sistema de cadastro</title>

  
    <!-- Bootstrap core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="public/css/main.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" action="database/login.php" method="POST">
      <img src="public/img/logo.svg" alt="logo" width="100" height="90">
      <h1 class="h3 mb-3 font-weight-normal"> Informe Os Dados</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="email" class="form-control" placeholder="Endereço de email" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="senha" class="form-control" placeholder="Senha"  maxlength="32" required>
      
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button><br>
     
     
      <?php echo date ("yy"); ?> <!--Formata a data com php-->

      
    </form>
  </body>
</html>