<?php
require_once __DIR__ . '/../classes/Transaksi.php';

define('FILE_DATA', __DIR__ . '/../db/transaksi.json');

// Mengambil semua transaksi dari file JSON
// Hasil: array berisi objek Transaksi
function ambilSemuaTransaksi(): array
{
    $isi  = file_get_contents(FILE_DATA);
    $data = json_decode($isi, true) ?? [];

    $hasil = [];
    foreach ($data as $row) {
        $hasil[] = new Transaksi(
            $row['tanggal'],
            $row['jenis'],
            $row['kategori'],
            $row['keterangan'],
            $row['jumlah']
        );
    }
    return $hasil;
}

// Menyimpan SEMUA transaksi sekaligus (menimpa isi file)
function simpanSemuaTransaksi(array $semua): void
{
    $data = [];
    foreach ($semua as $t) {
        $data[] = $t->toArray();
    }

    file_put_contents(FILE_DATA, json_encode($data, JSON_PRETTY_PRINT));
}

// Menyimpan 1 transaksi baru
function simpanTransaksi(Transaksi $transaksi): void
{
    $semua   = ambilSemuaTransaksi();
    $semua[] = $transaksi;

    simpanSemuaTransaksi($semua);
}

// Mengubah angka jadi format Rupiah
function rupiah(int $angka): string
{
    return 'Rp ' . number_format($angka, 0, ',', '.');
}