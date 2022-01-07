<!-- Main content -->
<section class="content">

<!-- Default box -->
<div class="card">
  <div class="card-body">
  <p>
    <a href="<?php echo base_url('admin/user/tambah') ?>" class="btn btn-success btn-lg">
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
            <th>NIP</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>GENDER</th>
            <th>TTL</th>
            <th>TMK</th>
            <th>STATUS_PEGAWAI</th>
            <th>PENDIDIKAN</th>
            <th>GOLONGAN</th>
            <th>ACTION</th>

        </tr>
    <thead>
    <tbody>
        <?php $no=1; foreach ($pegawai as $pegawai) { ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $pegawai->nip ?></td>
            <td><?php echo $pegawai->nama ?></td>
            <td><?php echo $pegawai->alamat ?></td>
            <td><?php echo $pegawai->gender ?></td>
            <td><?php echo $pegawai->ttl ?></td>
            <td><?php echo $pegawai->tmk ?></td>
            <td><?php echo $pegawai->status_pegawai ?></td>
            <td><?php echo $pegawai->pendidikan ?></td>
            <td><?php echo $pegawai->golongan ?></td>
            <td>
                <a href="<?php echo base_url('admin/user/edit/' . $pegawai->nip) ?>" 
                class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>

                <a href="<?php echo base_url('admin/user/delete/' . $pegawai->nip) ?>" 
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
