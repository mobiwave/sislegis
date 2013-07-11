<form  name="add-ligacao" method="post" action="ligacao.php" class="form-horizontal" >
<script>
        $(document).ready(function() { $("#de").select2(); });
        $(document).ready(function() { $("#para").select2(); });
</script>
<fieldset>

<!-- Form Name -->
<legend>Cadastrar Ligação</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="de">De:</label>
  <div class="controls">
    <select id="de" name="de" class="input-xlarge">
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

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="para">Para:</label>
  <div class="controls">
    <select id="para" name="para" class="input-xlarge">
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


<!-- Multiple Radios -->
<div class="control-group">
  <label class="control-label" for="tipo">Tipo:</label>
  <div class="controls">
    <label class="radio" for="callType-0">
      <input type="radio" name="tipo" id="callType-0" value="Recebida" checked="checked">
      Recebida
    </label>
    <label class="radio" for="callType-1">
      <input type="radio" name="tipo" id="callType-1" value="Realizada">
      Realizada
    </label>
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="data">Data:</label>
  <div class="controls">
    <?php
    $date = date("Y/m/d");
    ?>
    <input id="data" name="data" type="text" value="<?php echo $date ?>" class="input-small">
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="hora">Hora:</label>
  <div class="controls">
    <?php
    $time = date("H:i:s");
    ?>
    <input id="hora" name="hora" type="text" value="<?php echo $time ?>" class="input-small">
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="registradaPor">Registrada Por:</label>
  <div class="controls">
    <select id="registradaPor" name="registradaPor" class="input-large">
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

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="situacao">Situação: </label>
  <div class="controls">
    <select id="situacao" name="situacao" class="input-large">
      <option>-- Selecione --</option>
      <option>Pendente Retorno</option>
      <option>Retornada</option>
      <option>Sem Pendências</option>
    </select>
  </div>
</div>

<!-- Textarea -->
<div class="control-group">
  <label class="control-label" for="observacoes">Observações:</label>
  <div class="controls">                     
    <textarea id="observacoes" name="observacoes" rows="5"> </textarea>
  </div>
</div>

<!-- Button (Double) -->
<div class="control-group">
  <label class="control-label" for="button1id">&nbsp;</label>
  <div class="controls">
    <button type="submit" class="btn btn-success">Salvar</button>
  </div>
</div>

    
<input type="hidden" name="action" value="add" />
</fieldset>
</form>