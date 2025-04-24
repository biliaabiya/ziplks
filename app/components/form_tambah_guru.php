<div class="container mt-2">
    <div class="alert alert-success text-center">
        Tambah Data Guru
    </div>
    <!--  -->
    <form action="/lkscloudbabel2024/services/save_guru.php" method="POST">
    <div class="card">
        <div class="card-body">
            <div class="form-group mb-2">
                <label for="">Nama Pengguna</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="">
            </div>
            <div class="form-group mb-2">
                <label for="">NIP</label>
                <input type="text" class="form-control" name="nip" id="nip" placeholder="">
            </div>
            <div class="form-group mb-2">
                <label for="">Mata Pelajaran</label>
                <input type="text" class="form-control" name="mata_pelajaran" id="mata_pelajaran" placeholder="">
            </div>
            <div class="form-group mb-2">
                <label for="">Nama Sekolah</label>
                <input type="text" class="form-control" name="sekolah_id" id="sekolah_id" placeholder="">
            </div>
        </div>
        <div class="card-footer d-flex justify-content-end">
            <button class="btn btn-primary" type="submit">SIMPAN PENGGUNA</button>
        </div>
    </div>
    </form>
</div>