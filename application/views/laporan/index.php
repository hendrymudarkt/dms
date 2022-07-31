<section class="section">
	<div class="section-header">
		<h1>Laporan</h1>
	</div>
	<h2 class="section-title">Ringkasan Laporan</h2>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-12">
			<div class="card card-statistic-1">
				<a href="<?php echo site_url('laporan/jumlah') ?>">
					<div class="card-icon bg-primary">
						<i class="far fa-file"></i>
					</div>
				</a>
				<div class="card-wrap">
					<div class="card-header">
						<h4>Jumlah Dokumen</h4>
					</div>
					<div class="card-body">
						<?php $datab = $this->db->query("SELECT id_dokumen FROM dokumen"); echo $datab->num_rows(); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-12">
			<div class="card card-statistic-1">
				<a href="<?php echo site_url('laporan/activity') ?>">
					<div class="card-icon bg-danger">
						<i class="far fa-file"></i>
					</div>
				</a>
				<div class="card-wrap">
					<div class="card-header">
						<h4>Aktifitas</h4>
					</div>
					<div class="card-body">
						<?php $datab = $this->db->query("SELECT id_dokumen FROM dokumen"); echo $datab->num_rows(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
