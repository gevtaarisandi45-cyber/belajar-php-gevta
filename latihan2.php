<?php
function cekBilangan($angka) {
    if ($angka % 2 == 0) {
    return "$angka adalah bilangan genap";
} else {
    return "$angka adalah bilangan ganjil";
}
}
// contoh pemanggilan fungsi
echo cekBilangan (10); //10 adalah bilangan genap

echo cekBilangan(7);//7 adalah bilangan ganjil