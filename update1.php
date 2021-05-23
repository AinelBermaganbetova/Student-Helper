<?php

include_once 'database.php';
if(count($_POST)>0 ) {
mysqli_query($conn,"UPDATE tutor_ads set tutorads_id='" . $_POST['tutorads_id'] . "', tutor_fullname='" . $_POST['tutor_fullname'] . "', the_email='" . $_POST['the_email'] . "', the_subject='" . $_POST['the_subject'] . "', the_topic='" . $_POST['the_topic'] . "', the_time='" . $_POST['the_time'] . "', the_price='" . $_POST['the_price']  . "' WHERE tutorads_id='" . $_POST['tutorads_id'] . "'");
echo "<script>alert('Your ad has update successfully')</script>";
}

$result = mysqli_query($conn,"SELECT * FROM tutor_ads " );
$row= mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style_can_help.css">
    <title></title>
  </head>
  <body>

    <div class="container">
      <div class="header_items">
              <a href="index1.php">
                <img src="icons/logo_dark.png" alt="logo" class="img1" style="
                width:140px;height:40px; display: block; margin-left: auto; margin-right: auto; "></a>
              </div>
  		<form action="" method="POST" class="emailOfLogin">
              <p class="textOfLogin" style="font-size: 2rem;">UPDATE</p>
  			<div class="groupsOfInput">
  				<input type="text" placeholder="Your student ID" name="tutorads_id">
  			</div>
  			<div class="groupsOfInput">
  				<input type="text" placeholder="Tutor fullname" name="tutor_fullname">
  			</div>
  			<div class="groupsOfInput">
  				<input type="email" placeholder="email" name="the_email">
        </div>
        <div class="groupsOfInput">
  				<input type="text" placeholder="subject" name="the_subject">
  			</div>
        <div class="groupsOfInput">
          <input type="text" name="the_topic" placeholder="topic" >
        </div>
        <div class="groupsOfInput">
          <input type="datetime-local" name=" the_time" placeholder="time" >
        </div>
        <div class="groupsOfInput">
  				<input type="number" min="0.00" max="10000.00" step="0.01" placeholder="price" name="the_price">
  			</div>
        <div class="groupsOfInput">
  				<button name="submit" class="btn">UPDATE</button>

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
