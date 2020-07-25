<?php
include_once "conexao.php";

$email = $_POST['email'];
$senha = $_POST['senha'];


mysqli_query ($conn,"INSERT INTO usuario (email,senha) VALUES ('$email','$senha')" ); 

header("Location:../public/pages/cadastro.php");
exit;

?>