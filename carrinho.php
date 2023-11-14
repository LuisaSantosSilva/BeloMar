	<?php
		session_start();
        if (isset($_SESSION['carrinho'])) {
            $_SESSION['carrinho'] == array();
        }

        if (isset($_GET['acao'])) {

            if ($_GET['acao'] == 'add') {
                $id = intval($_GET['id']);
                if (!isset($_SESSION['carrinho'][$id])) {
                    $_SESSION['carrinho'][$id] = 1;
                } else {
                    $_SESSION['carrinho'][$id] += 1;
                }
            }

            if ($_GET['acao'] == 'del') {
                $id = intval($_GET['id']);
                if ($_SESSION['carrinho'][$id]) {
                    unset($_SESSION['carrinho'][$id]);
                }
            }

            if ($_GET['acao'] == 'up') {
                if (is_array($_POST['prod'])) {
                    foreach ($_POST['prod'] as $id => $qtd) {
                        $id = intval($id);
                        $qtd = intval($qtd);

                        if (!empty($qtd) || $qtd <> 0) {
                            $_SESSION['carrinho'][$id] = $qtd;
                        } else {
                            unset($_SESSION['carrinho'][$id]);
                        }
                    }
                }
            }
        }

			// Verifica se a ação é "up"
			if (isset($_GET['acao']) && $_GET['acao'] == 'up') {
				// Verifica se 'prod' está definido em $_POST antes de acessá-lo
				if (isset($_POST['prod']) && is_array($_POST['prod'])) {
					foreach ($_POST['prod'] as $id => $qtd) {
						// Verifica se a quantidade é válida (por exemplo, maior que zero)
						if (is_numeric($qtd) && $qtd > 0) {
							// Atualiza a quantidade no carrinho
							$_SESSION['carrinho'][$id] = $qtd;
						}
					}
				}
				// Redireciona para a página do carrinho após a atualização
				header('Location: carrinho.php');
				exit();
			}
    ?>
		
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="CSS/carrinho.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
	<title>Carrinho</title>

</head>
<body>

	<!-- Navbar da página: -->
	<?php include("navbar.php"); ?>


	<div class="container text-center">
		<div class="row">
			<div class="col-2">
			&nbsp;
			</div>

			<div class="col">
				<div class="card mt-5">
				<div class="card-body">
					<h4 class="card-title">Carrinho</h4>
					<a href="produtos.php">Lista de Produtos</a>
				</div>
				</div>
				<br>
				<div id="container">
					<table class="table table-hover">
						<thead>
							<th>Produto</th>
							<th>Preço</th>
							<th>Qtd</th>
							<th>SubTotal</th>
							<th>Ação</th>
						</thead>

						<form action="?acao=up" method="POST">
							<tfoot>
								<tr>
									<td colspan="5"><input type="submit" value="Atualizar Carrinho"></td>
								</tr>
							</tfoot>
							<tbody>
								<?php
									include 'functions/conexao.php';

									// Verifica se a variável de sessão 'carrinho' está definida e é um array
									if (isset($_SESSION['carrinho']) && is_array($_SESSION['carrinho']) && count($_SESSION['carrinho']) > 0) {
										$total = 0.0;

										foreach ($_SESSION['carrinho'] as $id => $qtd) {
										$sql = "SELECT * FROM produtos WHERE id = '{$id}'";
										$result_set = mysqli_query($conexao, $sql);
										$row = mysqli_fetch_array($result_set);

										$nome = $row['nome'];

										// Converter o valor do banco de dados para um número
										$preco = (float)$row['preco'];

										if (is_numeric($preco)) {
											$calcSub = $preco * $qtd;
											$sub = number_format($calcSub, '2', ',', '.');
											$total += $calcSub;
										}
								?>
								<tr>
									<td><?php echo $nome; ?></td>
									<td>R$ <?php echo $preco; ?>,00</td>
									<td><input type="number" value="<?php echo $qtd; ?>" name="prod[<?php echo $id; ?>]"></td>
									<td>R$ <?php echo $sub; ?></td>
									<td><a href="carrinho.php?acao=del&id=<?php echo $id; ?>" class="btn btn-danger">-</a></td>
								</tr>
								<?php
										}

								$total = number_format($total, '2', ',', '.');
								?>
								<tr><th colspan="5"> Total: R$<?php echo $total; ?></th></tr>
									<?php } else { ;?>
									<tr><td colspan='5'>Nenhum produto no carrinho</td></tr>
									<?php } ;?>
							</tbody>

					</table>
				</div>
			
					<?php
					if (isset($_SESSION['id'])) {;
					// Se estiver logado, exibir o carrinho de compra ?>	
							<a class="btn btn-success" href="produtos.php">Continuar Comprando</a>
					</form>

							<br><br>
						<form action="resumo_pedido.php" method="POST">
							<h5>Personalize seu Embrulho:</h5>
							<select class="form-select form-select-lg mb-3" name="personalizar" id="personalizar" aria-label="Large select example">
								<option selected value="Trasparente">Trasparente</option>
								<option value="Dourado">Dourado</option>
								<option value="Azul Marinho">Azul Marinho</option>
								<option value="Azul Claro">Azul Claro</option>
								<option value="Vermelho">Vermelho</option>
								<option value="Rosa">Rosa</option>
								<option value="Roxo">Roxo</option>
								<option value="Prata">Prata</option>
							</select>

							<br>
						
						
							<h5>Calcular Desconto:</h5>
							<p>Digite um de seus cupons disponíveis:</p>
							<div class="input-group mb-3">
								<span class="input-group-text">Cupom:</span>
								<input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="cupom" id="cupom">
							</div>

							<br>
							
							<input type="submit" class="btn btn-primary" value="Finalizar Pedido">
						</form>
						
				
                    <?php } else {; ?>
                        <h5> Faça o Login para ter acesso ao restante do carrinho de compras</h5>
						<a class="btn btn-primary" href="login.php">Fazer o login</a>
                    <?php } ;
				?>
				
			</div>

			<div class="col-2">
			&nbsp;
			</div>
		</div>
	<br><br><br>
	</div>

	<!-- Footer da página: -->
    <?php include("footer.php"); ?>

</body>
</html>