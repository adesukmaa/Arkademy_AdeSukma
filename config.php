<?php
$koneksi = mysqli_connect("localhost","root","","nomor6");
 
if (mysqli_connect_errno()){
	echo "Gagal melakukan koneksi ke MySQL: " . mysqli_connect_error();
}
?>