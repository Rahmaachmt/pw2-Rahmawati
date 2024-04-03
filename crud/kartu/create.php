<?php
require_once '../config/Database.php';
require_once '../class/kartu.php';

$database = new Database();
$db = $database->dbConnection();

$produk = new kartu($db);

if(isset($_POST['tambah'])){
    $produk->kode = $_POST['kode'];
    $produk->nama = $_POST['nama'];
    $produk->iuran = $_POST['iuran'];
    $produk->diskon = $_POST['diskon'];


    $produk->store(); 
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data</h1>
    <form method="POST" action="">
        <label for="kode">Kode:</label>
        <input type="text" name="kode" required>
        <br>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>
        <br>
        <label for="iuran">iuran:</label>
        <input type="number" name="harga_beli" required>
        <br>
        <label for="diskon">diskon:</label>
        <input type="number" name="harga_jual" required>
        <br>
        <input type="submit" name="tambah" value="Tambah">
    </form>
</body>
</html>