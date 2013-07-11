


<!-- Form Name -->
<legend>Cadastrar Proposição</legend>

<!-- Button (Double) -->
<?php

//Pega todas as Colunas que Vieram no POST e remove o campo Action
$form_data = $_POST;
unset($form_data["action"]);


// Array para pegar o nome das colunas
$array_colunas = array_keys($form_data);

//Variaveis são geradas dinamicamente baseado nos nomes das colunas
foreach($array_colunas as $coluna){
  @$colunas_nomes .= ",".$coluna;
  @$colunas_valores .= ",:".$coluna;
  $$coluna = $_POST[$coluna];

  //Cria o array de insercao no banco
  //@$pdo_insert_array .= "':".$coluna."'=>$".$coluna.", <br/>";
}

$colunas_nomes = substr($colunas_nomes, 1);
$colunas_valores = substr($colunas_valores, 1);
// echo $pdo_insert_array;
// descomnetar a linha acima apenas para imprimir o array usado no excute


// Indicar em qual tabela os registros será salvo
$tabela = "proposicoes";

$sql = "INSERT INTO $tabela ($colunas_nomes) VALUES ($colunas_valores)";
$q = $conn->prepare($sql);

$unique_cols =  'numero,ano';
$tabela = 'proposicoes';

if (is_unique($unique_cols, $tabela) == TRUE){
  $q->execute(array(':tipo'=>$tipo, 
  ':ano'=>$ano, 
  ':numero'=>$numero, 
  ':dataApresentacao'=>$dataApresentacao, 
  ':autor'=>$autor, 
  ':ementa'=>$ementa, 
  ':link'=>$link, 
  ':explicacao'=>$explicacao, 
  ':indexacao'=>$indexacao, ));
  $id = $conn->lastInsertId();
  ?>

    <div class="alert alert-success">
      Proposição Cadastrada com <strong>sucesso!</strong>
    </div>

  <?php
   } else {
  ?>
    <div class="alert alert-warning">
     Registro possivelmente duplicado. Verificar se Existem registros com os mesmos parametros de: "<strong><?php echo $unique_cols ?></strong>".
    </div>
  <?php

}

?>




  <div class="after-options">
    <legend class="inside"> Opções</legend>
    <ul class="unstyled">
      <li><a href="proposicao.php?a=add">Cadastrar Proposição</a></li>
      <li><a href="proposicao.php?a=list">Pesquisar Proposições</a></li>
      <li><a href="proposicao.php?a=edit&id=<?php echo $id ?>">Editar Proposição Cadastrada</a></li>
    </ul>
  </div>


</div>

