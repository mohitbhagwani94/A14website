<?php
	$names = $_POST['names'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$recipient = 'mohitbhagwani94@gmail.com';
	$subject = "Feedback Form";
	$content="New Feedback Form Submission \n From:".$name.",\n Email:".$eamil.",\n Message:".$message;
	$status=mail($recipient, $message, $content);
	if($status)
	{
		echo "We have received your message "
	}
	else{
		echo "Error Occur";
	}
?>