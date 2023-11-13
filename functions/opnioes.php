<?php
include("conexao.php");

$nome = $_POST['nome'];
$opnioes = $_POST['opnioes'];


//Inserindo dados na tabela feedbacks
$sql = "INSERT INTO feedbacks(nome, opnioes) VALUES ('$nome','$opnioes')";

if(mysqli_query($conexao, $sql)){
    echo "Muito Obrigada";
}
else{
    echo "Erro".mysqli_connect_error($conexao);
}

?>