<?php include("system/core.php"); ?>
<?php render_header("Sistema de Acompanhamento Legislativo e Gestão de Gabinete"); ?>


<div id="header">
	<?php render_menu(); ?>
<div id="content">
	<style>
	table {font-size:12px;}
	table tr td select{ width:120px; font-size: 12px;}
	table tr td span{ width:120px; font-size: 12px; display: block; float: left;}
	</style>
<BR />


<?php

$id='2008';
$curl_handle_pauta=curl_init();
curl_setopt($curl_handle_pauta, CURLOPT_URL,'http://www.camara.gov.br/SitCamaraWS/Orgaos.asmx/ObterPauta?IDOrgao='.$id.'&datIni=20130603&datFim=20130607');
curl_setopt($curl_handle_pauta, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($curl_handle_pauta, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl_handle_pauta, CURLOPT_USERAGENT, 'Your application name');
$query_pauta = curl_exec($curl_handle_pauta);
curl_close($curl_handle_pauta);
$xml_pauta = new SimpleXMLElement($query_pauta);
?>

<legend> Prova de Conceito - Exemplo de tela para ser projetada na reunião de segunda-feira. Muitas coisas precisam ser trabalhadas para que isso seja funcional</legend>

	<table class="table table-striped">
		<thead>
			<tr>
				<th width="150px">Sigla</th>
				<th>Ementa</th>
				<th>Controle</th>
				<th>Observações</th>
			</tr>
		</thead>
		<tbody>

<?php

$xml = new SimpleXMLElement($query_pauta);
	foreach($xml->reuniao as $reuniao) {
		foreach ($reuniao->proposicoes->proposicao as $prop) {
	?>
			<tr>
				<td><?php echo $prop->sigla ?></td>
				<td> <?php echo $prop->ementa ?></td>
				<td width="250px"> 
					<span>Mérito:</span>
					<select>
						<option> -- Selecione -- </option>
						<option> Não é tema do MJ </option>
						<option> Indiferente </option>
						<option> Favorável </option>
						<option> Contrário </option>
					</select><br/>
					<span>Responsável:</span>
					<select>
						<option> -- Selecione -- </option>
						<option> Marcio </option>
						<option> Guilherme </option>
						<option> Valéssio </option>
					</select><br />
					<span>Encaminhamento:</span>
					<select>
						<option> -- Selecione -- </option>
						<option> Nota Técnica </option>
						<option> E-mail </option>
						<option> Reunião </option>
						<option> Telefonema </option>
					</select><br />
				</td>
				<td> <textarea rows="5"></textarea>	</td>
			</tr>

	<?
	}
}

?>
</tbody>
</table>
	
</div>


<?php render_footer();?>

