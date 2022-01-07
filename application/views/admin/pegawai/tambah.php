<!-- Main content -->
<section class="content">

<!-- Default box -->
<div class="card">
  <div class="card-body">
    <?php
    // Notifikasi Eror
    echo validation_errors('<div class="alert alert-warning">','</div>');

    // form opening
    echo form_open(base_url('admin/user/tambah'),' class="form-horizontal"');
    ?>
    <div class="form-group">
        <label class="col-md-2 col-form-label">Nip</label>
        <div class="col-md-5">
            <input type="text" name="nip" class="form-control" placeholder="Nip" value="<?php echo set_value('nama') ?>" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 col-form-label">Nama</label>
        <div class="col-md-5">
            <input type="text" name="nama" class="form-control" placeholder="Nama Pegawai" value="<?php echo set_value('nama') ?>" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 col-form-label">Alamat</label>
        <div class="col-md-5">
            <input type="text" name="alamat" class="form-control" placeholder="Alamat Pegawai" value="<?php echo set_value('nama') ?>" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 col-form-label">Jenis Kelamin</label>
            <div class="col-md-5">
                <select class="form-control select2" name="gender">
                <option selected="selected">- PILIH -</option>
                <option>Laki - Laki</option>
                <option>Perempuan</option>
                </select>
            </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 col-form-label">Tanggal lahir</label>
            <div class="col-md-5">
                <input type="text" name="ttl" class="form-control" placeholder="Tanggal Lahir" value="<?php echo set_value('nama') ?>" required>
            </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 col-form-label">Tmk</label>
        <div class="col-md-5">
            <input type="text" name="tmk" class="form-control" placeholder="Masukkan Tmk" value="<?php echo set_value('nama') ?>" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 col-form-label">Status Pegawai</label>
            <div class="col-md-5">
                <select class="form-control select2" name="status_pegawai">
                <option selected="selected">- Pilih -</option>
                <option>Tetap</option>
                <option>Kontrak</option>
                </select>
            </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 col-form-label">Pendidikan</label>
        <div class="col-md-5">
            <input type="text" name="pendidikan" class="form-control" placeholder="Jenis Pendidikan" value="<?php echo set_value('nama') ?>" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 col-form-label">Golongan</label>
        <div class="col-md-5">
            <input type="text" name="golongan" class="form-control" placeholder="Golongan Pegawai" value="<?php echo set_value('nama') ?>" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 col-form-label">Golongan</label>
        <div class="col-md-5">
            <button class="btn btn-success btn-md" name="submit" type="submit">
                <i class="fa fa-save"></i> Simpan
            </button>
            <button class="btn btn-info btn-md" name="reset" type="reset">
                <i class="fa fa-times"></i> Reset
            </button>
        </div>
    </div>
    <?php echo form_close(); ?>
    </div>
</div>
<!-- /.card -->

</section>
<!-- /.content -->
