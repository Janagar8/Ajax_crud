
	<?php
	include 'connection.php';
	
		$id = $_GET['id'];
		$result = mysqli_query($conn, "SELECT * FROM img WHERE id=$id");
			$JsonResult = array();
				foreach ($result as $key => $row) {
					array_push($JsonResult,$row);
				}

				echo json_encode($JsonResult[0]);

	?>


