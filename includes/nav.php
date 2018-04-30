<?php ?>
<nav >
	<img src="assets/schedule.png" style="position: relative; width:100px; top:20px;">
	<ul>
		<? if($_SESSION["authenticated"] == false){ ?>
		<li><a href="register.php">Register</a></li>
		<li><a href="login-form.php">Sign In</a></li>
		<? } elseif ($_SESSION["authenticated"] == true){ ?>
		<li>Hello, <?php echo $_SESSION["Username"]; ?></li>
		<li><a href="index.php">Home</a></li>
		<li><a href="my-tools.php">My Toolbox</a></li>
		<li><a href="schedule.php">My Schedule</a></li>
		<li><a href="my-goals.php">My Goals</a></li>
		<li><a href="logout.php">Logout</a></li>
		<? } ?>
	</ul>
</nav>