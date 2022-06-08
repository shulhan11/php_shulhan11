<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="view.php" method="post">
        hobi<input type="text" name="hobi">
        <button type="submit">Cari</button>
    </form>
</body>

</html>

<?php
include '../soal_A_2/config.php';
$hobi = $_POST['hobi'];
if ($hobi == null) {
    $sql =  mysqli_query($koneksi, "SELECT hobi, count(*) as jumlah FROM `hobi` GROUP BY hobi");
    $no = 1;
    while ($data = mysqli_fetch_array($sql)) {
        echo $data['hobi'];
        echo $data['jumlah'];
        echo "<br>";
    }
} else {


    $sql =  mysqli_query($koneksi, "SELECT hobi, count(*) as jumlah FROM `hobi`  WHERE hobi LIKE '$hobi' GROUP BY hobi");
    $no = 1;
    while ($data = mysqli_fetch_array($sql)) {
        echo $data['hobi'];
        echo $data['jumlah'];
        echo "<br>";
    }
}
