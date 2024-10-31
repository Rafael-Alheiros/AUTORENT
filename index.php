<!DOCTYPE html>

<?php
// Inicia a sessão.
session_start();

if (isset($_SESSION['cpf'])) {
	$cpf = $_SESSION['cpf'];
	$tipo = $_SESSION['tipo'];
}
else{
	$tipo = '';
}
?>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title></title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="http://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
	<link href="css/default.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/fonts.css" rel="stylesheet" type="text/css" media="all" />
	<link href="icon.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body>
	<div id="wrapper1">
		<div id="header-wrapper">
			<div id="header" class="container">
				<div id="logo">
					<div id="wrapper1">
						<div id="espaço_container" class="container">
							<div id="logo_site">
								<img src="images/carros_logo.png" alt="some text" width=940 height=200>
							</div>
						</div>
					</div>
					<h1><a href="#">A AUTORENT oferece aluguel de carros 100% elétricos para você explorar o mundo com conforto e sustentabilidade, reduzindo o impacto ambiental. Alugue e faça a diferença!</a></h1>
					<div id="menu">
						<ul>
							<?php
								if($tipo = 'F'){
									print "<li class='current_page_item'><a href='indexFuncionario.php' accesskey='1' title=''>Principal</a></li>";
								}
								else if ($tipo = 'C'){
									print "<li class='current_page_item'><a href='indexCliente.php' accesskey='1' title=''>Principal</a></li>";
								}
								else{
									print "<li class='current_page_item'><a href='index.php' accesskey='1' title=''>Principal</a></li>";
								}
								
							?>
							<?php 
								if (isset($_SESSION['cpf'])) {
									print "<li><a href='login/logout.php' accesskey='2' title=''>Logout</a></li>";
								}
								else {
									print "<li><a href='login/login.php' accesskey='2' title=''>Login</a></li>";
								}
							?>
							
							<li><a href="categorias/economicos.php" accesskey="3" title="">Econômicos</a></li>
							<li><a href="categorias/utilitarios.php" accesskey="4" title="">Utilitários</a></li>
							<li><a href="categorias/suv.php" accesskey="5" title="">SUV</a></li>
							<li><a href="categorias/luxo.php" accesskey="6" title="">Luxo</a></li>
							<li><a href="contato.php" accesskey="7" title="">Contato</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div id="wrapper2">
				<div id="welcome" class="container">
					<div class="title">
						<h2>Bem-vindo(a) a AUTORENT, sua locadora de carros ecológica!</h2>
					</div>
					<h3>Esta é uma locadora desenvolvida para facilitar o aluguel de veículos elétricos e sustentáveis.</h3>
				</div>
			</div>
			<div id="wrapper3">
				<div id="portfolio" class="container">
					<div class="title">
						<h2>Vantagens de se alugar um automóvel elétrico</h2>
					</div>
					<div class="column1">
						<div class="box">
							<span class="icon icon-wrench"></span>
							<h3>Economia em combustível</h3>
							<p>Veículos elétricos não exigem gasolina, resultando em grande economia!</p>
						</div>
					</div>
					<div class="column2">
						<div class="box">
							<span class="icon icon-trophy"></span>
							<h3>Menor impacto ambiental!</h3>
							<p>Carros elétricos emitem menos poluentes, ajudando a proteger o meio ambiente!</p>

						</div>
					</div>
					<div class="column3">
						<div class="box">
							<span class="icon icon-key"></span>
							<h3>Menos manutenção!</h3>
							<p>Veículos elétricos possuem menos partes móveis, como ausência de motores a combustão e trocas de óleo. </p>
						</div>
					</div>
					<div class="column4">
						<div class="box">
							<span class="icon icon-lock"></span>
							<h3>Redução de ruído!</h3>
							<p>Veículos elétricos são notoriamente silenciosos, proporcionando menor poluição sonora nas cidades.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper1">
			<div id="espaço_container" class="container">
				<div class="title">
					<h2>Temos o carro elétrico que cabe no seu orçamento!</h2>
					<img src="images/veiculos.png" alt="some text" width=800 height=280>
				</div>
			</div>
		</div>
		<div id="espaço_container" class="container">
			<div class="title">
				<h2>Acesse nossas redes sociais!</h2>
				<span class="byline">Estamos sempre a disposição de nossos clientes!</span>
			</div>
			<ul class="contact">
			<li><a href="https://twitter.com" class="icon icon-twitter" target="_blank"><span>Twitter</span></a></li>
<li><a href="https://facebook.com" class="icon icon-facebook" target="_blank"><span>Facebook</span></a></li>
<li><a href="https://pinterest.com" class="icon icon-dribbble" target="_blank"><span>Pinterest</span></a></li>
<li><a href="https://plus.google.com" class="icon icon-tumblr" target="_blank"><span>Google+</span></a></li>
<li><a href="https://pinterest.com" class="icon icon-rss" target="_blank"><span>Pinterest</span></a></li>

			</ul>
			<div id="espaço_container" class="container">
			</div>
		</div>
</body>

</html>