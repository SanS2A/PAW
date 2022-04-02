<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<body>
<h1>Data Mahasiswa </h1>
<table class="table">
    <tr align="center">
        <td>ID Mahasiswa</td>
        <td>Nama Mahasiswa</td>
        <td>NIM Mahasiswa</td>
        <td>Alamat Mahasiswa</td>
        <td>Action</td>
    </tr>
        <?php
        include 'koneksi.php';
        $sql="SELECT * FROM tbl_032";
        $hasil = mysqli_query($koneksi, $sql);
        while($row = mysqli_fetch_array($hasil))
        {
        ?>
        <tr>
            <td align="center"><?=$row['id_mahasiswa'];?></td>
            <td><?=$row['nama_mahasiswa'];?></td>
            <td><?=$row['nim_mahasiswa'];?></td>
            <td><?=$row['alamat_mahasiswa'];?></td>
            <td align="center"><a href="form_edit.php?id=<?=$row['id_mahasiswa']?>"> <i class="bi bi-pencil-square"></i></a> | <a href="delete.php?id=<?=$row['id_mahasiswa']?>"> <i class="bi bi-trash-fill"></i></td>
        </tr>
        <?php }
        ?> 
</table> 
<button type="submit"><a href="form_mahasiswa.php">Tambah data</a></button>
</body>
</html>
