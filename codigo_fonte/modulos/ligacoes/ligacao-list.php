<legend>Pessoas Cadastradas</legend>


<script type="text/javascript">
	function excluir(id){
		if (confirm("Tem certeza que deseja excluir o registro selecionado?")==true)
		window.location="ligacao.php?a=del&id="+id;
		return false;
	}
</script>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th width="20%">De</th>
			<th width="20%">Para</th>
			<th width="">Tipo</th>
			<th width="">Situação</th>
			<th width="">Data/Hora</th>
			<th width="15%">Registrada</th>
			<th width="15%">Ações</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$q = "SELECT 
			ligacoes.id as id
			,pde.nome as nomeDe
			,pde.sobrenome as sobrenomeDe
			,pde.orgao as orgaoDe
			,pde.cargo as cargoDe
			,ppara.nome as nomePara
			,ppara.sobrenome as sobrenomePara
			,ppara.orgao as orgaoPara
			,ppara.cargo as cargoPara
			,ligacoes.tipo as tipo
			,ligacoes.situacao as situacao
			,ligacoes.data as data
			,ligacoes.hora as hora
			,pregistro.nome as nomeRegistro
			,pregistro.sobrenome as sobrenomeRegistro
		FROM ligacoes
		left join pessoas pde on ligacoes.de=pde.id
		left join pessoas ppara on ligacoes.para=ppara.id
		left join pessoas pregistro on ligacoes.para=pregistro.id
		order by data DESC, hora DESC";
		foreach($conn->query($q) as $registro){
			  $id 					= 	$registro[ "id" ];
			  $nomeDe				= 	$registro[ "nomeDe" ];
			  $sobrenomeDe 			= 	$registro[ "sobrenomeDe" ];
			  $orgaoDe 				= 	$registro[ "orgaoDe" ];
			  $cargoDe 				= 	$registro[ "cargoDe" ];
			  $nomePara 			= 	$registro[ "nomePara" ];
			  $sobrenomePara 		= 	$registro[ "sobrenomePara" ];
			  $orgaoPara			= 	$registro[ "orgaoPara" ];
			  $cargoPara 			= 	$registro[ "cargoPara" ];
			  $tipo 				= 	$registro[ "tipo" ];
			  $situacao 			= 	$registro[ "situacao" ];
			  $data 				= 	$registro[ "data" ];
			  $hora 				= 	$registro[ "hora" ];
			  $nomeRegistro 		= 	$registro[ "nomeRegistro" ];
			  $sobrenomeRegistro	= 	$registro[ "sobrenomeRegistro" ];
		?>
		<tr>
			<td><?php echo $nomeDe ;?> <?php echo $sobrenomeDe ;?> <br /><?php echo $orgaoDe ;?> / <?php echo $cargoDe ;?></td>
			<td><?php echo $nomePara ;?> <?php echo $sobrenomePara ;?> <br /><?php echo $orgaoPara ;?> / <?php echo $cargoPara ;?></td>
			<td><?php echo $tipo ;?></td>
			<td><?php echo $situacao  ;?></td>
			<td><?php echo $data ;?></br /><?php echo $hora ;?></td>
			<td><?php echo $nomeRegistro ;?> <?php echo $sobrenomeRegistro ;?></td>
			<td><a href="ligacao.php?a=view&id=<?php echo $id ;?>">[ver]</a> <a href="ligacao.php?a=edit&id=<?php echo $id ;?>">[editar]</a> <a href="javascript:excluir(<?php echo $id ;?>)">[excluir]</a> </td>
		</tr>
		<?php
		}
		?>
	</tbody>
</table>
