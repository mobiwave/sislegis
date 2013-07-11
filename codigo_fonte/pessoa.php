<?php include("system/core.php"); ?>
<?php render_header("Sistema de Acompanhamento Legislativo e Gestão de Gabinete"); ?>


<div id="header">
	<?php render_menu(); ?>
<div id="content">
<?php

if (isset($_GET["a"]) && $_GET["a"] == "add"){
	require("./modulos/pessoas/pessoa-add.php");
}

if (isset($_GET["a"]) && $_GET["a"] == "edit"){
	require("./modulos/pessoas/pessoa-edit.php");
}

if (isset($_GET["a"]) && $_GET["a"] == "del"){
	require("./modulos/pessoas/pessoa-del.php");
	require("./modulos/pessoas/pessoa-list.php");
	require("./modulos/table-sorter.php");
}

if (isset($_POST["action"]) && $_POST["action"] == "add"){
	require("./modulos/pessoas/pessoa-add-ok.php");
}

if (isset($_POST["action"]) && $_POST["action"] == "edit"){
	require("./modulos/pessoas/pessoa-edit-ok.php");
}

if (isset($_GET["a"]) && $_GET["a"] == "list"){
	require("./modulos/pessoas/pessoa-list.php");
	require("./modulos/table-sorter.php");
}

if (isset($_GET["a"]) && $_GET["a"] == "view"){
	require("./modulos/pessoas/pessoa-view.php");
}



?>
	
</div>

<?php render_footer();?>