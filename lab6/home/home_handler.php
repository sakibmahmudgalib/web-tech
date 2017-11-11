 <form action='../table/handler.php'>
 <?php
	foreach($userList as $user)
	{
		if($user['user name']==$_REQUEST['uname'])
		{
			if($user['password']==$_REQUEST['password'])
			{
				include '../bord/bord.html';
			}
		}
		
		
	}
	
?>
</form>

