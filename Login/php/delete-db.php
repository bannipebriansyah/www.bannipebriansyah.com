<?php
$vnim=$_GET['xnim']; //GET ---> 'menangkap' data dikirim melalui URL
// koneksi ke database .....
$server="localhost";
$username="root";
$password="";
$database="akademis";

mysql_connect ($server,$username,$password); 
mysql_select_db ($database); 

mysql_query("delete from mahasiswa where nim='$vnim'");

echo "<meta http-equiv='refresh' content='0;url=template.php?content=latihan10displaysearch.php'/>";
?>