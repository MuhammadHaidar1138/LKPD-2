<?php

function setArray(){
    $jurusan = ["PPLG", "HTL", "KLN", "PMN", "pplg", "htl"];
    $hasil = array_unique(array_map("strtoupper" ,$jurusan));   //unique berfungsi untuk menghapus data yang duplikat
                                                                //map berfungsi untuk menjalankan aksi
                                                                //strtoupper berfungsi untuk mengubah semua huruf menjadi kapital
    return $hasil;
};

print_r(setArray());

?>