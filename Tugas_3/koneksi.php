<?php
$host = "localhost";
$user ="root";
$password ="";
$dbname ="sans";

$koneksi = mysqli_connect($host,$user,$password,$dbname);
if(!$koneksi){
    echo "koneksi gagal";
}
// else{
//    echo "koneksi berhasil";
// }
?>