<?php 
  header("Content-Type: text/html; charset=UTF-8");
?>
<html lang="en">
<head>
	<title><?php echo $titulo; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('includes/bootstrap/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('includes/css/styles.css'); ?>">
</head>
<body>
	<div class="login">
		<center><h3>Logo itsetore</h3></center>
		<form>
			<div class="form-group">
				<input type="text" class="form-control" id="txtUsuario" placeholder="Usuário">
				<input type="password" class="form-control" id="txtPassword" placeholder="Senha">
			</div>
			<a href="dashboard"><button type="button" class="btn btn-primary btn-block">Entrar</button></a>
		</form>
	</div>
</body>
</html>
<script type="text/javascript" src="<?php echo base_url('includes/bootstrap/js/bootstrap.min.js'); ?>"></script>