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
<img src="images/banner.jpg" class="img-fluid" alt="Responsive image">


<div class="container-fluid">
	<div class="row">
  		<div class="col col-sm-6" id="form">

  		<?php 
  		$password_error="";
  		$email_error="";

  		$username=$password=$confirm_password=$email=$mobile=$address="";

  		if ($_SERVER['REQUEST_METHOD']=="POST"){

  			$username=$_POST["user_name"];
  			$password=$_POST["password"];
  			$confirm_password=$_POST["confirm_password"];
  			$email=$_POST["email"];
  			$mobile=$_POST["mobile"];
  			$address=$_POST["address"];

  			/*echo "User name is".$username."<br/>";
  			echo "password is".$password."<br/>";
  			echo "confirm_password is" .$confirm_password."<br/>";
  			echo "email is".$email."<br/>";
  			echo "mobile is".$mobile."<br/>";
  			echo "address is".$address."<br/>";*/

  		//Check password
  		if($password!=$confirm_password){
  			$password_error="Password and Confirm Password do not match!";
  		}

  		// Validate email
  		if(filter_var($email, FILTER_VALIDATE_EMAIL)===false) {
  			$email_error="Please provide valid email address!";
  		}

  		if(($password_error=="") AND ($email_error==""))
  		{
  			//insert into database
  			//echo "Insert Ready";

  		//Connect with db
  			include("connect.php");


  		// insert register user data to database
  			$insert_query=mysqli_query($con, "INSERT INTO user(userName,password,email,mobile,address,role_id) VALUES ('$username', '$password','$email', $mobile, '$address',2)");

  			if(!$insert_query)
  			{
  				echo mysqli_error($con);
  			} else{
  				echo "<div class='alert alert-success' role='alert'>Your Registeration is Successful! You can login now !</div>";
  				$username=$password=$confirm_password=$email=$mobile=$address="";

  				header("Refresh:5;url=login.php");

  			}

  		}




  		}



  		?>
  			
  			<h2 class="mt-0">Register</h2>

				
			<form action="register.php" method="post">
  				<div class="form-group">
    				<label >User Name</label>
    				<input type="text" name="user_name"class="form-control" placeholder="Enter Your Name"
    				required="true" value="<?php echo $username;?>">
  				</div>

  				<div class="form-group">
    				<label >Password</label>
    				<input type="password" name="password" class="form-control" 
    				placeholder="Password" required="true" value="<?php echo $password;?>"/>
    				<span class="error" style="color: red"> <?php echo $password_error;?></span>
  				</div>

  				<div class="form-group">
    				<label >Confirm Password</label>
    				<input type="password" name="confirm_password" class="form-control" 
    				placeholder="Retype Your Password" required="true" value="<?php echo $confirm_password;?>">
  				</div>

  				<div class="form-group">
    				<label >Email</label>
    				<input type="text" name="email" class="form-control" 
    				placeholder="Enter Your Email" required="true" value="<?php echo $email;?>">
    				<p class="error" style="color: red"><?php echo $email_error;?></p>
  				</div>

  				<div class="form-group">
    				<label >Mobile</label>
    				<input type="text" name="mobile" class="form-control" 
    				placeholder="Enter Your Contact no." required="true" value="<?php echo $mobile;?>">
  				</div>

  				<div class="form-group">
    				<label >Address</label>
    				<textarea class="form-control" placeholder="Enter Your Address" required="true" name="address"><?php echo $address;?></textarea>
  				</div>

          <button type="reset" class="btn btn-outline-danger">reset</button>
  				<button type="submit" class="btn btn-outline-info">Submit</button>
  				
			</form>
		
  		</div>
  		
	</div>



	<?php include("footer.php")?>	

</div>

    


</body>
</html>