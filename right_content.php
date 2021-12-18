
<!---Check seesion and admin role--->
<?php if((isset($_SESSION["login_user_name"])) AND ($_SESSION["login_user_role"]==1)){ ?>

<center>
  <a href="add_places.php" class="btn btn-outline-info">Add Places</a>
</center>

<?php } ?>

<ul class="list-group">

<?php

//connect with database
include("connect.php");

//reterive data from database
$result=mysqli_query($con,"Select count(region.regionID) As regionCount,region.state_name, region.regionID from region JOIN travelplaces WHERE region.regionID=travelplaces.regionID Group By region.regionID;");


while ($row=mysqli_fetch_array($result)){
  ?>

  
  <li class="list-group-item d-flex justify-content-between align-items-center">

    <?php 

    //Get Region ID from database

    $r_id=$row['regionID'];

    ?>
    <a href="region_content.php?rid=<?php echo $r_id;?>" id="list">
      <?php echo $row['state_name']; ?></a>
    <span class="badge badge-primary badge-pill"><?php echo $row['regionCount'];?></span>
  </li>



  <?php
}

?>

</ul>
