<div class="container mt-2">
    <div class="alert alert-success text-center">
        Tambah Data Sekolah
    </div>
    <!--  -->
    <form action="/lkscloudbabel2024/services/save_sekolah.php" method="POST">
    <div class="card">
        <div class="card-body">
            <div class="form-group mb-2">
                <label for="">Nama Sekolah</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="">
            </div>
            <div class="form-group mb-2">
                <label for="">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="">
            </div>
            <div class="form-group mb-2">
                <label for="">Telepon</label>
                <input type="text" class="form-control" name="telepon" id="telepon" placeholder="">
            </div>
            <div class="form-group mb-2">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="">
            </div>
        </div>
        <div class="card-footer d-flex justify-content-end">
            <button class="btn btn-primary" type="submit">SIMPAN PENGGUNA</button>
        </div>
    </div>
    </form>
</div>