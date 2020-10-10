<html>
<body>
	<form action="q2_send_mail.php" method="POST">
		<h3>Drop us some feedback</h3>
		Name : <input type="text" name="user"><br><br>
		Email : <input type="email" name="emailid"><br><br>
		Feedback : <textarea name="feedback"></textarea><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>

    <?php 

    	if (@$_POST['submit']) {
    		
    		$username = @$_POST['user'];
    		$feed = @$_POST['feedback'];
    		$to = @$_POST["emailid"];
    		$subject = "Feedback form response";
    		$msg = "Hey $username, thanks for your feedback. Here is a copy of feedback you submitted : ->".$feed;
    		$from = "From: admin@rkale.com";

    		if (mail($to, $subject, $msg, $from)) {
    			echo "<br><b>Mail sent sucessfully!</b> ";
    		}
    		else{
    			echo "Oops! There seems to be a problem. Please check mail id.";
    		}

    		if (mail("admin@rkale22.com", "Copy of response($username)", "$feed", $from)) {
    			
    			echo "<br><b>Mail sent to admin!</b>";
    		}
            else{
                echo "Failed to send the mail to admin.";
            }
    		
    	}

    ?>
</body>
</html>