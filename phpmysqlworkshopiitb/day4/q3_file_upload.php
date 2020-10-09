<html>
<body>
	<form action='q3_file_upload.php' method='POST' enctype='multipart/form-data'>
		<h2>Select a file to upload : </h2>
		<input type='file' name='myfile'><br><br>
		<input type='submit' value='Upload'><br>
	</form>

	<?php
		@$name = $_FILES['myfile'] ['name']; 
		@$type= $_FILES ['myfile'] ['type'];
		@$size = $_FILES ['myfile'] ['size'];
		@$tempfile = $_FILES ['myfile'] ['tmp_name'];
		@$error = $_FILES ['myfile'] ['error'];

		if ($error > 0)
		{
			die("error uploading file.");
		}

		else 
		{
			move_uploaded_file($tempfile,"uploaded/".$name);
			echo "<br><h3>Upload complete</h3>";
			echo "File name = ".$name."<br>";
			echo "File type = ".$type."<br>";
			echo "File size = ".$size." bytes";
		}
	?>
</body>
</html>