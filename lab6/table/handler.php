
<?php
	
		session_start();
		if(!isset($_SESSION['userlist']))
		{
			$_SESSION['userlist']=array();
		}
		
		$user['name']=$_REQUEST['name'];
		$user['uname']=$_REQUEST['uname'];
		$user['email']=$_REQUEST['email'];
		$user['password']=$_REQUEST['password'];
		$user['gender']=$_REQUEST['gender'];
		$user['birthday']=$_REQUEST['dd']."/".$_REQUEST['mm']."/".$_REQUEST['yyyy'];
		
		
		$size=count($_SESSION['userlist']);
		$_SESSION['userlist'][$size]=$user;
		//var_dump($_SESSION['userlist']);
		
	
	if( empty($_REQUEST['password'])==false)
	{
		//$auname= $_REQUEST['auname'];
		$apassword= $_REQUEST['password'];
		//echo "Name : ".$auname."<br/>";
		//echo "Password : ".$apassword."<br/>";
		//echo "Name : ".$auname."<br/>";
		//include '../bord/bord.html';
		
	}
	else
	{
		//include '../table/registation.html';
		echo  "Enter valid  password"."<br/>";
	
	}
	
	if(empty($_REQUEST['name'])==false)
	{
		$name= $_REQUEST['name'];
		echo "Name : ".$name."<br/>";
	}
	else
	{
		//include 'name.html';
		echo  "Enter valid name"."<br/>";
		
	}
	
	if(empty($_REQUEST['uname'])==false)
	{
		$uname= $_REQUEST['uname'];
		echo "User Name : ".$uname."<br/>";
	}
	else
	{
		//include 'name.html';
		echo  "Enter valid user name"."<br/>";
		
	}
	
	if(empty($_REQUEST['password'])==false)
	{
		$password= $_REQUEST['password'];
		echo "password : ".$password."<br/>";
	}
	else
	{
		//include 'name.html';
		echo  "Enter valid password"."<br/>";
		
	}
	
	
	
	$email=$_REQUEST['email'];
		if(!filter_var($email,FILTER_VALIDATE_EMAIL)==false &&empty($email)==false)
		{
			
			 echo "Email : ".$email."<br/>";
		}
	
		else
		{
			//include 'email.html';
			echo "Invalid email address"."<br/>";
			
			
		}
		
		if(empty($_REQUEST['gender'])==false)
	{
		echo "Gender : ".$_REQUEST['gender']."<br/>";
		
	}
	else
	{
		//include 'gender.html';
		echo"select gender"."<br/>";
	}
	
	//echo $_REQUEST['dd'];
	//echo $_REQUEST['mm'];
	///echo $_REQUEST['yyyy'];
	
	if(($_REQUEST['dd']>=1&&$_REQUEST['dd']<=31)&&($_REQUEST['mm']>=1&&$_REQUEST['mm']<=12)&&($_REQUEST['yyyy']>=1900))
	{
		echo "Dath of Birth : ".$_REQUEST['dd']."/".$_REQUEST['mm']."/".$_REQUEST['yyyy']."<br/>";
	}
	
	else //if((empty($dd) ||empty($mm)||empty($yyyy)))
	{
		
		//include 'birth.html';
		echo "Invalid date"."<br/>";
	}
	
	
	
	
	
	
	
	?>