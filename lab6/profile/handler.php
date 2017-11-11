 <?php
	//var_dump($_REQUEST);
	echo "<br/>";
	$name=$_REQUEST['name'];
	$pic=$_REQUEST['picture'];
	if( $name>=1 &&empty($pic)==false)
	{
		echo "$name"."<br/>";
		echo "$pic";
	}
	else
	{
		include 'profile.html';
		echo "invalid name<br/>";
		echo "select a picture";
	}
	
	
?>