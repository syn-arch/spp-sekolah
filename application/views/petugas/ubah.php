
<div class="row">
  <div class="col-md-12">
    <div class="box box-info">
      <div class="box-header with-border">
        <h4 class="box-title">Transaksi Pembayaran SPP</h4>
        <div class="pull-right">
          <a href="<?php echo base_url('petugas') ?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
      </div>
      <div class="box-body">
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <form action="<?php echo base_url('petugas/aksi_ubah/') . $petugas['id_petugas'] ?>" method="post">
              <div class="form-group">
                <label for="nama_petugas">Nama petugas</label>
                <input type="text" class="form-control" name="nama_petugas" placeholder="Nama petugas" value="<?php echo $petugas['nama_petugas'] ?>">
              </div>

              <div class="form-group">
                <label for="username">username</label>
                <input type="text" class="form-control" name="username" placeholder="username" value="<?php echo $petugas['username'] ?>">
              </div>

              <div class="form-group">
                <label for="password">password</label>
                <input type="text" class="form-control" name="password" placeholder="password" value="<?php echo $petugas['password'] ?>">
              </div>

              <div class="form-group">
                <label for="level">Level</label>
                <select name="level" id="level" class="form-control">
                  <option value="Admin" <?= "Admin" == $petugas['level'] ?  "selected" : ''; ?>>Admin</option>
                  <option value="Operator" <?= "Operator" == $petugas['level'] ?  "selected" : ''; ?>>Operator</option>
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