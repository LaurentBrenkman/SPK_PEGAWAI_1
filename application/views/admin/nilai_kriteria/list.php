<!-- Main content -->
<section class="content">

<!-- Default box -->
<div class="card">
  <div class="card-body">
    <p>
        <a href="<?php echo base_url('admin/kriteria/tambah_nilai') ?>" class="btn btn-success btn-lg">
        <i class="fa fa-plus"></i> Tambah Baru
        </a>
    </p>

<?php 
//Notification
if($this->session->flashdata('success')){
    echo '<p class="alert alert-success">';
    echo $this->session->flashdata('success');
    echo '</div>';
}
?>
<table class="table table-bordered" id="example1">
    <thead>
        <tr>
            <th>NO</th>
            <th>NAMA KRITERIA</th>
            <th>KETERANGAN</th>
            <th>NILAI</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; foreach($nilai_kriteria as $nilai_kriteria) { ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $nilai_kriteria->nama_kriteria ?></td>
                <td><?php echo $nilai_kriteria->keterangan ?></td>
                <td><?php echo $nilai_kriteria->nilai ?></td>
                <td>
                    <a href="<?php echo base_url('admin/kriteria/edit_nilai/' . $nilai_kriteria->id_nilai_kriteria) ?>" 
                    class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>

                    <a href="<?php echo base_url('admin/kriteria/del_nilai/' . $nilai_kriteria->id_nilai_kriteria) ?>" 
                    class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you
                    want to delete ?')"><i class="fa fa-trash-o"></i> Hapus</a>
                </td>
            </tr>
            <?php } ?>
    </tbody>
</table>
</div>
</div>
<!-- /.card -->

</section>
<!-- /.content -->