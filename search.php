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
<img src="images/kalaw.jpg" class="img-fluid" alt="Responsive image">


<div class="container-fluid">
	<div class="row" style="margin-top: 30px">
  		<div class="col col-sm-9">
  			<?php

			$search_value=$_POST["search_data"];


			//connect the db
			include("connect.php");

			//Write a query
			$result=mysqli_query($con,"SELECT * FROM travelplaces WHERE title LIKE '%$search_value%'");

			//count data
			$row_count = mysqli_num_rows($result);
			
			if($row_count>0){
				echo "<div class='alert alert-primary' role='alert'>
				About $row_count result! </div>";
			
			while ($row=mysqli_fetch_array($result)){

  				
  				$pid=$row['placeID'];
  				$title=$row['title'];
  				$cdate=$row['createDate'];
		

			?>

			<div class="list-group-item list-group-item-action">
				<div class="d-flex w-100 justify-content-between">

					<h5 class="mb-1">
						<a href="place_detail.php?p_id=<?php echo $pid;?>" 
							id="list">
							<?php echo $title;?>
						</a>

					</h5>

					<small><?php echo $cdate;?></small>
				</div>
			</div>

			<?php } 


			}else{
				echo "<div class='alert alert-danger' role='alert'>
				There is no data to display! </div>";
			}

		?>
		

		
  		</div>

  		
	</div>


	<?php include("footer.php")?>	

</div>

    


</body>
</html>