<?php
session_start();

//$user['name']=$_REQUEST['uname'];
//$pass=$_REQUEST['password'];
//if($_SESSION['userlist']){
	$userlist=$_SESSION['userlist'];
	
	foreach ($userlist as $user){
		//var_dump($user);
	
		if($user['uname']==$_REQUEST['uname'] && !empty($_REQUEST['uname'])&& $user['password']==$_REQUEST['password'] && !empty($_REQUEST['uname']))
		{
			//$_SESSION['currentUser']=$user;
			//var_dump($_SESSION['currentUser']);
			
			header('location:bord.html');
			break;
		} 
		
		 
		else
		{
			if($user['uname']="admin" && !empty($_REQUEST['uname']) && $user['password']="admin" &&!empty($_REQUEST['password']) )
			{
				header('location:admin.html');
				
			} 
			
		
			else{
				
				include "login.html";
				echo "Invalid username or password";
				
				
				
				//header('location:login.html');
			}break;
		}
		
		
	}
//}

?>