<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
	<title>BroadSheet</title>
	
</head>
<body>
	<h2 class="text-center "><b>Broad Sheet</b></h2>
	<?php 
			$i=0;
			$lessthan = array();
			$student = array(
				 	'Olumide Ayobami' => 61,
				    'Yusuf Aisha' => 68,
				    'Adio Funmilayo' => 49,
				    'James Daniel' => 56,
				    'Alele Segun' => 71,
				    'Oluseyi Omobobola' => 65,
				    'Valentine Bright' => 68,
				    'Olugbile Tolulope' => 76,
				    'Bassey Samuel' => 53,
				    'Oluchi Amarachi' => 39,
				    'Olofin Yemi' => 41,
				    'Aliu Danjuma' => 57,
				);
			arsort($student);
	echo '<table class="table">';
		foreach ($student as  $names=>$scores) { 
				$i++;	 	
	echo '<tr>
			      <td scope="col">'. '<br>'. $i .'</td>
			      <td scope="col">'.$names.'</td>
			      <td scope="col">'.$scores.'</td>
			    </tr>';
			if ($scores<50 && $scores >=0) { 
				$lessthan	[] = $scores;
			}		 	
		}
		echo '</table>';	
  	echo '<h3><b> Scores less than 50% is '. count($lessthan). '</b></h3> <br>';
	 ?>
</body>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>