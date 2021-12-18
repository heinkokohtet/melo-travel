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
<link rel="stylesheet" type="text/css" href="css/A_green.css">
<link rel="stylesheet" type="text/css" href="css/pagination.css">

</head>

<body>

<!------------nav-------------->
<?php include("header.php")?>

<!-------image and about travel-------->
<img src="images/about.jpg" class="img-fluid" alt="Responsive image">


<div class="container-fluid">

  <div class="row">
    <div class="col-sm-12">
    	<center><p class="h4">About Us</p></center>
    	<h5><strong>Vision</strong></h5>
    	<p>To develop corporate travel management in Myanmar. To provide companies and organizations with professional corporate management.Our goal is to turn your travel dreams into reality. Contributing our destination knowledge and experience, we work closely with you to handcraft an itinerary around your specific travel preferences and budget.</p>
    </div>

    <div class="col-sm-12">
    	<h5><strong>Mission</strong></h5>
    	<P>It is committed to the gold of making memories paradise of our values client’s holiday and business travel more efficient, comfortable and cost effective. We have made it our mission to specialize in tailor-made tours, corporate travel management and to share the best benefits with our value clients. </P>
    </div>

    <div class="col-sm-12">
    	<h5><strong>Our Core Values</strong></h5>
    	<P>It was formed to provide the best level of service which is available today travel industry. The vision, mission, goals and objectives are strongly derived from the beliefs and solid values of founder.</P>
    </div>
    
  </div>
	

	<?php include("footer.php")?>	

</div>

    


</body>
</html>