<?php include_once $_SERVER['DOCUMENT_ROOT'].'/lkscloudbabel2024/services/connection.php'; ?>
<div class="container mt-2">
<?php if(isset($_GET['id'])): ?>
    <?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = $conn->query($sql);
    ?>
    <?php if ($result->num_rows == 1) :?>
    <?php $data = $result->fetch_assoc(); ?>
    
    <div class="alert alert-info text-center">
        Update Data User
    </div>

    <form action="/lkscloudbabel2024/services/update_user.php?id=<?= $_GET['id'] ?>" method="POST">
    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
    <div class="card">
        <div class="card-body">
            <div class="form-group mb-2">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="" required>
            </div>
            <div class="form-group mb-2">
                <label for="nama">Nama Pengguna</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="" required>
            </div>
            <div class="form-group mb-2">
                <label for="sekolah_id">Asal Sekolah</label>
                <input name="sekolah_id" id="sekolah_id" class="form-control" placeholder="">
            </div>
            <div class="form-group mb-2">
                <label for="password">Password (Kosongkan jika tidak diubah)</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="">
            </div>
            <div class="form-group mb-2">
                <label for="role">Role Akses</label>
                <select name="role" id="role" class="form-control">
                    <option value="">-- Pilih Jenis Akses --</option>
                    <option value="ADMIN" <?= $data['role']=='ADMIN' ? 'selected' : '' ?>>ADMINISTRATOR</option>
                    <option value="STAFT TU" <?= $data['role']=='STAFT TU' ? 'selected' : '' ?>>STAFT TU</option>
                    <option value="GURU" <?= $data['role']=='GURU' ? 'selected' : '' ?>>GURU</option>
                </select>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-end">
            <button class="btn btn-primary" type="submit">SIMPAN PERUBAHAN</button>
        </div>
    </div>
    </form>
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
