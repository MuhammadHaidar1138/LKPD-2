<?php

function cekNilai($nama, $jawabanSiswa){
    $jawabanBenar = ['A', 'D', 'C', 'C', 'B', 'A', 'E', 'B', 'A', 'E'];
    $benar = 0;
    $salah = 0;

    $hasil = [];

    foreach ($jawabanSiswa as $index => $result) {
        if ($result === $jawabanBenar[$index]) {
            $hasil[] = ($index + 1);
            $benar++;
        } else {
            $hasil[] = ($index + 1);
            $salah++;
        }
    }

    echo "Nama : " . $nama;
    echo "<br>";
    echo "Jumlah jawaban benar : <b>" . $benar . "</b>";
    echo "<br>";
    echo "Jumlah jawaban salah : <b>" . $salah . "</b>";

};

$jawabanSiswa = ['A', 'B', 'C', 'D', 'B', 'E', 'E', 'B', 'A', 'E'];
$nama = "Fiony";

cekNilai($nama, $jawabanSiswa);


?>