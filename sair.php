<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Importa os arquivos JavaScript do Bootstrap para funcionalidades interativas -->
    <link rel="stylesheet" href="CSS/login.css">
    <!-- Importa um arquivo de estilo personalizado (style.css) -->
    <title>Sair</title>
    <!-- Define o título da página como "Cadastro" -->
</head>

<body>
<?php
session_start();
ob_start();
unset($_SESSION['id'], $_SESSION['nome']);?>
<p id="certo"><?php $_SESSION['msg'] = "Deslogado com sucesso";?></p>

<?php
header("Location: index.php");
?>
</body>
</html>