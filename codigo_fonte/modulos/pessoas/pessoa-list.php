<legend>Pessoas Cadastradas</legend>


<script type="text/javascript">
	function excluir(id){
		if (confirm("Tem certeza que deseja excluir o registro selecionado?")==true)
		window.location="pessoa.php?a=del&id="+id;
		return false;
	}
</script>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th width="15%">Nome</th>
			<th width="15%">Sobrenome</th>
			<th width="20%">Orgao/Cargo</th>
			<th width="10%">Telefones</th>
			<th width="25%">E-mail</th>
			<th width="15%">Ações</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$q = "SELECT * FROM pessoas ORDER BY nome ASC";
		foreach($conn->query($q) as $registro){
			  $id 			= 	$registro[ "id" ];
			  $nome 		= 	$registro[ "nome" ];
			  $sobrenome 	= 	$registro[ "sobrenome" ];
			  $orgao 		= 	$registro[ "orgao" ];
			  $cargo 		= 	$registro[ "cargo" ];
			  $email 		= 	$registro[ "email" ];
			  $telefones 	= 	$registro[ "telefones" ];
		?>
		<tr>
			<td><?php echo $nome ;?></td>
			<td><?php echo $sobrenome ;?></td>
			<td><?php echo $orgao ;?> / <?php echo $cargo ;?> </td>
			<td><?php echo $telefones  ;?></td>
			<td><?php echo $email ;?></td>
			<td><a href="pessoa.php?a=view&id=<?php echo $id ;?>">[ver]</a> <a href="pessoa.php?a=edit&id=<?php echo $id ;?>">[editar]</a> <a href="javascript:excluir(<?php echo $id ;?>)">[excluir]</a> </td>
		</tr>
		<?php
		}
		?>
	</tbody>
</table>
