					
						<?php
							include 'connection.php';
							
								$name = $_POST['name'];
								// $updateImage = $_POST['updateImage'];
								$image = $_FILES['image']['name']; 

							$uploadDir = "upload/";
							$targetFile = $uploadDir.$image;
							$FromDir = $_FILES['image']['tmp_name'];
							move_uploaded_file($FromDir, $targetFile);
							
							$sql="INSERT INTO img (name, image) VALUES ('$name','$image')";
		
							
							$query = mysqli_query($conn, $sql) or die (mysqli_error($conn));

?>
							