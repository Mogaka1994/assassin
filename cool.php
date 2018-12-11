<!DOCTYPE html>
<html lang="en">


<head>
  <title>Assasin Network</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="cool.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
</head>
<body>

<div class="container">
    <nav class="navbar navbar-default navbar-fixed-top role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <span class="icon-bar"><a class="navbar-brand">ASSASSIN NETWORK</a></span>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="cool.php">ABOUT</a></li>
        <li><a href="service.php">SERVICES</a></li>
        <li><a href="port.php">PORTFOLIO</a></li>
        <li><a href="pricing.php">PRICING</a></li>
        <li><a href="contact.php">CONTACT</a></li>
          <!--<li><a href="login.php" class="pull-right">Login</a></li>-->
      </ul>
    </div>
  </div>
</nav>
  <br>
  <div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2><span class="icon-bar">About Us</span></h2>
      <h4>Assassin Network is a new age way of eradicating individuals without leaving evidence behind.Consists of highly trained militia with the soul purpose
      of doing the dirty work for you in a decentralized,secure and authentic way!.</h4><br>
      <p><h4>A user submits the problematic person,mode of payment is agreed upon,then all credentials  discredited,Work done</h4></p>
      <br><button class="btn btn-default btn-lg"><a href="contact.php">Get in Touch</a></button>
    </div>
    <div class="col-sm-4">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/p2.png" alt="Woman_eater" width="460" height="450">
          <div class="carousel-caption">
          <h3>Jowie</h3>
          <p>Highly trained Militia</p>
        </div>
      </div>

      <div class="item">
        <img src="images/11.png" alt="Boss" width="460" height="450">
          <div class="carousel-caption">
          <h3>Obado</h3>
          <p>The master Killer</p>
        </div>
      </div>
    
      <div class="item">
        <img src="images/3.png" alt="Flower_girl" width="460" height="450">
          <div class="carousel-caption">
          <h3>Obado</h3>
          <p>The silent screwer</p>
        </div>
      </div>

      <div class="item">
        <img src="images/1.png" alt="Flower_boy" width="460" height="450">
          <div class="carousel-caption">
          <h3>Obado Group</h3>
          <p>The serial killers</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="col-sm-4">
  </div>
</div>
</div><?php include_once('c.php');?>  
  <footer class="container-fluid text-center">
  <p>&copy;<a href="https://www.github.com/Mogaka1994.io">Polycarp</a></p>
</footer>
  <!--<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>-->

</body>
</html>

