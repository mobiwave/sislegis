<?php include("system/core.php"); ?>
<?php render_header("Sistema de Acompanhamento Legislativo e Gestão de Gabinete"); ?>


<div id="header">
	<?php render_menu(); ?>
<div id="content">
http://www.camara.gov.br/SitCamaraWS/Orgaos.asmx/ObterPauta?IDOrgao=2008&datIni=20130526&datFim=20130531
<BR />


<?php

$curl_handle=curl_init();
curl_setopt($curl_handle, CURLOPT_URL,'http://www.camara.gov.br/SitCamaraWS/Orgaos.asmx/ObterPauta?IDOrgao=9100&datIni=20130504&datFim=20130606');
curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Your application name');
$query = curl_exec($curl_handle);
curl_close($curl_handle);



$xml = new SimpleXMLElement($query);
	foreach($xml->reuniao as $reuniao) {
		foreach ($reuniao->proposicoes->proposicao as $prop) {
		echo $prop->sigla."<br/>";
	}
}

?>
	
</div>


<?php render_footer();?>

