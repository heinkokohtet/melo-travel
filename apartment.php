
<div class="card-group">


<?php


//connect with database
include("connect.php");

//To reterive data from data by using limit
$page = (int) (!isset($_GET["page"]) ?1 : $_GET["page"]);
$limit = 6;
$startpoint = ($page * $limit) - $limit;

//To call pager function
$statement="travelplaces order by placeID desc";
include("pager_function.php");

 
//reterive data from database
$result=mysqli_query($con,"Select * from travelplaces order by placeID desc LIMIT $startpoint,$limit");

while ($row=mysqli_fetch_array($result)){
  $pid=$row["placeID"];
  $photo=$row['photo'];
  $title=$row['title'];
  $desp=$row['description'];
  $cdate=$row['createDate'];

  ?>


<div class="col col-sm-4">
  
  <div class="card">

    <a href="place_detail.php?p_id=<?php echo $pid;?>" id="list"
      style="padding: 0;">
      <img class="card-img-top" src="images/<?php echo $photo;?>"
     alt="Card image cap" style="height: 15rem;">
     <h5 class="card-title"><?php echo$title; ?></h5>

     
  </div>

<?php if((isset($_SESSION["login_user_name"])) AND ($_SESSION["login_user_role"]==1)){ ?>
    <a href="place_update.php?p_id=<?php echo $pid;?>">
        <i class="fa fa-edit" id="edit"></i>

    </a>

     &nbsp; &nbsp;

    <a href="place_delete.php?p_id=<?php echo $pid;?>" 
        onclick="return confirm('Are you sure you want to delete?');">
          <i class="fa fa-trash-o" id="delete"></i>
    </a>

<?php } ?>

</div>




  <?php

}

?>

<?php
//To show pager no.

echo "<div id='pagingg'>";
echo pagination($con,$statement,$limit,$page);
echo "</div>";

?>

</div>


