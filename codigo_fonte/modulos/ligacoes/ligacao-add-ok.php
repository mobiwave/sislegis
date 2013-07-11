


<!-- Form Name -->
<legend>Cadastrar Pessoa</legend>

<div class="alert alert-success">
  Ligação Cadastrada com <strong>sucesso!</strong>
</div>

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
$tabela = "ligacoes";

$sql = "INSERT INTO $tabela ($colunas_nomes) VALUES ($colunas_valores)";
$q = $conn->prepare($sql);
$q->execute(array(':de'=>$de, 
':para'=>$para, 
':tipo'=>$tipo, 
':data'=>$data, 
':hora'=>$hora, 
':registradaPor'=>$registradaPor, 
':situacao'=>$situacao, 
':observacoes'=>$observacoes));

$id = $conn->lastInsertId();

?>




  <div class="after-options">
    <legend class="inside"> Opções</legend>
    <ul class="unstyled">
      <li><a href="ligacao.php?a=add">Cadastrar Ligação</a></li>
      <li><a href="ligacao.php?a=list">Pesquisar Ligações</a></li>
      <li><a href="ligacao.php?a=edit&id=<?php echo $id ?>">Editar Ligação</a></li>
    </ul>
  </div>


</div>

