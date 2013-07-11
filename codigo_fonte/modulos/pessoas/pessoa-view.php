<?php

$id = $_GET["id"];
$sql = "SELECT * from pessoas where id = $id limit 1";
foreach($conn->query($sql) as $registro){
  $tratamento = $registro["tratamento"];
  $nome = $registro["nome"];
  $sobrenome = $registro["sobrenome"];
  $orgao = $registro["orgao"];
  $cargo = $registro["cargo"];
  $email = $registro["email"];
  $telefones = $registro["telefones"];
  $cep = $registro["cep"];
  $uf = $registro["uf"];
  $cidade = $registro["cidade"];
  $bairro = $registro["bairro"];
  $logradouro = $registro["logradouro"];
  $complemento = $registro["complemento"];
}

?>

<form  name="add-ligacao" class="form-horizontal" >

<fieldset>

<!-- Form Name -->
<legend>Cadastrar Pessoa</legend>

<!-- Form Name -->
<legend class="inside">Identificação</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="tratamento">Tratamento:</label>
  <div class="controls">
    <select id="tratamento" name="tratamento" class="input-medium" disabled>
      <option>-- Selecione --</option>
      <?php
      $sql = "SELECT * FROM tratamentos ORDER BY nome ASC";
      foreach($conn->query($sql) as $tratamentos){
        $selected = '';
        if ($tratamentos["id"] == $tratamento){
          $selected = "selected";
        }
        ?>
        <option <?php echo $selected; ?> value='<?php echo $tratamentos["id"]; ?>'><?php echo $tratamentos["sigla"]; ?></option>
        <?php
      }
      ?>
    </select>
  </div>
</div>
<div class="control-group">
  <label class="control-label" for="nome">Nome:</label>
  <div class="controls">
    <input id="nome" name="nome" type="text" value="<?php echo $nome ;?>" class="input-xlarge" disabled>
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="sobrenome">Sobrenome:</label>
  <div class="controls">
    <input id="sobrenome" name="sobrenome" type="text" value="<?php echo $sobrenome ;?>" class="input-xlarge" disabled>
  </div>
</div>


<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="orgao">Órgão</label>
  <div class="controls">
    <input id="orgao" name="orgao" type="text" value="<?php echo $orgao ;?>" class="input-xlarge" disabled>
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="cargo">Cargo:</label>
  <div class="controls">
    <input id="cargo" name="cargo" type="text" value="<?php echo $cargo ;?>" class="input-xlarge" disabled>
  </div>
</div>


<legend class="inside">Contato</legend>
<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="email">E-mail:</label>
  <div class="controls">
    <input id="email" name="email" type="text" value="<?php echo $email ;?>" class="input-xlarge" disabled>
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="telefones">Telefones:</label>
  <div class="controls">
    <input id="telefones" name="telefones" type="text" value="<?php echo $telefones ;?>" class="input-xlarge" disabled>
  </div>
</div>

<legend class="inside">Endereço</legend>
<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="cep">CEP:</label>
  <div class="controls">
    <input id="cep" name="cep" type="text" value="<?php echo $cep ;?>" class="input-medium" disabled>
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="uf">UF</label>
  <div class="controls">
    <select disabled id="uf" name="uf" class="input-medium">
      <option>-- Selecione --</option>
      <?php
      $sql = "SELECT * FROM uf ORDER BY sigla ASC";
      foreach($conn->query($sql) as $ufs){
        $selected = '';
        if ($ufs["id"] == $uf){
          $selected = "selected";
        }
        ?>
        <option <?php echo $selected; ?> value='<?php echo $ufs["id"]; ?>'><?php echo $ufs["sigla"]; ?></option>
        <?php
      }
      ?>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="cidade">Cidade:</label>
  <div class="controls">
    <input id="cidade" name="cidade" type="text" value="<?php echo $cidade ;?>" class="input-xlarge" disabled >
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="bairro">Bairro:</label>
  <div class="controls">
    <input id="bairro" name="bairro" type="text" value="<?php echo $bairro ;?>" class="input-xlarge" disabled >
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="logradouro">Logradouro:</label>
  <div class="controls">
    <input id="logradouro" name="logradouro" type="text" value="<?php echo $logradouro ;?>" class="input-xlarge" disabled >
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="complemento">Complemento</label>
  <div class="controls">
    <input id="complemento" name="complemento" type="text" value="<?php echo $complemento ;?>" class="input-xlarge" disabled>
  </div>
</div>
</fieldset>
</form>