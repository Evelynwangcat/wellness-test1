<?php
session_start();
if($_SESSION["authenticated"] == false){
?>
You are not logged in. Please log in <a href="login-form.php">here</a>. 
?>

<?
}else{
$User_id = $_SESSION["UserID"];
$Tool_id = $_POST['Tool-id'];



include("../../CREDS/database.php");

$stmt = $pdo->prepare("INSERT INTO `MyTools` (`User-id`,`Tool-id`) VALUES ($User_id,$Tool_id);");

$stmt->execute();

header("Location:my-tools.php");

} 
?>