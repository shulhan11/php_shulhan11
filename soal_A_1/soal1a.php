<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        Kolom
        <input type="number" name="kolom">
        Baris
        <input type="number" name="baris">
        <button type="submit">submit</button>
    </form>
</body>

</html>
<?php

$kolom = $_POST['kolom'];
$baris = $_POST['baris'];
$j = 0;
$i = 0;
if ($baris == 0 && $kolom == 0) {
    echo "Silahkan Input <br>";
    $huruf = $_GET['huruf'];
    $h = explode(" ", $huruf);
    foreach ($h as $value => $key)
        echo "$key";
} else {
    echo "
    <form action='soal1a.php' method='GET'>
    <table >";
    for ($j = 1; $j <= $kolom; $j++) {
        echo "<tr>";
        for ($i = 1; $i <= $baris; $i++) {
            echo "<td>";
            echo "$j,$i :
            <input type='text' name='huruf'>";
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>
    <button type='submit'>Submit</button>
    </form>";
}
