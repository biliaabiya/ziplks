<div class="container mt-2">
    <div class="alert alert-success text-center">
        Tambah Data Staf
    </div>
    <!--  -->
    <form action="/lkscloudbabel2024/services/save_sekolah.php" method="POST">
    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
    <div class="card">
        <div class="card-body">
            <div class="form-group mb-2">
                <label for="">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="">
            </div>
            <div class="form-group mb-2">
                <label for="">ID Sekolah</label>
                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="">
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
            <button class="btn btn-primary" type="submit">SIMPAN PENGGUNA</button>
        </div>
    </div>
    </form>
</div>