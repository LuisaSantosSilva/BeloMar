<?php
require_once("functions/conexao.php");

// Check connection
if ($conexao->connect_error) {
  die("Connection failed: " . $conexao->connect_error);
}

 

$sql = "SELECT nome, email, telefone FROM clientes WHERE id = 1";
$result = $conexao->query($sql);



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <!-- Importa o arquivo CSS do Bootstrap para estilização -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <!-- Importa os arquivos JavaScript do Bootstrap para funcionalidades interativas -->
  <link rel="stylesheet" href="css/perfil.css">
  <!-- Importa um arquivo de estilo personalizado (style.css) -->
  <title>Cadastro</title>
  <!-- Define o título da página como "Cadastro" -->
</head>

<body>
  <div class="container-login">
    <!-- Container principal -->
    <!-- Caixa de imagem -->
    <div class="img-box">
      <img src="img/img_Footer/logo.jpeg">
    </div>
    <!-- Caixa de conteúdo -->
    <div class="content-box">
      <!-- Caixa de formulário -->
      <div class="form-box">
        <h2>Perfil</h2>
        <div class="perfil">
          <img src="img/img_Footer/logo.jpeg" class="img-thumbnail" alt="...">
          <pre></pre>
        </div>
        <form method="$_POST" action="editar.php">
          <!-- Campo de entrada de email -->
          <?php if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) { ?>
              <div class="input-box">
                <span>Nome de usuario</span>
                <p>
                  <?php echo $row["nome"] ?>
                </p>
              </div>
              <!-- Campo de entrada de senha -->
              <div class="input-box">
                <span>Email</span>
                <p>
                  <?php echo $row["email"] ?>
                </p>
              </div>
              <div class="input-box">
                <span>telefone</span>
                <p>
                  <?php echo $row["telefone"] ?>
                </p>
              </div>
          <?php }
          } else {
            echo "0 results";
          }
          $conexao->close(); ?>

          <div class="row">
            <div class="col">
              <div class="input-box">
                <input type="submit" value="Editar">
              </div>
            </div>
            <div class="col">
              <div class="input-box">
                <input type="submit" value="Excliur" name="exluir">

              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="input-box">
                <input type="submit" value="Sair" formaction="logout.php">
              </div>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>
</body>

</html>