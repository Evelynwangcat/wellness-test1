<?php 
session_start();
require_once("../../CREDS/database.php"); 
include("includes/header.php"); 
include("includes/nav.php");  

$userid = $_SESSION["Username"];
$sectionB = "B";
$sectionA = "A";
$sectionC = "C";
$sectionE = "E";
$sectionS = "S";

$stmtB = $pdo->prepare("SELECT * FROM `Tool` WHERE `Section` = '$sectionB'");
$stmtA = $pdo->prepare("SELECT * FROM `Tool` WHERE `Section` = '$sectionA'");
$stmtC = $pdo->prepare("SELECT * FROM `Tool` WHERE `Section` = '$sectionC'");
$stmtE = $pdo->prepare("SELECT * FROM `Tool` WHERE `Section` = '$sectionE'");
$stmtS = $pdo->prepare("SELECT * FROM `Tool` WHERE `Section` = '$sectionS'");

$stmtB->execute();
$stmtA->execute();
$stmtC->execute();
$stmtE->execute();
$stmtS->execute();

?>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/basic.js"></script>


<h1 id="app-title">Wellness Toolbox</h1>
<h2 class="intro-text">Intro Text Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta ipsam, perferendis eligendi sapiente debitis voluptatem sequi a velit ratione possimus corrupti quia libero architecto reiciendis labore nobis quibusdam, nemo nulla.</h2>

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
	<div id="subbody" class="selection">	
		<section class="tool-section">
		<h1>B - BODY - PHYSICAL HEALTH</h1>
		<div class="tool-description-container">
		<div class="section-description">BODY: Take care of your physical health.
		<ul>
			<li>Take steps to ensure you get enough sleep</li>
			<li>Eat healthily and regularly</li>
			<li>Exercise regularly, preferably in an outside/natural space</li>
			<li>Plan rest times too</li>
			<li>Beware of how things like drink, drugs, smoking and caffeine affect you</li>
		</ul>  
		</div>  	
		<h3>List of Tools in this section</h3>
		
		<?
		while($row = $stmtB->fetch()) {
		?>
		<ul>
			<li>
				<p><? echo($row["Tool-id"]); ?>: <? echo($row["Name"]); ?></p>
				<form action="process-add.php" method="POST">
					<input type="hidden" value="<?= $row["Tool-id"]; ?>" name="Tool-id">
					<input type="submit" class="colorButton" name="" value="ADD <? echo $row["Tool-id"]; ?>" />
				</form>	
			</li>	
		</ul>
		<? 
		} 
		?>
		<br>
		<p>What else can you do to improve your physical health?</p>
		<ul><!-- ADD YOUR OWN (NEW) TOOL TO DATABASE -->						
			<li>
				<a href="add-your-tool.php"><input type="button" value="Create your own tool" /></a>
			</li>
		</ul>
		</div>		
	</section>
	</div>
	<div id="subachieve" class="selection displayNone">
	<section class="tool-section">
		<h1>A - Achievement </h1>
		<div class="tool-description-container">
		<div class="section-description">
			Our brain gets a boost when we achieve things during the day.  Achievement increases the neurotransmitter dopamine and purposeful activity increases serotonin. It is therefore very helpful to plan realistic and achieveable goals every day, such as those concerning work, chores  and study, but we can also set goals and achieve activities relating to Connecting to others and Enjoyment and Exercise.
		</div>
		<h3>List of Tools in this section</h3>
		<?
		while($row = $stmtA->fetch()) {
		?>
		<ul>
			<li>
				<p><? echo($row["Tool-id"]); ?>: <? echo($row["Name"]); ?></p>
				<form action="process-add.php" method="POST">
					<input type="hidden" value="<?= $row["Tool-id"]; ?>" name="Tool-id">
					<input type="submit" class="colorButton" name="" value="ADD <? echo $row["Tool-id"]; ?>" />
				</form>	
			</li>	
		</ul>
		<? 
		} 
		?>
		<br>
		<p>What else can you do to improve your physical health?</p>
		<ul><!-- ADD YOUR OWN (NEW) TOOL TO DATABASE -->						
			<li>
				<a href="add-your-tool.php"><input type="button" value="Create your own tool" /></a>
			</li>
		</ul>
		</div>	
	</section>
	</div>
	<div id="subconnect"  class="selection displayNone">
	<section class="tool-section">
		<h1>C - CONNECT</h1>
		<div class="tool-description-container">
			<div class="section-description">
			content from c section
			</div>
		<?
		while($row = $stmtC->fetch()) {
		?>
		<ul>
			<li><p><? echo($row["Tool-id"]); ?>: <? echo($row["Name"]); ?></p>
				<form action="process-add.php" method="POST">
					<input type="hidden" value="<?= $row["Tool-id"]; ?>" name="Tool-id">
					<input type="submit" class="colorButton" name="" value="ADD <? echo $row["Tool-id"]; ?>" />
				</form>		
			</li>	
		</ul>
		<? 
		} 
		?>
		<br>
		<p>What else can you do to improve your physical health?</p>
		<ul><!-- ADD YOUR OWN (NEW) TOOL TO DATABASE -->						
			<li>
				<a href="add-your-tool.php"><input type="button" value="Create your own tool" /></a>
			</li>
		</ul>
		</div>	
	</section>
	</div>
	<div id="subenjoy"  class="selection displayNone">
	<section class="tool-section">
		<h1>E - ENJOY</h1>
		<div class="tool-description-container">
			<div class="section-description">
			content from e section
			</div>
		<?
		while($row = $stmtE->fetch()) {
		?>
		<ul>
			<li>
				<p><? echo($row["Tool-id"]); ?>: <? echo($row["Name"]); ?></p>
				<form action="process-add.php" method="POST">
					<input type="hidden" value="<?= $row["Tool-id"]; ?>" name="Tool-id">
					<input type="submit" class="colorButton" name="" value="ADD <? echo $row["Tool-id"]; ?>" />
				</form>	
			</li>	
		</ul>
		<? 
		} 
		?>
		<br>
		<p>What else can you do to improve your physical health?</p>
		<ul><!-- ADD YOUR OWN (NEW) TOOL TO DATABASE -->						
			<li>
				<a href="add-your-tool.php"><input type="button" value="Create your own tool" /></a>
			</li>
		</ul>
		</div>	
	</section>
	</div>
	<div  id="subsetback" class="selection displayNone">
	<section class="tool-section">
		<h1>S - STEP BACK</h1>
		<div class="tool-description-container">
			<div class="section-description">
			content from s section
			</div>
		<?
		while($row = $stmtS->fetch()) {
		?>
		<ul>
			<li>
				<p><? echo($row["Tool-id"]); ?>: <? echo($row["Name"]); ?></p>
				<form action="process-add.php" method="POST">
					<input type="hidden" value="<?= $row["Tool-id"]; ?>" name="Tool-id">
					<input type="submit" class="colorButton" name="" value="ADD <? echo $row["Tool-id"]; ?>" />
				</form>	
			</li>	
		</ul>
		<? 
		} 
		?>
		<br>
		<p>What else can you do to improve your physical health?</p>
		<ul><!-- ADD YOUR OWN (NEW) TOOL TO DATABASE -->						
			<li>
				<a href="add-your-tool.php"><input type="button" value="Create your own tool" /></a>
			</li>
		</ul>
		</div>
	</section>
	</div>
</div>
<? include("includes/footer.php");  ?><!-- ADD FOOTER -->	