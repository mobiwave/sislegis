<?php include("system/core.php"); ?>
<?php render_header("Sistema de Acompanhamento Legislativo e Gestão de Gabinete"); ?>


<div id="header">
	<?php render_menu(); ?>
<div id="content">

<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Cadastrar Nova Reunião</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="dataReuniao">Data da Reunião</label>
  <div class="controls">
    <input id="dataReuniao" name="dataReuniao" type="text" placeholder="dd/mm/aaaa" class="input-small" required="">
    <p class="help-block">Inserir a data em que a reunião será realizada</p>
  </div>
</div>

</fieldset>
</form>

	
</div>

<?php render_footer();?>