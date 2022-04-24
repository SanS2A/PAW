<?php
include "koneksi.php";
$id = $_POST['id_san'];
$nama = $_POST['nama_san'];
$email = $_POST['email_san'];
$alamat = $_POST['alamat_san'];

$sql = "UPDATE tbl_san set nama_san = '$nama', email_san='$email', alamat_san='$alamat' where id_san=$id";
$hasil =mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Edit data gagal";
}else{
    echo "Edit data Berhasil<br>";
    echo "<a href='tampil.php'>Show data</a>";
}

?>