<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $agama = $_POST ["agama"];
    $jabatan = $_POST["jabatan"];
    $status = $_POST["status"];
    $jumlahanak = $_POST["jumlahanak"];

    echo "Nama : $nama <br>";
    echo "agama : $agama <br>";
    echo "jabatan : $jabatan <br>";
    echo "status : $status <br>";
    if ($status == "Menikah") {
        echo "jumlah anak : $jumlahanak <br>";
    }}
?>
<br><br>
<form action="" method="POST">
<label for="nama">Nama :</label>
<input type="text" id="nama" name="nama" required><br><br>
<label for="agama">Agama : </label>
<input type="text" id="agama" name="agama"required><br><br>
<label for="jabatan">Jabatan : </label>
<select name="jabatan" id="jabatan"><br><br>
    <option value="Manager">Manager</option>
    <option value="Asisten">Asisten</option>
    <option value="Kabag">Kabag</option>
    <option value="Staff">Staff</option>
</select><br><br>
<label for="status">Status : </label>
<select name="status" id="status">
    <option value="Menikah">Menikah</option>
    <option value="Belum Menikah">Belum Menikah</option>
</select><br><br>
<label for="jumlahanak"> Jumlah Anak : </label>
<input type="number" id="jumlahanak" name="jumlahanak"><br><br>
<input type="submit" value="submit">
</form>
