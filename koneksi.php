<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "db_032";

$koneksi = mysqli_connect($host,$user,$password,$dbname);
if(!$koneksi){
    echo "koneksi gagal";
}
// else{
//    echo "koneksi berhasil";
// }
?>