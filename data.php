

<?php
	include 'koneksi.php';

 	$data = $_POST['type_dataset'];

	// echo $data;

	if($data=="ITB"){

		$data = array(
			"label"=>array(),
			"data"=>array()
		);
		// $query = mysqli_query($koneksi, "select * from mahasiswa_itb");
		$query = mysqli_query($koneksi, "SELECT fakultas,count(nama) FROM mahasiswa_itb GROUP BY fakultas");


		$data_query = mysqli_fetch_all($query);



		foreach ($data_query as $key => $value) {
			$data["label"][]=$value[0];
			$data["data"][]=$value[1];
		};
		

		echo json_encode($data);
		die();
	}else if($data=="UGM"){
		$data = array(
			"label"=>array(),
			"data"=>array()
		);
		// $query = mysqli_query($koneksi, "select * from mahasiswa_itb");
		$query = mysqli_query($koneksi, "SELECT fakultas,count(nama) FROM mahasiswa GROUP BY fakultas");


		$data_query = mysqli_fetch_all($query);



		foreach ($data_query as $key => $value) {
			$data["label"][]=$value[0];
			$data["data"][]=$value[1];
		};
		

		echo json_encode($data);
	
	}else if($data=="UNPAD"){
		$data = array(
			"label"=>array(),
			"data"=>array()
		);
		// $query = mysqli_query($koneksi, "select * from mahasiswa_itb");
		$query = mysqli_query($koneksi, "SELECT fakultas,count(nama) FROM mahasiswa_unpad GROUP BY fakultas");


		$data_query = mysqli_fetch_all($query);



		foreach ($data_query as $key => $value) {
			$data["label"][]=$value[0];
			$data["data"][]=$value[1];
		};
		

		echo json_encode($data);
	
	}

	// echo json_encode($data);
	// echo"UNOADA";


?>