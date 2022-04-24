<?php
include "Koneksi.php";
$nama = $_POST["nama_san"];
$email = $_POST["email_san"];
$alamat = $_POST["alamat_san"];

$sqli = "INSERT INTO tbl_san VALUES(null,'$nama','$email','$alamat')";
$hasil = mysqli_query($koneksi, $sqli);
if(!$hasil){
    echo "Tambah data gagal";
}else{
    echo "Tambah data berhasil<br/>";
    echo "<a href='tampil.php'>show data</a>";
}
?>
