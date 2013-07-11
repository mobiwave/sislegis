<?php
$id = $_GET["id"];
$stmt = $conn->prepare("DELETE FROM arquivos WHERE id = ? LIMIT 1");
$stmt->execute(array($id));
?>
<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button> Registro excluído com sucesso!</div>