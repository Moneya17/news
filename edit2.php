<?php 
	include("config.php");
	$id = $_GET['id'];
	$text=$_GET['text'];
	$heading=$_GET['heading'];
	if(isset($_GET['submit']))
	{
	$result = mysqli_query($conn,"update test SET heading='$heading', summertext='$text' WHERE id='$id'");
	}
	header("Location:listdata.php");
?>