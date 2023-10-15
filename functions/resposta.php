<?php
include("conexao.php");

//
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha=md5($_POST['senha']);

//Inserindo dados na tabela
$sql = "INSERT INTO clientes(nome, email, telefone, senha) VALUES ('$nome', '$email', '$telefone', '$senha')";

if(mysqli_query($conexao, $sql)){
    echo "Usuário cadastrado com sucesso";
}
else{
    echo "Erro".mysqli_connect_error($conexao);
}

?>