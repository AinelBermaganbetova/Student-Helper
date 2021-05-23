<?php

include 'config.php';
error_reporting(0);
session_start();

if (isset($_SESSION['theUsername'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$theUsername = $_POST['theUsername'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$confPassword = md5($_POST['confPassword']);

	if ($password == $confPassword) {
		$sql = "SELECT * FROM table_of_users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO table_of_users (theUsername, email, password)
					VALUES ('$theUsername', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Congrats! User Registration successfully completed.')</script>";
				$theUsername = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['confPassword'] = "";
			} else {
				echo "<script>alert('Something went wrong.')</script>";
			}
		} else {
			echo "<script>alert('This email has already exists.')</script>";
		}

	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Registration</title>


</head>
<body>

	<div class="container">
    <div class="header_items">
            <a href="index.html">
              <img src="icons/logo_dark.png" alt="logo" class="img1" style="
              width:140px;height:40px; display: block; margin-left: auto; margin-right: auto; "></a>
            </div>

		<form action="" method="POST" class="emailOfLogin">
            <p class="textOfLogin" style="font-size: 2rem;">Registration</p>

			<div class="groupsOfInput">
				<input type="text" placeholder="Username" name="theUsername" value="<?php echo $theUsername; ?>" required>
			</div>
			<div class="groupsOfInput">
				<input type="email" placeholder="SDU email" name="email" pattern="[0-9]*[@]\bstu.sdu.edu.kz" value="<?php echo $email; ?>" required>
			</div>
			<div class="groupsOfInput">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="groupsOfInput">
				<input type="password" placeholder="Confirm the Password" name="confPassword" value="<?php echo $_POST['confPassword']; ?>" required>
			</div>
			<div class="groupsOfInput">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="textOfRegisterText"> Already have an account? <a href="index.php"> Login </a>.</p>
		</form>
	</div>
</body>
</html>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
