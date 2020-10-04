<html>
<body>
	<form action="q6_2_special_variables_html.php" method="POST">
		<label for="name">Name of student:</label>
		<input type="text" name="name"><br><br>
		Marks in each subject<br><br>
		<label for="sub1">Subject 1 :</label>
		<input type="number" name="sub1" id="sub1" min="1" max="100"><br><br>
		<label for="sub2">Subject 2 :</label>
		<input type="number" name="sub2" id="sub2" min="1" max="100"><br><br>
		<label for="sub3">Subject 3 :</label>
		<input type="number" name="sub3" id="sub3" min="1" max="100"><br><br>
		<label for="sub4">Subject 4 :</label>
		<input type="number" name="sub4" id="sub4" min="1" max="100"><br><br>
		<label for="sub5">Subject 5 :</label>
		<input type="number" name="sub5" id="sub5" min="1" max="100"><br><br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>

<?php 

	@$name = $_POST['name'];
	@$s1 = $_POST['sub1'];
	@$s2 = $_POST['sub2'];
	@$s3 = $_POST['sub3'];
	@$s4 = $_POST['sub4'];
	@$s5 = $_POST['sub5'];
	@$marksobtained = $s1+$s2+$s3+$s4+$s5;
	@$totalmarks = 500;

	if($name && $s1 && $s2 && $s3 && $s4 && $s5)
	{
		echo "Name of student : ".$name."<br>";
		echo "Marks in each subject - <br>";
		echo "Subject 1 : ".$s1."<br>";
		echo "Subject 2 : ".$s2."<br>";
		echo "Subject 3 : ".$s3."<br>";
		echo "Subject 4 : ".$s4."<br>";
		echo "Subject 5 : ".$s5."<br>";
		echo "Total marks obtained : ".$marksobtained."<br>";
		echo "Total marks : ".$totalmarks."<br>";
		echo "Percentage : ".($marksobtained*100)/$totalmarks."%";
	}

	else
	{
		echo "Please enter all fields!";
	}

 ?>