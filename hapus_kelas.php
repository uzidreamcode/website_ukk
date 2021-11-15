<?php
include 'koneksi.php';
$kelas = $_REQUEST['kelas'];
$tapel = $_REQUEST['tapel'];

$sql = mysqli_query($koneksi,"DELETE FROM kelas WHERE kelas='$kelas' AND th_pelajaran='$tapel'");
if($sql > 0){
	echo "<script>location='admin.php?halaman=kelas'</script>";
} else {
	echo 'ada ERROR dengan query';
}
?>