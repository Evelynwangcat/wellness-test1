<?php session_start(); 

if($_SESSION["authenticated"] == true){ 
    require_once("../../CREDS/database.php"); 
    include("includes/header.php"); 


$User_id = $_SESSION["UserID"];


// $sectionB = "B";
// $sectionA = "A";
// $sectionC = "C";
// $sectionE = "E";
// $sectionS = "S";


$stmt = $pdo->prepare("SELECT * FROM `Tool`  
INNER JOIN `Goals` 
ON `Tool`.`Tool-id`=`Goals`.`Tool-id`
"); 

$stmt->execute();



$stmt3 = $pdo->prepare("SELECT `Tool`.`Tool-id`,`Tool`.`Name`, `Tool`.`Section`
FROM `Tool` INNER JOIN `Goals` 
    ON `Tool`.`Tool-id`=`Goals`.`Tool-id`
    WHERE `Goals`.`User-id` = '$User_id'");

$stmt3->execute();

?>


 <!--    <head>    
        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <! Place favicon.ico in the root directory -->
        <!-- <link rel="stylesheet" href="css/normalize.css"> -->
 <!--        <link type="text/css" rel="stylesheet" href="includes/stylesheets/style.css">
    <link type="text/css" rel="stylesheet" href="includes/stylesheets/css2.css">
        <style>
        .selectOption{
          display: flex; flex-direction: column; justify-content: center; text-align: center; width:30%;margin: 2rem 0 ;
        }
        </style> -->
<!--     </head> -->
    <body><!-- 大背景色 --> <!-- style="background-color: #e6f1fc; background-image: url('assets/achievementbg.png');background-repeat: repeat-x; font-size:2rem" -->
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        <div class="blockfirst" style="width:90%; margin: 0px auto; height: 180px">
            <div style="position: absolute; top:50px; left:50px; width: 30px; height: 30px; cursor: pointer">
                    <a href="index.php"><img src="assets/backBotton.png" style="width: 100px; height: 100px;"></a>
            </div>
            <div style="width: 120px; height: 120px; border-radius: 50%; background-color: #ccc; margin: 0 auto; position:relative; bottom:-120px">
                <img src="assets/schedule.png" style="width:118px; padding: 1px">
                <br><br>
                <br><br>
                <br>
            </div>
        </div>
        <div class="blocktop" style="width:90%; margin: 0px auto 0 auto; background-color: #fff">
            <br>
            <div class="intro-text"><br><br><br><br>Wellness Toolbox: Track Your Progress Here </div>
        </div>
        
        <div class="blockdown" style="width:90%; margin: 20px auto; background-color: #fff; display: flex; flex-flow: row wrap; justify-content:center;">


           <div class="goals-icons"><!-- class="selectOption" -->
                <span><img src="assets/travel.png" style=" height: 150px;"></span><span>Body - Physical Health - Goals</span>
<!--                 <div style="
                               height: 10rem;
                               background-color: #fff;
                               overflow: scroll;
                        "> -->
                        <ol>
                            <!-- Begin Input From Database -->
                            <?
                            while($row = $stmt3->fetch()) {
                                      
                                            $SB = "B";
                                            if ($row["Section"] == $SB) {  ?>

                                                <li> <!-- generate li elements -->

                                                <? //echo($row["Tool-id"]); 
                                                   echo($row["Section"]); 
                                                   echo($row["Name"]); 
                                                   echo($row["Tool-id"]);

                                            } // end if

                                            ?>  </li>

                            <? 
                            } // end while loop
                            ?>
                            <!-- End Input From Database -->   
                        </ol>
            </div>



            <div class="goals-icons"><!-- class="selectOption" -->
                <span><img src="assets/study.png" style="height: 150px;"></span><span>Achievement Goals</span>

                <ol>
                    <!-- Begin Input From Database -->
                    <?
                      $stmt3 = $pdo->prepare("SELECT `Tool`.`Tool-id`,`Tool`.`Name`, `Tool`.`Section`
                    FROM `Tool` INNER JOIN `Goals` 
                        ON `Tool`.`Tool-id`=`Goals`.`Tool-id`
                        WHERE `Goals`.`User-id` = '$User_id'");

                    $stmt3->execute();

                    while($row = $stmt3->fetch()) {
                              
                                    $SA = "A";
                                    if ($row["Section"] == $SA) {  ?>

                                        <li><!-- generate li elements -->

                                        <?  
                                           echo($row["Section"]); 
                                           echo($row["Name"]);
                                           echo($row["Tool-id"]); 

                                    } // end if

                                    ?>  </li>

                    <? 
                    } // end while loop
                    ?>
                    <!-- End Input From Database --> 

                </ol>
            </div>


            <div class="goals-icons"> <!-- class="selectOption" -->
                <span><img src="assets/sport.png" style=" height: 150px;"></span><span>Connect Goals</span>

                <ol>
                    <!-- Begin Input From Database -->
                    <?
                      $stmt3 = $pdo->prepare("SELECT `Tool`.`Tool-id`,`Tool`.`Name`, `Tool`.`Section`
                    FROM `Tool` INNER JOIN `Goals` 
                        ON `Tool`.`Tool-id`=`Goals`.`Tool-id`
                        WHERE `Goals`.`User-id` = '$User_id'");

                    $stmt3->execute();

                    while($row = $stmt3->fetch()) {
                              
                                    $SC = "C";
                                    if ($row["Section"] == $SC) {  ?>

                                        <li> <!-- generate li elements -->

                                        <? //echo($row["Tool-id"]); 
                                           echo($row["Section"]); 
                                           echo($row["Name"]); 
                                           echo($row["Tool-id"]);

                                    } // end if

                                    ?>  </li>

                    <? 
                    } // end while loop
                    ?>
                    <!-- End Input From Database -->   
                </ol>
            </div>




           <div class="goals-icons">
            <span><img src="assets/health.png" style="height: 150px;"></span><span>Enjoy Goals</span>

                <ol>
                    <!-- Begin Input From Database -->
                    <?
                      $stmt4 = $pdo->prepare("SELECT `Tool`.`Tool-id`,`Tool`.`Name`, `Tool`.`Section`
                    FROM `Tool` INNER JOIN `Goals` 
                        ON `Tool`.`Tool-id`=`Goals`.`Tool-id`
                        WHERE `Goals`.`User-id` = '$User_id'");

                    $stmt4->execute();

                    while($row = $stmt4->fetch()) {
                              
                                    $SE = "E";
                                    if ($row["Section"] == $SE) {  ?>

                                        <li> <!-- generate li elements -->

                                        <? //echo($row["Tool-id"]); 
                                           echo($row["Section"]); 
                                           echo($row["Name"]); 
                                           echo($row["Tool-id"]);

                                    } // end if

                                    ?>  </li>
                    <? 
                    } // end while loop
                    ?>
                    <!-- End Input From Database -->   
                </ol>
           </div>

           <div class="goals-icons">
            <span><img src="assets/cook.png" style=" height: 150px;"></span><span>Step Back and Relax Goals</span>

                <ol>
                    <!-- Begin Input From Database -->
                    <?
                      $stmt5 = $pdo->prepare("SELECT `Tool`.`Tool-id`,`Tool`.`Name`, `Tool`.`Section`
                    FROM `Tool` INNER JOIN `Goals` 
                        ON `Tool`.`Tool-id`=`Goals`.`Tool-id`
                        WHERE `Goals`.`User-id` = '$User_id'");

                    $stmt5->execute();

                    while($row = $stmt5->fetch()) {
                              
                                    $SS = "S";
                                    if ($row["Section"] == $SS) {  ?>

                                        <li> <!-- generate li elements -->

                                        <? //echo($row["Tool-id"]); 
                                           echo($row["Section"]); 
                                           echo($row["Name"]); 
                                           echo($row["Tool-id"]);

                                    } // end if

                                    ?>  </li>
                    <? 
                    } // end while loop
                    ?>
                    <!-- End Input From Database -->   
                </ol>
           </div>
        </div><!-- End Class blockdown Div -->
    </body>
<? include("includes/footer.php");  

} else { 
    ?>
    <p>You are not allowed to view this page. Please <a href="login-form.php">log in here.</a></p>
    <? 
}
    ?>


