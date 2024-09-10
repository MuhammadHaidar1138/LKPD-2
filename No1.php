<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <label for="inpKalimat">Masukkan Kalimat</label><br>
        <input type="text" name="inpKalimat" id="inpKalimat">
    </form>
</body>
</html>



<?php
// Membuat kalimat
$kalimat = "Selamat ulang tahun yang ke-17!";

// preg_match_all berfungsi untuk mencocokan pola yang ditentukan oleh regex
// Pattern (Berisi ekspresi yang harus dicari)
// input (Tempat pencarian yang akan dilakukan)
// matches (array yang berisi semua kecocokan yang ditemukan)
if (preg_match_all('/[\'^£$%&*!()}{@#~?><>,|=_+¬-]/', $kalimat, $arr)) {
    echo "<b>Teks : " . $kalimat . "</b>";
    echo "<br>";
    // Implode berfungsi merubah bentuk array menjadi kalimat
    //Separator(",") adalah pemisah yang digunakan untuk memisahkan index setiap array sehingga mudah di baca
    echo "Karakter yang terdapat pada kalimat :" . implode(", ", $arr[0]);
} 


else {
    echo "<b>Teks : " . $kalimat . "</b>";
    echo "<br>";
    echo "Tidak terdapat simbol pada kalimat.";
}
?>