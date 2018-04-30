<?php session_start(); 

if($_SESSION["authenticated"] == true){ 
  require_once("../../CREDS/database.php"); 
  include("includes/header.php");          // Note to Evelyn: This header includes css styles //
 

$User_id = $_SESSION["UserID"];
$username = $_SESSION["Username"];

$stmt = $pdo->prepare ("SELECT * FROM `Schedule` INNER JOIN `Tool` ON `Schedule`.`Tool-id` = `Tool`.`Tool-id` WHERE `User-id` = '$User_id'");

$stmt2 = $pdo->prepare ("SELECT * FROM `Schedule`"); 

$stmt->execute();
$stmt2->execute();

?>

<!-- 
<!doctype html>
<html class="no-js" lang="en"> -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>My Schedule</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        
        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/basic.js"></script>

    </head>
    <body><!-- 大背景色 -->
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        <div class="blockfirst" id="blockFirst">
            <div id="#blockFirst2">
                    <a href="index.php"><img src="assets/backBotton.png" id="blockFirst3"></a>
            </div>
            <div id="blockFirst4">
                <img src="assets/schedule.png" id="blockFirst5">
                <br><br>
                <br><br>
                <br>
            </div>
        </div>
        <div class="blocktop" id="blocktop">
            <br><br>
            <br><br>
            <div style="padding: 20px">Wellness Toolbox could help you to build the schedule with the toolbox easily. You could do the quick create as well.  </div>
        </div>
        <div class="blockdown" id="blockdown">
            <div style="padding: 20px">
                <div class="container" style="display: inline;">
                    <!-- Add your site or application content here -->
                <p>Plan and Print Your Weekly Activities</p>
                <p style=" line-height: 2em">Click Here<a href="https://www.getselfhelp.co.uk//docs/WeeklyPlanner.pdf"> to print your schedule. <img src="assets/print.png" id="blockdown2"></a></p>
                </div> <!-- ends div class container -->

                <p class="" id="schedule1">Schedule</p>
                <!-- <div class="listBG"></div> -->
                <div class="global_layout" id="global_layout"> 
                <p class="createTool1">
                    <div id="createTool" class="boderTool">
                        Create a Custom Tool
                        </div>
                        <div class="boderTool"><a href="index.php">Select an Existing One</a></div>
                        </p>
                <br>
                    <div style="display:none" id="createToolTar">
                        <div id="textalienLeft">close</div>
                      <form action="process-newtool-fromschedpage.php" method="POST" enctype='multipart/form-data'>
                        <div class="col col2" id="col12 ">
                          
                          <label for="Name">Tool Name:</label>
                          <br>
                          <input type="text" name="Name" id="Name" class="Nametext" /> 
                          <br>
                          <input type="hidden" name="User-id" id="User-id" value="<? $_SESSION["Username"]; ?>" />
                          <br>
                          <label for="Date">Date:</label>
                          <input id="date" type="date"  name="Date" class="Datetext" required>
                          <br>
                          <label for="Description">Description and Comments:</label>
                          <br>
                          <textarea name="Description" style="width:100%;"></textarea>
                          <br>
                          <label for="Section">Select Activity Section:</label>
                          <br>
                          <select name="Section"  id="Section" class="Sectiontext" required>
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
                    <div style="width: 100%">





                      
                        <table id="tableSchedule">
                            <tr id="tableSchedule1">
                              <td>Date:</td>
                              <td>Tool:</td>
                              <td>Completed?</td>
                            </tr><!-- Begin Output from Database -->
                            <? while($row = $stmt->fetch()) { ?>
                            <tr style="font-size: 14px;">
                              <td>
                              	<form method="post" action="process-complete-goal.php">
                                 <input type="hidden" name="date" value="<?php echo $row["Date"]; ?>" id="Date" />
                              
                                 
                                <? echo($row["Date"]);?>
                              </td>
                              <td>  
                                <? echo($row["Name"]);?>: id - <? echo($row["Tool-id"]);?> 
                                <input type="hidden" name="toolid" value="<?php echo $row["Tool-id"]; ?>" id="ToolID" />
                              </td>
                              <td>
                                <input type="submit" name="Completed" value="Completed" />
                                </form>
                              </td>
                            </tr><? } ?> <!-- End Output from Database-->  
                        </table>
                    

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
