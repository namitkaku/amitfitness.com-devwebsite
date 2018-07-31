<?php
include_once('database.php');
$sno=$_GET['sno'];
$sql="delete from image where sno='$sno'";
$query=mysqli_query($con,$sql);
if($query)
{
	header('location:upload.php');
}
else
{
	echo "Failed";
}

?>