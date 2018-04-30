<?php session_start(); 

if($_SESSION["authenticated"] == true){ 
  require_once("includes/database.php");  // CONNECT TO THE DATABASE -->
  include("includes/header.php");  // ADD HEADER -->                              <!-- Note to Evelyn: This header includes css styles -->
  include("includes/nav.php");   // ADD NAVIGATION 

$User_id = $_SESSION["UserID"];
$username = $_SESSION["Username"];

$stmt = $pdo->prepare ("SELECT * FROM `Schedule` INNER JOIN `Tool` ON `Schedule`.`Tool-id` = `Tool`.`Tool-id` WHERE `User-id` = '$User_id'");

$stmt2 = $pdo->prepare ("SELECT *  
FROM `Schedule`"); 

$stmt->execute();
$stmt2->execute();

?>

<!-- 
<!doctype html>
<html class="no-js" lang="en"> -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Schedule</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        
        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="stylesheets/style.css">
        <link rel="stylesheet" href="stylesheets/css2.css">
    </head>
    <body><!-- 大背景色 -->
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        <div class="blockfirst" id="blcokfirst">
            <div id="blockfirst1">
                    <a href="index.php"><img src="assets/backBotton.png" id="blockfirst2"></a>
            </div>
            <div id="blockfirst3">
                <img src="assets/schedule.png" style="width:118px; padding: 1px">
                <br><br>
                <br><br>
                <br>
            </div>
        </div>
        <div class="blocktop" id="blocktop">
            <br><br>
            <br><br>
            <div class="padding20">Wellness Toolbox could help you to build the schedule with the toolbox easily. You could do the quick create as well.  </div>
        </div>
        <div class="blockdown" id="blockdown">
            <div class="padding20">
                <div class="container" style="display: inline;">
                    <!-- Add your site or application content here -->
                <p>Plan and Print Your Weekly Activities</p>
                <p style=" line-height: 2em">Click Here<a href="https://www.getselfhelp.co.uk//docs/WeeklyPlanner.pdf"> to print your schedule. <img src="assets/print.png" id="blockdown1"></a></p>
                </div> <!-- ends div class container -->

                <p class="" id="schedule1">Schedule</p>
                <!-- <div class="listBG"></div> -->
                <div class="global_layout" id="globalLayoutCss"> 
                    <div style="width: 30%;">
                      <form action="process-newtool-fromschedpage.php" method="POST" enctype='multipart/form-data'>
                        <div class="col col2" id="colCol2">
                          <p id="fontsize25">Create a Custom Tool or <a href="index.php">Select an Existing One</a></p>
                          <label for="Name">Tool Name:</label>
                          <br>
                          <input type="text" name="Name" id="Name" id="Nametext" /> 
                          <br>
                          <input type="hidden" name="User-id" id="User-id" value="<?php echo $_SESSION["Username"]; ?>" />
                          <br>
                          <label for="Date">Date:</label>
                          <input id="date" type="date" id="" name="Date" id="dateDate" required>
                          <br>
                          <label for="Description">Description and Comments:</label>
                          <br>
                          <textarea name="Description" rows="15" cols="35"></textarea>
                          <br>
                          <label for="Section">Select Activity Section:</label>
                          <br>
                          <select name="Section"  id="Section" class="Section" required>
                            <option value="B">B - Body - Physical Health Activities</option>
                            <option value="A">A - Achieve Activities</option>
                            <option value="C">C - Connect with Others</option>
                            <option value="E">E - Enjoy - Fun, Hobbies</option>
                            <option value="S">S - Step Back - Take a Break</option>
                          </select>
                          <br>
                          <label for="Section">Keep Your New Tool Private?</label>
                          <br>
                          <select name="Privacy"  id="Privacy" required>
                            <option value="2">Yes</option>
                            <option value="1">No</option>
                          </select>
                          <br>
                          <br>
                          <input type="submit" name="submit" id="submitSchedule" />
                        </div>
                      </form>
                    </div>
                    <div style="width: 60%">
                      <form action="" method="post">
                        <table id="TableSchedule">
                            <tr id="TableSchedule1">
                              <td>Date:</td>
                              <td>Tool:</td>
                              <td>Completed?</td>
                            </tr>
                            <? while($row = $stmt->fetch()) { ?> <!-- Begin Output from Database-->
                            <tr style="font-size: 14px;">
                              <td> <? echo($row["Date"]);?></td>
                              <td> <? echo($row["Name"]);?></td>
                              <td> <input type="checkbox" name="complete" value=""/> Completed? <? echo($row["Tool-id"]);?></td>
                            </tr><? } ?> <!-- End Output from Database-->  
                        </table>
                      </form>
                    </div>
                </div>
            </div>
        </div>
<? include("includes/footer.php");  

} else { 
  ?>
  <p>You are not allowed to view this page. Please <a href="login-form.php">log in here.</a></p>
  <? 
}
  ?>
