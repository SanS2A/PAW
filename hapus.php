<?php
include 'Koneksi.php';

$id=$_GET['id'];

$sqli="DELETE FROM tbl_san WHERE id_san=$id";
$hasil=mysqli_query($koneksi, $sqli);
if (!$hasil){
    echo "Delete data gagal";
}else{
    echo "Data berhasil di delete<br>";
    echo "<a href='tampil.php'> Show data</a>";
}

?>