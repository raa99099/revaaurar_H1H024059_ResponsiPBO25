<?php
// Data Pokémon
$nama = "Wigglytuff";
$tipe = "FAIRY";
$gambar = "img/wigglytuff.png";  // pastikan file ini ada
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PokeCare - Info Pokémon</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #fff4e9;
            margin: 0;
            padding: 20px;
            text-align: center;
        }
        .title {
            color: #ff6a28;
            font-size: 38px;
            font-weight: bold;
            margin-bottom: 30px;
        }
        .card {
            background: #ffe9d6;
            border-radius: 20px;
            padding: 30px;
            width: 450px;
            margin: auto;
            box-shadow: 0 6px 15px rgba(0,0,0,0.15);
        }
        .pokemon-img {
            width: 220px;
            margin-bottom: 20px;
        }
        .info-title {
            color: #ff6a28;
            font-size: 24px;
            margin-bottom: 20px;
            border-top: 3px solid #ff6a28;
            padding-top: 10px;
        }
        .info-box {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }
        .info label {
            font-weight: bold;
            color: #ff6a28;
        }
        .info p {
            background: white;
            padding: 10px 20px;
            border-radius: 10px;
            margin-top: 5px;
        }
        .type {
            background: #ff9ce6;
            color: white;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h1 class="title">POKÉ CARE TRAINING CENTER</h1>

<div class="card">
    <img src="<?php echo $gambar; ?>" class="pokemon-img" alt="<?php echo $nama; ?>">

    <h2 class="info-title">Informasi Pokémon</h2>

    <div class="info-box">
        <div class="info">
            <label>Nama Pokémon:</label>
            <p><?php echo $nama; ?></p>
        </div>

        <div class="info">
            <label>Tipe:</label>
            <p class="type"><?php echo $tipe; ?></p>
        </div>
    </div>
</div>

</body>
</html>
