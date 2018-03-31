<!DOCTYPE html>
<html lang="pt-br">
<head>
		<title >Login</title>
		<!-- Bootstrap Core CSS -->
		<link href="_CSS/bootstrap.min.css" rel="stylesheet">
		<!-- Custom CSS -->
		<link href="_CSS/ .css" rel="stylesheet">
<!-- == HEAD =--> <?php include_once('_CODIGOS/head.php') ?>
</head>
<header class="container bg-preto-claro">
		<div class="content">
			<h1 class="fontzero">Cartório - Tabelionato</h1>
			<h2 id="logo" class="link logo alura al-center">
					<a class="link" title="Cartório Tabelionato" href="index.php">
							<img   style="width: 45%;" src="_ICONES/logotipo.png">
				<span id="azul">Fazer</span>
					<span id="branco">Login</span>
<hr>
						<script type="text/javascript">
						setTimeout("document.getElementById('azul').className = 'azul'; document.getElementById('branco').className = 'branco'", 2000);
						</script>
					</a>
			</h2>
		</div>
		<div class="main_header_menu">
		<a class="shoticon menu-mobile" href="#"><img class="sidebar" style="width: 15%;" src="_ICONES/sidebar.png"></a>
			<div class="content">
				<ul class="main_nav menu quicksand al-center">
					<a title="Inicio" href="index.php">								<li>Inicio</li></a>
					<a title="Funcionários" href="funcionarios.	php">	<li>Funcionários</li></a>
					<a title="ChatBot" href="chatbot.php">						<li>ChatBot</li></a>
					<a title="Login" href="login.php">								<li>Login</li></a>
				<!--
				<li class="down-big">Servicos<span class="caret"></span>
					<span class="caret-menu "></span>
					<ul class="radius bg-preto-claro borda-preta block">
						<a class="link" title="Criação de Sites" href=""><li>Criação de Sites</li></a>
						<a class="link" title="Design Gráfico" href=""><li>Design Gráfico</li></a>
						<a class="link" title="Manutenção de Computadores" href=""><li>Manutenção de Computadores</li></a>
					</ul>
				</li>
				-->
					</ul>
				<div class="clear"></div>
			</div>
		</div>
</header>
<body>
			<div class="container bg-preto-claro">
			<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-panel panel panel-default">
						<div class="panel-heading">
							<span class="quicksand">LOGIN</span>
								<script type="text/javascript">
								setTimeout("document.getElementById('azul').className = 'azul'; document.getElementById('branco').className = 'branco'", 2000);
									</script>
						</div>
						<div class="panel-body">
								<?php
								if(isset($erro))
										if(count($erro) > 0){ ?>
												<div class="alert alert-danger">
														<?php foreach($erro as $msg) echo "$msg <br>"; ?>
												</div>
										<?php
										}
										?>
								<form method="post" action="" role="form">
										<fieldset>
												<div class="form-group">
													<label for="usename" class="link"> Usuário</label>
													<input class="form-control" placeholder="Username" name="usuario" type="text" autofocus>
												</div>

												<div class="form-group">
												 <label for="password" class="link"> Senha</label>
														<input class="form-control" required placeholder="Senha" name="password" type="password" value="">
												</div>

												<div class="checkbox">
														<label>
																<input name="remember" type="checkbox" value="Remember Me"><a>Lembrar </a>
														</label>
												</div>

												<button type="submit" name="login" value="true" class="btn btn-success btn-block">Login</button>
										</fieldset>
								</form>
						</div>
				</div>
			</div>
			</div>
			</div>

<!-- == RODAPE =--> <?php include_once('_CODIGOS/rodape.php') ?>
</body>

</html>
