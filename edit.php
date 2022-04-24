<!DOCTYPE html>
<html>
<head>
    <title>Edit</title>
</head>
<body>
<?php
 include 'koneksi.php';

$id = $_GET['id'];
$sql = "SELECT * FROM tbl_san WHERE id_san=$id";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "query salah";
}
?>

<h1>Edit Data :</h1>
<?php
while ($row = mysqli_fetch_array($hasil))
{
?>
    <form method="POST" action="edit_logic.php">
        <input type="hidden" name="id_san" value="<?php echo $row['id_san']?>">
        <p>Nama : <input type="text" name="nama_san" value="<?php echo $row['nama_san']?>"></p> 
        <p>Email : <input type="text" name="email_san" value="<?php echo $row['email_san']?>"></p>
        <p>Alamat : <input type="text" name="alamat_san" value="<?php echo $row['alamat_san']?>"></p>
        <button type="submit">Edit</button>
    </form>
<?php }?>
</body>
</html>