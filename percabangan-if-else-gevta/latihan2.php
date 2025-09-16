<?php
$umur = 45;

if ($umur >= 0 && $umur <= 12) {
    echo "Anak";
} elseif ($umur >= 13 && $umur <= 17) {
    echo "Remaja";
} elseif ($umur >= 18 && $umur <= 59) {
    echo "Dewasa";
} else {
    echo "Lansia";
}
?>