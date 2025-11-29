<form action="process_train.php" method="post">
    <label>Jenis Latihan:</label>
    <select name="trainingType">
        <option>Attack</option>
        <option>Defense</option>
        <option>Speed</option>
    </select><br><br>

    <label>Intensitas:</label>
    <input type="number" name="intensity" value="50"><br><br>

    <button type="submit">Latih</button>
</form>
<a href="index.php">Kembali</a>
