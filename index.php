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

  <div class="w3-content w3-section">

    <img class="mySlides" src="https://images.unsplash.com/photo-1485125639709-a60c3a500bf1?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=dce07a99cd3c3bc873b91e54c22f0a28&auto=format&fit=crop&w=500&q=60" style="width:100%">

    <img class="mySlides" src="https://images.unsplash.com/photo-1517502166878-35c93a0072f0?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=683595cfef376d8112e457bfd4a32b5a&auto=format&fit=crop&w=500&q=60" style="width:100%">

    <img class="mySlides" src="https://images.unsplash.com/photo-1518898014092-914b5ebd41f2?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=9b482a7e0983220c57365078cf8776be&auto=format&fit=crop&w=500&q=60" style="width:100%">
  </div>


  <hr>
    <section id="section2">
      <div id="sortiment" class="text-center">
        <p>Unser Sortiment - Simply Everthing</p>
  <hr>
        <div class="imageGrid">
          <div class="tile" style="background-image: url('data:image/jpeg;base64,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');">
            <a href="allerlei.php">
              <div class="textWrapper"><h2>Allerlei</h2>
                <div class="content">In unsere Filiale finden Sie alles was Sie brauchen</div>
              </div>
            </a>
          </div><!--

      --><div class="tile" style="background-image: url('https://images.unsplash.com/photo-1494578379344-d6c710782a3d?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=e784168841515c0083d52d85ab530408&auto=format&fit=crop&w=500&q=60');">
        <a href="kleidung.php">
          <div class="textWrapper"><h2>Kleidung</h2>
            <div class="content">Wie bieten Kleidung für jederman.</div>
          </div>
        </a>
        </div><!--

      --><div class="tile" style="background-image: url('https://images.unsplash.com/photo-1519415943484-9fa1873496d4?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=ca427af489b42f69370a86b910c5168f&auto=format&fit=crop&w=500&q=60');">
          <a href="taschen.php"></a>
            <div class="textWrapper"><h2>Taschen&Schuhe</h2>
              <div class="content">Unsere Taschen und Schuhe geben Ihren Outfit den letzten Kick </div>
            </div>
          </a>  
        </div><!--

    --><div class="tile" style="background-image: url('https://images.unsplash.com/photo-1519916954135-f7d2f2e33cb8?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=6a0164c1d42d4e425233258305e726a4&auto=format&fit=crop&w=500&q=60');">
        <a href="haushalt.php">
          <div class="textWrapper"><h2>Haushalt</h2>
            <div class="content">Alles was Sie im Haushalt benötigen fiden sie bei uns</div>
          </div>
        </a>
      </div><!--

    --><div class="tile" style="background-image: url('https://images.unsplash.com/photo-1417037129170-06a2750eaa47?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=6b83b28c50e4c5c51982fd06046cb0d8&auto=format&fit=crop&w=500&q=60');">
        <a href="deko.php">
          <div class="textWrapper"><h2>Deko</h2>
            <div class="content">Große Auswahl an Dekoartikeln und Wohnaccessoires</div>
          </div>
        </a>
      </div><!--
    --><div class="tile" style="background-image: url('https://images.unsplash.com/photo-1520627977056-c307aeb9a625?ixlib=rb-0.3.5&s=2ab376d82b5e0eac2b5283be90fd1aaa&auto=format&fit=crop&w=500&q=60');">
        <a href="spielzeug.php">
          <div class="textWrapper"><h2>Spielware</h2>
            <div class="content">Die kleinen unter uns haben wir nicht vergessen</div>
          </div>
        </a>  
      </div>

      <div class="tile" style="background-image: url('https://images.unsplash.com/photo-1521404567986-a2c39cde0c31?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=61f97ebaf62873b70a31e991c1fa6264&auto=format&fit=crop&w=500&q=60');">
        <a href="diskont.php">
          <div class="textWrapper"><h2>Diskont</h2>
            <div class="content">Profitieren Sie von unseren täglichen Aktionen</div>
          </div>
        </a>
      </div>
     
    </section>
    <hr>



  <section id="section3">
      <div id="contact" class="text-center">

            <p>Kontakt</p>
          <hr>

          </div>
          <div id="map" class="col-xs-8 col-md-6 col-md-offset-0"></div>
        <iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Simmeringer%20Hauptstra%C3%9Fe%2087%2C%20Wien%2C%20%C3%96sterreich&key=AIzaSyAnWEdgT_NyNTrsVCItUghUdjCpbcubX3k" allowfullscreen></iframe>        <div align="center">
            <span class="glyphicon glyphicon-home"></span><p style="font-weight:700; color: #0A2068; ">H & K Shop</p>
            <span class="glyphicon glyphicon-map-marker"></span><p>Simmeringer Hauptstraße 87, 1110 Wien</p>  
             <span class=" glyphicon glyphicon-earphone"></span><p>+43 699 198 402 0</p>  
              </div>
  </section>
            
<footer>

<p id="copyright"></p>
  </footer>
</div>
<script src="script.js" type="text/javascript" charset="utf-8" ></script>
</body>
</html>

</body>
</html>
