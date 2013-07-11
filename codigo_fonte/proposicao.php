<?php include("system/core.php"); ?>
<?php render_header("Sistema de Acompanhamento Legislativo e Gestão de Gabinete"); ?>


<div id="header">
	<?php render_menu(); ?>
<div id="content">
<?php

if (isset($_GET["a"]) && $_GET["a"] == "add"){
	require("./modulos/proposicoes/proposicao-add.php");
}

if (isset($_GET["a"]) && $_GET["a"] == "edit"){
	require("./modulos/proposicoes/proposicao-edit.php");
}

if (isset($_GET["a"]) && $_GET["a"] == "del"){
	require("./modulos/proposicoes/proposicao-del.php");
	require("./modulos/proposicoes/proposicao-list.php");
	require("./modulos/table-sorter.php");
}

if (isset($_POST["action"]) && $_POST["action"] == "add"){
	require("./modulos/proposicoes/proposicao-add-ok.php");
}

if (isset($_POST["action"]) && $_POST["action"] == "edit"){
	require("./modulos/proposicoes/proposicao-edit-ok.php");
}

if (isset($_GET["a"]) && $_GET["a"] == "list"){
	require("./modulos/proposicoes/proposicao-list.php");
	require("./modulos/table-sorter.php");
}

if (isset($_GET["a"]) && $_GET["a"] == "view"){
	require("./modulos/proposicoes/proposicao-view.php");
}



?>
	
</div>

<?php render_footer();?>