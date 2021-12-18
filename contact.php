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
<img src="images/contact.jpg" class="img-fluid" alt="Responsive image">


<div class="container-fluid">

  <div class="row">

     <div class="col-sm-6">  
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.96658207033!2d96.13873957034117!3d16.778338136329022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ebdd63f3aabb%3A0xa9b69b85ba4df6!2sSein%20Shwe%20Tailor!5e0!3m2!1sen!2smm!4v1589952879361!5m2!1sen!2smm" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    

    <div class="col-sm-6">
    	<center><h5><strong>Contact Us</strong></h5></center>
    	<P>We are very approachable and would love to speak to you.Feel free to call, send us an E-mail, Tweet us or simply complete the enquiry form.</P>
        <p> <i style="font-size:24px" class="fa">&#xf095;</i>+959799972390</p>
        <p> <i style="font-size:24px" class="fa">&#xf003;</i>contact@melo.com
        </p>
        <p> <i style="font-size:24px" class="fa">&#xf0ac;</i>Bo Gyoke Aung San St, Lanmadaw Township, Yangon, Myanmar.</p>
    </div>

  

  </div>
	

	<?php include("footer.php")?>	

</div>

    


</body>
</html>