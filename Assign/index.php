<!DOCTYPE html>
<html>
<head>
	<title>Dasboard| Students portal</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/assign.css">

</head>
<body>
<div class="container">
	<h2>Welcome, <?php echo $_POST["name"]; ?></h2>
	<?php $musa_r = 21?>
	<?php $abdullahi_r =42 ?>
	<?php $emeka_r = 15 ?>
	<?php $emmanuel_r =20 ?>
	
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Name</th>
				<th>Score(/50)</th>
				<th>Grade</th>
				<th>Comment</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Musa </td>
				<td><?php echo $musa_r; ?></td>
				<td><?php echo check_grade($musa_r) ?> </td>
				<td>GOOD, PUT MORE EFFORT</td>
			</tr>
			<tr>
				<td>Abdullahi</td>
				<td><?php echo $abdullahi_r ?></td>
				<td><?php echo check_grade($abdullahi_r); ?></td>
				<td>IMMPRESSIVE, NICE RESULT</td>
			</tr>
			<tr>
				<td>Emeka</td>
				<td><?php echo $emeka_r; ?></td>
				<td><?php echo check_grade($emeka_r); ?></td>
				<td>BROS, GO AND JERK WELL OR ELSE WITHDRAW</td>
			</tr>
			<tr>
				<td>Emmanuel</td>
				<td><?php echo $emmanuel_r; ?></td>
				<td><?php check_grade($emmanuel_r); ?></td>
				<td>GOOD, PUT MORE EFFORT</td>
			</tr>
		</tbody>
	</table>
</div>	
	
	<?php 
 function check_grade($result) {

 	if ($result >=0 && $result<=19) {
 		echo "F";
 	}
 	else if ($result>=20 && $result<=29) {
 		echo "E";
 	} 	
 	else if ($result>=30 && $result<=34) {
 		echo "D";
 	}
 	else if ($result>=35 && $result<=39) {
 		echo "C";
 	}
 	elseif ($result>=40 && $result<=44) {
 		echo "B";
 	}
 	elseif ( $result>=45 && $result<=50 ) {
 		echo "A";
 	}
 	// else {
 	// 	echo "GET A WAY";
 	// }
 }
	?>
</body>
</html>
