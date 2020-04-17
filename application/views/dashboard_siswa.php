<div class="row">
	<div class="col-xs-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h4 class="box-title">Dashboard</h4>
				<div class="pull-right">
					Tanggal <?php echo date('d-m-Y') ?>
				</div>
			</div>
			<div class="box-body">
				<h2>Hallo Selamat Datang <?php echo $this->session->userdata('nama_siswa') ?></h2>
				<div class="alert alert-info">
					<strong>Informasi</strong>
					<p>Silahkan cek history pembayaran anda pada menu disamping atau <a href="<?php echo base_url('laporan/siswa') ?>">Klik Disini</a></p>
				</div>
			</div>
		</div>
	</div>
</div>