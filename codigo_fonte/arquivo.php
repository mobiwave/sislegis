<?php include("system/core.php"); ?>
<?php render_header("Sistema de Acompanhamento Legislativo e Gestão de Gabinete"); ?>


<div id="header">
	<?php render_menu(); ?>
<div id="content">
<?php

if (isset($_GET["a"]) && $_GET["a"] == "add"){
	require("./modulos/arquivos/arquivo-add.php");
}

if (isset($_GET["a"]) && $_GET["a"] == "edit"){
	require("./modulos/arquivos/arquivo-edit.php");
}

if (isset($_GET["a"]) && $_GET["a"] == "del"){
	require("./modulos/arquivos/arquivo-del.php");
	require("./modulos/arquivos/arquivo-list.php");
	require("./modulos/table-sorter.php");
}

if (isset($_POST["action"]) && $_POST["action"] == "add"){
	require("./modulos/arquivos/arquivo-add-ok.php");
}

if (isset($_POST["action"]) && $_POST["action"] == "edit"){
	require("./modulos/arquivos/arquivo-edit-ok.php");
}

if (isset($_GET["a"]) && $_GET["a"] == "list"){
	require("./modulos/arquivos/arquivo-list.php");
	require("./modulos/table-sorter.php");
}

if (isset($_GET["a"]) && $_GET["a"] == "view"){
	require("./modulos/arquivos/arquivo-view.php");
}



?>
	
</div>

<?php render_footer();?>