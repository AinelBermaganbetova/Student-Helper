<?php
session_start();

if (!isset($_SESSION['theUsername'])) {
    header("Location: index.php");
}

?>





<!DOCTYPE html>
<html lang="en" class="animated fadeInLeft">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Study Helper</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
     <link rel="stylesheet" href="css/style.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="animate.css">
     <style media="screen">

     .s1 {
font-size: 80px;
color: #fff;
text-align: center;
animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes s1 {
from {
  text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
}

to {
  text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
}
}



     </style>
</head>
<body>
     <header class="header">
          <div class="container">
               <div class="header_items">
                 
                    <img src="icons/logo_dark.png" alt="logo" class="img1">

            <div class="header_items">
              <p style="color: rgb(46,0,78); font-size: 1.5em;cursor:default;"> Welcome <?php echo $_SESSION['theUsername']; ?>!</p>
            </div>
<div class="buttons">
  <a href="logout.php"><button type="button" class="btn btn-default btn-sm">
<span class="glyphicon glyphicon-log-out"></span> Log out
</button></a>
</div>
               </div>
          </div>
     </header>
     <!-- header for mobile version -->
     <header class="header2">
          <div class="container">
               <nav class="nav">
                 <a href="index1.php">
                    <img src="icons/logo_dark.png" alt="logo" class="img1"></a>
                    <div class="menu-toogle">
                         <i class="fas fa-bars"></i>
                         <i class="fas fa-times"></i>
                    </div>
                    <ul class="nav-list">

                         <li class="nav-item">
                              <a href="index1.php" class="nav-link">Main</a>
                         </li>
                         <li class="nav-item">
                              <a href="mentorship.html" class="nav-link">Mentorship</a>
                         </li>

                         <li class="nav-item">
                              <a href="study_buddy.html" class="nav-link">Study buddy</a>
                         </li>
                         <li class="nav-item">
                              <a href="aboutus.html" class="nav-link">About us</a>
                         </li>

                           <div class="header_items">
                             <p style="cursor:default; color: white; font-size: 1.5em;"> Welcome <?php echo $_SESSION['theUsername']; ?>!</p>
                           </div>
               <div class="buttons">
                 <a href="logout.php"><button type="button" class="btn btn-default btn-sm">
               <span class="glyphicon glyphicon-log-out"></span> Log out
               </button></a>
                    </ul>
               </nav>
          </div>
     </header>
     <div class="subheader">
          <div class="container">
               <ul>
                    <li><a href="index1.php">Main</a></li>
                    <li> <a href="mentorship.html">Mentorship</a></li>

                    <li><a href="study_buddy.html">Study buddy</a></li>
                    <li><a href="aboutus.html">About us</a></li>


               </ul>
          </div>
     </div>
     <section class="main" id="main">
          <div class="container" style="padding-bottom: 0; ">
               <div class="left_block">
                    <h1>Together With Us You Will Achieve  A Lot  </h1>
                    <p>Our platform is designed for mutual assistance, networking of students, where everyone can improve their knowledge and share it!
                    </p>
                    <button>Got it</button>

               </div>
          </div>
     </section>
   </br>
     <!-- THIS IS FOOTER -->
<footer class="text-center text-lg-start bg-light text-muted">

  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >

  </section>

  <section class="">
    <div class="container text-center text-md-start mt-5">

      <div class="row mt-3">

        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i> STUDENT HELPER
          </h6>
          <p>

          </p>
        </div>

        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">
            Motivation
          </h6>
          <p>
            TO TEACH
          </p>
          <p>
          IS TO
          </p>
          <p>
            LEARN
          </p>
          <p style="color:rgb(46,0,78);; font-weight:bold;">
            TWICE.
          </p>
        </div>
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="index1.php" class="text-reset">Home page</a>
          </p>
          <p>
            <a href="mentorship.html" class="text-reset">Mentorship</a>
          </p>
          <p>
            <a href="study_buddy.html" class="text-reset">Study buddy</a>
          </p>
          <p>
            <a href="aboutus.html" class="text-reset">About us</a>
          </p>
        </div>
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i>Almaty region, Karasay district. Kaskelen city, 1/1 Abylai Khan Street</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
           studenthelper@gmail.com
          </p>

        </div>
      </div>
    </div>
  </section>
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    2021 | Kaskelen:
    <a class="text-reset fw-bold" href="https://sdu.edu.kz/ru/suleyman-demirel-university-ru/">Suleyman Demirel University</a>
  </div>

</footer>

     <script src="main.js"></script>
</body>
</html>
