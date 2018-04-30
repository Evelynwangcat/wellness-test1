<?php session_start(); // START SESSION and add this content 

// USE THIS LINE TO ECHO USERNAME BACK TO THE USER: echo $_SESSION["Username"]; 

if($_SESSION["authenticated"] == true){ 
	require_once("../../CREDS/database.php");  // CONNECT TO THE DATABASE -->
	include("includes/header.php");  // ADD HEADER -->
	include("includes/nav.php");   // ADD NAVIGATION 
?>
	<section>
		<h2>Add Your Tool</h2>
		<p><?php echo $Username; ?></p>
			<form action="process-add-your-tool.php" method="POST" enctype='multipart/form-data'>
				<!--<label for="Thumbnail">Thumbnail Image:<br>
				<input type='file' name='Thumbnail' />
				<br>-->
				<label for="Name">Tool Name:</label>
				<br>
				<input type="text" name="Name" id="Name" /> 
				<br>
				<label for="User-id">Your Username:</label>
				<br>
				<input type="text" name="User-id" id="User-id" value="<?php echo $_SESSION["Username"]; ?>" />
				<br>
	            <label for="Description">Description and Comments:</label>
	            <br>
	            <textarea name="Description" rows="15" cols="35"></textarea>
				<br>
				<label for="Section">Select Activity Section:</label>
				<br>
				<select name="Section"  id="Section">
					<option value="B">B - Body - Physical Health Activities</option>
					<option value="A">A - Achieve Activities</option>
					<option value="C">C - Connect with Others</option>
					<option value="E">E - Enjoy - Fun, Hobbies</option>
					<option value="S">S - Step Back - Take a Break</option>
				</select>
				<br>
				<label for="Section">Keep Your New Tool Private?</label>
				<br>
				<select name="Privacy"  id="Privacy">
					<option value="2">Yes</option>
					<option value="1">No</option>
				</select>
				<br>
				<br>
				<input type="submit" name="submit" />
			</form>
<!-- 			<br>
	            <label for="Date">Date Created:</label>
	            <br>
				<input type="text" name="Date" value="<?php //echo date("Y.m.d"); ?>" /> <! Reference 7: W3C How to show dates in PHP --> 
	</section>
	<br />
    <?php include("includes/footer.php");  ?><!-- ADD FOOTER -->


    <?php }elseif ($_SESSION["authenticated"] == false){ 
	?>
	<p>You are not allowed to view this page. Please <a href="login-form.php">log in here.</a></p>
<? 
}
?>