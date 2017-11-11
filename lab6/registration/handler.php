 <?php
	//var_dump($_REQUEST);
	
		$email=$_REQUEST['email'];
		if(!filter_var($email,FILTER_VALIDATE_EMAIL)==false &&empty($email)==false)
		{
			
			 echo $email;
		}
		
	
		else
		{
			include 'email.html';
			echo "Invalid email";
			
			
		}
	//}
	
?>