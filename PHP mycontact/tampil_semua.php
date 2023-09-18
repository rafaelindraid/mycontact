<?php  
	
	require_once 'config.php';
	
	$sql = "SELECT * FROM contact order by nama asc";

	$result = array();
	$r = mysqli_query($con,$sql);

	while ($row = mysqli_fetch_array($r)) {
		
		array_push($result, array(
				"id" => $row['id'],
				"nama" => $row['nama'],
                "nomor" => $row['nomor'],
                "email" => $row['email'],
                "alamat" => $row['alamat']
			));

	}
	
	echo json_encode(array('result' => $result));
	mysqli_close($con);

?>