		<?php
			include('connection.php');
			    	
			$id=$_POST['id'];
			$sql ="DELETE FROM img where id='$id'" ;
			    	
		    	mysqli_query($conn,$sql);
		    ?>

    