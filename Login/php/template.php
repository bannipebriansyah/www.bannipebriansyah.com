<?php
if (!isset($_GET['content']))
{
 $vcontent='home1.php';
}
else
{
 $vcontent=$_GET ['content'];
}
?>
<html>
<body>
<table width="75%" border "1" align="center">
	<tr height="100">
		<td colspan="3"><div align="center">HEADER</div></td>
		</tr>
	<tr>
	<td>
	<a href="template.php?content=<?php echo 'home1.php' ?>">HOME</a> |
	<a href="template.php?content=<?php echo 'info.php' ?>">INFO</a> |
	<a href="template.php?content=<?php echo 'latihan10displaysearch.php' ?>">MAHASISWA</a> | 
	<a href="template.php?content=<?php echo 'logout.php' ?>">LOGOUT</a> 
	</td>
	</tr>
	<tr height="200">
		<td><?php include $vcontent; ?>
	</tr>
	
	<tr height="100">
	<td align="center">FOOTER</td>
	</tr>
</table>
</body>
</html>