<?php

$db_host = "127.0.0.1";
$db_user = "xd";
$db_pass = "Linux@44";
$db_name = "penyakit_gigi";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}   
?>
