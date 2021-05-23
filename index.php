<?php


include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['theUsername'])) {
    header("Location: index1.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM table_of_users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['theUsername'] = $row['theUsername'];
		header("Location: index1.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Login Form</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="emailOfLogin">
			<p class="textOfLogin" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="groupsOfInput">
				<input type="email" placeholder="SDU email" name="email" pattern="[0-9]*[@]\bstu.sdu.edu.kz" value="<?php echo $email; ?>" required>
			</div>
			<div class="groupsOfInput">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="groupsOfInput">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="textOfRegisterText">Don't have an account? <a href="register.php">Register Here</a>.</p>
		</form>
	</div>
</body>
</html>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
