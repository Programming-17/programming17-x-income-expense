<?php
require_once __DIR__ . '/../data/data.php';

// Pilihan untuk dropdown
$daftar_jenis    = ['pemasukan', 'pengeluaran'];
$daftar_kategori = ['Uang Saku', 'Makanan', 'Transportasi', 'Hiburan', 'Lainnya'];

// Nilai awal form
$tanggal    = date('Y-m-d');
$jenis      = 'pengeluaran';
$kategori   = 'Uang Saku';
$keterangan = '';
$jumlah     = '';
$sukses     = false;

// Hanya diproses kalau form dikirim (method POST)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // TODO 3.1: Ambil data dari $_POST
    $tanggal    = trim($_POST['tanggal'] ?? '');
    $jenis      = $_POST['jenis'] ?? '';
    $kategori   = $_POST['kategori'] ?? '';
    $keterangan = trim($_POST['keterangan'] ?? '');
    $jumlah     = trim($_POST['jumlah'] ?? '');

    // TODO 3.2: Simpan data
    $transaksi = new Transaksi($tanggal, $jenis, $kategori, $keterangan, (int) $jumlah);
    simpanTransaksi($transaksi);
    $sukses = true;

    $keterangan = '';
    $jumlah = '';
}