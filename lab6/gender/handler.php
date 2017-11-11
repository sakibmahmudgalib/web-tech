 <?php
	//var_dump($_REQUEST);
	echo "<br/>";
	//$gender=$_REQUEST['gender'];
	//echo $gender;
	if(empty($_REQUEST['gender'])==false)
	{
		echo $_REQUEST['gender'];
		
	}
	else
	{
		include 'gender.html';
		echo"select one";
	}
?>