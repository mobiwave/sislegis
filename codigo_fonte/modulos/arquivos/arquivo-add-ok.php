


<!-- Form Name -->
<legend>Cadastrar Proposição</legend>

<!-- Button (Double) -->
<?php

//Pega todas as Colunas que Vieram no POST e remove o campo Action
$form_data = $_POST;
unset($form_data["action"]);
upload_file("arquivos", "caminho");  
$form_data["caminho"] = $caminho_total;


// Array para pegar o nome das colunas
$array_colunas = array_keys($form_data);

//Variaveis são geradas dinamicamente baseado nos nomes das colunas
foreach($array_colunas as $coluna){
  @$colunas_nomes .= ",".$coluna;
  @$colunas_valores .= ",:".$coluna;
  @$$coluna = $_POST[$coluna];

  //Cria o array de insercao no banco
  //@$pdo_insert_array .= "':".$coluna."'=>$".$coluna.", <br/>";
}

$colunas_nomes = substr($colunas_nomes, 1);
$colunas_valores = substr($colunas_valores, 1);
 //echo $pdo_insert_array;
// descomnetar a linha acima apenas para imprimir o array usado no excute


// Indicar em qual tabela os registros será salvo
$tabela = "arquivos";

$sql = "INSERT INTO $tabela ($colunas_nomes) VALUES ($colunas_valores)";
$q = $conn->prepare($sql);
$q->execute(array(':nome'=>$nome, 
':extensao'=>$extensao, 
':autor'=>$autor, 
':descricao'=>$descricao, 
':idItemModulo'=>$idItemModulo, 
':modulo'=>$modulo,
':caminho'=>$caminho_total));  
$id = $conn->lastInsertId();

/* Unique Cols Script
$unique_cols =  'numero,ano';
if (is_unique($unique_cols, $tabela) == TRUE){
  ....... Colocar o $q->execute aqui  .....
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
*/





?>

    <div class="alert alert-success">
      Arquivo Cadastrado com <strong>sucesso!</strong>
    </div>


  <div class="after-options">
    <legend class="inside"> Opções</legend>
    <ul class="unstyled">
      <li><?php
      if($_POST["modulo"] == 'Proposicoes'){
          $modulo_url = 'proposicao.php?a=view&id='.$idItemModulo;
      ?>
      <a href="<?php echo $modulo_url; ?>">Voltar</a></li>
      <?php
    }
      ?>
    </ul>
  </div>


</div>

