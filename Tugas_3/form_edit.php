<!DOCTYPE html>
<html>
<head>
    <title>Form Edit</title>
</head>
<body>
<?php
 include 'koneksi.php';
 $id=$_GET['id'];
$sql = "SELECT * FROM tbl_032 where id_mahasiswa=$id";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "query salah";
}

?>

<h1>Form Edit Data Mahasiswa </h1>
<?php
while ($row = mysqli_fetch_array($hasil))
{
?>

    <form method="post" action="update.php">
        <input type="hidden" name="id_mahasiswa" value="<?php echo $row['id_mahasiswa']?>">
        Nama Mahasiswa : <input type="text" name="nama_mahasiswa" value="<?php echo $row['nama_mahasiswa']?>"><br/>
        NIM Mahasiswa : <input type="text" name="nim_mahasiswa" value="<?php echo $row['nim_mahasiswa']?>"><br/>
        Alamat Mahasiswa : <input type="text" name="alamat_mahasiswa" value="<?php echo $row['alamat_mahasiswa']?>"><br/>
        <button type="submit">Update</button>
    </form>
<?php }?>
</body>
</html>