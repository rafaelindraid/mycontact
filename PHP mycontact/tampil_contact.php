<?php 

	
	//Mendapatkan Nilai Dari Variable ID Contact yang ingin ditampilkan
	$id = $_GET['id'];
	
	//Importing database
	require_once('Config.php');
	
	//Membuat SQL Query dengan Contact yang ditentukan secara spesifik sesuai ID
	$sql = "SELECT * FROM  contact WHERE id=$id";
	
	//Mendapatkan Hasil 
	$r = mysqli_query($con,$sql);
	
	//Memasukkan Hasil Kedalam Array
	$result = array();
	$row = mysqli_fetch_array($r);
	array_push($result,array(
        "id" => $row['id'],
        "nama" => $row['nama'],
        "nomor" => $row['nomor'],
        "email" => $row['email'],
        "alamat" => $row['alamat']
		));

	//Menampilkan dalam format JSON
	echo json_encode(array('result'=>$result));
	
	mysqli_close($con);
?>