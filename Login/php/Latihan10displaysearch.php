<?php
$server="localhost";
$username="root";
$password="";
$database="akademis";

mysql_connect ($server,$username,$password); //kembali ke server
mysql_select_db ($database); //pilih database

/*--------------------------------------------- PAGINATION ----------------------------------------------*/
	$per_page = 4;

	$page_query = mysql_query("SELECT * FROM mahasiswa");
	$pages = ceil(mysql_num_rows($page_query) / $per_page);

	$page = (isset($_GET['page']))?(int)$_GET['page']:1;
	$start = ($page - 1) * $per_page;

	$dtmhsw = mysql_query("select * from mahasiswa LIMIT $start, $per_page");	
	/*-------------------------------------------------------------------------------------------------------------*/

if (!isset($_POST['txtnama'])){
	$vnama="";
}
else{
	$vnama=$_POST['txtnama'];
}
?>
<h1 align="center" >DATA MAHASISWA JTK 2012 </h1>
<div align="center">
<form name="form_mhsw" method="post" action="">
	Nama: <input name="txtnama" type="text">
	<input name="btnsubmit" type="submit" value="Search">
</form>
</div>
<div align="left">
<form name="form_mhs" method="post" action="template.php?content=latihan8input.php">
	<input name="btninput" type="submit" value="Tambah Baru">
</div>
<?php
//$dtmhsw= mysql_query ("select * from mahasiswa where nama like '%$vnama%'");
?>
<table width="75%" border="1" align="center">
<tr bgcolor= "aqua" align="center" >
	<td>NIM</td>
	<td>NAMA</td>
	<td>UMUR</td>
	<td colspan=3>Aksi</td>
</tr>
<?php
while ($data = mysql_fetch_array ($dtmhsw))
{
?>
<tr>
	<td><?php echo $data["NAMA"];?></td>
	<td><?php echo $data["NIM"];?></td>
	<td><?php echo $data["UMUR"];?></td>
	<td><a href="template.php?content=delete-db.php&xnim=<?php echo $data['NIM'] ?>">delete</a></td>
	<td><a href="template.php?content=edit-db.php&nim=<?php echo $data['NIM']?> ">update</a></td>
	<td><a action="display-data.php" href="template.php?content=display-data.php&nim=<?php
							echo $data['NIM'];?>&nama=<?php echo $data['NAMA']; ?>&umur=<?php echo $data['UMUR']; ?>">detail</a>
</tr>
<?php
}
?>
<tr>
	<td colspan = "6">
	<?php
		echo " PAGE <a href = 'template.php?content=latihan10displaysearch.php&page=1'>First</a> ";
		if($pages >= 1 && $page <= $pages){
			for($x = 1; $x <= $pages; $x++){
				echo "<a href = 'template.php?content=latihan10displaysearch.php&page=$x'>$x</a> ";
			}
		}
		echo "<a href = 'template.php?content=latihan10displaysearch.php&page=$pages'>Last</a> ";
	?>	
	</td>
	</tr>
</table>