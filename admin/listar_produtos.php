<?php
    // Inclui o arquivo de conexão com o banco de dados
    include 'conexao.php';

        // Inicia a sessão
        session_start();

        // Verifica se o usuário está autenticado
        if (
            !isset($_SESSION['id']) || empty($_SESSION['id']) ||
            !isset($_SESSION['nome']) || empty($_SESSION['nome'])
        ) {
            // Redireciona para a página de erro
            header("Location: erro.php");
            exit();
        }

        // Verifica se o ID é 1 e o nome é "Gerente"
        if ($_SESSION['id'] != 1 || $_SESSION['nome'] != 'Gerente') {
            // Redireciona para a página de erro
            header("Location: erro.php");
            exit();
        }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Controlar produtos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <script src="https://kit.fontawesome.com/cae6919cdb.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js">
    </script>
</head>

<body>
 <!-- Listar Produtos: -->
    <br>
    <div class="container text-center">
            <h3>Lista de produtos</h3>
        <br>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id do produto</th>
                    <th scope="col">Nome do produto</th>
                    <th scope="col" >Preço do Produto</th>
                    <th scope="col">Imagem</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col" >
                        <center>Ação</center>
                    </th>
                </tr>
            </thead>


            <?php
                include 'conexao.php';
                $sql = "SELECT * FROM `produtos`";
                $busca = mysqli_query($conexao,$sql);

                while ($array = mysqli_fetch_array($busca)) {
                    
                    $id = $array['id'];
                    $nome = $array['nome']; 
                    $preco = $array['preco'];
                    $imagem = $array['imagem'];
                    $qtd = $array['qtd'];
            ?>
            <tr>
                <td style="vertical-align: inherit;"> <?php echo $id ?> </td>
                <td style="vertical-align: inherit;"> <?php echo $nome ?> </td>
                <td style="vertical-align: inherit;"> <?php echo $preco ?> </td>
                <td style="vertical-align: inherit;"> <?php echo $imagem ?> </td>
                <td style="vertical-align: inherit;"> <?php echo $qtd ?> </td>
                <td style="vertical-align: inherit;">
                    <center>
                        <a href="editar_produto.php?id=<?php echo $id?>" role="button"
                            class="btn btn-primary btn-sm"><i class="far fa-edit"></i>&nbsp; Editar</a>
                        <br>
                        <a href="deletar_produto.php?id=<?php echo $id ?>" role="button"
                            class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i>&nbsp; Excluir</a>
                       
                    </center>
                </td>
                <?php } ?>

            </tr>
        </table>

        <!-- Botões de ação: -->
        <a href="adicionar_produto.php" role="button" class="btn btn-success btn-sm">Cadastrar produto</a>
        <a href="menu.php" role="button" class="btn btn-primary btn-sm">Voltar ao menu</a>
        <br><br>
    </div>


</body>

</html>