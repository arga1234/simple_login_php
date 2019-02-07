<?php
$koneksi = mysqli_connect("localhost","root","","login");

// Check connection
if (mysqli_connect_errno()){
	echo "Connection Time Out : " . mysqli_connect_error();
}

?>
