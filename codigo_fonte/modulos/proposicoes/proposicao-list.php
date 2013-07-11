<legend>Pessoas Cadastradas</legend>


<script type="text/javascript">
	function excluir(id){
		if (confirm("Tem certeza que deseja excluir o registro selecionado?")==true)
		window.location="proposicao.php?a=del&id="+id;
		return false;
	}
</script>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th width="10%">Tipo</th>
			<th width="10%">Número/Ano</th>
			<th width="45%">Ementa</th>
			<th width="10%">Autor</th>
			<th width="10%">Adicionar</th>
			<th width="15%">Ações</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$q = "SELECT 
				proposicoes.id
				,tipo_proposicao.sigla as tipo
				,proposicoes.numero
				,proposicoes.ano
				,proposicoes.ementa
				,proposicoes.autor
				,proposicoes.link
			FROM proposicoes 
			LEFT JOIN tipo_proposicao on proposicoes.tipo = tipo_proposicao.id;
		ORDER BY proposicoes.dataApresentacao DESC";
		foreach($conn->query($q) as $registro){
			  $id 		= 	$registro[ "id" ];
			  $tipo 	= 	$registro[ "tipo" ];
			  $numero 	= 	$registro[ "numero" ];
			  $ano 		= 	$registro[ "ano" ];
			  $ementa 	= 	$registro[ "ementa" ];
			  $autor 	= 	$registro[ "autor" ];
			  $link 	= 	$registro[ "link" ];
		?>
		<tr>
			<td><?php echo $tipo ;?></td>
			<td><?php echo $numero ;?> / <?php echo $ano ;?> <br/><a href="<?php echo $link ;?>" target="_blank">Link Oficial</a> </td>
			<td><?php echo $ementa ;?> </td>
			<td><?php echo $autor  ;?></td>
			<td><a href="nota.php?a=add&id=<?php echo $id ;?>&modulo=Proposicoes">[+ Nota Técnica]</a><br/>
				<a href="arquivo.php?a=add&id=<?php echo $id ;?>&modulo=Proposicoes">[+ Arquivo]</a></td>
			<td><a href="proposicao.php?a=view&id=<?php echo $id ;?>">[ver]</a> <a href="proposicao.php?a=edit&id=<?php echo $id ;?>">[editar]</a> <a href="javascript:excluir(<?php echo $id ;?>)">[excluir]</a></td>
		</tr>
		<?php
		}
		?>
	</tbody>
</table>
