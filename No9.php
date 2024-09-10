<?php
    function cariJenisKoin($jumlah) {
        //Masukan daftar koin yang tersedia dalam urutan dari nilai tertinggi ke terendah untuk mencari jenis koin yang digunakan
        $koin = [500, 200, 100];
        $hasil = [];
    
        //Pengulangan melalui setiap jenis koin
        foreach ($koin as $nilai) {
            //Jika jumlah masih bisa dibagi dengan nilai koin saat ini
            if ($jumlah >= $nilai) {
                //Tambahkan nilai koin ke hasil
                $hasil[] = $nilai;
                //Kurangi jumlah uang yang tersisa
                $jumlah -= intdiv($jumlah, $nilai) * $nilai;
            }
        }
    
        return $hasil;
    }
    
    // Contoh penggunaan
    $jumlahUang = 1750;
    $jenisKoin = cariJenisKoin($jumlahUang);
    
    // Menampilkan hasil
    echo "Jenis koin untuk uang Rp. $jumlahUang:";
    foreach ($jenisKoin as $nilai) {
        echo "<ul><li> Rp. $nilai </li> </ul>";
    }
?>
