<?php
$belanja = 200000;

if ($belanja >= 200000) {
    echo "Diskon 20%";
} elseif ($belanja >= 100000) {
    echo "Diskon 10%";
} else {
    echo "Tidak ada diskon";
}
?>