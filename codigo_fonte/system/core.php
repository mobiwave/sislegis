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


		<link href="css/select2.css" rel="stylesheet" media="screen">
		<script src="js/select2.js"></script>

		<!-- Tablesorter: required for bootstrap -->
		<link rel="stylesheet" href="css/theme.bootstrap.css">
		<script src="js/jquery.tablesorter.js"></script>
		<script src="js/jquery.tablesorter.widgets.js"></script>

		<!-- Tablesorter: optional -->
		<link rel="stylesheet" href="jsjquery.tablesorter.pager.css">
		<script src="js/jquery.tablesorter.pager.js"></script>


		<!-- Styles Em Desenvolvimento -->
		<style type="text/css">
		#wrap{width:940px; margin: 0 auto;}
		#header {border-top:10px solid #ddd; padding-top:30px;}
		.form-horizontal .control-group {margin-bottom: 7px;}
		label, input, button, select, textarea {font-size:12px;}
		legend.inside {font-size: 12px; font-weight: bold; line-height: 30px; margin-bottom:10px;}
		.navbar .nav  li  a { font-size: 12px;}
		.after-options ul li{ text-indent: 5px; border-left: 2px solid #08c; margin-bottom: 2px;}
		table {font-size: 12px;}

		#footer{height: 60px; margin-top: 100px; border-bottom:1px solid #ddd;}
		#footer span{font-size: 11px; float: right; padding: 30px 10px 0 0; color: #999}

		textarea{width:274px;height:100px;}
	
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
			<ul class="nav">
				<li><a href="index.php">Home</a></li>
				<li class="divider-vertical"></li>
				<li class="dropdown">
		  			<a class="dropdown-toggle" id="Ferramentas" role="button" data-toggle="dropdown" data-target="#" href="#"> Módulos <b class="caret"></b></a>
  					<ul class="dropdown-menu" role="menu" aria-labelledby="Ferramentas">
						<li class="dropdown-submenu">
						<a tabindex="-1" href="#">Reuniões de Pauta</a>
							<ul class="dropdown-menu">
								<li><a href="add-reuniao.php">Cadastrar Reunião de Pauta</a></li>
								<li><a href="list-reunioes.php">Pesquisar Reuniões de Pauta</a></li>
								<li><a href="reports-reunioes.php">Relatórios de Reuniões de Pauta</a></li>
							</ul>
						</li>
						<li class="dropdown-submenu">
							<a tabindex="-1" href="#">Proposições</a>
							<ul class="dropdown-menu">
								<li><a href="proposicao.php?a=add">Cadastrar Proposição</a></li>
								<li><a href="proposicao.php?a=list">Pesquisar Proposições</a></li>
							</ul>
						</li>
						<li class="dropdown-submenu">
							<a tabindex="-1" href="#">Ligações</a>
							<ul class="dropdown-menu">
								<li><a href="ligacao.php?a=add">Cadastrar Ligação</a></li>
								<li><a href="ligacao.php?a=list">Pesquisar Ligações</a></li>
		  					</ul>
		  				</li>
						<li class="dropdown-submenu">
							<a tabindex="-1" href="#">Cadastro de Pessoas</a>
							<ul class="dropdown-menu">
								<li><a href="pessoa.php?a=add">Cadastrar Pessoa</a></li>
								<li><a href="pessoa.php?a=list">Pesquisar Pessoas</a></li>
							</ul>
						</li>
				  	</ul>
				 </li>
				<li class="divider-vertical"></li>
				<li class="dropdown">
		  			<a class="dropdown-toggle" id="Ferramentas" role="button" data-toggle="dropdown" data-target="#" href="#"> Módulos de Suporte <b class="caret"></b></a>
  					<ul class="dropdown-menu" role="menu" aria-labelledby="Ferramentas">
						<li class="dropdown-submenu">
							<a tabindex="-1" href="#">Arquivos</a>
							<ul class="dropdown-menu">
								<li><a href="arquivo.php?a=add">Cadastrar Arquivo </a></li>
								<li><a href="arquivo.php?a=list">Pesquisar Arquivos</a></li>
		  					</ul>
		  				</li>
						<li class="dropdown-submenu">
							<a tabindex="-1" href="#">Anotacoes</a>
							<ul class="dropdown-menu">
								<li><a href="anotacao.php?a=view">Cadastrar Anotação </a></li>
								<li><a href="anotacao.php?a=list">Pesquisar Anotações</a></li>
		  					</ul>
		  				</li>
						<li class="dropdown-submenu">
							<a tabindex="-1" href="#">Tarefas</a>
							<ul class="dropdown-menu">
								<li><a href="anotacao.php?a=add">Cadastrar Tarefa </a></li>
								<li><a href="anotacao.php?a=list">Pesquisar Tarefas</a></li>
		  						<li><a href="anotacao.php?a=report">Relatório de Tarefas</a></li>
		  					</ul>
		  				</li>
				  	</ul>
				 </li>
				<li class="divider-vertical"></li>
				<li class="dropdown">
		  			<a class="dropdown-toggle" id="Ferramentas" role="button" data-toggle="dropdown" data-target="#" href="#"> Administração <b class="caret"></b></a>
  					<ul class="dropdown-menu" role="menu" aria-labelledby="Ferramentas">
  						<li><a href="#">Carregar Novas Proposições</a></li>
  						<li><a href="#">Carregar Votações</a></li>
				  	</ul>
				 <li class="divider-vertical"></li>
				 </li>
			</ul>
		</div>
	</div>
	<?php
}


