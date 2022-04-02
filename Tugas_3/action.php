<?php
include "koneksi.php";

$nama = $_POST['nama_mahasiswa'];
$nim = $_POST['nim_mahasiswa'];
$alamat = $_POST['alamat_mahasiswa'];

$sql = "INSERT INTO tbl_032 VALUES(null,'$nama','$nim','$alamat')";
$hasil =mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Eksekusi tambah data mahasiswa gagal";
}else{
    echo "Eksekusi tambah data mahasiswa berhasil<br>";
    echo "<a href='data_mahasiswa.php'>Show data</a>";
}

?>