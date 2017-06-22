<!DOCTYPE html>
<html>
	<head>
		<meta charset=utf-8>
		<script src="https://use.typekit.net/ayg4pcz.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
		<meta name=viewport content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL?>/assets/css/bootstrap.min.css">
		<script type="text/javascript" src="<?php echo BASE_URL?>/assets/js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL?>/assets/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL?>/assets/css/add.css">
	</head>
	<body>
		<div class="container">
			 <a href="javascript:history.back()"><button id="idCancelar" name="idCancelar" class="btn btn-primary btn-lg">Voltar</button></a>
			<form class="form-horizontal" method="POST">
				<div class="card card-container">

					<!-- Form Name -->
					 <h1 class="welcome text-center">Cadastro de Funcionário</h1>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="idNome">Nome</label>  
					  <div class="col-md-5">
					  <input id="idNome" name="nome" type="text" placeholder="Nome do funcionário" class="form-control input-md" required="">
					    
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="idUsuario">Email</label>  
					  <div class="col-md-5">
					  <input id="idUsuario" name="email" type="text" placeholder="Digite o email" class="form-control input-md" required="">
					    
					  </div>
					</div>

					<!-- Password input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="idSenha">Senha</label>
					  <div class="col-md-5">
					    <input id="idSenha" name="senha" type="password" placeholder="Digite a senha" class="form-control input-md" required="">
					    
					  </div>
					</div>

					<!-- Button (Double) -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="idConfirmar"></label>
					  <div class="col-md-8">
					    <button id="idConfirmar" name="idConfirmar" class="btn btn-primary">Confirmar</button>					   
					  </div>
					</div>
				</div>
			</form>

		</div>
	</body>
</html>
