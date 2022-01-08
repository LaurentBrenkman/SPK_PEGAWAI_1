<!-- Main content -->
<section class="content">

<!-- Default box -->
<div class="card">
  <div class="card-body">
    <?php
    // Notifikasi Eror
    echo validation_errors('<div class="alert alert-warning">','</div>');

    // form opening
    echo form_open(base_url('admin/kriteria/tambah'),' class="form-horizontal"');
    ?>
    <div class="form-group">
        <label class="col-md-2 col-form-label">NAMA KRITERIA</label>
        <div class="col-md-5">
            <input type="text" name="nama_kriteria" class="form-control" placeholder="Nama Kriteria" value="<?php echo set_value('nama') ?>" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 col-form-label">KETERANGAN</label>
        <div class="col-md-5">
            <input type="text" name="keterangan" class="form-control" placeholder="Keterangan" value="<?php echo set_value('nama') ?>" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 col-form-label"></label>
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