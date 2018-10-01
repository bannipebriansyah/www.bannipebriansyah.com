<?php
	//koneksi ke database
	$server="localhost";
	$username="root";
	$password="";
	$database="akademis";
			
	mysql_connect($server,$username,$password); // Koneksi ke server
	mysql_select_db($database); // koneksi ke database
	
	$vnim = $_GET['nim']; //'menangkap' txtnim dari form sebelumnya
	$vnama =  $_GET['nama'];
	$vumur =  $_GET['umur'];
	
	//$dtmhs = mysql_query("select  * from mahasiswa where NIM like = '%$vnim%'");
	
	echo "<br>NIM        <br> $vnim <br><br>"; 
	echo "NAMA    <br>$vnama <br><br>"; 
	echo "UMUR    <br> $vumur <br><br>";
?>