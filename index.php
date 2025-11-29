<?php
require_once "classes/Wigglytuff.php";

$data = json_decode(file_get_contents("data/pokemon.json"), true);
$poke = new Wigglytuff($data["level"], $data["hp"]);
?>
<h1>PokéCare — <?= $poke->getName() ?></h1>
<p>Tipe: <?= $poke->getType() ?></p>
<p>Level: <?= $poke->getLevel() ?></p>
<p>HP: <?= $poke->getHp() ?></p>
<a href="train.php">Latihan</a> | <a href="history.php">Riwayat</a>
