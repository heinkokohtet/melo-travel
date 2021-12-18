<?php

//Get data from textbox
$pid=$_POST["h_pid"];
$region=$_POST["region"];
$title=$_POST["title"];
$desp=$_POST["desp"];
$photo_name=$_FILES["photo"]["name"];

echo "Pid is".$pid."<br/>";
echo "Region is ".$region."<br/>";
echo "Title is" .$title."<br/>";
echo "Desp is ".$desp."<br/>";
echo "Photo is ".$photo_name."<br/>";

//Connect with db
include("connect.php");

//Check new photo is upload or not
if($photo_name!=null){

	//upload photo into server

	$photo_size=$_FILES["photo"]["size"];
	$photo_type=$_FILES["photo"]["type"];
	$photo_temp_name=$_FILES["photo"]["tmp_name"];

	$target_dir = "images/";
	$target_file = $target_dir . basename($photo_name);

	//Check the file size

			if ( $photo_size > 500000) {
				echo "Sorry, your file is too large.";
			}

			else if ($photo_type != "image/jpeg") {
				echo "Sorry, only JPG allowed.";
				
			}

			else {
				$upload=move_uploaded_file($photo_temp_name, $target_file);

				if($upload){
					echo "The file has been uploaded.";
				}else {
					echo "Sorry, there was an error uploading your file.";
				}// end if
			}// end else

		//update Query with photo
		$update_query=mysqli_query($con,"UPDATE travelplaces SET photo='$photo_name',title='$title',description='$desp',regionID='$region' WHERE placeID=$pid");

}else {
	//update Query without photo
	$update_query=mysqli_query($con,"UPDATE travelplaces SET
		title='$title',description='$desp',regionID='$region' WHERE placeID=$pid");
}

	if(!$update_query)
		{
			echo mysql_error($con);
		}
		else{

			echo "Update Successful !";
			header("location:index.php");
		}

?>