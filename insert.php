<?php  
		$name = $_POST ['name'];	
		$startdate = $_POST ['startdate'];	
		$duedate = $_POST ['duedate'];
		$decription = $_POST ['description'];
		$status = $_POST ['status'];

		$conn = mysqli_connect('localhost', 'root', '', 'pms');

		$query = "INSERT INTO `project`(`name`, `startdate`, `duedate`, `description`, `status`) VALUES ('$name','$startdate','$duedate','$decription','$status')";

		$run = mysqli_query($conn, $query);

		if ($run == TRUE){
			// echo "This is insert into Database table";
			header['Location: project.php'];
		}
		else 
			echo "error!";	
		
?>