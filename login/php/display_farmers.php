<?php 
require 'config.php';
//if (isset($_SESSION['driver_email'])) {
	$email = $_SESSION['driver_email'];
	$select = $conn->query("SELECT * FROM drivers WHERE email='$email'");
	while ($row2=$select->fetch_assoc()) {
		$coordinates =$row2['coordinates'];
	
	$select2 = $conn->query("SELECT * FROM farmers");
	$numbering = 1;
	if ($select->num_rows>0) {
		while ($row=$select2->fetch_assoc()) {
			echo 
			"<tr>
					<td>".$numbering++."</td>
					<td>".$row['name']."</td>
					<td>".$row['pickup']."</td>
					<td><button class='btn btn-primary openModal' value='?location=".$coordinates.":".$row['pickup']."'>View</button></td>

			</tr>";
		}
	}
	}

//}


 ?> 