<?php
$server ="localhost";
$username ="root";
$password="";
$dbname="reglog";

$conn= mysqli_connect($server, $username,$password,$dbname);

if(isset($_POST['submit'])){
	if(!empty($_POST['theUsername']) && !empty($_POST['email'])&&!empty($_POST['a_hobby']))
{


$theUsername= $_POST['theUsername'];
$email= $_POST['email'];
$a_hobby= $_POST['a_hobby'];


   $query ="INSERT INTO hobby(theUsername,email,a_hobby) VALUES('$theUsername','$email','$a_hobby')";


    $run =mysqli_query($conn,$query) or die(mysqli_error($conn));
  if($run){
  	echo "<script>alert('Successfully were inserted')</script>";
  }
  else{
  	echo "<script>alert('SORRY')</script>";
  }
}
else{
	echo "error";
}	# code...
}
?>







<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style_can_help.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>STUDY BUDDY</title>


</head>
<body>

	<div class="container">
    <div class="header_items">
            <a href="index1.php">
              <img src="icons/logo_dark.png" alt="logo" class="img1" style="
              width:140px;height:40px; display: block; margin-left: auto; margin-right: auto; "></a>
            </div>
		<form action="" method="POST" class="emailOfLogin">
            <p class="textOfLogin" style="font-size: 2rem;">Wanna be your study buddy</p>
			<div class="groupsOfInput">
				<input type="text" placeholder="username" name="theUsername">
			</div>
			<div class="groupsOfInput">
				<input type="email" placeholder="email" name="email">
			</div>
			<div class="groupsOfInput">
				<input type="text" placeholder="hobby" name="a_hobby">
      </div>

      <div class="groupsOfInput">
				<button name="submit" class="btn">Submit</button>
			</div>

		</form>
	</div>
</body>
</html>


<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
