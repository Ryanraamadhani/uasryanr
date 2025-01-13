<!DOCTYPE html>
<html>
<head>    
    <title>UAS Ryan</title>
    <style type="text/css">
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f0f8ff;
        }
        .header {
            background-color: #4682b4;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: relative;
        }
        .logout-button {
            position: absolute;
            top: 10px;
            right: 20px;
            padding: 5px 10px;
            color: white;
            background-color:rgba(255, 0, 0, 0.86);
            text-decoration: none;
            border-radius: 5px;
        }
        .logout-button:hover {
            background-color: #ff4500;
        }
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
            background-color: #e6f7ff;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        tr:nth-child(even) {
            background-color: #d9edf7;
        }
        tr:hover {
            background-color: #b0e0e6;
        }
        a {
            text-decoration: none;
            padding: 5px 10px;
            color: white;
            background-color: #4682b4;
            border-radius: 5px;
        }
        a:hover {
            background-color: #1e90ff;
        }
        .add-button {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            background-color: #0073e6;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .add-button:hover {
            background-color: #005cbf;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>Data Stok Barang</h1>
        <a class="logout-button" href="logout.php">Keluar</a>
    </div>
    <a class="add-button" href="add.php">Tambah Alat</a><br/><br/>

    <table>
        <tr class="header">
            <th>No</th>
            <th>Nama Sparepart</th> 
            <th>Tahun</th> 
            <th>Merek</th>
            <th>Stok Barang</th> 
            <th>Aksi</th>
        </tr>
        <?php  
        include_once("config.php");
        $result = mysqli_query($mysqli, "SELECT * FROM alat ORDER BY id DESC");
        $i = 1;
        while($user_data = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$i."</td>";
            echo "<td>".$user_data['nama_sparepart']."</td>";
            echo "<td>".$user_data['tahun']."</td>";
            echo "<td>".$user_data['merek']."</td>";    
            echo "<td>".$user_data['stok barang']."</td>";    
            echo "<td><a href='edit.php?id=".$user_data['id']."'>Edit</a> | <a href='delete.php?id=".$user_data['id']."'>Hapus</a></td>";
            echo "</tr>"; 
            $i++;       
        }
        ?>
    </table>
</body>
</html>
