<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Laporan</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Laporan</li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Laporan Aktifitas</h3>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<table id="example1" class="table table-bordered table-striped">
					<thead>
								<tr>
									<th class="text-center">No</th>
									<th>Aktifitas</th>
									<th>Waktu</th>
									<th>Pengguna</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; foreach($log as $l): ?>
								<tr>
									<td><?php echo $no++ ?></td>
									<td><?php echo $l['keterangan'] ?></td>
									<td><?php echo date('H:i:s d-m-Y', strtotime($l['waktu'])) ?></td>
									<td><?php echo $l['pengguna'] ?></td>
								</tr>
								<?php endforeach; ?>
							</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
