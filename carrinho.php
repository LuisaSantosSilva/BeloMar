<?php 
	session_start();
	require_once "functions/product.php";
	require_once "functions/cart.php";

	$pdoConnection = require_once "connection.php";

	if(isset($_GET['acao']) && in_array($_GET['acao'], array('add', 'del', 'up'))) {
		
		if($_GET['acao'] == 'add' && isset($_GET['id']) && preg_match("/^[0-9]+$/", $_GET['id'])){ 
			addCart($_GET['id'], 1);			
		}

		if($_GET['acao'] == 'del' && isset($_GET['id']) && preg_match("/^[0-9]+$/", $_GET['id'])){ 
			deleteCart($_GET['id']);
		}

		if($_GET['acao'] == 'up'){ 
			if(isset($_POST['prod']) && is_array($_POST['prod'])){ 
				foreach($_POST['prod'] as $id => $qtd){
						updateCart($id, $qtd);
				}
			}
		} 
		header('location: carrinho.php');
	}

	$resultsCarts = getContentCart($pdoConnection);
	$totalCarts  = getTotalCart($pdoConnection);


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
			<div class="col-1">
			&nbsp;
			</div>

			<div class="col">
				<div class="card mt-5">
				<div class="card-body">
					<h4 class="card-title">Carrinho</h4>
					<a href="produtos.php">Lista de Produtos</a>
				</div>
				</div>

				<?php if($resultsCarts) : ;?>
					<form action="carrinho.php?acao=up" method="post">
						<table class="table table-strip">
							<thead>
								<tr>
									<th>Produto</th>
									<th>Qtd</th>
									<th>Preço</th>
									<th>Subtotal</th>
									<th>Ação</th>

								</tr>				
							</thead>
							<tbody>
							<?php foreach($resultsCarts as $result) : ;?>
								<tr>
									
									<td><?php echo $result['name'] ;?></td>
									<td>
										<input type="text" name="prod[<?php echo $result['id'] ;?>]" value="<?php echo $result['quantity'] ;?>" size="1" />						
									</td>
									<td>R$<?php echo number_format($result['price'], 2, ',', '.') ;?></td>
									<td>R$<?php echo number_format($result['subtotal'], 2, ',', '.') ;?></td>
									<td><a href="carrinho.php?acao=del&id=<?php echo $result['id'] ;?>" class="btn btn-danger">-</a></td>
									
								</tr>
							<?php endforeach ;?>
							<tr>
								<td colspan="3" class="text-right"><b>Total: </b></td>
								<td>R$<?php echo number_format($totalCarts, 2, ',', '.'); ?></td>
								<td></td>
							</tr>
							</tbody>
							
						</table>

						
						<a class="btn btn-success" href="produtos.php">Continuar Comprando</a>

						<br><br>

						<h5>Personalize seu Embrulho:</h5>
						<select class="form-select form-select-lg mb-3" aria-label="Large select example">
							<option selected>Selecione uma cor</option>
							<option value="1">Dourado</option>
							<option value="2">Azul Marinho</option>
							<option value="3">Azul Claro</option>
							<option value="4">Vermelho</option>
							<option value="5">Rosa</option>
							<option value="6">Roxo</option>
							<option value="6">Prata</option>
						</select>

						<br>
						<h5>Calcular Desconto:</h5>
						<p>Digite um de seus cupons disponíveis:</p>
						<div class="input-group mb-3">
							<span class="input-group-text" id="inputGroup-sizing-default">Cupom:</span>
							<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
						</div>

						<br>
						
						<a class="btn btn-primary" href="endereco_alternativo.php">Finalizar pedido</a>

					</form>
				<?php endif ;?>
			</div>

			<div class="col-1">
			&nbsp;
			</div>
		</div>
	<br><br><br>
	</div>

	<!-- Footer da página: -->
    <?php include("footer.php"); ?>

</body>
</html>