<?php
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: login.php");
}
include("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM alat ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uas ryan <title>
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
            width: 80%;
            margin: 20px auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        table th, table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        table th {
            background-color: #f5f5f5;
        }
        a {
            color: #5d78ff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .action-links {
            display: flex;
            justify-content: space-around;
        }
        .action-links a {
            margin: 0 10px;
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
    <b>Data stok barang</b>
</header>

<div class="container">
    <div class="actions">
        <a href="add.php" style="background-color: #5d78ff; color: white; padding: 10px 20px; border-radius: 5px;">Tambah Alat</a>
        <a href="logout.php" style="background-color: #ff4d4d; color: white; padding: 10px 20px; border-radius: 5px;">Logout</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Alat</th>
                <th>Tahun</th>
                <th>Merek</th>
                <th>Stok Barang</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php  
            $i = 1;
            while($user_data = mysqli_fetch_array($result)) {         
                echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>".$user_data['nama_sparepart']."</td>";
                echo "<td>".$user_data['tahun']."</td>";
                echo "<td>".$user_data['merek']."</td>";    
                echo "<td>".$user_data['stok barang']."</td>";    
                echo "<td class='action-links'><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>"; 
                $i++;       
            }
            ?>
        </tbody>
    </table>
</div>

<footer>
    &copy; 2025 ryzracing
</footer>

</body>
</html>
