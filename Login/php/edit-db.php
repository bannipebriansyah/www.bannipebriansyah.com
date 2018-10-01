<?php
$vnim=$_GET['nim'];
$server="localhost";
$username="root";
$password="";
$database="akademis";

mysql_connect($server,$username,$password);
mysql_select_db($database);
	$dtmhsw=mysql_query("select * from mahasiswa where NIM='$vnim'");
	while($data = mysql_fetch_array($dtmhsw))
	{
?>
<h1 align="center">Input Biodata</h1>
<fieldset style="width: 50%; margin: auto;">
    <legend>Form Input Biodata</legend>
    
    <form method="post" action="template.php?content=update-db.php">
        <input type="hidden" name="txtnim" value="<?php echo $data['NIM']; ?>" />
        <p>
            Nama Lengkap<br />
            <input name="txtnama" type="text" value="<?php echo $data['NAMA']; ?>"/>
        </p>
		<p>
            Umur<br />
            <input name="txtumur" type="text" value="<?php echo $data['UMUR']; ?>"/>
        </p>
        <p>
            <input type="submit" value="Simpan" />
            <input type="reset" value="Reset" onclick="return confirm('hapus data yang telah diinput?')">
        </p>
    </form>
</fieldset>
<br />
<center><a href="template.php?content=latihan10displaysearch.php">&Lt; Tabel Mahasiswa</a></center>
<?php
}
?>