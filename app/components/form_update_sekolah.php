<?php include_once $_SERVER['DOCUMENT_ROOT'].'/lkscloudbabel2024/services/connection.php'; ?>
<div class="container mt-2">
<?php if(isset($_GET['id'])): ?>
    <?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM sekolah WHERE id = $id";
    $result = $conn->query($sql);        
    ?>
    <?php if ($result->num_rows == 1) :?>
    <?php $data = $result->fetch_all(MYSQLI_ASSOC)[0];?>
    <?php $conn->close(); ?>
    <div class="alert alert-info text-center">
        Update Data Sekolah
    </div>
    <!--  -->
    <form action="/lkscloudbabel2024/services/update_sekolah.php?id=<?= $_GET['id'] ?>" method="POST">
    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
    <div class="card">
        <div class="card-body">
            <div class="form-group mb-2">
                <label for="">Nama Sekolah</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="" required>
            </div>
            <div class="form-group mb-2">
                <label for="">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="" required>
            </div>
            <div class="form-group mb-2">
                <label for="">Telepon</label>
                <input type="text" class="form-control" name="telepon" id="telepon" placeholder="" required>
            </div>
            <div class="form-group mb-2">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="" required>
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