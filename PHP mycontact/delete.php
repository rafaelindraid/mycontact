<?php 



 //Mendapatkan Nilai ID
 $id = $_GET['id'];
 
 //Import File Koneksi Database
 require_once('Config.php');
 
 //Membuat SQL Query
 $sql = "DELETE FROM contact WHERE id=$id;";

 
 //Menghapus Nilai pada Database 
 if(mysqli_query($con,$sql)){
 echo 'Berhasil Menghapus Contact';
 }else{
 echo 'Gagal Menghapus Contact';
 }
 
 mysqli_close($con);
 ?>