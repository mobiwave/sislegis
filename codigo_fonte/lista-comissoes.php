<?php include("system/core.php"); ?>
<?php render_header("Sistema de Acompanhamento Legislativo e Gestão de Gabinete"); ?>


<div id="header">
	<?php render_menu(); ?>
<div id="content">


<?php

$curl_handle=curl_init();
curl_setopt($curl_handle, CURLOPT_URL,'http://www.camara.gov.br/SitCamaraWS/Orgaos.asmx/ObterOrgaos');
curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Your application name');
$query = curl_exec($curl_handle);
curl_close($curl_handle);
$xml = new SimpleXMLElement($query);

?>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Sigla</th>
				<th>Descrição</th>
			</tr>
		</thead>
		<tbody>
	<?php
	foreach($xml->orgao as $orgao){
	?>
			<tr>
				<td><?php echo $orgao["id"]; ?></td>
				<td><?php echo $orgao["sigla"]; ?></td>
				<td><?php echo $orgao["descricao"]; ?></td>
			</tr>
	<?php
	}
	?>
		</tbody>
	</table>

	
</div>

<?php render_footer();?>

0800 771 COPA (2672)