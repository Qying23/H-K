<?php
  require_once 'taschen/actions/db_connect.php';

  $sql= "SELECT * FROM spielzeug Order by tId DESC";
  $result = mysqli_query($connect, $sql);
?>

<!DOCTYPE html>
<html>
<head>
  <title>H&K Shop</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
<section id="section1"> 
<nav class="navbar navbar-inverse navbar-fixed-top">
  <img class="navbar-brand" id="png" src="logo.png" alt="">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>

    </div>
    <div>

      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#section1">Home</a></li>
          <li><a href="#section2">Unser Sortiment</a></li>
          <li><a href="#section3">Kontakt</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav> 
</section>   

<div class="container">
    <div class="row">
      <?php 
        while ($row = mysqli_fetch_assoc($result)) {
          echo 
            "<div class='col-md-4 col-lg-4 col-4 col'>
              <div class='kard'>
                <div class='plac_img'>
                  <img src='img/".$row["Foto"]."' class='images'>
                </div>
                <div>
                  <h3>".$row["hName"]."</h3>
                  <p>".$row["beschreibung"]."</p>";
                  if($row["alterPreis"]>0){
                    echo "<p>".$row["alterPreis"]."</p>
                    
                  <p>".$row["neuerPreis"]."</p>
                </div>
              </div>
            </div>";
                  }else{
                    echo "<p>".$row["neuerPreis"]."</p>
                </div>
              </div>
            </div>";
                  };
                  
        };
      ?>
      
    </div>
  </div>

<hr>
  




            
<footer>

<p id="copyright"></p>
  </footer>
</div>
<script src="script.js" type="text/javascript" charset="utf-8" ></script>
</body>
</html>

</body>
</html>
