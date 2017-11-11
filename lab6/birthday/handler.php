 <?php
	//var_dump($_REQUEST);
	echo "<br/>";
	$dd=$_REQUEST['dd'];
	$mm=$_REQUEST['mm'];
	$yyyy=$_REQUEST['yyyy'];
	
	if(($dd>=1&&$dd<=31)&&($mm>=1&&$mm<=12)&&($yyyy>=1900))
	{
		echo "$dd"."/"."$mm"."/"."$yyyy";
	}
	
	else //if((empty($dd) ||empty($mm)||empty($yyyy)))
	{
		
		include 'birth.html';
		echo "Invalid";
	}
	
?>