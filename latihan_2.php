
<?php  

$MOTOR = [
    [
        "no" => "1",
        "nama" => "NINJA 250SL",
        "harga" => "37.000.000.00",
        "foto" => "produk1.jpg",
        "stok" => "50",
        "status" => "<span style =' color : green '>tersedia</span> "

    ],
    [ 
        "no" => "2",
        "nama" => "Beat Deluxe",
        "harga" => "20.000.000.00",
        "foto" => "produk2.jpg",
        "stok" => "0",
        "status" => "<span style =' color : red '>Tidak tersedia</span> "
    ]

]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KJV MOTORSPORT</title>
    <h1>TOKO MOTOR BEKAS BERKUALITAS | DIJAMIN AMANAH</h1>
    <h2>DATA PRODUK</h2>
</head>
<body>
    <table border= 1 cellpadding="8"  cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama BARANG</th>
            <th>Harga</th>
            <th>Foto</th>
            <th>Stok</th>
            <th>Status</th>
        </tr>

    


    <?php foreach($MOTOR as $BARANG) : ?>
      <tr>

          <td><?= $BARANG["no"]; ?></td>
        <td><?= $BARANG["nama"]; ?></td>
        <td><?= $BARANG["harga"]; ?></td>
        <td><img src="<?= $BARANG["foto"]; ?>" width="100px" alt=""></td>
        <td><?= $BARANG["stok"]; ?></td>
        <td><?= $BARANG["status"]; ?></td>
      </tr>

    <?php endforeach; ?>
    </table>
</body>
</html>