<?php
require_once __DIR__ . '/../data/data.php';

$semua = ambilSemuaTransaksi();

// Hitung total pemasukan dan pengeluaran
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

// Filter berdasarkan jenis (GET)
$filter = $_GET['jenis'] ?? 'semua';

// ============================================================
// TODO 5.1: Simpan id (key) asli saat memfilter
//   a) ubah foreach agar mengambil key:  foreach ($semua as $id => $t)
//   b) saat memasukkan ke $tampil, pakai id sebagai key:
//        $tampil[$id] = $t;
//      (bukan $tampil[] = $t;)
// ============================================================
$tampil = [];
foreach ($semua as $t) {
    if ($filter === 'semua' || $t->jenis === $filter) {
        $tampil[] = $t;
    }
}