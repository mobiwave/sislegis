<?php

$id = $_GET["id"];
$sql = "SELECT * from ligacoes where id = $id limit 1";
foreach($conn->query($sql) as $registro){
$de = $registro["de"] ;
$para = $registro["para"] ;
$tipo = $registro["tipo"] ;
$data = $registro["data"] ;
$hora = $registro["hora"] ;
$registradaPor = $registro["registradaPor"] ;
$situacao = $registro["situacao"] ;
$observacoes = $registro["observacoes"] ;;
}

?>

<form  name="add-ligacao" method="post" action="ligacao.php" class="form-horizontal" >
<script>
        $(document).ready(function() { $("#de").select2(); });
        $(document).ready(function() { $("#para").select2(); });
</script>
<fieldset>

<!-- Form Name -->
<legend>Editar Ligação</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="de">De:</label>
  <div class="controls">
    <select id="de" name="de" class="input-xlarge">
      <option>-- Selecione --</option>
      <?php
      $sql = "SELECT * FROM pessoas ORDER BY nome ASC";
      foreach($conn->query($sql) as $pessoa){
        $selected = '';
        if ($pessoa["id"] == $de){
          $selected = "selected";
        }
        ?>
        <option <?php echo $selected; ?> value='<?php echo $pessoa["id"]; ?>'><?php echo $pessoa["nome"]; ?> <?php echo $pessoa["sobrenome"]; ?></option>
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
        $selected = '';
        if ($pessoa["id"] == $para){
          $selected = "selected";
        }
        ?>
        <option <?php echo $selected; ?> value='<?php echo $pessoa["id"]; ?>'><?php echo $pessoa["nome"]; ?> <?php echo $pessoa["sobrenome"]; ?></option>
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
    <?php
      $tiposDefault = array("Recebida","Realizada");
      foreach($tiposDefault as $tpd){
        $checked = ''; 
        if($tpd == $tipo){
            $checked = 'checked="checked"';
          }
        ?>
    <label class="radio" for="callType-0">
      <input type="radio" name="tipo" id="callType-0" value="<?php echo $tpd; ?>" <?php echo $checked; ?> />
      Recebida
    </label>
    <?php
   }
    ?>
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="data">Data:</label>
  <div class="controls">
    <input id="data" name="data" type="text" value="<?php echo $data ?>" class="input-small">
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="hora">Hora:</label>
  <div class="controls">
    <input id="hora" name="hora" type="text" value="<?php echo $hora ?>" class="input-small">
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="registradaPor">Registrada Por:</label>
  <div class="controls">
    <select id="registradaPor" name="registradaPor" class="combobox input-large">
      <option>-- Selecione --</option>
      <?php
      $sql = "SELECT * FROM pessoas ORDER BY nome ASC";
      foreach($conn->query($sql) as $pessoa){
        $selected = '';
        if ($pessoa["id"] == $registradaPor){
          $selected = "selected";
        }
        ?>
        <option <?php echo $selected; ?> value='<?php echo $pessoa["id"]; ?>'><?php echo $pessoa["nome"]; ?> <?php echo $pessoa["sobrenome"]; ?></option>
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

      <?php
        $situacoesDefault = array("Pendente Retorno","Retornada","Sem Pendências");
        foreach($situacoesDefault as $std){
          $selected = ''; 
          if($std == $situacao){
            $selected = 'selected';
          }
        ?>
      <option <?php echo $selected; ?> value="<?php echo $std; ?>"><?php echo $std; ?></option>
      <?php } ?>
    </select>
  </div>
</div>

<!-- Textarea -->
<div class="control-group">
  <label class="control-label" for="observacoes">Observações:</label>
  <div class="controls">                     
    <textarea id="observacoes" name="observacoes" rows="5"><?php echo $observacoes ?></textarea>
  </div>
</div>

<!-- Button (Double) -->
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