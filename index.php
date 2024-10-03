<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php session_start(); ?>

	<h1>Fill in the input fields below</h1>
	
    <form action="handleForm.php" method="POST">
		<p><input type="text" placeholder="First name here" name="firstName"></p>
		<p><input type="password" placeholder="Password here" name="password"></p>
		<p><input type="submit" value="Submit" name="submitBtn"></p>
	</form>

	<!-- Add the logout button here -->
	<form action="unset.php" method="POST">
		<p><input type="submit" value="Logout" name="logoutBtn"></p>
	</form>
    
	<h2>
		User logged in:
		<?php
		if(isset($_SESSION['firstName'])) {
			echo $_SESSION['firstName'];
		}
		?>		
	</h2>

	<h2>
		User password:
		<?php
		if(isset($_SESSION['password'])) {
			echo $_SESSION['password'];
		}
		?>		
	</h2>

    <?php
	// Check if the user is already logged in
	if(isset($_SESSION['firstName'])) {
		// If logged in, display the logged-in message
		echo "<h2>{$_SESSION['firstName']} is already logged in. Wait for them to logout first.</h2>";
	?>

    <?php
	}
	?>

</body>
</html>
