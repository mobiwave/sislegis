
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



<h4>Detalhes da Proposição</h4>
<div class="accordion-group">
  <div class="accordion-heading">
    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#dados_gerais">
     Dados Cadastrais
    </a>
  </div>
  <div id="dados_gerais" class="accordion-body collapse in">
    <div class="accordion-inner">
  <form  name="add-ligacao" class="form-horizontal" >
  <fieldset>
  <!-- Form Name -->
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
  </fieldset>
  </form>
    </div>
  </div>
</div>
<div class="accordion-group">
  <div class="accordion-heading">
    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#arquivos">
      Arquivos Associados
    </a>
  </div>
  <div id="arquivos" class="accordion-body collapse in">
    <div class="accordion-inner">
      <table class="table table-striped table-bordered">
        <tr>
          <th>Nome do Arquivo</th>
          <th>Tipo</th>
          <th>Autor</th>
          <th>Data de Criação</th>
        </tr>
        
      <?php
      $q = "SELECT * FROM arquivos ORDER BY nome ASC";
      foreach ($conn->query($q) as $arquivo) {
      ?>
        <tr>
          <td><a href="<?php echo $arquivo['caminho']; ?>"> <?php echo $arquivo["nome"]; ?></a></td>
          <td><?php echo $arquivo["extensao"]; ?></td>
          <td><?php echo $arquivo["autor"]; ?></td>
          <td><?php echo $arquivo["dataCriacao"]; ?></td>
        </tr>
      <?php
    }
    ?>
        <tr>
          <td colspan="4"><a style="float:right;" href="arquivo.php?a=add&id=<?php echo $id ;?>&modulo=Proposicoes">[Adicionar]</a></td>
        </tr>
      </table>
    </div>
  </div>
</div>
<div class="accordion-group">
  <div class="accordion-heading">
    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#tarefas">
      Tarefas Associadas
    </a>
  </div>
  <div id="tarefas" class="accordion-body collapse">
    <div class="accordion-inner">
      Anim pariatur cliche...
    </div>
  </div>
</div>
<div class="accordion-group">
  <div class="accordion-heading">
    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#reunioes">
      Pauta de Reuniões
    </a>
  </div>
  <div id="reunioes" class="accordion-body collapse">
    <div class="accordion-inner">
      Anim pariatur cliche...
    </div>
  </div>
</div>
</div>
