<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>I NEED HELP</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput-typeahead.css" />
  <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <link rel="stylesheet" href="css/style.min.css">
  <title>Study Helper</title>


  <style media="screen">
  .bootstrap-tagsinput {
   width: 100%;

  }
  .body{
    background: white;
  }
  </style>
 </head>
 <body>
   <header class="header header_dark">
        <div class="container">
             <div class="header_items">

                  <img src="icons/logo_dark.png" alt="logo" class="img1">
                  <img src="icons/logo_light.png" alt="logo" class="img2">
                  <a href="logout.php"><button type="button" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-log-out"></span> Log out
                </button></a>

             </div>
        </div>
   </header>
   <!-- header for mobile version -->
   <header class="header2">
        <div class="container">
             <nav class="nav">

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



                  </ul>
             </nav>
        </div>
   </header>
   <div class="subheader subheader_dark">
        <div class="container">
             <ul>
                  <li><a href="index1.php">Main</a></li>
                  <li> <a href="mentorship.html">Mentorship</a></li>

                  <li><a href="study_buddy.html">Study buddy</a></li>
                  <li><a href="aboutus.html">About us</a></li>

             </ul>
        </div>
   </div>

  <div class="container">
   <br />
   <br />
   <br />
   <h2 align="center">I need help</h2><br />
   <div class="form-group">
    <div class="row">
     <div class="col-md-10">
      <input type="text" id="tags" class="form-control" data-role="tagsinput" />
     </div>
     <div class="col-md-2">
      <button type="button" name="search" class="btn btn-primary" id="search" style="background-color:rgb(46,0,78);">Search</button>
     </div>
    </div>
   </div>
   <br />
   <div class="table-responsive">
    <div align="right">
     <p><b>Total ads: <span id="total_records"></span></b></p>
    </div>
    <table class="table table-bordered table-striped" style="border: 3px solid rgb(46,0,78);;
    border-radius: 40px; ">
     <thead style="border: 2px solid rgb(46,0,78);
     border-radius: 40px; ">
      <tr style="border: 3px solid rgb(46,0,78);;
      border-radius: 40px; ">
       <th style="border: 2px solid rgb(46,0,78);
       border-radius: 40px; ">Tutor name</th>
       <th style="border: 2px solid rgb(46,0,78);
       border-radius: 40px; ">Email</th>
       <th style="border: 2px solid rgb(46,0,78);
       border-radius: 40px; ">Subject</th>
       <th style="border: 2px solid rgb(46,0,78);
       border-radius: 40px; ">Topic</th>
       <th style="border: 2px solid rgb(46,0,78);
       border-radius: 40px; ">Time</th>
       <th style="border: 2px solid rgb(46,0,78);
       border-radius: 40px; ">Price</th>
      </tr>
     </thead>
     <tbody>
     </tbody>
    </table>
   </div>
  </div>
  <div style="clear:both"></div>
  <br />

  <br />
  <br />
  <br />
 </body>
</html>


<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   dataType:"json",
   success:function(data)
   {
    $('#total_records').text(data.length);
    var html = '';
    if(data.length > 0)
    {
     for(var count = 0; count < data.length; count++)
     {
      html += '<tr>';
      html += '<td>'+data[count].tutor_fullname+'</td>';
      html += '<td>'+data[count].the_email+'</td>';
      html += '<td>'+data[count].the_subject+'</td>';
      html += '<td>'+data[count].the_topic+'</td>';
      html += '<td>'+data[count].the_time+'</td>';
      html += '<td>'+data[count].the_price+'</td></tr>';
     }
    }
    else
    {
     html = '<tr><td colspan="5">No Data Found</td></tr>';
    }
    $('tbody').html(html);
   }
  })
 }

 $('#search').click(function(){
  var query = $('#tags').val();
  load_data(query);
 });

});

</script>
<script src="main.js"></script>
