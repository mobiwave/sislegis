<?php include("system/core.php"); ?>
<?php render_header("Sistema de Acompanhamento Legislativo e Gestão de Gabinete"); ?>


<div id="header">
	<?php render_menu(); ?>
<div id="content">



<?php

function is_unique($parametros, $tabela){
  global $conn;
  $fields_array = explode(",",$parametros);

  end($fields_array);
  $last_col = key($fields_array);

  foreach ($fields_array as $k => $v ){
  	$value = $_POST[$v];
    if($k != $last_col){
    	$where_cols .= "$v = $value AND";
    }else{
      $where_cols .= "$v = $value";
    }
  }

  echo $where_cols;

  $q = "SELECT count(*) FROM $tabela WHERE ";
  $conta = $conn->prepare($q);
  $conta->execute();
  $numero = $conta->fetchAll();


echo "<br/>";
  print_r($fields_array);
echo "<br/>";
  print_r($numero);

}

$tabela = 'pessoas';
$unique_cols = 'nome, sobrenome';

is_unique($unique_cols, $tabela);

?>
</div>
</html>