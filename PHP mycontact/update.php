<?php 


	if($_SERVER['REQUEST_METHOD']=='POST'){
		//MEndapatkan Nilai Dari Variable 
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$nomor = $_POST['nomor'];
		$email = $_POST['email'];
        $alamat = $_POST['alamat'];
		

		//import file koneksi database 
		require_once('Config.php');
		
		//Membuat SQL Query
		$sql = "UPDATE contact SET nama = '$nama', nomor = '$nomor', email = '$email', alamat = '$alamat' WHERE id = $id;";
		
		//Meng-update Database 
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Update Data Contact';
		}else{
			echo 'Gagal Update Data Contact';
		}
		
		mysqli_close($con);
	}
?>