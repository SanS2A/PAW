<?php
include "koneksi.php";
$id = $_POST['id_mahasiswa'];
$nama = $_POST['nama_mahasiswa'];
$nim = $_POST['nim_mahasiswa'];
$alamat = $_POST['alamat_mahasiswa'];

$sql = "UPDATE tbl_032 set nama_mahasiswa = '$nama', nim_mahasiswa='$nim', alamat_mahasiswa='$alamat' where id_mahasiswa=$id";
$hasil =mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Eksekusi update data mahasiswa gagal";
}else{
    echo "Eksekusi update data mahasiswa berhasil<br>";
    echo "<a href='data_mahasiswa.php'>Show data</a>";
}

?>