<?php include_once $_SERVER['DOCUMENT_ROOT'].'/lkscloudbabel2024/services/connection.php'; ?>
<div class="container mt-2">
<?php if(isset($_GET['id'])): ?>
    <?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM staft WHERE id = $id";
    $result = $conn->query($sql);        
    ?>
    <?php if ($result->num_rows == 1) :?>
    <?php $data = $result->fetch_all(MYSQLI_ASSOC)[0];?>
    <?php $conn->close(); ?>
    <div class="alert alert-info text-center">
        Update Data Staft
    </div>
    <!--  -->
    <form action="/lkscloudbabel2024/services/update_staft.php?id=<?= $_GET['id'] ?>" method="POST">
    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
    <div class="card">
        <div class="card-body">
        <div class="form-group mb-2">
                <label for="">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="">
            </div>
            <div class="form-group mb-2">
                <label for="">ID Sekolah</label>
                <input type="text" class="form-control" name="sekolah_id" id="sekolah_id" placeholder="">
            </div>
            <div class="form-group mb-2">
                <label for="">NIP</label>
                <input type="text" class="form-control" name="nip" id="nip" placeholder="">
            </div>
            <div class="form-group mb-2">
                <label for="">Bagian</label>
                <select name="role" id="role" class="form-control">
                    <option value="">-- Pilih Jenis Bagian --</option>
                    <option value="Kepala Sekolah" <?= $data['bagian']=='Kepala Sekolah' ? 'selected' : '' ?>>Kepala Sekolah</option>
                    <option value="Wakil Kepala Sekolah" <?= $data['bagian']=='Wakil Kepala Sekolah' ? 'selected' : '' ?>>Wakil Kepala Sekolah</option>
                    <option value="Bendahara Sekolah" <?= $data['bagian']=='Bendahara Sekolah' ? 'selected' : '' ?>>Bendahara Sekolah</option>
                    <option value="Sekretaris Sekolah" <?= $data['bagian']=='Sekretaris Sekolah' ? 'selected' : '' ?>>Sekretaris Sekolah</option>
                    <option value="Guru" <?= $data['bagian']=='Guru' ? 'selected' : '' ?>>Guru</option>
                    <option value="Staft TU" <?= $data['bagian']=='Staft TU' ? 'selected' : '' ?>>Staft TU</option>
                    <option value="Security" <?= $data['bagian']=='Security' ? 'selected' : '' ?>>Security</option>
                    <option value="Murid" <?= $data['bagian']=='Murid' ? 'selected' : '' ?>>Murid</option>
                </select>
            </div>
            <div class="form-group mb-2">
                <label for="">Telepon</label>
                <input type="text" class="form-control" name="telepon" id="telepon" placeholder="">
            </div>
        </div>
        <div class="card-footer d-flex justify-content-end">
            <button class="btn btn-primary" type="submit">SIMPAN PERUBAHAN</button>
        </div>
    </div>
    </form>
    <!--  -->
    <?php else: ?>
        <div class="alert alert-danger">
            <h3 class="text-center">Data Tidak Ditemukan Database !!!</h3>
        </div>
    <?php endif; ?>
<?php else: ?>
    <div class="alert alert-danger">
        <h3 class="text-center">Parameter Data Tidak Ditemukan !!!</h3>
    </div>
<?php endif; ?>
</div>