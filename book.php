
<!DOCTYPE html>
<html>
<head>
  <title>Assassin Network</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="cool.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-default navbar-fluid">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#myPage">Assassin Network</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="cool.php">ABOUT</a></li>
        <li><a href="service.php">SERVICES</a></li>
        <li><a href="port.php">PORTFOLIO</a></li>
        <li><a href="pricing.php">PRICING</a></li>
        <li><a href="contact.php">CONTACT</a></li>
         <!-- <li><a href="login.php" class="pull-right">Login</a></li>-->
      </ul>
    </div>
  </div>
</nav>
  <div  class="container-fluid">
    <div class="row">
      <div class="col-sm-8">
        <h2><span class="icon-bar"></span> Post Enquiry</h2>
      </div>
    </div>
   <div class=" col-sm-6 ">
  <form role="form" action="book1.php" method="post">
    <!--<script type="javascript">
      function pay(){
        // body...
        document.write('hi');
      }
    </script>-->
    
      <input type="hidden" name="id" value="code" />
      <input type="number" class="form-control" placeholder="your number" name="telephone"/><br>
      <input type="file"  class="form-control"  placeholder="photo" name="pic"><br>
      <input type="submit"  name="btn-send" value="Send">
      </form>
 </div>
</div><?php include_once('c.php');?>  
<footer class="container-fluid text-center">
  <p>&copy;<a href="https://www.github.com/Mogaka1994.io">Polycarp</a></p>
</footer>
</body>
</html>
