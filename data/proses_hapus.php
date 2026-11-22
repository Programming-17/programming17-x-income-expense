<?php
require_once __DIR__ . '/../data/data.php';

// Hanya diproses kalau dikirim lewat POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // ============================================================
    // TODO 6.2:
    //   a) ambil id dari $_POST['id'] sebagai angka:
    //        (int) ($_POST['id'] ?? -1)
    //   b) panggil hapusTransaksi($id)
    // ============================================================

    // (tulis kodemu di sini)

}

// Kembali ke halaman utama
header('Location: /index.php');
exit;