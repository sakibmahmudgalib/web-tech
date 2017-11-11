
 <?php
	session_start();
	if(isset($_SESSION['userlist'])){
	$userList=$_SESSION['userList'];
	foreach($userList as $user)
	{
	if($user['uname']==$_REQUEST['uname'] && !empty($_REQUEST['uname']))
		{
			if($user['password']==$_REQUEST['password']&&!empty($_REQUEST['password']))
			{
				header("location: bord.html");
				
			}}
			else
		{
				if($_REQUEST['uname']=="admin" && $_REQUEST['password']=="admin")
				{
					include 'admin.html';
				}
				else
				{

					echo "invalid username or password";
				}
		}
				
		
		
	
	}
	}
	
?>