function render_footer(){
	?>
	<div id="footer">
		<span >suporte: matheus.neves@gmail.com</span>
	</div>
</div>
</body>
</html>
	<?php
}






function is_unique($parametros, $tabela){
  global $conn;
  $fields_array = explode(",",$parametros);

  end($fields_array);
  $last_col = key($fields_array);


  $where_cols = '';
  foreach ($fields_array as $k => $v ){
  	$value = $_POST[$v];
    if($k != $last_col){
    	$where_cols .= "$v = '$value' AND ";
    }else{
      $where_cols .= "$v = '$value'";
    }
  }

//  echo $where_cols;

  $q = "SELECT count(*) FROM $tabela WHERE $where_cols";
  $conta = $conn->prepare($q);
  $conta->execute();
  $numero = $conta->fetchColumn();

  if ($numero > 0 ) {
  	return false;
 	} else {
  	return true;
	}

}







function upload_file ($modulo, $file){
  $ano = date("Y");
  $mes = date("m");
  $dia = date("d");
  $data = date("Y_m_d");
  $hora = date("h_i_s");
  $caminho_upload = './uploads/'.$modulo.'/'.$ano.'/'.$mes.'/'.$dia.'/';
  $nome_arquivo= $data.'-'.$hora.'_'.$_FILES["caminho"]["name"];


  $enviado = FALSE;

  // Criaçao da Pasta destino do upload

  $caminho_dia = 'uploads/'.$modulo.'/'.$ano.'/'.$mes.'/'.$dia.'/';
  $caminho_mes = 'uploads/'.$modulo.'/'.$ano.'/'.$mes.'/';
  $caminho_ano = 'uploads/'.$modulo.'/'.$ano.'/';

  global $caminho_total;
  $caminho_total = $caminho_dia.$nome_arquivo;


  if(file_exists($caminho_dia)){
    move_uploaded_file($_FILES["caminho"]["tmp_name"],$caminho_dia.$nome_arquivo);
    $enviado = TRUE;
  }
  
  if($enviado !=TRUE && file_exists($caminho_mes)){
    // Criar pasta para o dia
    mkdir($caminho_mes.$dia, 0700);
    //UPLOAD script
    move_uploaded_file($_FILES["caminho"]["tmp_name"],$caminho_dia.$nome_arquivo);
    $enviado = TRUE;
  }

  if($enviado !=TRUE && !file_exists($caminho_mes) && file_exists($caminho_ano)){
    // Criar pasta do mês
    mkdir($caminho_mes, 0700);
    // Criar pasta para o dia
    mkdir($caminho_mes.$dia, 0700);
    //UPLOAD script
    move_uploaded_file($_FILES["caminho"]["tmp_name"],$caminho_dia.$nome_arquivo);
    $enviado = TRUE;
  }

  if($enviado !=TRUE && !file_exists($caminho_ano)){
    // Criar pasta do ano
    mkdir($caminho_ano, 0700);
    // Criar pasta do mês
    mkdir($caminho_mes, 0700);
    // Criar pasta para o dia
    mkdir($caminho_mes.$dia, 0700);
    //UPLOAD script
    move_uploaded_file($_FILES["caminho"]["tmp_name"],$caminho_dia.$nome_arquivo);
    $enviado = TRUE;
  }
}














?>