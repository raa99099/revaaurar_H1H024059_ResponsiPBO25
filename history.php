<?php
$h = json_decode(file_get_contents("data/history.json"), true);
?>
<h1>Riwayat Latihan</h1>
<?php if(empty($h)): ?>
    <p>Belum ada data.</p>
<?php else: ?>
<table border="1">
<tr><th>Type</th><th>Intensitas</th><th>Level</th><th>HP</th></tr>
<?php foreach($h as $x): ?>
<tr>
<td><?= $x["trainingType"] ?></td>
<td><?= $x["intensity"] ?></td>
<td><?= $x["before"]["level"] ?> → <?= $x["after"]["level"] ?></td>
<td><?= $x["before"]["hp"] ?> → <?= $x["after"]["hp"] ?></td>
</tr>
<?php endforeach; ?>
</table>
<?php endif; ?>
<br>
<a href="index.php">Kembali</a>
