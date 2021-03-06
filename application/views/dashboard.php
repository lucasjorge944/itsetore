<?php 
header("Content-Type: text/html; charset=UTF-8");
?>
<html lang="en">
<head>
	<title><?php echo $titulo; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
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
<<<<<<< HEAD
								<li role="presentation"><a role="menuitem" tabindex="-1" href="gestaousuarios
									"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Usuário</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Produto</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> Cliente</a></li>
=======
								<li role="presentation"><a role="menuitem" tabindex="-1" href="usuario"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Usuário</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="produto"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Produto</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="cliente"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> Cliente</a></li>
>>>>>>> 0e47c9ca326a2dbb375ec47dcbf01dd291fb609a
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
								<li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Configurações</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Perfil</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Perfil</a></li>
								<li role="presentation" class="divider"></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="home"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Sair</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		<div class="container-fluid stats">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<h1>Dashboard<small> Resumo de Estatísticas</small></h1>
					<hr>
					<ol class="breadcrumb">
					  <li>
					  	<span class="page-actual"><span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> Dashboard</span>
					  </li>
					</ol>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="panel panel-success">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-3">
									<span class="glyphicon glyphicon-shopping-cart panels"></span>
								</div>
								<div class="col-xs-9 text-right">
									<div class="huge">26</div>
									<div>Total de Vendas!</div>
								</div>
							</div>
						</div>
						<a href="#">
							<div class="panel-footer">
								<span class="pull-left">Ver Detalhes</span>
								<span class="pull-right"><span class="glyphicon glyphicon-circle-arrow-right"></span></span>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="panel panel-danger">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-3">
									<span class="glyphicon glyphicon-remove panels"></span>
								</div>
								<div class="col-xs-9 text-right">
									<div class="huge">6</div>
									<div>Vendas Canceladas!</div>
								</div>
							</div>
						</div>
						<a href="#">
							<div class="panel-footer panel-dan">
								<span class="pull-left">Ver Detalhes</span>
								<span class="pull-right"><span class="glyphicon glyphicon-circle-arrow-right"></span></span>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-3">
									<span class="glyphicon glyphicon-user panels"></span>
								</div>
								<div class="col-xs-9 text-right">
									<div class="huge">10</div>
									<div>Total de Clientes!</div>
								</div>
							</div>
						</div>
						<a href="#">
							<div class="panel-footer panel-dan">
								<span class="pull-left">Ver Detalhes</span>
								<span class="pull-right"><span class="glyphicon glyphicon-circle-arrow-right"></span></span>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="panel panel-info">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-3">
									<span class="glyphicon glyphicon-tags panels"></span>
								</div>
								<div class="col-xs-9 text-right">
									<div class="huge">17</div>
									<div>Total de Produtos!</div>
								</div>
							</div>
						</div>
						<a href="#">
							<div class="panel-footer panel-dan">
								<span class="pull-left">Ver Detalhes</span>
								<span class="pull-right"><span class="glyphicon glyphicon-circle-arrow-right"></span></span>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title"><span class="glyphicon glyphicon-stats"></span> Vendas x Mês</h3>
						</div>
						<div class="panel-body">
							<div id="myfirstchart" style="height: 250px;"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title"><span class="glyphicon glyphicon-shopping-cart"></span> Vendas x Vendedor <span class="glyphicon glyphicon-user"></h3>
						</div>
						<div class="panel-body">
							<div id="mysecondchart" style="height: 350px;"></div>
							<div class="text-right">
								<a href="#">Ver todas atividades <span class="glyphicon glyphicon-circle-arrow-right"></span></a>
							</div>
						</div>
					</div>					
				</div>
				<div class="col-xs-12 col-sm-12 col-md-8">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title"><span class="glyphicon glyphicon-usd"></span> Painel de Transações</h3>
						</div>
						<div class="panel-body">
							<div class="table-responsive">
								<table class="table table-bordered table-hover table-striped">
									<thead>
										<tr>
											<th>NSU #</th>
											<th>Data</th>
											<th>Hora</th>
											<th>Valor</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>3326</td>
											<td>10/21/2013</td>
											<td>3:29 PM</td>
											<td>$321.33</td>
										</tr>
										<tr>
											<td>3325</td>
											<td>10/21/2013</td>
											<td>3:20 PM</td>
											<td>$234.34</td>
										</tr>
										<tr>
											<td>3324</td>
											<td>10/21/2013</td>
											<td>3:03 PM</td>
											<td>$724.17</td>
										</tr>
										<tr>
											<td>3323</td>
											<td>10/21/2013</td>
											<td>3:00 PM</td>
											<td>$23.71</td>
										</tr>
										<tr>
											<td>3322</td>
											<td>10/21/2013</td>
											<td>2:49 PM</td>
											<td>$8345.23</td>
										</tr>
										<tr>
											<td>3321</td>
											<td>10/21/2013</td>
											<td>2:23 PM</td>
											<td>$245.12</td>
										</tr>
										<tr>
											<td>3320</td>
											<td>10/21/2013</td>
											<td>2:15 PM</td>
											<td>$5663.54</td>
										</tr>
										<tr>
											<td>3319</td>
											<td>10/21/2013</td>
											<td>2:13 PM</td>
											<td>$943.45</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="text-right">
								<a href="#">Ver todas transações <span class="glyphicon glyphicon-circle-arrow-right"></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<script type="text/javascript" src="<?php echo base_url('includes/js/jquery-2.1.3.js'); ?>"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('includes/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script type="text/javascript">
new Morris.Area({
  	// ID of the element in which to draw the chart.
  	element: 'myfirstchart',
	// Chart data records -- each entry in this array corresponds to a point on
	// the chart.
	data: [
	{ month: '2015-01', value: 20, valueb: 15, total: 20+15},
	{ month: '2015-02', value: 10, valueb: 25, total: 10+25},
	{ month: '2015-03', value: 5, valueb: 10, total: 5+10},
	{ month: '2015-04', value: 5, valueb: 35, total: 5+35},
	{ month: '2015-05', value: 20, valueb: 55, total: 20+55}
	],
	// The name of the data record attribute that contains x-values.
	xkey: 'month',
	// A list of names of data record attributes that contain y-values.
	ykeys: ['value', 'valueb', 'total'],

	xLabels: 'month',
	// Labels for the ykeys -- will be displayed when you hover over the
	// chart.
	labels: ['Memoria Ram', 'Monitor', 'Total']
});
</script>

<script type="text/javascript">
new Morris.Donut({
  	// ID of the element in which to draw the chart.
  	element: 'mysecondchart',
	// Chart data records -- each entry in this array corresponds to a point on
	// the chart.
	data: [
	{ label: 'Marcus Flavio', value: 15 },
	{ label: 'Vendedor 2', value: 5 },
	{ label: 'Vendedor 3', value: 20}
	]
});
</script>


