<?php
$HariBelanja = Date('l');
// Date(l) l kecil, digunakan untuk menampilkan nama hari dalam bentuk huruf
$TotalPembelian = 150000;
$DiskonHari = 0.05;
$DiskonBeli = 0.07;
$TotalDiskon = 0;

// Menghitung total diskon pembelian lebih dari 100.000
if ($TotalPembelian > 100000) {
    $TotalDiskon += $DiskonBeli; //+= pengisian dan penambahan
}

// Operator penugasan
// Menghitung total diskon hari
if ($HariBelanja == 'Tuesday') {
    $TotalDiskon += $DiskonHari;
}


// Untuk menghitung total pembayaran
$Bayar = $TotalPembelian - ($TotalPembelian * $TotalDiskon);


// Decimal, DecimalPoint, Separator
// Mencetak hasil
echo "Hari ini hari <b>" . $HariBelanja . "</b>";
echo "<br>";
echo "Total pembelanjaan :<b>Rp. " . number_format($TotalPembelian, 0, ".", ".") . "</b>";
echo "<br>";
echo "Total yang harus dibayar :<b>Rp. " . number_format($Bayar, 0, ".", ".") . "</b>"; 

?>