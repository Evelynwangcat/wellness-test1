<?php session_start(); 

if($_SESSION["authenticated"] == true){ 
	require_once("../../CREDS/database.php"); 
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

<div class="wholeControler">

    <div id ="controler">
        <span id="controler1" class="tabLight">Body</span>
        <span id="controler2" class="tab">Achieve</span>
        <span id="controler3" class="tab">Connect</span>
        <span id="controler4" class="tab">Enjoy</span>
        <span id="controler5" class="tab">Set Back</span>
    </div>

    <div id="slidecontainer">
        <div id="body" class="IntroduceSlider">
        	<span class="leftPhoto"><img src="assets/Introduce/body.png" style="width: 64px; height: 64px;">
        	</span>
        	<span class="rightContent">
            	Taking good care of our physical body means we will be better able to cope with emotional problems<br>
                 Take steps to ensure you get enough sleep<br>
                 Eat healthily and regularly<br>
                 Exercise regularly, preferably in an outside/natural space<br>
                 Plan rest times too<br>
                 Beware of how things like drink, drugs,<br>
                smoking and caffeine affect you
            </span>
        </div>


     <div id="achieve" class="IntroduceSlider displayNone"><span class="leftPhoto"><img src="assets/Introduce/achieve.png" style="width: 64px; height: 64px;"></span><span class="rightContent">Taking good care of our physical body means we will be better able to cope with emotional problems<br>
         Take steps to ensure you get enough sleep<br>
         Eat healthily and regularly<br>
         Exercise regularly, preferably in an outside/natural space<br>
         Plan rest times too<br>
         Beware of how things like drink, drugs, smoking and caffeine affect you</span>
     </div>

     <div id="connect" class="IntroduceSlider  displayNone"><span class="leftPhoto"><img src="assets/Introduce/connect.png" style="width: 64px; height: 64px;"></span><span class="rightContent">Very often when we're struggling with our mental health, we can withdraw and isolate ourselves and neglect our relationships.<br>
        However, connecting with and/or helping others boosts the neurotransmitter oxytocin which will boost our wellbeing. So plan to connect with other people every day, particularly with close friends and/or family, but also with the local community.<br>
        It may just be smiling and saying hello to strangers in the street or at the corner shop.<br>
        You might consider helping out with a voluntary organisation, or find a local support group. You can find out what is available locally from the internet, or at your local library or citizen's advice bureau.<br>
        It's important to connect face to face, but as a first step, or additionally, we can connect to others via the internet.
        </span>
    </div>

     <div id="enjoy" class="IntroduceSlider  displayNone"><span class="leftPhoto"><img src="assets/Introduce/enjoy.png" style="width: 64px; height: 64px;"></span><span class="rightContent">When our mood dips and we feel tired, or we withdraw and isolate ourselves, the first things we stop doing are the fun and enjoyable activities. We tend to keep doing those things that drain and deplete us, but neglect those that we enjoy and which energise and nourish us.<br>
        activities here (www.m.get.gg/energisingdraining.htm)
        Read more about nourishing vs depleting activities here (www.m.get.gg/energisingdraining.htm)<br>
        Aim to do more enjoyable activities. Maybe something you used to enjoy doing (e.g. hobby or sport), or something you've thought you would like to do. It might be something outdoors, or with other people, or maybe just on your own at home.<br>
        Add more colour into your life!
        If you need more ideas, see the distract page (www.m.get.gg/distract.htm)
        <br>
        It may just be smiling and saying hello to strangers in the street or at the corner shop.<br>
        </span>
    </div>

     <div id="setBack" class="IntroduceSlider  displayNone"><span class="leftPhoto"><img src="assets/Introduce/setBack.png" style="width: 64px; height: 64px;"></span><span class="rightContent">When we feel emotional, we get caught up in that emotion - it is difficult to think clearly and see the bigger picture at those times - and we react by doing things that are unhelpful.<br>
        It seems like doing those things help at the time, but by reacting the same way all the time, we just keep the problem going. (About CBT - www.m.get.gg/cbt.htm). We can learn to react and think differently!</span>
    </div>
    </div>

</div>


<div>
	<section class="tool-section">
		<h1>B - BODY - PHYSICAL HEALTH</h1>
		<div class="tool-description-container">
			<div class="section-description">BODY: Take care of your physical health.
				<p><a href="add-your-tool.php"><input type="button" value="Create your own tool" /></a></p>
				<br />
		    </div> 
			<h3>List of Tools section <? echo($sectionB) ?></h3>
			<!-- Begin Input From Database -->
			<ul>
			<?
			while($row = $stmtB->fetch()) {
			?>
				<li>
					<p><? echo($row["Tool-id"]); ?>: <? echo($row["Name"]); ?></p>

					<!-- ADD TOOLS TO MY SCHEDULE, WHICH IS THE NEXT FORM IS FOR: -->
	                <form action="process-add-to-schedule.php" method="POST">
						<input type="hidden" value="<?= $row["Tool-id"]; ?>" name="Tool-id">
						<input type="hidden" value="<?= $User_id; ?>" name="User-id">
						<input id="date" type="date" id="" name="Date">
						<input type="submit" name="" value="ADD to Schedule <? echo $row["Tool-id"]; ?>" /> &nbsp;
					</form>	 
				</li>	
			<? 
			} 
			?>
		    </ul>
			<!-- End Input From Database -->

			<br>
			<p>What else can you do to improve your physical health?</p>
			<ul><!-- ADD YOUR OWN (NEW) TOOL TO DATABASE -->						
				<li>
					<a href="add-your-tool.php"><input type="button" value="Create your own tool" /></a>
					<br><br>
					<a href="delete-my-tools.php">Delete some of my tools</a>
				</li>
			</ul>
		</div>		
	</section>

	<section class="tool-section">
		<h1>A - Achievement </h1>
		<div class="tool-description-container">
			<p><a href="add-your-tool.php"><input type="button" value="Create your own tool" /></a></p>
			<br />
			<div class="section-description">
	           <h3>List of tools from section <? echo($sectionA) ?></h3> 
			</div>

			<!-- Begin Input From Database -->
			<?
			while($row = $stmtA->fetch()) {
			?>
			<ul>
				<li>
					<p><? echo($row["Tool-id"]); ?>: <? echo($row["Name"]); ?></p>

					<!-- ADD TOOLS TO MY SCHEDULE, WHICH IS THE NEXT FORM IS FOR: -->
	                <form action="process-add-to-schedule.php" method="POST">
						<input type="hidden" value="<?= $row["Tool-id"]; ?>" name="Tool-id">
						<input type="hidden" value="<?= $User_id; ?>" name="User-id">
						<input id="date" type="date" id="" name="Date">
						<input type="submit" name="" value="ADD to Schedule <? echo $row["Tool-id"]; ?>" />
					</form>	
				</li>	
			</ul>
			<? 
			} 
			?>
			<!-- End Input From Database -->
		<br>
		<p>What else can you do to improve your physical health?</p>
		<ul><!-- ADD YOUR OWN (NEW) TOOL TO DATABASE -->						
			<li>
				<a href="add-your-tool.php"><input type="button" value="Create your own tool" /></a>
				<br><br>
				<a href="delete-my-tools.php">Delete some of my tools</a>
			</li>
		</ul>
		</div>	
	</section>
	<section class="tool-section">
		<h1>C - CONNECT</h1>
		<div class="tool-description-container">
			<p><a href="add-your-tool.php"><input type="button" value="Create your own tool" /></a></p>
			<div class="section-description">
			<h3>List of Tools from Section <? echo($sectionC) ?></h3>
			</div>

			<!-- Begin Input From Database -->
			<?
			while($row = $stmtC->fetch()) {
			?>
			<ul>
				<li>
					<p><? echo($row["Tool-id"]); ?>: <? echo($row["Name"]); ?></p>

					<!-- ADD TOOLS TO MY SCHEDULE, WHICH IS THE NEXT FORM IS FOR: -->
	                <form action="process-add-to-schedule.php" method="POST">
						<input type="hidden" value="<?= $row["Tool-id"]; ?>" name="Tool-id">
						<input type="hidden" value="<?= $User_id; ?>" name="User-id">
						<input id="date" type="date" id="" name="Date">
						<input type="submit" name="" value="ADD to Schedule <? echo $row["Tool-id"]; ?>" /> &nbsp;
					</form>	
				</li>	
			</ul>
			<? 
			} 
			?>
			<!-- End Input From Database -->

			<br>
			<p>What else can you do to improve your physical health?</p>
			<ul><!-- ADD YOUR OWN (NEW) TOOL TO DATABASE -->						
				<li>
					<a href="add-your-tool.php"><input type="button" value="Create your own tool" /></a>
					<br><br>
					<a href="delete-my-tools.php">Delete some of my tools</a>
				</li>
			</ul>
		</div>	
	</section>
	<section class="tool-section">
		<h1>E - ENJOY</h1>
		<div class="tool-description-container">
			<p><a href="add-your-tool.php"><input type="button" value="Create your own tool" /></a></p>
			<div class="section-description">
			<h3> List of Tools from Section <? echo($sectionE) ?>
			</div>
			<!-- Begin Input From Database -->
			<?
			while($row = $stmtE->fetch()) {
			?>
			<ul>
				<li>
					<p><? echo($row["Tool-id"]); ?>: <? echo($row["Name"]); ?></p>

					<!-- ADD TOOLS TO MY SCHEDULE, WHICH IS THE NEXT FORM IS FOR: -->
	                <form action="process-add-to-schedule.php" method="POST">
						<input type="hidden" value="<?= $row["Tool-id"]; ?>" name="Tool-id">
						<input type="hidden" value="<?= $User_id; ?>" name="User-id">
						<input id="date" type="date" id="" name="Date">
						<input type="submit" name="" value="ADD to Schedule <? echo $row["Tool-id"]; ?>" /> &nbsp;
					</form>	
				</li>	
			</ul>
			<? 
			} 
			?>
			<!-- End Input From Database -->
			<br>
			<p>What else can you do to improve your physical health?</p>
			<ul><!-- ADD YOUR OWN (NEW) TOOL TO DATABASE -->						
				<li>
					<a href="add-your-tool.php"><input type="button" value="Create your own tool" /></a>
				     <br><br>
					<a href="delete-my-tools.php">Delete some of my tools</a>
				</li>
			</ul>
		</div>	
	</section>
	<section class="tool-section">
		<h1>S - STEP BACK</h1>
		<div class="tool-description-container">
			<p><a href="add-your-tool.php"><input type="button" value="Create your own tool" /></a></p>
			<div class="section-description">
			<h3> List of Tools from Section <? echo($sectionS) ?>
			</div>
			<!-- Begin Input From Database -->
			<?
			while($row = $stmtS->fetch()) {
			?>
			<ul>
				<li>
					<p><? echo($row["Tool-id"]); ?>: <? echo($row["Name"]); ?></p>

					<!-- ADD TOOLS TO MY SCHEDULE, WHICH IS THE NEXT FORM IS FOR: -->
	                <form action="process-add-to-schedule.php" method="POST">
						<input type="hidden" value="<?= $row["Tool-id"]; ?>" name="Tool-id">
						<input type="hidden" value="<?= $User_id; ?>" name="User-id">
						<input id="date" type="date" id="" name="Date">
						<input type="submit" name="" value="ADD to Schedule <? echo $row["Tool-id"]; ?>" /> &nbsp;
					</form>	
				</li>	
			</ul>
			<? 
			} 
			?>
			<!-- End Input From Database -->
		<br>
		<p>What else can you do to improve your physical health?</p>
		<ul><!-- ADD YOUR OWN (NEW) TOOL TO DATABASE -->						
			<li>
				<a href="add-your-tool.php"><input type="button" value="Create your own tool" /></a>
				<br><br>
				<a href="delete-my-tools.php">Delete some of my tools</a>
			</li>
		</ul>
		</div>
	</section>
</div>
<? include("includes/footer.php");  

} else { 
	?>
	<p>You are not allowed to view this page. Please <a href="login-form.php">log in here.</a></p>
	<? 
}
	?>