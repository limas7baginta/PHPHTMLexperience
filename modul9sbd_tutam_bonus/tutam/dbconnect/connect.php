<?php 
  	require_once('define.php');
   	$con = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
    if (!$con)
    {
       die('Could not connect: ' . mysqli_connect_error());
    }   
	else
?>