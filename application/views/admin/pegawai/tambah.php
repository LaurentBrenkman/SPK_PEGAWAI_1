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
        <label class="col-md-2 col-form-label">NIP</label>
        <div class="col-md-5">
            <input type="text" name="nama" class="form-control" placeholder="NIP" value="<?php echo set_value('nama') ?>" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 col-form-label">NAMA</label>
        <div class="col-md-5">
            <input type="text" name="nama" class="form-control" placeholder="NAMA PEGAWAI" value="<?php echo set_value('nama') ?>" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 col-form-label">ALAMAT</label>
        <div class="col-md-5">
            <input type="text" name="nama" class="form-control" placeholder="ALAMAT PEGAWAI" value="<?php echo set_value('nama') ?>" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 col-form-label">JENIS KELAMIN</label>
            <div class="col-md-5">
                <select class="form-control select2">
                <option selected="selected">PILIH JENIS KELAMIN</option>
                <option>LAKI - LAKI</option>
                <option>PEREMPUAN</option>
                </select>
            </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 col-form-label">TANGGAL LAHIR</label>
            <div class="col-md-5">
                <input type="text" name="nama" class="form-control" placeholder="TMK" value="<?php echo set_value('nama') ?>" required>
            </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 col-form-label">TMK</label>
        <div class="col-md-5">
            <input type="text" name="nama" class="form-control" placeholder="TMK" value="<?php echo set_value('nama') ?>" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 col-form-label">STATUS PEGAWAI</label>
            <div class="col-md-5">
                <select class="form-control select2">
                <option selected="selected">PILIH STATUS PEGAWAI</option>
                <option>TETAP</option>
                <option>KONTRAK</option>
                </select>
            </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 col-form-label">PENDIDIKAN</label>
        <div class="col-md-5">
            <input type="text" name="nama" class="form-control" placeholder="JENIS PENDIDIKAN" value="<?php echo set_value('nama') ?>" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 col-form-label">GOLONGAN</label>
        <div class="col-md-5">
            <input type="text" name="nama" class="form-control" placeholder="GOLONGAN PEGAWAI" value="<?php echo set_value('nama') ?>" required>
        </div>
    </div>
    <?php echo form_close(); ?>
    </div>
</div>
<!-- /.card -->

</section>
<!-- /.content -->
