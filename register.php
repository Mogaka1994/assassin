<?php
	include_once('db.php');
        $error=false;
    if (isset($_POST['btn-register'])) {
        $username=$_POST['username'];
        $username=strip_tags($username);
        $username=htmlspecialchars($username);

        $email=$_POST['email'];
        $email=strip_tags($email);
        $email=htmlspecialchars($email);

        $password=$_POST['password'];
        $password=strip_tags($password);
        $password=htmlspecialchars($password);
            if (empty($username)) {
               $error=true;
               $errorUsername='Please input Username';
            }
            if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
                $error=true;
                $errorEmail='Please input Email';
            }
            if(empty($password)){
                $error=true;
                $errorPassword='Please input password';
            }
            elseif (strlen($password)<8) {
                $error=true;
                $errorPassword="Please input more than 8 characters";
            }
    $password=md5($password);
    //insert
       if (!$error) {
          $sql="INSERT INTO tbl_users(username,email,password)
            VALUES('$username','$email','password')";
            if ($conn->query($sql) === TRUE) {
                 echo "New user created";
                    } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                    }

                $conn->close();
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
            <form method="post" action="register.php" autocomple="off">
                        <center><h2>Register</h2></center>
                            </hr>
                           
                    <div class="form-group">
                        <label for="username" class="control-label">Username</label>
                            <input type="text" name="username" class="form-control" autocmplete="off" >
                               <span class="text-danger"><?php if (isset($errorUsername)) echo $errorUsername ?></span> 
                    
                    </div>
                    <div class="form-group">
                        <label for="email" class="control-label">Email</label>
                            <input type="email" name="email" class="form-control" autocmplete="off" >
                               <span class="text-danger"><?php if (isset($errorEmail)) echo $errorEmail ?></span>   
                    
                    </div>
                    <div class="form-group">
                        <label for="password" class="control-label">Password</label> 
                            <input type="password" name="password" class="form-control" autocomplete="off" >
                                <span class="text-danger"><?php if (isset($errorPassword)) echo $errorPassword ?></span>  
                        
                    </div>
                    <div class="form-group">
                        <center><input type="submit"  name="btn-register" value="Register" class="btn btn-primary"></center> 
                         <hr>
                    <a href="login.php">Login</a>
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