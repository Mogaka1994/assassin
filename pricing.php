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
</head>
<body>

<div class="container">
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
          <li><a href="login.php" class="pull-right">Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid">
  <div class="text-center">
    <h2>Pricing</h2>
    <h4>Payment Plan</h4>
  </div>
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Kidnap</h1>
        </div>
        <div class="panel-body">
        
        </div>
        <div class="panel-footer">
          <h3>$15</h3>
          <h4>An Instance</h4>
          <button class="btn" data-toggle="modal" data-target="#myModal">Pay</button>
        </div>
      </div> 
    </div> 
    <div class="col-sm-4">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Threat</h1>
        </div>
        <div class="panel-body">
        </div>
        <div class="panel-footer">
          <h3>$20</h3>
          <h4>An Instance</h4>
          <button class="btn" data-toggle="modal" data-target="#myModal">Pay</button>
        </div>
      </div> 
    </div> 
   <div class="col-sm-4">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Murder</h1>
        </div>
        <div class="panel-body">
          </div>
        <div class="panel-footer">
          <h3>$1000</h3>
          <h4>An Instance</h4>
          <button class="btn" data-toggle="modal" data-target="#myModal">Pay</button>
        </div>
      </div> 
    </div> 
    <!-- Modal -->
  <div class="modal fade"  id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header"  color="green">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 align="center"><span class="glyphicon glyphicon-leaf logo-small"></span><span class="glyphicon glyphicon-leaf logo-small"></span><span class="glyphicon glyphicon-leaf logo-small"></span>Fee</h4>
        </div>
        <div class="modal-body">
          <form role="form" action="pesapal.php">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-bitcoin logo-small" color="green"></span> Fee</label>
              <input type="text" class="form-control" id="psw" placeholder="bitcoin address?">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-phone logo-small"></span>Send To</label>
              <input type="email" class="form-control" id="usrname" placeholder="Enter email">
            </div>
              <button type="submit" class="btn btn-block">Pay
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
</div><?php include_once('c.php');?>  
<footer class="container-fluid text-center">
  <p>&copy;<a href="https://www.github.com/Mogaka1994.io">Polycarp</a></p>
</footer>
</body>
</html>