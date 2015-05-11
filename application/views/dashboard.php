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
	<div class="container-fluid">
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-example-js-navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Itsetore</a>
				</div>
				<div class="collapse navbar-collapse bs-example-js-navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
								<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Cadastrar
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
								<li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Usuário</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Produto</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> Cliente</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
								<span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Transações
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
								<li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Vender</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Histórico</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
								<span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Relatórios
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
								<li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat"><span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span> Vendas</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Vendas x Cliente</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> Vendas x Vendedor</a></li>
							</ul>
						</li>					
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li id="fat-menu" class="dropdown">
							<a id="drop3" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
								<span class="glyphicon glyphicon-user" aria-hidden="true"></span> Marcus Flavio
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
								<li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Perfil</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Perfil</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Perfil</a></li>
								<li role="presentation" class="divider"></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Perfil</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		<div class="container-fluid dash">
			<div class="row">

			</div>
		</div>
	</div>
</body>
</html>
<script type="text/javascript" src="<?php echo base_url('includes/js/jquery-2.1.3.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('includes/bootstrap/js/bootstrap.min.js'); ?>"></script>
