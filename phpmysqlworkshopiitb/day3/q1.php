<html>
<body>
	<h2> Please Enter your details : </h2>
	<form method="POST" action="q1.php">
		Name : <input type="text" name="name">
		<br><br>
		Subject 1 : <input type="text" name="sub1">
		<br><br>
		Subject 2 : <input type="text" name="sub2">
		<br><br>
		Subject 3 : <input type="text" name="sub3">
		<br><br>
		Subject 4 : <input type="text" name="sub4">
		<br><br>
		Subject 5 : <input type="text" name="sub5">
		<br><br>
		<input type="submit" value="Submit">
		<br><br>
	</form>

	<?php 


	require("connect.php");
	
	@$name = $_POST['name'];
	@$s1 =$_POST['sub1'];
	@$s2 =$_POST['sub2'];
	@$s3 =$_POST['sub3'];
	@$s4 =$_POST['sub4'];
	@$s5 =$_POST['sub5'];

	$sum = $s1 + $s2 + $s3 + $s4 + $s5;
	$per = (float)($sum/500)*100;
	if($name && $s1 && $s2 && $s3 && $s4 && $s5)
	{
	    echo "
	    <h2>Mark Sheet</h2>
	    Student Name : $name<br>
	    Subject 1: $s1<br>
	    Subject 2: $s2<br>
	    Subject 3: $s3<br>
	    Subject 4: $s4<br>
	    Subject 5: $s5<br>
	    Total Marks Obtained:$sum<br>
	    Total Marks: 500<br>
	    Percentage: $per%<br>";

	    $write = "INSERT INTO class1 VALUES('', '$name', '$s1', '$s2', '$s3', '$s4', '$s5', '$sum', '500', '$per')";
	    if ($conn->query($write) === TRUE) {
	        echo "New record created successfully";
	      } else {
	        echo "Error: " . $write . "<br>" . $conn->error;
	    }
	}
	$conn->close();

	 ?>
</body>
</html>