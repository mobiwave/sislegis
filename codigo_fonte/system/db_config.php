<?php


$user = "matheus";
$pass = "";
$conn = new PDO('mysql:host=127.0.0.1;dbname=sislegis', $user, $pass);
$conn->query('SET NAMES utf8');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>