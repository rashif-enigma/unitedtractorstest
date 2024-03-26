<?php 
include('database.php');
$db = new database();
$data_mahasiswa = $db->tampil();
?>
<!DOCTYPE html>
<html>
<head>
    <title>United Tractors</title>
</head>
<body>
<h1>Data Mahasiswa</h1>
<a href="input.php">Input Data</a>
<br>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Usia</th>
        <th>Opsi</th>
    </tr>
    <?php 
    $no = 1;
    foreach($data_mahasiswa as $row){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['Nama']; ?></td>
            <td><?php echo $row['Alamat']; ?></td>
            <td><?php echo $row['Usia']; ?></td>
            <td>
                <a href="proses.php?action=hapus&id=<?php echo $row['id']; ?>">Hapus</a>
            </td>
        </tr>
        <?php 
    }
    ?>
</table>
</body>
</html>
