<?php

$mahasiswa = [
        "001" => "Ahmad",
        "002" => "Budi",
        "003" => "Chika",
        "004" => "Erwin"];
        // Untuk memasukkan value,kita harus membuat key yg merepresentasikan valuenya
        // tanda "=>" dapat diartikan sebagai merujuk
        // "Key" => "Value"

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array Associative</title>
</head>
<body>
    <?php foreach ($mahasiswa as $nrp => $nama) : ?>
        <li><?php echo "$nrp : $nama" ?><li>
    <?php endforeach
</body>
</html>