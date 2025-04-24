<div class="container mt-2">
    <div class="alert alert-success text-center">
        Tambah Data User
    </div>
    <!-- Form Start -->
    <form action="/lkscloudbabel2024/services/save_user.php" method="POST">
        <div class="card">
            <div class="card-body">
                <div class="form-group mb-2">
                    <label for="nama">Nama Pengguna</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="">
                </div>
                <div class="form-group mb-2">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="">
                </div>
                <div class="form-group mb-2">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="">
                </div>
                <div class="form-group mb-2">
                    <label for="role">Role Akses</label>
                    <select name="role" id="role" class="form-control">
                        <option value="">-- Pilih Jenis Akses --</option>
                        <option value="ADMIN">ADMINISTRATOR</option>
                        <option value="STAFT TU">STAFT TU</option>
                        <option value="GURU">GURU</option>
                    </select>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-end">
                <button class="btn btn-primary" type="submit">SIMPAN PENGGUNA</button>
            </div>
        </div>
    </form>
</div>
