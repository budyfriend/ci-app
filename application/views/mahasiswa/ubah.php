<div class="container">
  <div class="row mt-3">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          Form Ubah Data Mahasiswa
        </div>
        <div class="card-body">
          <form action="" method="post">
            <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" name="nama" class="form-control" id="nama" value="<?= $mahasiswa['nama'] ?>">
              <small class="form-text text-danger"><?= form_error('nama'); ?></small>
            </div>
            <div class="form-group">
              <label for="npm">NPM</label>
              <input type="text" name="npm" class="form-control" id="npm" value="<?= $mahasiswa['npm'] ?>">
              <small class="form-text text-danger"><?= form_error('npm'); ?></small>
            </div>
            <div class="form-group">
              <label for="email">email</label>
              <input type="text" name="email" class="form-control" id="email" value="<?= $mahasiswa['email'] ?>">
              <small class="form-text text-danger"><?= form_error('email'); ?></small>
            </div>
            <div class="form-group">
              <label for="jurusan">Jurusan</label>
              <select multiple class="form-control" name="jurusan" id="jurusan">
                <?php foreach ($jurusan as $j) : ?>
                  <?php if ($j == $mahasiswa['jurusan']) : ?>
                    <option value="<?= $j; ?>" selected><?= $j; ?></option>
                  <?php else : ?>
                    <option value="<?= $j; ?>"><?= $j; ?></option>
                  <?php endif; ?>
                <?php endforeach; ?>
              </select>
            </div>
            <button type="submit" class="btn btn-primary float-right" name="ubah" id="ubah">Ubah Data</button>
          </form>
        </div>
      </div>


    </div>
  </div>
</div>