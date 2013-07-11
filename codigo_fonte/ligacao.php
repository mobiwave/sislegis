<?php include("system/core.php"); ?>
<?php render_header("Sistema de Acompanhamento Legislativo e Gestão de Gabinete"); ?>


<div id="header">
	<?php render_menu(); ?>
<div id="content">
<?php

if (isset($_GET["a"]) && $_GET["a"] == "add"){
	require("./modulos/ligacoes/ligacao-add.php");
}

if (isset($_GET["a"]) && $_GET["a"] == "edit"){
	require("./modulos/ligacoes/ligacao-edit.php");
}

if (isset($_GET["a"]) && $_GET["a"] == "del"){
	require("./modulos/ligacoes/ligacao-del.php");
	require("./modulos/ligacoes/ligacao-list.php");
	require("./modulos/table-sorter.php");
}

if (isset($_POST["action"]) && $_POST["action"] == "add"){
	require("./modulos/ligacoes/ligacao-add-ok.php");
}

if (isset($_POST["action"]) && $_POST["action"] == "edit"){
	require("./modulos/ligacoes/ligacao-edit-ok.php");
}

if (isset($_GET["a"]) && $_GET["a"] == "list"){
	require("./modulos/ligacoes/ligacao-list.php");
	require("./modulos/table-sorter.php");
}

if (isset($_GET["a"]) && $_GET["a"] == "view"){
	require("./modulos/ligacoes/ligacao-view.php");
}



?>
	
</div>

<?php render_footer();?>