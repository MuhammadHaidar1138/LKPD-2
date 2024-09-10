<?php
    //array multi dimensi
    $barang = [
        [
            'nama_barang' => 'Pasta Gigi',
            'harga_barang' => 18000,
            'jumlah_beli' => 1,
        ],
        [
            'nama_barang' => 'Sabun Mandi',
            'harga_barang' => 5000,
            'jumlah_beli' => 3,
        ],
        [
            'nama_barang' => 'Aloe Vera Sheet Mask',
            'harga_barang' => 15000,
            'jumlah_beli' => 4,
        ],
    ];


    $total = 0;
    echo "Daftar Belanjaan : ";
    echo "<ol>";
    foreach ($barang as $belanja) {
        $totalHarga = $belanja['harga_barang'] * $belanja['jumlah_beli'];
        $total = $total + ($belanja['harga_barang'] * $belanja['jumlah_beli']);

        echo "<li>" . $belanja['nama_barang'] . "(" . $belanja['jumlah_beli'] . ") : Rp." . number_format($totalHarga, 0, ".", ".") . "</li>";
    };
    echo "</ol>";
    echo "<br>";
    echo "Total yang harus dibayarkan adalah Rp. " . number_format($total, 0, ',','.');
?>