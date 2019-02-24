
	<?php
					
			include 'connection.php';
			
			$sql= "SELECT * from img";    
			
			$result = mysqli_query($conn, $sql);
			
			$JsonResult = array();

			foreach ($result as $key => $row) {
			
			array_push($JsonResult,$row);
			}
			
			
			echo json_encode($JsonResult);
			?>