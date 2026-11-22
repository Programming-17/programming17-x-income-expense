<?php
require_once 'data/proses_filter.php';

$judul = 'Beranda';
require_once 'includes/header.php';
?>

<h1>Beranda</h1>

<div class="ringkasan">
    <div>
        <small>Pemasukan</small><br>
        <strong class="masuk"><?= rupiah($total_masuk) ?></strong>
    </div>
    <div>
        <small>Pengeluaran</small><br>
        <strong class="keluar"><?= rupiah($total_keluar) ?></strong>
    </div>
    <div>
        <small>Saldo</small><br>
        <strong><?= rupiah($saldo) ?></strong>
    </div>
</div>

<h2>Daftar Transaksi</h2>

<form action="" method="GET">
    <label for="jenis">Filter jenis:</label>
    <select id="jenis" name="jenis">
        <option value="semua" <?= $filter === 'semua' ? 'selected' : '' ?>>Semua</option>
        <option value="pemasukan" <?= $filter === 'pemasukan' ? 'selected' : '' ?>>Pemasukan</option>
        <option value="pengeluaran" <?= $filter === 'pengeluaran' ? 'selected' : '' ?>>Pengeluaran</option>
    </select>
    <button type="submit">Terapkan</button>
</form>

<?php if (count($tampil) === 0): ?>
    <p>Tidak ada transaksi. <a href="/tambah.php">Tambah sekarang</a></p>
<?php else: ?>
    <table>
        <tr>
            <th>Tanggal</th>
            <th>Jenis</th>
            <th>Kategori</th>
            <th>Keterangan</th>
            <th>Jumlah</th>
        </tr>
        <?php foreach ($tampil as $t): ?>
            <tr>
                <td><?= htmlspecialchars($t->tanggal) ?></td>
                <td><?= htmlspecialchars($t->jenis) ?></td>
                <td><?= htmlspecialchars($t->kategori) ?></td>
                <td><?= htmlspecialchars($t->keterangan) ?></td>
                <td class="<?= $t->jenis === 'pemasukan' ? 'masuk' : 'keluar' ?>">
                    <?= $t->jumlahRupiah() ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>

<?php require_once 'includes/footer.php'; ?>