<script>
        $(document).ready(function() { $("#tipo").select2(); });
</script>

<?php
$id = $_GET["id"];
$sql = "SELECT * from proposicoes where id = $id limit 1";
foreach($conn->query($sql) as $registro){
  $tipo               =   $registro["tipo"];
  $numero             =   $registro["numero"];
  $ano                =   $registro["ano"];
  $dataApresentacao   =   $registro["dataApresentacao"];
  $autor              =   $registro["autor"];
  $ementa             =   $registro["ementa"];
  $link               =   $registro["link"];
  $explicacao         =   $registro["explicacao"];
  $indexacao          =   $registro["indexacao"];
  $situacao           =   $registro["situacao"];
  $ultimoDespacho     =   $registro["ultimoDespacho"];
}
?>

<form  name="proposicao-edit" method="post" action="proposicao.php" class="form-horizontal" >
<fieldset>
<!-- Form Name -->
<legend>Editar Proposição </legend>


<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="tipo">Tipo:</label>
  <div class="controls">
    <select id="tipo" name="tipo" class="input-large">
      <?php
      $q = "SELECT * FROM tipo_proposicao ORDER BY sigla ASC";
      foreach($conn->query($q) as $tpls){
        $selected='';
        if($tpls["id"] == $tipo){
          $selected = 'selected';
        }
      ?>
        <option <?php echo $selected; ?> value="<?php echo $tpls['id']; ?>"><?php echo $tpls["sigla"]; ?></option>
      <?php
        }
      ?>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="ano">Ano:</label>
  <div class="controls">
    <select id="ano" name="ano" class="input-small">
      <?php
        $ano_atual = date("Y");
        for ($i = $ano_atual ; $i >= 2000 ; $i--){
          $selected ='';
          if($i == $ano){
            $selected = "selected";
          }
        ?>
      <option <?php echo $selected; ?> value="<?php echo $i; ?>"><?php echo $i ?></option>
      <?php
       }
      ?>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="numero">Número:</label>
  <div class="controls">
    <input id="numero" name="numero" type="text" placeholder="Número" class="input-small" value="<?php echo $numero ;?>" />
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="dataApresentacao">Data de Apresentação:</label>
  <div class="controls">
    <input id="dataApresentacao" name="dataApresentacao" type="text" placeholder="Data de Apresentação" class="input-medium" value="<?php echo $dataApresentacao ;?>" />
    
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="autor">Autor:</label>
  <div class="controls">
    <input id="autor" name="autor" type="text" placeholder="Autor" class="input-xlarge" value="<?php echo $autor ;?>" >
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="ementa">Ementa: </label>
  <div class="controls">
    <textarea name="ementa"><?php echo $ementa ;?></textarea>
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="link">Link:</label>
  <div class="controls">
    <input id="link" name="link" type="text" placeholder="http://....." class="input-xlarge" value="<?php echo $link ;?>" >
    
  </div>
</div>

<!-- Textarea -->
<div class="control-group">
  <label class="control-label" for="explicacao">Explicação:</label>
  <div class="controls">                     
    <textarea id="explicacao" name="explicacao"><?php echo $explicacao ;?></textarea>
  </div>
</div>

<!-- Textarea -->
<div class="control-group">
  <label class="control-label" for="indexacao">Indexação:</label>
  <div class="controls">                     
    <textarea id="indexacao" name="indexacao"><?php echo $indexacao ;?></textarea>
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="button1id">&nbsp;</label>
  <div class="controls">
    <button type="submit" class="btn btn-success">Salvar</button>
  </div>
</div>

<input type="hidden" name="id" value="<?php echo $id ;?>" />
<input type="hidden" name="action" value="edit" />
</fieldset>
</form>

<form  name="proposicao-add" method="post" action="proposicao.php" class="form-horizontal" >
<fieldset>
<legend class="small">Dados da Câmara</legend>
<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="situacao">Situação:</label>
  <div class="controls">
    <input id="situacao" name="situacao" type="text" placeholder="" class="input-xlarge">
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="ultimoDespacho">Último Despacho:</label>
  <div class="controls">
    <input id="ultimoDespacho" name="ultimoDespacho" type="text" placeholder="" class="input-xlarge">
  </div>
</div>
</fieldset>
</form>
