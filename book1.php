<div class="container">
	<h3 class="text-success">Successfully submitted</h3>

	<p><a href="pricing.php">Click to pay</a></p>
</div>
<?php
	include_once('db.php');
	$error=false;
    if (isset($_POST['btn-send'])) {
        $telephone=$_POST['telephone'];
        $telephone=strip_tags($telephone);
        $telephone=htmlspecialchars($telephone);

        $pic=$_POST['pic'];
        $pic=strip_tags($pic);
        $pic=htmlspecialchars($pic);

        if(empty($telephone)<10){
        	$error=true;
        	$errortelephone='Please enter correct phone number';
        }
        if (!$error) {
          $sql="INSERT INTO tbl_customer(telephone,pic)
            VALUES('$telephone','$pic')";
            if ($conn->query($sql) === TRUE) {
                 echo "";
                    } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                    }

                $conn->close();
       }
   }
       ?>