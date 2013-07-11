<legend>Arquivos Cadastrados</legend>


<script type="text/javascript">
	function excluir(id){
		if (confirm("Tem certeza que deseja excluir o registro selecionado?")==true)
		window.location="arquivo.php?a=del&id="+id;
		return false;
	}
</script>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th width="35%">Arquivo</th>
			<th width="10%">Tipo</th>
			<th width="30%">Autor</th>
			<th width="10%">Criado</th>
			<th width="15%">Ações</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$q = "SELECT 
				arquivos.id as id
				,arquivos.nome as nome
				,arquivos.caminho as caminho
				,arquivos.extensao as extensao
				,pessoas.nome as nomeAutor
				,pessoas.sobrenome as sobrenomeAutor
				,arquivos.dataCriacao as dataCriacao
			FROM arquivos 
			LEFT JOIN pessoas on arquivos.autor = pessoas.id;
		ORDER BY arquivos.dataApresentacao DESC";
		foreach($conn->query($q) as $registro){
			  $id 		= 	$registro[ "id" ];
			  $nome 	= 	$registro[ "nome" ];
			  $caminho 	= 	$registro[ "caminho" ];
			  $extensao 		= 	$registro[ "extensao" ];
			  $nomeAutor 	= 	$registro[ "nomeAutor" ];
			  $sobrenomeAutor 	= 	$registro[ "sobrenomeAutor" ];
			  $dataCriacao 	= 	$registro[ "dataCriacao" ];
      ?>
        <tr>
          <td><a href="<?php echo $caminho; ?>"> <?php echo $nome; ?></a></td>
          <td><?php echo $extensao; ?></td>
          <td><?php echo $nomeAutor; ?> <?php echo $sobrenomeAutor; ?></td>
          <td><?php echo $dataCriacao; ?></td>
          <td><a href="arquivo.php?a=edit&id=<?php echo $id ;?>">[editar]</a> <a href="javascript:excluir(<?php echo $id ;?>)">[excluir]</a></td>
        </tr>
      <?php
    }
    ?>
	</tbody>
</table>
