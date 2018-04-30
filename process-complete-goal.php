<?php 
session_start();
$dsn = "mysql:host=localhost;dbname=kouzaevi_group2";

$db_username = "kouzaevi_grusr";
$db_password = "2Mvxr10-3Q-9";

$pdo = new PDO($dsn, $db_username, $db_password);


		
			$Tool_id = $_POST['toolid'];
			$Date = $_POST['date'];




      
            $User_id = $_SESSION["UserID"];

           

            
//Step 1: Insert Form Data into table Tool

  try{
            $stmt = $pdo->prepare("INSERT INTO `Goals` 
    (`User-id`, `Tool-id`, `Date`) 
      	VALUES ('$User_id','$Tool_id','$Date');");

           
           
            $stmt->execute();
         header('Location: schedule.php');
            
  }
  catch(PDOException $e)
  {
      
      echo "Error: " . $e->getMessage();
  }
            
            
            
            
            
            
            

	     
			
    
?>