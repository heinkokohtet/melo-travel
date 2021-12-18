<?php

		if($_SERVER['REQUEST_METHOD']=="POST"){

			$photo_name=$_FILES["photo"]["name"];
			$photo_size=$_FILES["photo"]["size"];
			$photo_type=$_FILES["photo"]["type"];
			$photo_temp_name=$_FILES["photo"]["tmp_name"];

			
			$title=$_POST["title"];
			$region=$_POST["region"];
			$desc=$_POST["desp"];

			echo $photo_name."<br>";
			echo $title."<br>";
			echo $region."<br>";
			echo $desc."<br>";

			//Upload Photo on server
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
				}
			}




			//Insert into database

				//Connect with db
				include("connect.php");

				//Check un and pw
				$insert_query=mysqli_query($con,"insert into travelplaces
					(photo,title,description,regionID) values ('$photo_name',
					'$title', '$desc','$region')");

				if(!$insert_query)
				{
					echo mysqli_error($con);
				} else{
					echo "1 record inserted";
					header("location: index.php");
				}

		}

?>