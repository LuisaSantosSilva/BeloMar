<?php
session_start();
ob_start();
include_once 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Importa o arquivo CSS do Bootstrap para estilização -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- Importa os arquivos JavaScript do Bootstrap para funcionalidades interativas -->
    <link rel="stylesheet" href="CSS/login.css">
    <!-- Importa um arquivo de estilo personalizado (style.css) -->
    <title>Cadastro</title>
    <!-- Define o título da página como "Cadastro" -->
</head>

<body>
    <!-- Navbar da página: -->
    <?php include("navbar.php"); ?>

    <div class="container-login">
        <!-- Container principal -->
        <!-- Caixa de imagem -->
        <div class="img-box">
            <img src="img/img_Login/logo.jpeg">
        </div>
        <!-- Caixa de conteúdo -->
        <div class="content-box">
            <!-- Caixa de formulário -->
            <div class="form-box">
                <h2>Login</h2>

                <?php
                $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

                if (!empty($dados['SendLogin'])) {
                    $senhaFormatada = md5($dados['senha']);
                    $query_clientes = "SELECT id, nome, email, senha
                        FROM clientes
                        WHERE email =:email &&
                        senha ='$senhaFormatada'";
                    $result_clientes = $conexao->prepare($query_clientes);
                    $result_clientes->bindParam(':email', $dados['email'], PDO::PARAM_STR);
                    $result_clientes->execute();

                    

                    if (($result_clientes) and ($result_clientes->rowCount() != 0)) {
                        $row_email = $result_clientes->fetch(PDO::FETCH_ASSOC);
                        $_SESSION['id'] = $row_email['id'];
                        $_SESSION['nome'] = $row_email['nome'];
                        header("Location: dashboard.php");
                    } else { ;?>
                        <p id="erro"><?php $_SESSION['msg'] = "Erro: Usuário ou senha inválida!";?></p>
                    <?php }
                }

                if (!empty($dados['SendLogin'])) {
                    $senhaFormatada = md5($dados['senha']);
                    $query_adm = "SELECT id, nome, email, senha
                        FROM administrador
                        WHERE email =:email &&
                        senha ='$senhaFormatada'";
                    $result_adm = $conexao->prepare($query_adm);
                    $result_adm->bindParam(':email', $dados['email'], PDO::PARAM_STR);
                    $result_adm->execute();

                    

                    if (($result_adm) and ($result_adm->rowCount() != 0)) {
                        $row_email = $result_adm->fetch(PDO::FETCH_ASSOC);
                        $_SESSION['id'] = $row_email['id'];
                        $_SESSION['nome'] = $row_email['nome'];
                        header("Location: admin/menu.php");
                    } 
                }

                if (isset($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                ?>


                <form method="POST" action="">
                    <!-- Campo de entrada de email -->
                    <div class="input-box">
                        <span>Email</span>
                        <input type="text" name="email" placeholder="Digite o usuário" value="<?php if (isset($dados['email'])) {
                                                                                                    echo $dados['email'];
                                                                                                } ?>" required><br><br>

                        <span>Senha</span>
                        <input type="password" name="senha" placeholder="Digite a senha" value="<?php if (isset($dados['senha'])) {
                                                                                                            echo $dados['senha'];
                                                                                                        } ?>" required><br><br>
                    </div>
                    <div class="input-box">
                        <input type="submit" value="Entrar" name="SendLogin">
                    </div>
                    <div class="input-box">
                       <p>Não Tem Uma Conta? <a href="cadastro.php">Inscrever-se</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Footer da página: -->
    <?php include("footer.php"); ?>
</body>

</html>