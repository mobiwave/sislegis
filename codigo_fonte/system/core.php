<?php
// Include all the modules

require("db_config.php");


function render_header($page_title){
	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<title><?php echo $page_title ?> </title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<!-- Fim Bootstrap -->
		<style type="text/css">
		#wrap{width:940px; margin: 0 auto;}
		#header {border-top:10px solid #ddd; padding-top:30px;}
		</style>
	</head>
	<body>
<div id="wrap">
	<?php
}


function render_menu(){
	?>
	<div class="navbar">
		<div class="navbar-inner">
			<ul class="nav ">
				<li><a href="index.php" >Home</a></li>
				<li class="divider-vertical"></li>
				<li><a href="pauta-segunda.php" > Reunião de Segunda </a></li>
				<li><a href="obter-pauta.php" > Pauta da Semana</a></li>
				<li><a href="lista-comissoes.php" >Lista de Comissões</a></li>
			</ul>
		</div>
	</div>
	<?php
}


function render_footer(){
	?>
	<div id="footer">
	</div>
</div>
</body>
</html>
	<?php
}





?>