<legend>Pessoas Cadastradas</legend>
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
		$q = "SELECT * FROM pessoas ORDER BY nome ASC $limit";
		foreach($conn->query($q) as $registro){
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
			<td><?php echo $email  ;?></td>
			<td><a href="#">[ver]</a> <a href="#">[editar]</a> <a href="#">[excluir]</a> </td>
		</tr>
		<?php
		}
		?>
	</tbody>
</table>
