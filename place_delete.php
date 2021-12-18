<?php

		//Connect with DB
		include("connect.php");

		//Get ID from URL
		$pid=$_GET["p_id"];

		echo "Pid is".$pid;

		//Delete from database
		$delete_query=mysqli_query($con, "Delete From travelplaces where placeID=$pid");

		if(!$delete_query)
		{
			echo mysqli_error($con);
		}
		else{
			echo "1 record deleted";
			header("location:index.php");
		}

?>	