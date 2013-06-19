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

<legend> Lista todas as proposições presentes nas pautas das Comissões</legend>


	<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Sigla</th>
				<th>Reuniões</th>
			</tr>
		</thead>
		<tbody>
	<?php
	foreach($xml->orgao as $orgao){
	?>
			<tr>
				<td><?php echo $orgao["id"]; ?></td>
				<td><?php echo $orgao["sigla"]; ?></td>
				<td>
<?php

$id=$orgao["id"];
$curl_handle_pauta=curl_init();
curl_setopt($curl_handle_pauta, CURLOPT_URL,'http://www.camara.gov.br/SitCamaraWS/Orgaos.asmx/ObterPauta?IDOrgao='.$id.'&datIni=20130603&datFim=20130607');
curl_setopt($curl_handle_pauta, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($curl_handle_pauta, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl_handle_pauta, CURLOPT_USERAGENT, 'Your application name');
$query_pauta = curl_exec($curl_handle_pauta);
curl_close($curl_handle_pauta);
$xml_pauta = new SimpleXMLElement($query_pauta);


?>
	<table class="table table-striped">
		<thead>
			<tr>
				<th width="20%">Sigla</th>
				<th>Ementa</th>
				<th>Incluir</th>
			</tr>
		</thead>
		<tbody>
	<?php
	foreach($xml_pauta->reuniao as $reuniao){
		foreach($reuniao->proposicoes->proposicao as $proposicao){
	?>

			<tr>
				<td><?php echo $proposicao->sigla ; ?></td>
				<td><?php echo $proposicao->ementa ; ?></td>
				<td><input type="checkbox" name"proposicoes[]" value="<?php echo $proposicao->sigla ; ?>"></td>
			</tr>
	<?php
	}}
	?>
		</tbody>
	</table>
</td>
			</tr>
	<?php
	}
	?>
		</tbody>
	</table>

	
</div>

<?php render_footer();?>

0800 771 COPA (2672)