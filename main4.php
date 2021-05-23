<?php
$server ="localhost";
$username ="root";
$password="";
$dbname="reglog";

$conn= mysqli_connect($server, $username,$password,$dbname);

if(isset($_POST['submit'])){
	if(!empty($_POST['tutorads_id']) && !empty($_POST['tutor_fullname']) && !empty($_POST['the_email'])&&!empty($_POST['the_subject'])&&!empty($_POST['the_topic'])&&!empty($_POST['the_time'])&&!empty($_POST['the_price']))
{

$tutorads_id= $_POST['tutorads_id'];
$tutor_fullname= $_POST['tutor_fullname'];
$the_email= $_POST['the_email'];
$the_subject= $_POST['the_subject'];
$the_topic= $_POST['the_topic'];
$the_time= $_POST['the_time'];
$the_price= $_POST['the_price'];

   $query ="INSERT INTO tutor_ads(tutorads_id,tutor_fullname,the_email,the_subject,the_topic,the_time,the_price)
	 VALUES('$tutorads_id', '$tutor_fullname','$the_email','$the_subject','$the_topic','$the_time','$the_price')";
    $run =mysqli_query($conn,$query) or die(mysqli_error($conn));
  if($run){
  	echo "<script>alert('You successfully inserted your ad!')</script>";
  }
  else{
  	echo "<script>alert('Something went wrong.')</script>";
  }
}
else{
	echo "error";
}
}
?>







<!DOCTYPE html>
<html>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style_can_help.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>CanHelp</title>


</head>
<body>

	<div class="container">
    <div class="header_items">
            <a href="index1.php">
              <img src="icons/logo_dark.png" alt="logo" class="img1" style="
              width:140px;height:40px; display: block; margin-left: auto; margin-right: auto; "></a>
            </div>
		<form action="" method="POST" class="emailOfLogin">
            <p class="textOfLogin" style="font-size: 2rem;">I can help</p>
			<div class="groupsOfInput">
							<input type="text" placeholder="Your student ID" name="tutorads_id">
			</div>
			<div class="groupsOfInput">
				<input type="text" placeholder="username" name="tutor_fullname">
			</div>
			<div class="groupsOfInput">
				<input type="email" placeholder="email" name="the_email">
			</div>
			<div class="groupsOfInput">
				<input type="text" placeholder="subject" name="the_subject">
      </div>
      <div class="groupsOfInput">
				<input type="text" placeholder="topic" name="the_topic">
			</div>
      <div class="groupsOfInput">
        <input type="datetime-local" name="the_time" placeholder="Time" >
      </div>
      <div class="groupsOfInput">
				<input type="number" min="0.00" max="10000.00" step="0.01" placeholder="price" name="the_price">
			</div>
      <div class="groupsOfInput">
				<button name="submit" class="btn">Submit</button>

		</form>
	</div>
</div>


</body>
</html>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
