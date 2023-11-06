<?php
include("conexao.php");

//
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

print_r($nome);
print_r($email);
print_r($telefone);
//Inserindo dados na tabela

$sql = "UPDATE clientes SET nome = '$nome', email = '$email', telefone = '$telefone' WHERE id = 1";

if ($conexao->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
  }
  
  $conexao->close();

header('Location: ../perfil.php');



?>
