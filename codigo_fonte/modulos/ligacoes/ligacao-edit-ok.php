


<!-- Form Name -->
<legend>Editar Ligação</legend>

<div class="alert alert-success">
  Ligação Editada com <strong>sucesso!</strong>
</div>

<!-- Button (Double) -->
<?php

//Pega todas as Colunas que Vieram no POST e remove o campo Action
$form_data = $_POST;
$id = $_POST["id"];
unset($form_data["action"]);
unset($form_data["id"]);


// Array para pegar o nome das colunas
$array_colunas = array_keys($form_data);

//Variaveis são geradas dinamicamente baseado nos nomes das colunas
foreach($array_colunas as $coluna){
  @$colunas_nomes .= $coluna."=?, ";
  @$colunas_valores .= ",:".$coluna;
  $$coluna = $_POST[$coluna];
  
  //usado para copiar e colar no PDO execute
  //echo "$".$coluna.",";
}

$colunas_nomes = substr($colunas_nomes, 0, -2);
echo $colunas_nomes;


// Indicar em qual tabela os registros será salvo
$tabela = "ligacoes";

// query
$sql = "UPDATE ligacoes 
        SET $colunas_nomes
    WHERE id=?";
$q = $conn->prepare($sql);
$q->execute(array($de,$para,$tipo,$data,$hora,$registradaPor,$situacao,$observacoes,$id));

?>




  <div class="after-options">
    <legend class="inside"> Opções</legend>
    <ul class="unstyled">
      <li><a href="ligacao.php?a=add">Cadastrar Ligação</a></li>
      <li><a href="ligacao.php?a=list">Pesquisar Ligações</a></li>
      <li><a href="ligacao.php?a=edit&id=<?php echo $id ?>">Editar Novamente</a></li>
    </ul>
  </div>


</div>

