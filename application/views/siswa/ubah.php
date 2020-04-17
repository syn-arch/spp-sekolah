<div class="row">
  <div class="col-md-12">
    <div class="box box-info">
      <div class="box-header with-border">
        <h4 class="box-title">Transaksi Pembayaran SPP</h4>
        <div class="pull-right">
          <a href="<?php echo base_url('siswa') ?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
      </div>
      <div class="box-body">
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <form action="<?php echo base_url('siswa/aksi_ubah/') . $siswa['id_siswa'] ?>" method="post">
              <div class="form-group">
                <label for="nama_siswa">Nama siswa</label>
                <input type="text" class="form-control" name="nama_siswa" placeholder="Nama siswa" value="<?php echo $siswa['nama_siswa'] ?>">
              </div>
              <div class="form-group">
                <label for="nis">nis</label>
                <input type="text" class="form-control" name="nis" placeholder="nis" value="<?php echo $siswa['nis'] ?>">
              </div>
              <div class="form-group">
                <label for="tahun_pendaftaran">tahun pendaftaran</label>
                <input type="text" class="form-control" name="tahun_pendaftaran" placeholder="tahun pendaftaran" value="<?php echo $siswa['tahun_pendaftaran'] ?>">
              </div>
              <div class="form-group">
                <label>Nama Jurusan</label>
                <select name="id_jurusan" class="form-control">
                  <?php foreach ($jurusan as $j): ?>
                  <option value="<?php echo $j['id_jurusan'] ?>" <?= $j['id_jurusan'] == $siswa['id_jurusan'] ?  "selected" : ''; ?>><?php echo $j['nama_jurusan'] ?></option>
                  <?php endforeach ?>
                </select>
              </div>
              <div class="form-group">
                <label>Nama kelas</label>
                <select name="id_kelas" class="form-control">
                  <?php foreach ($kelas as $j): ?>
                  <option value="<?php echo $j['id_kelas'] ?>" <?= $j['id_kelas'] == $siswa['id_kelas'] ?  "selected" : ''; ?>><?php echo $j['nama_kelas'] ?></option>
                  <?php endforeach ?>
                </select>
              </div>
              
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
              </div>
            </form>
          </div>
        </div>
      <div class="box-footer">
      </div>
    </div>
  </div>
</div>