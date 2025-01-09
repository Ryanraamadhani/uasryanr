<?php
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: login.php");
}
include("config.php");

if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama_sparepart = $_POST['nama_sparepart'];
    $tahun = $_POST['tahun'];
    $merek = $_POST['merek'];
    $stok_barang = $_POST['stok_barang'];

    $result = mysqli_query($mysqli, "UPDATE alat SET nama_sparepart='$nama_sparepart', tahun='$tahun', merek='$merek', `stok barang`='$stok_barang' WHERE id=$id");
    header("Location: index.php");
}

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM alat WHERE id=$id");
$user_data = mysqli_fetch_array($result);

$nama_sparepart = $user_data['nama_sparepart'];
$tahun = $user_data['tahun'];
$merek = $user_data['merek'];
$stok_barang = $user_data['stok barang'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Alat</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #5d78ff;
            color: white;
            padding: 15px 0;
            text-align: center;
            font-size: 24px;
        }
        .container {
            width: 50%;
            margin: 40px auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        label {
            font-size: 16px;
            margin: 10px 0 5px;
            display: block;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }
        input[type="submit"] {
            background-color: #5d78ff;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #4c68e1;
        }
        .form-group {
            margin-bottom: 15px;
        }
        footer {
            text-align: center;
            padding: 10px 0;
            background-color: #f4f7fc;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<header>
    <b>Edit stok barang</b>
</header>

<div class="container">
    <h2>Update stok barang</h2>
    <form action="edit.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <div class="form-group">
            <label for="nama_sparepart">Nama sparepart:</label>
            <input type="text" name="nama_sparepart" value="<?php echo $nama_sparepart; ?>" required>
        </div>

        <div class="form-group">
            <label for="tahun">Tahun:</label>
            <input type="text" name="tahun" value="<?php echo $tahun; ?>" required>
        </div>

        <div class="form-group">
            <label for="merek">Merek:</label>
            <input type="text" name="merek" value="<?php echo $merek; ?>" required>
        </div>

        <div class="form-group">
            <label for="stok_barang">Stok Barang:</label>
            <input type="text" name="stok_barang" value="<?php echo $stok_barang; ?>" required>
        </div>

        <input type="submit" name="update" value="Update">
    </form>
</div>

<footer>
    &copy; 2025 ryzracing
</footer>

</body>
</html>
