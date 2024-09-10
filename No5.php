<?php
    // membuat array 
    $bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
    $bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

    // array_merge berfungsi menyatukan array
    $bil = array_merge($bil1 , $bil2);
    // array_unique berfungsi untuk menghapus duplikat pada array
    $bil = array_unique($bil);

    // Mengurutkan data pada array dari yang terbesar hingga yang terkecil 
    rsort($bil);

    // Implode berfungsi merubah bentuk array menjadi kalimat
    //Separator(",") adalah pemisah yang digunakan untuk memisahkan index setiap array sehingga mudah di baca
    echo "Hasil : " . implode(",", $bil);
?>