<?php include_once $_SERVER['DOCUMENT_ROOT'].'/lkscloudbabel2024/services/connection.php'; ?>
<?php
$sql = "SELECT * FROM guru";
$result = $conn->query($sql);
?>
<div class="container mt-2">
    <div class="row align-items-center ">
        <div class="col-md-10">
        <div class="alert alert-success px-2">
            Tabel Manajemen Data Guru
        </div>
        </div>
        <div class="col-md-2">
            <a class="btn btn-primary" href="tambah_guru.php">Tambah Data</a>
        </div>
    </div>
</div>

<div class="container mt-3">
    <table class="table table-bordered table-striped" width="100%">
        <thead>
            <tr align="center">
                <th>#No</th>
                <th>Nama Guru</th>
                <th>NIP</th>
                <th>Mata Pelajaran</th>
                <th>Nama Sekolah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($result) && $result->num_rows > 0): ?>
                <?php $no = 1; while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td align="center"><?= $no++ ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['nip'] ?></td>
                        <td><?= $row['mata_pelajaran'] ?></td>
                        <td><?= ($row['sekolah_id'] ?? 0) == 0 || is_null($row['sekolah_id'] ?? null) ? '-' : ($row['nama_sekolah'] ?? '-') ?></td>
                        <td align="center">
                            <a href="edit_guru.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                            <button onclick="hapus_guru(<?= $row['id'] ?>)" class="btn btn-sm btn-danger">Hapus</button>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr><td colspan="6" align="center">Tidak ada data guru.</td></tr>
            <?php endif; ?>
            <?php $conn->close(); ?>
        </tbody>
    </table>
</div>