<!-- Tabel Mahasiswa -->
<?php
 
$conn = mysqli_connect("localhost", "root", "", "mahasiswa");
 
$tb_mahasiswa=mysqli_query ($conn, "SELECT*FROM mahasiswa_id")
 
 ?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Database Mahasiswa</title>
</head>
<body>
 
    <h1>Tabel Mahasiswa</h1>
    
    <table border="1" cellpadding="3" cellspacing="3">
        <tr>
            <td><b>No.</b>
            <td><b>NIM</b>
            <td><b>Nama Mahasiswa</b>
        </tr>
        
        <?php $x=1; ?>
        <?php while($row=mysqli_fetch_assoc($tb_mahasiswa)): ?>
        
        <tr>
            <td><?= $x; ?></td>
            <td><?= $row["Nim_id"]; ?></td>
            <td><?= $row["Nama_id"]; ?></td>
        </tr>
        <?php $x++; ?>
        <?php endwhile; ?>
    </table>
</body>
</html>
<!-- selesai! -->
 
<!-- Tabel Mata Kuliah -->
<?php
 
$conn = mysqli_connect("localhost", "root", "", "mahasiswa");
 
$tb_mahasiswa=mysqli_query ($conn, "SELECT*FROM mata_kuliah")
 
 ?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Database Mahasiswa</title>
</head>
<body>
 
    <h1>Tabel Mata Kuliah</h1>
    
    <table border="1" cellpadding="3" cellspacing="3">
        <tr>
            <td><b>No.</b>
            <td><b>Kode</b>
            <td><b>Matakuliah</b>
            <td><b>SKS</b>
        </tr>
        
        <?php $x=1; ?>
        <?php while($row=mysqli_fetch_assoc($tb_mahasiswa)): ?>
        
        <tr>
            <td><?= $x; ?></td>
            <td><?= $row["Kode_id"]; ?></td>
            <td><?= $row["Matkul_id"]; ?></td>
            <td><?= $row["SKS_id"]; ?></td>
        </tr>
        <?php $x++; ?>
        <?php endwhile; ?>
    </table>
</body>
</html>
<!-- Selesai -->
 
<!-- Tabel KMK -->
<?php
 
$conn = mysqli_connect("localhost", "root", "", "mahasiswa");
 
$tb_mahasiswa=mysqli_query ($conn, "SELECT*FROM kmk_id")
 
 ?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Database Perkuliahan</title>
</head>
<body>
 
    <h1>Tabel KMK</h1>
    
    <table border="1" cellpadding="3" cellspacing="3">
        <tr>
            <td><b>No.</b>
            <td><b>Nim</b>
            <td><b>Kode</b>
        </tr>
        
        <?php $x=1; ?>
        <?php while($row=mysqli_fetch_assoc($tb_mahasiswa)): ?>
        
        <tr>
            <td><?= $x; ?></td>
            <td><?= $row["Nim_id"]; ?></td>
            <td><?= $row["Kode_id"]; ?></td>
        </tr>
        <?php $x++; ?>
        <?php endwhile; ?>
    </table>
</body>
</html>
<!-- Selesai -->