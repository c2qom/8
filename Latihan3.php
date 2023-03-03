<!-- Nama Hewan : Alpaca
Hidup di Negara : Wilayah Amerika Selatan
Jenis Hewan : Peliharaan
Lin-lain : Memiliki manfaat pada bulu serta dagingnya 

Nama Hewan : Panda
Asal dari Negara : Tiongkok
Jenis hewan : Dilindungi
Hlain-lain : Hewan ini sangat digemari oleh anak anak;
-->
<?php
//array nama hewan
// $hewan = [
//     ["Alpaca", "Amerika Selatan", "Hewan Peliharaan", "Miliki manfaat pada bulu serta dagingnya"],
//     ["Panda", "Tiongkok", "Hewan Dilindungi", "Hewan ini sangat digemari oleh anak-anak"]
// ];
$hewan = [
    [
        "nama" => "Alpaca",
        "asal" => "Amerika Selatan",
        "jenis" => "Hewan Peliharaan",
        "lainnya" => "Miliki manfaat pada bulu serta dagingnya",
        // "tugas" => [100, 10, 95]
        "gambar" => "alpaca1.jpg"
    ],

    [
        "nama" => "Panda",
        "asal" => "Tiongkok",
        "jenis" => "Hewan Dilindungi",
        "lainnya" =>"Hewan ini sangat digemari oleh anak-anak",
        "gambar" => "panda1.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Hewan</title>
</head>

<body>
    <h1>Data Hewan</h1>
    <?php foreach ($hewan as $hwn): ?> 
    <ul>
        <li>
            <img src="img/<?= $hwn["gambar"]; ?>">
        </li>
        <li>Nama: <?= $hwn["nama"] ?></li>
        <li>Asal: <?= $hwn["asal"] ?></li>
        <li>Jenis: <?= $hwn["jenis"] ?></li>
        <li>Lainnya: <?= $hwn["lainnya"] ?></li>
    </ul> 
    <?php endforeach; ?>

    <!-- <?php echo $hewan[0]["tugas"][2] ?>     -->
    <!-- <ul>
        <li><?= $hewan[0] ?></li>
        <li><?= $hewan[1] ?></li>
        <li><?= $hewan[2] ?></li>
        <li><?= $hewan[3] ?></li>
    </ul> -->
    <!-- <?php foreach ($hewan as $hwn): ?> -->
    <!-- <ul>
        <li>Nama: <?= $hwn[0] ?></li>
        <li>Asal: <?= $hwn[1] ?></li>
        <li>Jenis: <?= $hwn[2] ?></li>
        <li>Lainnya: <?= $hwn[3] ?></li>
    </ul> -->
    <!-- <ul>
        <li>Nama: <?= $hwn["nama"]; ?></li>
        <li>Asal: <?= $hwn["asal"]; ?></li>
        <li>Jenis: <?= $hwn["jenis"]; ?></li>
        <li>Lainya: <?= $hwn["lainnya"]; ?></li>
    </ul>     -->
    <!-- <?php endforeach; ?> --> 

</body>
</html>