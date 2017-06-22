<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL?>/assets/css/bootstrap.min.css">
		<script type="text/javascript" src="<?php echo BASE_URL?>/assets/js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL?>/assets/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL?>/assets/css/style.css">
	</head>
	<body>
		<div class="container">
			<?php $this->loadViewInTemplate($viewName, $viewData); ?>
			<footer><b>Victor ©Copyright 2017</b></footer>
		</div>
		
	</body>
</html>