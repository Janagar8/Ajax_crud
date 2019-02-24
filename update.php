<?php 
	include 'connection.php';

		$id=$_POST['id'];
		$name=$_POST['name'];
		$image = $_FILES['image']['name'];
		$updateimage = $_POST['updateImage'];
		$sql="";

		$uploadDir = "upload/";
		$targetFile = $uploadDir.$_FILES['image']['name'];
		$FromDir = $_FILES['image']['tmp_name'];
		move_uploaded_file($FromDir, $targetFile);


		if($image==null) {

			$sql="UPDATE img SET name = '$name' WHERE id ='$id'";

			}else
			{
			$sql="UPDATE img SET name = '$name', image='$image' WHERE id ='$id'";

		}	



	$query = mysqli_query($conn, $sql) or die (mysqli_error($conn)); 

