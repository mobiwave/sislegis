<form  name="add-ligacao" method="post" action="pessoa.php" class="form-horizontal" >

<fieldset>

<!-- Form Name -->
<legend>Cadastrar Pessoa</legend>

<!-- Form Name -->
<legend class="inside">Identificação</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="tratamento">Tratamento:</label>
  <div class="controls">
    <select id="tratamento" name="tratamento" class="input-medium">
      <option>-- Selecione --</option>
      <?php
      $sql = "SELECT * FROM tratamentos ORDER BY nome ASC";
      foreach($conn->query($sql) as $tratamento){
        ?>
        <option value='<?php echo $tratamento["id"]; ?>'><?php echo $tratamento["sigla"]; ?></option>
        <?php
      }
      ?>
    </select>
  </div>
</div>
<div class="control-group">
  <label class="control-label" for="nome">Nome:</label>
  <div class="controls">
    <input id="nome" name="nome" type="text" placeholder="Nome" class="input-xlarge">
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="sobrenome">Sobrenome:</label>
  <div class="controls">
    <input id="sobrenome" name="sobrenome" type="text" placeholder="Sobrenome" class="input-xlarge">
  </div>
</div>


<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="orgao">Órgão</label>
  <div class="controls">
    <input id="orgao" name="orgao" type="text" placeholder="Órgão" class="input-xlarge">
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="cargo">Cargo:</label>
  <div class="controls">
    <input id="cargo" name="cargo" type="text" placeholder="Cargo" class="input-xlarge">
  </div>
</div>


<legend class="inside">Contato</legend>
<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="email">E-mail:</label>
  <div class="controls">
    <input id="email" name="email" type="text" placeholder="nome@endereço.com" class="input-xlarge">
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="telefones">Telefones:</label>
  <div class="controls">
    <input id="telefones" name="telefones" type="text" placeholder="telefones separados por vírgula" class="input-xlarge">
  </div>
</div>

<legend class="inside">Endereço</legend>
<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="cep">CEP:</label>
  <div class="controls">
    <input id="cep" name="cep" type="text" placeholder="_ _ . _ _ _ - _ _" class="input-medium">
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="uf">UF</label>
  <div class="controls">
    <select id="uf" name="uf" class="input-medium">
      <option>-- Selecione --</option>
      <?php
      $sql = "SELECT * FROM uf ORDER BY sigla ASC";
      foreach($conn->query($sql) as $ufs){
        ?>
        <option value='<?php echo $ufs["id"]; ?>'><?php echo $ufs["sigla"]; ?></option>
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
    <input id="cidade" name="cidade" type="text" placeholder="cidade" class="input-xlarge">
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="bairro">Bairro:</label>
  <div class="controls">
    <input id="bairro" name="bairro" type="text" placeholder="Bairro" class="input-xlarge">
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="logradouro">Logradouro:</label>
  <div class="controls">
    <input id="logradouro" name="logradouro" type="text" placeholder="Logradouro" class="input-xlarge">
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="complemento">Complemento</label>
  <div class="controls">
    <input id="complemento" name="complemento" type="text" placeholder="complemento" class="input-xlarge">
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