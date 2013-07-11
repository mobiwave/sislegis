<?php include("system/core.php"); ?>
<?php render_header("Sistema de Acompanhamento Legislativo e Gestão de Gabinete"); ?>


<div id="header">
	<?php render_menu(); ?>
<div id="content">



<!-- Form Name -->
<form  name="add-ligacao" method="post" action="add-ligacao-confirma.php" class="form-horizontal" >

<fieldset>

<!-- Form Name -->
<legend>Cadastrar Ligação</legend>

<legend class="inside"> Origem da Ligação </legend>
<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="fromName">Nome</label>
  <div class="controls">
    <input id="fromName" name="fromName" type="text" placeholder="Quem Ligou" class="input-xlarge">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="fromPosition">Cargo</label>
  <div class="controls">
    <input id="fromPosition" name="fromPosition" type="text" placeholder="Cargo" class="input-medium">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="fromCompany">Instituição</label>
  <div class="controls">
    <input id="fromCompany" name="fromCompany" type="text" placeholder="Instituição" class="input-medium">
    
  </div>
</div>


<legend class="inside"> Destino da Ligação </legend>
<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="toName">Nome</label>
  <div class="controls">
    <input id="toName" name="toName" type="text" placeholder="Destino da Ligação" class="input-xlarge">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="toPosition">Cargo</label>
  <div class="controls">
    <input id="toPosition" name="toPosition" type="text" placeholder="Cargo" class="input-medium">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="toCompany">Instituição</label>
  <div class="controls">
    <input id="toCompany" name="toCompany" type="text" placeholder="Instituição de Destino" class="input-medium">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="telefones">Telefones</label>
  <div class="controls">
    <input id="telefones" name="telefones" type="text" placeholder="( _ _ )_ _ _ _-_ _ _ _, " class="input-medium">
    
  </div>
</div>


<legend class="inside"> Dados do Registro </legend>
<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="registradoPor">Registrado por:</label>
  <div class="controls">
    <input id="registradoPor" name="registradoPor" type="text" placeholder="Quem cadastrou o registro" class="input-xlarge">
    
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="callType">Tipo</label>
  <div class="controls">
    <select id="callType" name="callType" class="input-medium">
      <option>-- Selecione --</option>
      <option>Recebida</option>
      <option>Realizada</option>
    </select>
  </div>
</div>


<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="data">Data</label>
  <div class="controls">
    <input id="data" name="data" type="text" placeholder="dd/mm/aaa" class="input-small">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="hora">Hora</label>
  <div class="controls">
    <input id="hora" name="hora" type="text" placeholder="hh:mm" class="input-small">
    
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="status">Situação</label>
  <div class="controls">
    <select id="status" name="status" class="input-large">
      <option>-- Selecione --</option>
      <option>Pendente Retorno</option>
      <option>Retornada</option>
      <option>Sem Pendências</option>
    </select>
  </div>
</div>

<!-- Textarea -->
<div class="control-group">
  <label class="control-label" for="observacoes">Observações</label>
  <div class="controls">                     
    <textarea id="observacoes" name="observacoes"></textarea>
  </div>
</div>

<!-- Button (Double) -->
<div class="control-group">
  <label class="control-label" for="button1id">&nbsp;</label>
  <div class="controls">
    <button type="submit" class="btn btn-success">Salvar</button>
  </div>
</div>

</fieldset>
</form>



	
</div>

<?php render_footer();?>