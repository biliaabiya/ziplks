<?php include_once $_SERVER['DOCUMENT_ROOT'].'/lkscloudbabel2024/services/connection.php'; ?>
<?php
$sql = "SELECT staft.*, sekolah.nama as nama_sekolah FROM staft LEFT JOIN sekolah ON staft.sekolah_id = sekolah.id";
$result = $conn->query($sql);
?>
<div class="container mt-2">
    <div class="row align-items-center ">
        <div class="col-md-10">
        <div class="alert alert-success px-2">
            Tabel Manajemen Data Staft
        </div>
        </div>
        <div class="col-md-2">
            <a class="btn btn-primary" href="tambah_staft.php">Tambah Data</a>
        </div>
    </div>
</div>

<div class="container mt-3">
    <table class="table table-bordered table-stripped" width="100%">
        <thead>
            <tr align="center">
                <th>#No</th>
                <th>ID Sekolah</th>
                <th>Nama</th>
                <th>NIP</th>
                <th>Bagian</th>
                <th>Telepon</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($result) && $result->num_rows > 0) : ?>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td align="center"><?= $row['id'] ?></td>
                        <td align="center"><?= $row['sekolah_id'] ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['nip'] ?></td>
                        <td><?= $row['bagian'] ?></td>
                        <td><?= $row['telepon'] ?></td>
                        <td align="center">
                            <a href="edit_staft.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                            <button type="button" onclick="hapus_staft(<?= $row['id'] ?>)"  class="btn btn-sm btn-danger">Hapus</button>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php $conn->close(); ?>
        </tbody>
    </table>
</div>