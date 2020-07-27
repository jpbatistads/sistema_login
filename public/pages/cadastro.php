<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
     <!-- Bootstrap core CSS -->
     <link href="public/css/bootstrap.min.css" rel="stylesheet">
   
     <title>Sistema de Cadastro</title>
</head>
<body>
    
<div class="container"><!--Container-->
<div>
  <h3 class="titulos">Use o Formulário Abaixo Para cadastrar seus clientes</h3>
  <form action="/action_page.php">
    <label for="fname">Nome</label>
    <input type="text"  name="nome" placeholder="Nome..">

    <label for="lname">E-mail</label>
    <input type="text" name="email" placeholder="E-mail..">

    <label for="lname">Cidade</label>
    <input type="text" name="cidade" placeholder="Cidade..">
    
    <label for="lname">Estado</label>
    <input type="text" name="estado" placeholder="Estado..">
    

    <label for="lname">Whatsapp</label>
    <input type="text" id="lname" name="lastname" placeholder="Whatsapp..">
  
    <input type="submit" value="Cadastrar">
  </form>
</div>
</div><!--Fim Container-->

</body>
</html>