<?php
		$error=false;
 if (isset($_POST['submit'])) {
       $Name= $_POST['Name'];
       $Name=strip_tags($Name);
       $Name=htmlspecialchars(strip_tags($Name));

 		$Email=$_POST['Email'];
        $Email=strip_tags($Email);
        $Email=htmlspecialchars($Email);
        $Message=$_POST['Message'];
        $Message=strip_tags($Message);
        $Message=htmlspecialchars($Message);

        if (empty($Name)) {
               $error=true;
               $errorNname='Please input your name';
            }
            if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
                $error=true;
                $errorEmail='Please input Email';
            }
           if(empty($Message)) {
               $error=true;
               $errorMessage='Please input your comment';
            }
}
//if( $_POST['Name']){echo "Welcome ". $_POST['Name']. "<br />";}

?>
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
<div class="bod">
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Contact Us</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	
	<div class="container">
	<div class="row">
								<div class="col-md-6">
									<p>Please let us know about your concerns.</p>
									<div class="alert alert-success hidden" id="contactSuccess">
										<strong>Success!</strong> Your message has been sent to us.
									</div>
									<div class="alert alert-error hidden" id="contactError">
										 <span class="text-danger"><?php if (isset($errorMessage)) echo $errorMessage ?></span>.
									</div>
									<div class="contact-form">
						 <form method="POST" id="contact-form" class="form-horizontal" action="contact.php">
							<div class="col-sm-12">
								<div class="form-group">
									<input type="text" name="Name" id="Name" class="form-control wow fadeInUp" placeholder="Name" required/>
								</div>
								<div class="form-group">
									<input type="text" name="Email" id="Email" class="form-control wow fadeInUp" placeholder="Email" required/>
								</div>					
								<div class="form-group">
									<textarea name="Message" rows="10" cols="20" id="Message" class="form-control input-message wow fadeInUp"  placeholder="Message"></textarea>
								</div>
								<div class="form-group">
									<input type="submit" name="submit" value="Submit" class="btn btn-success wow fadeInUp" />
								</div>
							</div>
						</form>		
									</div></div>
	<div class="col-md-4">
	<h2>What our members say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This company is the best. I am so happy with the result!"<br><span>Mogaka Polycarp,  President &copy;Mogakainsights, Comment Box</span></h4>
      </div>
      <div class="item">
        <h4>"<?php if( $_POST['Message']){echo "Shit ". $_POST['Message']. "<br />";}?>Sure bet... WOW!!"<br>
          <span>Mogaka Okeyo, Salesman,&copy;Mogakainsights </span></h4>
      </div>
      <div class="item">
        <h4>"Could I... Be any more happy with this venture?"<br><span> Amicus</span></h4>
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
	<?php include_once('c.php');?>						</div>
	</div>
 
	</section>
	</div>
	<footer class="container-fluid text-center">
  <p>&copy;<a href="https://www.github.com/Mogaka1994.io">Polycarp</a></p>
</footer>
</body>
</html>