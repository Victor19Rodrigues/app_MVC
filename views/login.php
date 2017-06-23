<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<script src="https://use.typekit.net/ayg4pcz.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL?>/assets/css/bootstrap.min.css">
		<script type="text/javascript" src="<?php echo BASE_URL?>/assets/js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL?>/assets/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL?>/assets/css/login.css">
	</head>
	<body>
		<div class="container">

		    <h1 class="welcome text-center">Funcionários</h1>
		        <div class="card card-container">
			        <h2 class='login_title text-center'>Login</h2>
			        <hr>
			            <form method="POST" class="form-signin">
			                <span id="reauth-email" class="reauth-email"></span>
			                <p class="input_title">Email</p>
			                <input type="email" name="email" class="login_box" placeholder="Email" required autofocus title="email">
			              
			                <p class="input_title">Password</p>
			                <input type="password" name="senha" class="login_box" placeholder="Senha" required pattern="[A-Za-z]{1,6}" title="Senha deverá possuir somente letras">
			                
			                <button class="btn btn-sm btn-primary" type="submit" href="pagina.php">Login</button>
			            </form><!-- /form -->
		        </div><!-- /card-container -->
		</div><!-- /container -->
	</body>
</html>



