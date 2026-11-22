<?php
require_once __DIR__ . '/../data/data.php';

// Pilihan untuk dropdown
$daftar_jenis    = ['pemasukan', 'pengeluaran'];
$daftar_kategori = ['Uang Saku', 'Makanan', 'Transportasi', 'Hiburan', 'Lainnya'];

// ============================================================
// TODO 7.3: Ambil data lama berdasarkan id di URL
//   a) ambil id dari $_GET['id'] sebagai angka:
//        (int) ($_GET['id'] ?? -1)
//   b) ambil transaksinya dengan ambilTransaksiById($id)
//      simpan di variabel $transaksi
//   c) kalau $transaksi === null (id tidak ada):
//        header('Location: /index.php');
//        exit;
// ============================================================

// (tulis kodemu di sini)


// Nilai awal form = data lama
$tanggal    = $transaksi->tanggal;
$jenis      = $transaksi->jenis;
$kategori   = $transaksi->kategori;
$keterangan = $transaksi->keterangan;
$jumlah     = (string) $transaksi->jumlah;
$sukses     = false;

// Hanya diproses kalau form dikirim (method POST)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // ============================================================
    // TODO 7.4: Ambil data dari $_POST
    // Isi: $tanggal, $jenis, $kategori, $keterangan, $jumlah
    //   - pakai operator ?? '' agar tidak error kalau key tidak ada
    //   - pakai trim() untuk $tanggal, $keterangan, $jumlah
    // (sama seperti saat membuat tambah transaksi)
    // ============================================================

    // (tulis kodemu di sini)


    // ============================================================
    // TODO 7.5: Simpan perubahan
    //   a) buat objek baru:
    //        new Transaksi($tanggal, $jenis, $kategori, $keterangan, (int) $jumlah)
    //      simpan di variabel $baru
    //   b) simpan dengan ubahTransaksi($id, $baru)
    //   c) $sukses = true
    // ============================================================

    // (tulis kodemu di sini)

}