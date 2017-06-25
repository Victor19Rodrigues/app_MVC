
<!DOCTYPE html>
<html>
	<head>
		<meta charset=utf-8>
		<meta name=viewport content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL?>/assets/css/bootstrap.min.css">
		<script type="text/javascript" src="<?php echo BASE_URL?>/assets/js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL?>/assets/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL?>/assets/css/pagina.css">
		<title>Agenda</title>
	</head>
	<body>
		<div class="container">
			 <a href="javascript:history.back()"><button id="idCancelar" name="idCancelar" class="btn btn-primary btn-sm">Voltar</button></a>
			 <br><br>
			 <h1>Agenda Telefônica <small>informações</small></h1>
			<hr>
			<div>
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Nome</th>
							<th>Email</th>
							<th>Telefone</th>
						</tr>
					</thead>
					<tbody>
					<?php
						foreach($acao as $ac){
							echo '<tr>';
									echo '<td>'.$ac['nome'].'</td>';
									echo '<td>'.$ac['email'].'</td>';
									echo '<td>'.$ac['tel'].'</td>';
							echo '<tr>';
						}
					?>
					</tbody>
				</table>
			</div>			
		</div>
	</body>
</html>