<!DOCTYPE html>
<html>
	<head>
		<meta charset=utf-8>
		<meta name=viewport content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL?>/assets/css/bootstrap.min.css">
		<script type="text/javascript" src="<?php echo BASE_URL?>/assets/js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL?>/assets/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL?>/assets/css/pagina.css">
		<title>Funcionários</title>
	</head>
	<body>
		<div class="container">
			<p class="botaoExit">
				<a name = "sair" href="home/sair"><button class="btn btn-default btn-danger">Sair</button></a>
			</p>
			<h1>Funcionários <small>Página de Funcionários</small></h1>
			<hr>
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>Nome</th>
						<th>Email</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						foreach($pagina as $pg){
							echo '<tr>';
								echo '<td>'.$pg['nome'].'</td>';
								echo '<td>'.$pg['email'].'</td>';
								echo '<td><a href="home/editar/?id='.$pg['id'].'"><button class="btn btn-sm btn-outline-danger">Editar</button></a> | 
								<a href="home/excluir/?id='.$pg['id'].'"><button class="btn btn-sm btn-outline-danger">Excluir</button></a></td>';				
							echo '</tr>';
						}
					?>
				</tbody>
			</table>
			<p class="botaoAdd">
				<a href="home/add"><button class="btn btn-lg btn-primary">Adicionar</button></a>
			</p>
		</div>
	</body>
</html>