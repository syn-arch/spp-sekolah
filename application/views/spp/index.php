<div class="row">
  <div class="col-md-12">
    <div class="box box-info">
      <div class="box-header with-border">
        <h4 class="box-title">Transaksi Pembayaran SPP</h4>
        <div class="pull-right">
          <a href="<?php echo base_url('spp/tambah') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
        </div>
      </div>
      <div class="box-body">

        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Jurusan</th>
                <th>Tahun</th>
                <th>Nominal</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1; foreach ($spp as $j): ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $j['nama_jurusan'] ?></td>
                <td><?php echo $j['tahun_pendaftaran'] ?></td>
                <td><?php echo $j['nominal'] ?></td>
                <td>
                  <a href="<?php echo base_url('spp/ubah/' . $j['id_spp']) ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                  <a href="<?php echo base_url('spp/hapus/' . $j['id_spp'] ) ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>

      <div class="box-footer">
      </div>
    </div>
  </div>
</div>