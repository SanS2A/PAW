<?php
include 'koneksi.php';
$id=$_GET['id'];

$sql="DELETE FROM tbl_032 WHERE id_mahasiswa=$id";
$hasil=mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Delete data gagal";
}else{
    echo "Data mahasiswa berhasil di delete<br>";
    echo "<a href='data_mahasiswa.php'> Show data</a>";
}

?>