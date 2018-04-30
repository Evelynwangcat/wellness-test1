<?php
session_start();
if($_SESSION["authenticated"] == false){
	?>
	You are not logged in. Please log in here: <a href="login-form.php">Login page</a> 
	?>
	<?
}else{
        // INSERT DATA FROM FORM INTO TABLE 'TOOL' AND TABLE 'MyTool'


            // INSERT INTO TABLE Tool
	        //$Toolid  = $_POST['Toolid']; //   NULL ????????????????????????????????????????????????? 
			$Name = $_POST['Name'];
			$Section = $_POST['Section'];
			$Description = $_POST['Description'];
			$Privacy = $_POST['Privacy'];

            // INSERT INTO DB TABLE MyTools
            $userid = $_SESSION["UserID"];


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
			   VALUES ($userid, $getLastID);"); //`Name` ||| , `Section` ||| '$Name', ||| ,'$Section'

			$stmtMyTools->execute();


			// if(!move_uploaded_file($_FILES['Thumbnail']['tmp_name'], 'assets/' . $_FILES['Thumbnail']['name'])){     
			// 	echo("Error uploading thumbnail image - check if destination is writeable."); 
			// }

			// if(!move_uploaded_file($_FILES['File1']['tmp_name'], 'assets/idea-files/' . $_FILES['File1']['name'] . $_FILES['File2']['name'] . $_FILES['File3']['name'])){     
	
			// 		echo("Error uploading file - check if destination is writeable."); 
			// }

	header("Location:my-tools.php");
			
	
      } 
?>

