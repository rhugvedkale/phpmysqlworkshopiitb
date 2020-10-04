<html>
<body>
	<form action="q6_1_special_variables_html.php" method="GET">
		<label for="side1">Side 1 :</label>
		<input type="text" name="side1" id="side1"><br><br>
		<label for="side2">Side 2 :</label>
		<input type="text" name="side2" id="side2"><br><br>
		<label for="side3">Side 3 :</label>
		<input type="text" name="side3" id="side3"><br><br>
		<input type="submit" value="Result">
	</form>
</body>
</html>


<?php 

	@$s1 = $_GET['side1'];
	@$s2 = $_GET['side2'];
	@$s3 = $_GET['side3'];

	if($s1 && $s2 && $s3)
	{
		if($s1 == $s2 && $s2 == $s3 && $s1 == $s3)
			echo "It is an equilateral triangle";

		else
			if ($s1 == $s2 || $s2 == $s3 || $s1 == $s3) 
				echo "It is an isosceles triangle";

		else
		{
			if(pow($s1, 2)+pow($s2, 2) == pow($s3, 2) || pow($s2, 2)+pow($s3, 2) == pow($s1, 2) || pow($s1, 2)+pow($s3, 2) == pow($s2, 2))
				echo "It is a right angled triangle";

			else
				echo "It is a scalene triangle";
		}
	}

	else
	{
		echo "Please enter all fields!";
	}

 ?>