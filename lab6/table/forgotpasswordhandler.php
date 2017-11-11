 <?php
	//var_dump($_REQUEST);
	
		$email=$_REQUEST['aemail'];
		if(!filter_var($email,FILTER_VALIDATE_EMAIL)==false &&empty($email)==false)
		{
			
			//echo $email;
			include '../table/password.html';
			//header('location : ../table/password.html');
			
			 
		}
		
	
		else
		{
			include 'forgotpass.html';
			echo "Invalid email";
			
			
		}
	//}
	
?>