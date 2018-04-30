<?php session_start(); 

if($_SESSION["authenticated"] == true){ 
	require_once("../../CREDS/database.php");  // CONNECT TO THE DATABASE -->
	include("includes/header.php");  // ADD HEADER -->
	include("includes/nav.php");   // ADD NAVIGATION 

$User_id = $_SESSION["UserID"];
$username = $_SESSION["Username"];

$sectionB = "B";
$sectionA = "A";
$sectionC = "C";
$sectionE = "E";
$sectionS = "S";


$stmt = $pdo->prepare("SELECT `Tool`.`Tool-id`,`Tool`.`Name`, `Tool`.`Section`, `Tool`.`Description`
FROM `Tool` INNER JOIN `MyTools` 
ON `Tool`.`Tool-id`=`MyTools`.`Tool-id`
WHERE `MyTools`.`User-id` = '$User_id'"); // THIS LINE SELECTS ONLY THE CURRENT USER'S IDEAS -variable name should be encased in single quotes and column names in backticks



$stmtB = $pdo->prepare("SELECT * FROM `Tool` WHERE `Section` = '$sectionB'"); // There is no User-id column in the table Tool
$stmtA = $pdo->prepare("SELECT * FROM `Tool` WHERE `Section` = '$sectionA'");
$stmtC = $pdo->prepare("SELECT * FROM `Tool` WHERE `Section` = '$sectionC'");
$stmtE = $pdo->prepare("SELECT * FROM `Tool` WHERE `Section` = '$sectionE'");
$stmtS = $pdo->prepare("SELECT * FROM `Tool` WHERE `Section` = '$sectionS'");

$stmt->execute();
$stmtB->execute();
$stmtA->execute();
$stmtC->execute();
$stmtE->execute();
$stmtS->execute();

?>

       
        <!-- THIS WILL GO INTO HEADER.PHP -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/basic.js"></script>

        <style type="text/css"> /* STYLE WILL GO INTO A SEPARATE FILE */

            .subContainer{
                width: 100%;
            }
            
            .displayBlock{
                display: block;
            }
            .IntroduceSlider{
                width: 100%;
                display: flex;
                justify-content: center;
                padding: 15px 0 0 15px;
                height: 280px;
                background-color: #fff
            }
            .displayNone{
                display: none;
            }
            .tabLight{
                background-color: #fff;
            }
            .tab{
                background-color: #8953A8;
                color:#fff;
            }   

			#slidecontainer{
				width: 100%;
			}
            .wholeControler{
                width: 100%;
                margin: 8px auto;
            }
            #controler span{
                margin: 1px;
                padding:0 8px;
                border: 1px solid #ccc;
                border-bottom:none ;
            }
            .leftPhoto{
                width: 100px;
                height: 100px;
            }
            .rightContent{
                width: 700px;
                /*display: block;*/
            }

        </style>

        

<h1 id="app-title">My Toolbox</h1>
<h2 class="intro-text">Intro Text Goes Here...</h2>




<div>
	<section class="tool-section">
		<h2>All My Tools - Delete: </h2>

		<ol>
			<?
			while($row = $stmt->fetch()) {
			?>
				<li>
					<p><? echo($row["Tool-id"]); ?>: <? echo($row["Name"]); ?></p>

					
	                <form action="process-delete-tool.php" method="POST">
						<input type="hidden" value="<?= $row["Tool-id"]; ?>" name="Tool-id">
						<input type="hidden" value="<?= $User_id; ?>" name="User-id">
						<input type="submit" name="" value="DELETE <? echo $row["Tool-id"]; ?>" /> &nbsp;
					</form>	 
				</li>	
			<? 
			} 
			?>
		</ol>
			<!-- End Input From Database -->
<br><br>
</div>




<? include("includes/footer.php");  

} else { 
	?>
	<p>You are not allowed to view this page. Please <a href="login-form.php">log in here.</a></p>
	<? 
}
	?>