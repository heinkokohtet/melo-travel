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
<img src="images/view.jpg" class="img-fluid" alt="Responsive image">


<div class="container-fluid">
	<div class="row">
  		<div class="col col-sm-6" id="form">
  			
  			<h2 class="mt-0">Add New Places</h2>

				<form action="add_places_process.php" method="post" 
				enctype="multipart/form-data">

					<div class="form-group">
						<label>Place Photo: </label>
						<input type="file" name="photo" id="photo" 
						class="form-control" required="true">
					</div>

					<div class="form-group">
						<label>Region</label>
						<select name="region" class="form-control">
			
							<option>None</option>

						<?php

						//connect the database
						include("connect.php");

						//Get all region from database
						$regions=mysqli_query($con, "Select * from region");
							while($row=mysqli_fetch_array($regions))
								{
								$d_rid=$row['regionID'];
								$d_statename=$row['state_name'];

								

						echo "<option value=$d_rid >$d_statename</option>";
							}

							?>
						</select>
					</div>

					<div class="form-group">
						<label>Title</label>
						<input type="text" name="title" class="form-control" required="true">
					</div>

					<div class="form-group">
						<label>Description</label>
						<textarea name="desp" class="form-control"></textarea>		
					</div>

					<button type="submit" class="btn btn-primary">Submit</button>

				</form>

		
  		</div>
  		
	</div>

 

	<?php include("footer.php")?>	

</div>

    


</body>
</html>