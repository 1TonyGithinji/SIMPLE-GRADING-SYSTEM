<!DOCTYPE html>
<html>
<head>
	<title>GRADE</title>
</head>
<body>
	<h1>Grading System</h1>
	<form method="GET">
		<input type="number" name="grade">
		<button>Grade</button>
	</form>
	<?php 
		if (isset($_GET['grade'])){
			$marks=$_GET['grade'];
		if ($marks>=0 && $marks<=20) {
			echo "FAIL";
		}
		elseif ($marks>20 && $marks<=40) {
			echo "D";
		}
		elseif ($marks>40 && $marks<=60) {
			echo "C";
		}
		elseif ($marks>60 && $marks<=80) {
			echo "D";
		}
		elseif ($marks>80 && $marks<=100) {
			echo "D";
		}else {
			echo "Wacha Bangi";
		}
		}
	 ?>
</body>
</html>

