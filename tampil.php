<!DOCTYPE html>
<html>
<head>
    <title>Tampil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<body>
<h1>Data : </h1>
<table class="table">
    <tr align="center">
        <td>Id</td>
        <td>Nama</td>
        <td>Email</td>
        <td>Alamat</td>
        <td>Action</td>
    </tr>
        <?php
        include 'koneksi.php';
        $sql="SELECT * FROM tbl_san";
        $hasil = mysqli_query($koneksi, $sql);
        while($row = mysqli_fetch_array($hasil))
        {
        ?>
        <tr>
            <td align="center"><?=$row['id_san'];?></td>
            <td><?=$row['nama_san'];?></td>
            <td><?=$row['email_san'];?></td>
            <td><?=$row['alamat_san'];?></td>
            <td align="center"><a href="edit.php?id=<?=$row['id_san']?>"> <i class="bi bi-pencil-square"></i></a> | <a href="hapus.php?id=<?=$row['id_san']?>"> <i class="bi bi-trash-fill"></i></td>
        </tr>
        <?php }
        ?> 
</table> 
<button type="submit"><a href="tambah.php">Tambah</a></button>
</body>
</html>
