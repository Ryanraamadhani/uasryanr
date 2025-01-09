<?php
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: login.php");
}
include("config.php");

if(isset($_POST['add'])) {
    $nama_sparepart = $_POST['nama_sparepart'];
    $tahun = $_POST['tahun'];
    $merek = $_POST['merek'];
    $stok_barang = $_POST['stok_barang'];

    $result = mysqli_query($mysqli, "INSERT INTO alat(nama_sparepart,tahun,merek,`stok barang`) VALUES('$nama_sparepart','$tahun','$merek','$stok_barang')");
    header("Location: index.php");
}
?>
<html>
<head>
    <title>Tambah Alat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            box-sizing: border-box;
        }
        .form-container h2 {
            text-align: center;
            color: #333;
        }
        .form-container label {
            font-size: 14px;
            color: #555;
            margin-bottom: 5px;
            display: block;
        }
        .form-container input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .form-container input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .form-container input[type="submit"]:hover {
            background-color: #45a049;
        }
        .form-container input[type="submit"]:active {
            background-color: #388e3c;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Tambah Alat</h2>
        <form action="add.php" method="post">
            <label for="nama_sparepart">Nama Alat:</label>
            <input type="text" name="nama_sparepart" required><br>

            <label for="tahun">Tahun:</label>
            <input type="text" name="tahun" required><br>

            <label for="merek">Merek:</label>
            <input type="text" name="merek" required><br>

            <label for="stok_barang">Stok Barang:</label>
            <input type="text" name="stok_barang" required><br>

            <input type="submit" name="add" value="Tambah">
        </form>
    </div>
</body>
</html>
