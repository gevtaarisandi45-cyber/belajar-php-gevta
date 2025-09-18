<?php
// fungsi untuk mencari nilai terbesar dari 3 bilangan
function nilaiTerbesar ($a, $b, $c) {
    $terbesar = $a; //anggap sementara $a yang terbesar
    if ($b > $terbesar) {
        $terbesar = $b;
    }
    if ($c > $terbesar) {
        $terbesar = $c;
    }
    return $terbesar;
}
// contoh pemanggilan fungsi
echo "Nilai terbesar dari 12, 25, 7 adalah:".
nilaiTerbesar(12, 25, 7);