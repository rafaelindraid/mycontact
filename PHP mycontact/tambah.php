<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		$nama = $_POST['nama'];
		$nomor = $_POST['nomor'];
		$email = $_POST['email'];
		$alamat = $_POST['alamat'];

		$sql = "INSERT INTO contact (id,nama,nomor,email,alamat) VALUES (0,'$nama','$nomor','$email','$alamat')";
		
		//Import File Koneksi database
		require_once('Config.php');
		
		//Eksekusi Query database
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Menambahkan Kontak';
		}else{
			echo 'Gagal Menambahkan Kontak';
		}
		
		mysqli_close($con);
	}
?>