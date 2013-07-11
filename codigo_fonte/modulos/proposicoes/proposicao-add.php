<form  name="add-ligacao" method="post" action="proposicao.php" class="form-horizontal" >
<script>
        $(document).ready(function() { $("#tipo").select2(); });
</script>
<fieldset>

<!-- Form Name -->
<legend>Cadastrar Proposições</legend>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="tipo">Tipo:</label>
  <div class="controls">
    <select id="tipo" name="tipo" class="input-large">
      <?php
      $q = "SELECT * FROM tipo_proposicao ORDER BY sigla ASC";
      foreach($conn->query($q) as $tpls){
      ?>
        <option value="<?php echo $tpls['id']; ?>"><?php echo $tpls["sigla"]; ?></option>
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
        ?>
      <option value="<?php echo $i; ?>"><?php echo $i ?></option>
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
    <input id="numero" name="numero" type="text" placeholder="Número" class="input-small">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="dataApresentacao">Data de Apresentação:</label>
  <div class="controls">
    <input id="dataApresentacao" name="dataApresentacao" type="text" placeholder="Data de Apresentação" class="input-medium">
    
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="autor">Autor:</label>
  <div class="controls">
    <input id="autor" name="autor" type="text" placeholder="Autor" class="input-xlarge">
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="ementa">Ementa: </label>
  <div class="controls">
    <input id="ementa" name="ementa" type="text" placeholder="Ementa" class="input-xlarge">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="link">Link:</label>
  <div class="controls">
    <input id="link" name="link" type="text" placeholder="http://....." class="input-xlarge">
    
  </div>
</div>

<!-- Textarea -->
<div class="control-group">
  <label class="control-label" for="explicacao">Explicação:</label>
  <div class="controls">                     
    <textarea id="explicacao" name="explicacao"></textarea>
  </div>
</div>

<!-- Textarea -->
<div class="control-group">
  <label class="control-label" for="indexacao">Indexação:</label>
  <div class="controls">                     
    <textarea id="indexacao" name="indexacao">palavras-chaves</textarea>
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="button1id">&nbsp;</label>
  <div class="controls">
    <button type="submit" class="btn btn-success">Salvar</button>
  </div>
</div>
<input type="hidden" name="action" value="add" />
</fieldset>
</form>