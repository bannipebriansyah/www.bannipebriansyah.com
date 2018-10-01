<?php session_start(); 
include "koneksi.php"; 
$username=$_POST['username']; 
$password=$_POST['password']; 
$query=mysqli_query($con,"select * from admin where username='$username' and password='$password'");
$cek=mysqli_num_rows($query)==1;
if($cek){ 
$_SESSION['username']=$username; 
   header("location:../../windows8start.html");
?> 
<?php 
}else{ 
?>
Anda gagal login. silahkan <a href="../../Login+registration.html">Login kembali</a>
<?php 
} 
?> 