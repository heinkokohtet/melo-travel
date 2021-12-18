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

<img src="images/inlay.jpg" class="img-fluid" alt="Responsive image">

<div class="container-fluid">
	<div class="row">
  		<div class="col col-sm-9">
  			<?php

			//connect the db
			include("connect.php");

			//get ID From URL
			$pid=$_GET["p_id"];
			//echo "Pid is" .$pid;

			$result=mysqli_query($con, "Select * from travelplaces join region where travelplaces.regionID=regionID and travelplaces.placeID=$pid");

			while ($row=mysqli_fetch_array($result)){
  				
  				$photo=$row['photo'];
  				$title=$row['title'];
  				$region=$row["regionID"];
  				$name=$row["state_name"];
  				$desp=$row['description'];
  				$cdate=$row['createDate'];
		
		?>

			<div class="row no-gutters bg-light position-relative" id="place">
  				<div class="col-md-6 mb-md-0 p-md-4">
            <p> <i> Updated on: <?php echo $cdate;?></i></p>
    				<img src="images/<?php echo $photo;?>" class="w-100" 
    				alt="...">
    			
  				</div>

  				<div class="col-md-6 position-static p-4 pl-md-0">
    				<h3 class="mt-0"><?php echo $title;?></h3>
    				<h4><label>Region: </label> <span><?php echo $name;?></span></h4>
    				<p><em><?php echo $desp;?></em></p>
  				</div>
			</div>

		<?php }

		?>

      <!---comment box insert database--->
      <?php 
        if ($_SERVER['REQUEST_METHOD']=="POST"){

            $comment=$_POST["comment"];
            $userid=$_SESSION["login_user_id"];

            //echo "comment is". $comment."<br/>";
            //echo "Pid is". $pid."<br/>";
            //echo "User id is". $userid."<br/>";

            //Insert comment to database
            include("connect.php");

            //Check comment
            $insert_query=mysqli_query($con,"insert into comment(comment,user_id,place_id) values ('$comment', $userid,
            	$pid)");

            if(!$insert_query)
            {
              echo mysqli_error($con);
            } else{
              //echo "1 comment inserted";
            }
        }// end insert comment into database


        ?>


        <!---comment box in reterive all comments--->

      <?php

      if(isset($_GET['s']))
      {
      $status=$_GET['s'];
       }else{
         $status=false;
       }


    //  echo $status;


      if($status==true){
          $all_comments=mysqli_query($con,"SELECT* FROM comment join user where comment.user_id=user.userid and comment.place_id=$pid order by commentId desc");

        }else{
           $all_comments=mysqli_query($con,"SELECT* FROM comment join user where comment.user_id=user.userid and comment.place_id=$pid order by commentId desc LIMIT 0,5");

        }

    // Get all total row count 
    $all_row_count=mysqli_query($con,"SELECT* FROM comment join user where comment.user_id=user.userid and comment.place_id=$pid order by commentId desc");
    $row_count=mysqli_num_rows($all_row_count);
     
     // Current comment count
      $comment_count=mysqli_num_rows($all_comments);


       

     



        while ($row=mysqli_fetch_array($all_comments)) {
          $u_name=$row["userName"];
          $u_comment=$row["comment"];
          $u_c_date=$row["commentedDate"];

          ?>

          <div class="col col-md-6 media">

          <img src="images/Man.jpg" class="mr-3 rounded-circle" style="width: 60px"/>
          <div class="media-body" style="padding-left: 20px">

          <b> <?php echo $u_name;?> </b>
          <?php echo $u_comment;?>

          <br/>
          <span style="color:#aaa;font-size: 12px;">comment on <?php echo $u_c_date;?>
          </span>

        </div>

      </div>

      


    <?php }

    //echo "All row count ".$row_count;
    //echo "<br>";
    //echo "comment_count ".$comment_count;

    if($row_count>5 && $row_count!=$comment_count){    
    ?>


    <div>
      <a href="place_detail.php?s=true&p_id=<?php echo $pid;?>"
        id="comment">View all comments</a> 
    </div>
  <?php } ?>

    <!--- end reterive comment box--->
    <?php 

    if(isset($_SESSION["login_user_name"])){ ?>

        <div class="col col-md-6 media">
          <img src="images/Man.jpg" class="mr-3 rounded-circle" style="width: 60px"/>
          <div class="media-body mt-3">
              <form action="place_detail.php?p_id=<?php echo $pid;?>" method="post">

                  <div class="form-group">
                    <input type="text" name="comment" class="form-control" placeholder="Wirte a Comment" required="true" style="border-radius: 20px;">
                  </div>
              </form>
		      </div>
      </div>

  <?php } ?>


</div>
</div>

	<?php include("footer.php")?>	

</div>

    

</body>
</html>