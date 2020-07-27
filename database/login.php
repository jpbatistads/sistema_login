<?php
require ("conexao.php");
#Pegando os posts que o formulário mandou para saber se estão recebendo(Email,Senha);

if(isset($_POST["email"]) && isset($_POST["senha"]) && $conn != null){
    #Executar o select no banco de dados.
    $query = $conn->prepare("SELECET * FROM usuarios WHERE email = ? AND senha = ?");
    
}else{
    echo "Não tem post";
}

