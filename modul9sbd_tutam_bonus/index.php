<title>Data Mahasiswa</title>
<?php
	require_once('views/header.php'); 
	require_once('dbconnect/connect.php');
    $getdb = "SELECT * FROM mahasiswa";
    $sql = mysqli_query($con,$getdb);
    $legend = 'Data Seluruh Mahasiswa';
    require_once('views/content.php');
    require_once('views/footer.php');
?>