<?php if(!isset($data)): ?>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-info">
        <div class="box-header with-border">
          <h4 class="box-title">History Pembayaran SPP</h4>
        </div>
        <div class="box-body">
          <form>
            <div class="form-group">
              <label for="tahun">Masukan Tahun </label>
              <input type="text" class="form-control" name="tahun" placeholder="Masukan Tahun">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </div>
          </form>
        </div>
        <div class="box-footer">
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-info">
        <div class="box-header with-border">
          <h4 class="box-title">Transaksi Terakhir</h4>
        </div>
        <div class="box-body">
          <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal Bayar</th>
                  <th>Nama Siswa</th>
                  <th>Bulan Dibayar</th>
                  <th>Tahun Dibayar</th>
                  <th>Jumlah Bayar</th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach ($transaksi as $row): ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $row['tgl_bayar'] ?></td>
                  <td><?php echo $row['nama_siswa'] ?></td>
                  <td><?php echo $row['bulan_dibayar'] ?></td>
                  <td><?php echo $row['tahun_dibayar'] ?></td>
                  <td><?php echo "Rp. " . number_format($row['jumlah_bayar']) ?></td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <?php else: ?>
    <div class="row">
      <div class="col-md-12">
        <div class="box box-info">
          <div class="box-header with-border">
            <h4 class="box-title">History Pembayaran SPP</h4>
            <div class="pull-right">
              <a target="_blank" href="<?php echo base_url('laporan/cetak_laporan_siswa?tahun=' . $tahun) ?>" class="btn btn-info"><i class="fa fa-print"></i> Print</a>
              <a href="<?php echo base_url('laporan/siswa') ?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
            </div>
          </div>
          <div class="box-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Bulan</th>
                    <th>Tahun</th>
                    <th>NIS</th>
                    <th>Kelas</th>
                    <th>Nama</th>
                    <th><i class="fa fa-gear"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach ($data as $lap): ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $lap['bulan_dibayar'] ?></td>
                    <td><?php echo $lap['tahun_dibayar'] ?></td>
                    <td><?php echo $lap['nis'] ?></td>
                    <td><?php echo $lap['nama_kelas'] ?></td>
                    <td><?php echo $lap['nama_siswa'] ?></td>
                    <td>
                      <a target="_blank" href="<?php echo base_url('transaksi/cetak_invoice/' . $lap['id_transaksi']) ?>" class="btn btn-info"><i class="fa fa-print"></i> Cetak</a>
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
  </div>
  <?php endif; ?>