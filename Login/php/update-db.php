<?php
	$vnim=$_POST['txtnim'];
	$vnama=$_POST['txtnama'];
	$vumur=$_POST['txtumur'];
$server="localhost";
$username="root";
$password="";
$database="akademis";

mysql_connect($server,$username,$password);
mysql_select_db($database);

	mysql_query("update mahasiswa set NAMA='$vnama', UMUR='$vumur' where NIM='$vnim'") or die (mysql_error());

header("location:template.php?content=latihan10displaysearch.php");
?>