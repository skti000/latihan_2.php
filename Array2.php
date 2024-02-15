<?php

$siswa = [
    [
        "nama" => "M.Sakti",
        "kelas" => "X RPL - 2",
        "noWhatsApp" => "08565097246",
        "hobi" => "Motoran"
    ],
    [
        "nama" => "Galang",
        "kelas" => "X RPL - 2",
        "noWhatsApp" => "08565097248",
        "hobi" => "Bisnis"
    ]
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA PESERTA didik</title>
</head>
<body>
         <h1>Data Peserta Didik SMK Jakarta Pusat 1</h1>
    <ul>
    <?php foreach($siswa as $data) : ?>
        <li><?= $data["nama"]; ?></li>
        <li><?= $data["kelas"]; ?></li>
        <li><?= $data["noWhatsApp"]; ?></li>
        <li><?= $data["hobi"]; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>



