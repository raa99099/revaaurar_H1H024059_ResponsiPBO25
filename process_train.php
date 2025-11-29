<?php
require_once "classes/Wigglytuff.php";

$type = $_POST["trainingType"];
$int = (int) $_POST["intensity"];

$data = json_decode(file_get_contents("data/pokemon.json"),true);
$poke = new Wigglytuff($data["level"],$data["hp"]);

$result = $poke->train($type,$int);

$data["level"] = $result["after"]["level"];
$data["hp"] = $result["after"]["hp"];
file_put_contents("data/pokemon.json", json_encode($data, JSON_PRETTY_PRINT));

$history = json_decode(file_get_contents("data/history.json"),true);
$history[] = $result;
file_put_contents("data/history.json", json_encode($history, JSON_PRETTY_PRINT));
?>
<h1>Hasil Latihan</h1>
<p>Level: <?= $result["before"]["level"] ?> → <?= $result["after"]["level"] ?></p>
<p>HP: <?= $result["before"]["hp"] ?> → <?= $result["after"]["hp"] ?></p>
<p><?= $result["specialMove"] ?></p>
<a href="train.php">Latih lagi</a> | <a href="index.php">Beranda</a>
