<form  name="add-ligacao" method="post" action="arquivo.php" class="form-horizontal" enctype="multipart/form-data">
<script>
        $(document).ready(function() { $("#autor").select2(); });
</script>
<fieldset>

<!-- Form Name -->
<legend>Cadastrar Arquivo</legend>
<?
// Pega variáveis Iniciais
$id= $_GET["id"];
if(isset($_GET["modulo"])){
  $modulo= $_GET["modulo"];
  $info_modulo = 
'<div class="control-group">
  <label class="control-label" for="nome"></label>
  <div class="controls"> Módulo: '.$modulo.' <br/> idItemModulo: '.$id.'</div>
</div>';
}
?>



<!-- Text input-->
<?php echo $info_modulo; ?>

<div class="control-group">
  <label class="control-label" for="nome">Nome:</label>
  <div class="controls">
    <input id="nome" name="nome" type="text" placeholder="Nome do Arquivo" class="input-xlarge">
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="caminho">Arquivo:</label>
  <div class="controls">
    <input id="caminho" name="caminho" type="file" placeholder="http://www..." class="input-xlarge">
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="extensao">Extensão:</label>
  <div class="controls">
    <select id="extensao" name="extensao" class="input-medium">
      <option>PDF</option>
      <option>DOC</option>
      <option>XLS</option>
      <option>RTF</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="autor">Autor:</label>
  <div class="controls">
    <select id="autor" name="autor" class="input-xlarge">
      <option>-- Selecione --</option>
      <?php
      $sql = "SELECT * FROM pessoas ORDER BY nome ASC";
      foreach($conn->query($sql) as $pessoa){
        ?>
        <option value='<?php echo $pessoa["id"]; ?>'><?php echo $pessoa["nome"]; ?> <?php echo $pessoa["sobrenome"]; ?></option>
        <?php
      }
      ?>
    </select>
  </div>
</div>

<!-- Textarea -->
<div class="control-group">
  <label class="control-label" for="descricao">Descrição:</label>
  <div class="controls">                     
    <textarea id="descricao" name="descricao"></textarea>
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="button1id">&nbsp;</label>
  <div class="controls">
    <button type="submit" class="btn btn-success">Salvar</button>
  </div>
</div>
<input type="hidden" name="idItemModulo" value="<?php echo $id; ?>" />
<input type="hidden" name="modulo" value="<?php echo $modulo; ?>" />
<input type="hidden" name="action" value="add" />
</fieldset>
</form>