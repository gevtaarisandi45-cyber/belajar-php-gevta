<?php
$siswa = [
    'nama' => 'Gevta',
    'umur' => 16,
    'nis' => '12345',
    'kelas' => 'XI RPL1',
    'aktif' => true
];

unset($siswa['umur']); // menghapus umur
$siswa['alamat'] = 'Tulakan bubakan';
var_dump($siswa);