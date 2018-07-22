<?php 
	require("config.php");
	
	$id = $_GET['id'];
	$text=$_GET['text']="";
	$heading=$_GET['heading']="";
	if(isset($_POST['submit']))
	{
		$heading = $_GET['heading'];
		$text=$_GET['summertext'];
	$result = mysqli_query($conn,"UPDATE test SET heading='$heading', summertext='$text' WHERE id='$id'");
	
            header('location:listdata.php');
        
	}
?>
