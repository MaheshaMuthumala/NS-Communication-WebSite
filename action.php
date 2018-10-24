<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php 
		if(isset($_POST['submit']))
		{
    		$to = "vijayafernando@hotmail.com";
    		$from = $_POST['email'];
    		$first_name = $_POST['name'];
    		$subject = $_POST['subject'];
    		$message = $first_name . " " . " wrote the following:" . "\n\n" . $_POST['message'];

    		$headers = "From:" . $from;
			if(mail($to,$subject,$message,$headers))    
    			echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
			else
				echo"Mail Sent Faild";
    	}
	?>
</body>
</html>