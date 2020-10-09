<html>
<body>
	<form action="q2_string_functions.php" method="GET">
		<h2>Enter a String : </h2><br/>
		<input type="text" name="name"><br><br>
		<input type="submit" value="Submit">
	</form>

	<?php 

	@$a = $_GET['name'];

	if($a)
	{
		$len = strlen($a);
		$arr = explode(" ",$a);
		$rev = strrev($a);
		$lower = strtolower($a);
		$upper = strtoupper($a);
		$subs = "Rhugved";
		$newstr = substr_replace($a, $subs,0,5);

		echo "Original String is -  ".$a."<br>";
		echo "String to array : ";
		print_r($arr);
		echo "<br>Number of Characters in the string -->  ".$len."<br>";
		echo "Reverse of the string -->".$rev."<br>";
		echo "Lower case form of the string -->".$lower."<br>";
		echo "Upper case form of the string --> ".$upper."<br>";
		echo "Inserting a substring into original string -->".$newstr."<br/>";
	}

	else
	{
		echo "Please enter a string!";
	}

	 ?>
</body>
</html>