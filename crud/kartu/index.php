<?php
require_once '../config/Database.php';
require_once '../class/kartu.php';

$database = new Database();
$db = $database->dbConnection();

$kartu = new kartu($db);

// Cek jika parameter id ada pada URL
if(isset($_GET['id'])){
    $kartu->id = $_GET['id'];

    if($kartu->delete()){
        header("Location: index.php");
    }else{
        echo "Gagal menghapus kartu.";
    }
}

// Tampilkan data dari method index
$data = $kartu->index();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar kartu</title>
</head>
<body>
    <h1>Daftar kartu</h1>
    <a href="create.php">Tambah</a>
    <table border="1">
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>iuran</th>
                <th>diskon</th>  
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach($data as $row) { ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['kode']; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['iuran']; ?></td>
                    <td><?php echo $row['diskon']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                        |
                        <a href="index.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus kartu ini?')">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>