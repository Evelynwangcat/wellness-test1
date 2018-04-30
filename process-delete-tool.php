<?php session_start();

//$id = $_GET["id"];
$Tool_id = $_POST["Tool-id"];

include("../../CREDS/database.php");

$stmt = $pdo->prepare("DELETE FROM `MyTools` WHERE `Tool-id` = $Tool_id");

$stmt->execute();

header('Location:delete-my-tools.php');

?>