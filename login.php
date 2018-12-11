<?php
session_start();
	include_once('db.php');

     $error=false;
    if (isset($_POST['btn-login'])) {
       $username= trim($_POST['username']);
       $username=htmlspecialchars(strip_tags($username));

      $password=trim($_POST['password']);
      $password=htmlspecialchars(strip_tags($password));
       if (empty($username)){
         $error=true;
         $errorUsername='Please input username';
       }
       if (empty($password)) {
         $error=true;
         $errorPassword='Please input password';
       }elseif (strlen($password)<8) {
                $error=true;
                $errorPassword='Password atleast 8 characters';
       }


       if (!$error) {
         $password=md5($password);
         $sql="SELECT* FROM tbl_users WHERE username= $username AND password=$password";
         $result=$conn->query($sql);
          header('location:cool.php');

        }
        else{
          echo "Invalid login credentials";

        }
       }

?>
<!DOCTYPE html>
<html>
<head>
    <title>Assassin network</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div style="width:500px; margin:50px auto;" >
            <form method="post" action="login.php" autocomple="off">
                    <center><h2>Login</h2></center>
                      </hr>
                    <div class="form-group">
                        <label for="username" class="control-label">Username</label>
                            <input type="text" name="username" class="form-control" autocmplete="off" >
                              <span class="text-danger"><?php if (isset($errorUsername)) echo $errorUsername;?></span>
                    </div>
                    <div class="form-group">
                        <label for="password" class="control-label">Password</label>
                            <input type="password" name="password" class="form-control" autocomplete="off" >
                              <span class="text-danger"><?php if (isset($errorPassword)) echo $errorPassword;?></span>

                    </div>
                    <div class="form-group">
                        <center><input type="submit"  name="btn-login" value="Login" class="btn btn-primary"></center>
                         </div>
                         </hr>
                    <a href="register.php">Register</a>
                    </div>


                </form>

            </div
        </div>
    </div><?php include_once('c.php');?>  
<footer class="container-fluid text-center">
  <p>&copy;<a href="https://www.github.com/Mogaka1994.io">Polycarp</a></p>
</footer>
</body>
</html>
