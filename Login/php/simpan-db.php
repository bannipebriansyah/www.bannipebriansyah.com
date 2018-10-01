<?php
	$server="localhost";
	$username="root";
	$password="";
	$database="akademis";
	
mysql_connect($server, $username, $password);//koneksi ke server
mysql_select_db($database);//koneksi ke database
	
	$vnim=$_POST['txtnim'];
	$vnama=$_POST['txtnama'];
	$vumur=$_POST['txtumur'];
	
mysql_query("insert into mahasiswa (NIM, NAMA, UMUR) values ('$vnim','$vnama','$vumur')");
			
header("location:template.php?content=latihan10displaysearch.php");
?>