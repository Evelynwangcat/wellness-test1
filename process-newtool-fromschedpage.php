<?php
session_start();
if($_SESSION["authenticated"] == false){
	?>
	You are not logged in. Please log in here: <a href="login-form.php">Login page</a> 
	?>
	<?
}else{
			$Name = $_POST['Name'];
			$Section = $_POST['Section'];
			$Description = $_POST['Description'];
			$Privacy = $_POST['Privacy'];
			$Date = $_POST['Date'];

            // $userid = $_POST["User-id"]; // $_SESSION["Username"]
            $User_id = $_SESSION["UserID"];

            include("../../CREDS/database.php");

            
//Step 1: Insert Form Data into table Tool
			$stmt = $pdo->prepare("INSERT INTO `Tool` 
			   (`Name`, `Section`, `Description`, `Privacy`) 
			   VALUES ('$Name','$Section','$Description','$Privacy');");

            $stmt->execute();

//Step 2:  Grab new tool id from Tool table:

            $getLastID = $pdo->lastInsertId();

// Step 3: Insert data into table MyTools:            

			$stmtMyTools = $pdo->prepare("INSERT INTO `MyTools` 
			   (`User-id`, `Tool-id`) 
			   VALUES ('$User_id', '$getLastID');"); 
			$stmtMyTools->execute();


// Step 4: Insert user id and date into table Schedule:  

			$stmtSchedule = $pdo->prepare("INSERT INTO `Schedule` 
			   (`User-id`, `Tool-id`,`Date`)
			   VALUES ('$User_id', '$getLastID', '$Date');"); 

			$stmtSchedule->execute();


		header("Location:schedule.php");
			
    } 
?>

