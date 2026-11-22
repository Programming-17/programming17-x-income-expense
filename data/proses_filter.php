<?php
require_once __DIR__ . '/../data/data.php';

$semua = ambilSemuaTransaksi();

// TODO 4.1: Hitung total pemasukan dan pengeluaran
$total_masuk  = 0;
$total_keluar = 0;

foreach ($semua as $t) {
    if ($t->jenis === 'pemasukan') {
        $total_masuk += $t->jumlah;
    } else {
        $total_keluar += $t->jumlah;
    }
}

$saldo = $total_masuk - $total_keluar;

// TODO 4.2: Filter berdasarkan jenis (GET)
$filter = $_GET['jenis'] ?? 'semua';

$tampil = [];
foreach ($semua as $t) {
    if ($filter === 'semua' || $t->jenis === $filter) {
        $tampil[] = $t;
    }
}