<?php
// fungsi untuk menampilkan deret bilangan dari 1 sampai n
function deretBilangan($n){
    for($i = 1; $i <= $n; $i++){
        echo $i . " ";
    }
}
// contoh pemanggilan fungsii
echo "Deret bilangan 1 sampai 10: ";
deretBilangan(10);