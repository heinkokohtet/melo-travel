<?php ob_start(); 

session_start();

?>
<html>

<head>
	<title>Melo-Travel</title>
	
<!------------CSS-------------->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!------------JS-------------->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Sriracha&display=swap" rel="stylesheet">


<!------------CSS-------------->
<link rel="stylesheet" href="css/style.css">

</head>

<body>

<!------------nav-------------->
<?php include("header.php")?>

<!-------image and about travel-------->
<img src="images/boat.jpg" class="img-fluid" alt="Responsive image">


<div class="container-fluid">
	<div class="row">
  		<div class="col col-sm-6" id="form">
  			<h2 class="mt-0">Login</h2>

        <!--login--->
      <?php 

      if ($_SERVER['REQUEST_METHOD']=="POST"){

        $uname=$_POST["user_name"];
        $pw=$_POST["password"];

        echo "User Name is".$uname;
        echo "Password is".$pw;

        //Connect with db
        include("connect.php");

      //Check Username and PW
      $result=mysqli_query($con,"Select * From user where userName='$uname' and password='$pw'");
      $rowcount=mysqli_num_rows($result);
      echo "result is".$rowcount;

        if($rowcount>0){

            while($row=mysqli_fetch_array($result)) {

              $db_user_id=$row["userid"];
              $db_user_name=$row["userName"];
              $db_role_id=$row["role_id"];
            }

          $_SESSION["login_user_id"]=$db_user_id;
          $_SESSION["login_user_name"]=$db_user_name;
          $_SESSION["login_user_role"]=$db_role_id;
          header("location:index.php");

        }else{
          header("location:login.php");
         

        }

      }
      
      ?>


				
			<!--login Form-->

      <form action="login.php" method="post">
          <div class="form-group">
            <label >User Name</label>
            <input type="text" name="user_name"class="form-control" placeholder="Name"
            required="true">
          </div>

          <div class="form-group">
            <label >Password</label>
            <input type="password" name="password" class="form-control" 
            placeholder="Password" required="true">
          </div>
          <button type="submit" class="btn btn-outline-info">Submit</button>
      </form>
		
  		</div>
  		
	</div>

 

	<?php include("footer.php")?>	

</div>

    


</body>
</html>