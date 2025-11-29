<?php
// Data Pokémon
$pokemon_name = "Wigglytuff";
$pokemon_type = "Normal / Fairy";
$pokemon_image = "wigglytuff.png"; 
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>PokeCare - Beranda</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1 class="title">POKE CARE TRAINING CENTER</h1>

<div class="pokemon-card">
    <img src="<?php echo $pokemon_image; ?>" class="pokemon-img" alt="<?php echo $pokemon_name; ?>">

    <h2 class="info-title">Informasi Pokémon</h2>

    <div class="info-container">
        <div class="info-box">
            <span class="label">Nama Pokémon:</span>
            <p><?php echo $pokemon_name; ?></p>
        </div>

        <div class="info-box">
            <span class="label">Tipe:</span>
            <p class="type-tag"><?php echo $pokemon_type; ?></p>
        </div>
    </div>
</div>

</body>
</html>
