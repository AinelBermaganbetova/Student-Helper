<?php
if(isset($_POST['delete']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "reglog";

    $id = $_POST['tutorads_id'];
    $connect = mysqli_connect($hostname, $username, $password, $dbname);

    $query = "DELETE FROM `tutor_ads` WHERE `tutorads_id` = $id";


    $result = mysqli_query($connect, $query);

    if($result)
    {
        echo "<script>alert('Your ad has deleted successfully')</script>";
    }else{
        echo "<script>alert('No ads deleted')</script>";
    }
    mysqli_close($connect);
}

?>

<!DOCTYPE html>

<html>

    <head>


        <title> Delete ad!</title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="style_can_help.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    <body>
      <div class="container">
        <div class="header_items">
                <a href="index1.php">
                  <img src="icons/logo_dark.png" alt="logo" class="img1" style="
                  width:140px;height:40px; display: block; margin-left: auto; margin-right: auto; "></a>
                </div>
                <form action="delete.php" method="POST" class="emailOfLogin">
                        <p class="textOfLogin" style="font-size: 1.5rem;">DELETE</p>
                <div class="groupsOfInput">
                          <input type="text" placeholder="Enter your ID number" name="tutorads_id" required >
                </div>
                <div class="groupsOfInput">
                      <input type="password" placeholder="Enter your password" name="password" required ><br><br>
                </div>
                <div class="groupsOfInput">
                  <button name="delete" value="Delete Data" class="btn">DELETE</button>
                </div>
              </form>



    </body>


</html>

<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
