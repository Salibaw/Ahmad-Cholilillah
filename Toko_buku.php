<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko_Buku</title>
    <a href="Toko_buku.php">Kembali</a><br/><br>
</head>
<body>
<form action="" method="POST">
    <label for="notransaksi">No.Transaksi : </label>
    <input type="number" id="notransaksi" name="notransaksi" required><br><br>
    <label for="nama"> Nama Pembeli : </label>
    <input type="text" id="nama" name="nama"required><br><br>
    <label for="judul"> Judul Buku : </label>
    <input type="text" id="judul" name="judul"required><br><br>
    <label for="jumlah"> Jumlah Buku : </label>
    <input type="number" id="jumlah" name="jumlah"required><br><br>
    <label for="harga"> Harga Buku : </label>
    <input type="text" id="harga" name="harga"required><br><br>
    <input type="submit" value="submit">
</form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $no= $_POST["notransaksi"];
    $nama = $_POST["nama"];
    $judul = $_POST ["judul"];
    $jumlah = $_POST["jumlah"];
    $harga = $_POST["harga"];
    $total = $jumlah * $harga;

    echo "No transaksi : $no <br>";
    echo "Nama Pembeli : $nama <br>";
    echo "Harga : $total <br>";
        if($total >= 150000){
            $discount_harga=($total*0.10);
            echo "Anda Mendapat discount 10% : $discount_harga <br>"; 
        }else{
            $discount_harga=0;}
        if($no<=50){
            $discount_no=($total*0.05);
            echo "Anda mendapat discount 5% : $discount_no <br>";
        }else{
            $discount_no=0;}
    $totalBelanja=($total-$discount_harga-$discount_no);
    echo "Total bayar : $totalBelanja";
    }?>
</body>
</html>