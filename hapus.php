<?php  
include 'koneksi.php';
$nik = $_GET['nik'];

$sql = "DELETE FROM karyawan WHERE nik = '$nik'";
$query = mysqli_query($koneksi,$sql);

if($query){
		echo "
		<script>
			alert('Data Berhasil Dihapus');
			window.location.replace('data.php');
		</script>
		";
	}else{
		echo "Gagal. ". mysqli_error($koneksi); 
	}

?>