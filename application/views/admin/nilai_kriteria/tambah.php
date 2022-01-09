<!-- Main content -->
<section class="content">

<!-- Default box -->
<div class="card">
  <div class="card-body">
    <?php
    // Notifikasi Eror
    echo validation_errors('<div class="alert alert-warning">','</div>');

    // form opening
    echo form_open(base_url('admin/kriteria/tambah_nilai'),' class="form-horizontal"');
    ?>
    <div class="form-group">
    <label class="col-md-4 col-form-label">Kriteria</label>
            <div class="col-md-5">
                <select class="form-control select2" name="id_kriteria">
                    <?php foreach ($data_kriteria as $key ){?>
                <option value="<?php echo $key->id_kriteria?>"><?php echo $key->nama_kriteria?></option>
                <?php }?>
                </select>
            </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 col-form-label">KETERANGAN</label>
        <div class="col-md-5">
            <input type="text" name="keterangan" class="form-control" placeholder="Keterangan" value="<?php echo set_value('nama') ?>" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 col-form-label">NILAI</label>
        <div class="col-md-5">
            <input type="text" name="nilai" class="form-control" placeholder="Nilai" value="<?php echo set_value('nama') ?>" required>
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