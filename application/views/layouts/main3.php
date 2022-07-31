<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Dokumen Manajemen Sistem</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo site_url('plugins/fontawesome-free/css/all.min.css'); ?>">
	<!-- DataTables -->
	<link rel="stylesheet" href="<?php echo site_url('plugins/datatables-bs4/css/dataTables.bootstrap4.css'); ?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo site_url('dist/css/adminlte.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo site_url('plugins/chosen/chosen.css'); ?>">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-navbar-fixed">
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-primary navbar-dark">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="#" class="nav-link">Home</a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="#" class="nav-link">Contact</a>
				</li>
			</ul>

			<!-- SEARCH FORM -->
			<form class="form-inline ml-3">
				<div class="input-group input-group-sm">
					<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
					<div class="input-group-append">
						<button class="btn btn-navbar" type="submit">
							<i class="fas fa-search"></i>
						</button>
					</div>
				</div>
			</form>

			<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto">
				<!-- Messages Dropdown Menu -->
				<li class="nav-item dropdown">
					<a class="nav-link" data-toggle="dropdown" href="#">
						<i class="fas fa-comments"></i>
						<span class="badge badge-danger navbar-badge">3</span>
					</a>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
						<a href="#" class="dropdown-item">
							<!-- Message Start -->
							<div class="media">
								<img src="<?php echo site_url('dist/img/user1-128x128.jpg') ?>" alt="User Avatar" class="img-size-50 mr-3 img-circle">
								<div class="media-body">
									<h3 class="dropdown-item-title">
										Brad Diesel
										<span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
									</h3>
									<p class="text-sm">Call me whenever you can...</p>
									<p class="text-sm text-muted"><i class="fas fa-clock mr-1"></i> 4 Hours Ago</p>
								</div>
							</div>
							<!-- Message End -->
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<!-- Message Start -->
							<div class="media">
								<img src="<?php echo site_url('dist/img/user8-128x128.jpg') ?>" alt="User Avatar" class="img-size-50 img-circle mr-3">
								<div class="media-body">
									<h3 class="dropdown-item-title">
										John Pierce
										<span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
									</h3>
									<p class="text-sm">I got your message bro</p>
									<p class="text-sm text-muted"><i class="fas fa-clock mr-1"></i> 4 Hours Ago</p>
								</div>
							</div>
							<!-- Message End -->
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<!-- Message Start -->
							<div class="media">
								<img src="<?php echo site_url('dist/img/user4-128x128.jpg') ?>" alt="User Avatar" class="img-size-50 img-circle mr-3">
								<div class="media-body">
									<h3 class="dropdown-item-title">
										Nora Silvester
										<span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
									</h3>
									<p class="text-sm">The subject goes here</p>
									<p class="text-sm text-muted"><i class="fas fa-clock mr-1"></i> 4 Hours Ago</p>
								</div>
							</div>
							<!-- Message End -->
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
					</div>
				</li>
				<!-- Notifications Dropdown Menu -->
				<li class="nav-item dropdown">
					<a class="nav-link" data-toggle="dropdown" href="#">
						<i class="fas fa-bell"></i>
						<span class="badge badge-warning navbar-badge">15</span>
					</a>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
						<span class="dropdown-item dropdown-header">15 Notifications</span>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="fas fa-envelope mr-2"></i> 4 new messages
							<span class="float-right text-muted text-sm">3 mins</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="fas fa-users mr-2"></i> 8 friend requests
							<span class="float-right text-muted text-sm">12 hours</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="fas fa-file mr-2"></i> 3 new reports
							<span class="float-right text-muted text-sm">2 days</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
					</div>
				</li>
				<!-- <li class="nav-item">
					<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
						<i class="fas fa-th-large"></i>
					</a>
				</li> -->
			</ul>
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-light-primary elevation-4" style="background-color: #007BFF">
			<!-- Brand Logo -->
			<a href="#" class="brand-link">
				<img src="<?php echo site_url('dist/img/LogoPDAM.png'); ?>" alt="Logo PDAM"
					class="brand-image img-circle elevation-3" style="opacity: .8">
				<span class="brand-text font-weight-light small">PDAM Tirta Pakuan Bogor</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="<?php echo site_url('dist/img/avatar04.png'); ?>" class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
					<a href="<?php echo site_url('user/edit_pass/'.$this->session->userdata('id')) ?>" class="d-block" style="color: #ADD5FF"><?php echo $this->session->userdata('nama') ?></a>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
						<li class="nav-item">
							<a href="<?php echo site_url('dashboard');?>" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt" style="color: #ADD5FF"></i>
								<p style="color: #ADD5FF">
									Dashboard
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo site_url('dokumen/dl');?>" class="nav-link">
								<i class="nav-icon fas fa-file-pdf" style="color: #ADD5FF"></i>
								<p style="color: #ADD5FF">
									Dokumen Integrasi
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo site_url('dokumen/dlab');?>" class="nav-link">
								<i class="nav-icon fas fa-file-powerpoint" style="color: #ADD5FF"></i>
								<p style="color: #ADD5FF">
									Dokumen Laboratorium
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo site_url('dokumen/dk3');?>" class="nav-link">
								<i class="nav-icon fas fa-file-excel" style="color: #ADD5FF"></i>
								<p style="color: #ADD5FF">
									Dokumen SMK3L
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo site_url('dokumen/smp');?>" class="nav-link">
								<i class="nav-icon fas fa-file-word" style="color: #ADD5FF"></i>
								<p style="color: #ADD5FF">
									Dokumen SMP
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo site_url('login/logout') ?>" class="nav-link">
								<i class="fas fa-share-square nav-icon" style="color: #ADD5FF"></i>
									<p style="color: #ADD5FF">Keluar</p>
							</a>
						</li>
					</ul>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<?php
			if(isset($_view) && $_view)
      	$this->load->view($_view);
  ?>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->
		<footer class="main-footer">
			<div class="float-right d-none d-sm-block">
				<b>Version</b> 1
			</div>
			<strong>Copyright &copy; 2019 <a href="http://sinergi-consulting.com">Sinergi Consulting</a>.</strong> All rights
			reserved.
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->
	<div class="modal fade" tabindex="-1" role="dialog" id="addModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Tambah Dokumen</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form class="form-horizontal" enctype="multipart/form-data" id="fileUploadForm">
					<div class="modal-body">
						<!-- <label for="nomor">Nomor</label>
						<input type="text" class="form-control" name="id_dokumen" id="id_dokumen" placeholder="Nomor" value="<?php echo $kode ?>"> -->

						<label for="judul">Judul</label>
						<input type="text" class="form-control" name="judul" id="judul" placeholder="Judul">

						<label for="tanggal">Tanggal Berlaku</label>
						<input type="date" class="form-control" name="tanggal" id="tanggal">
						<label for="kategori">Kategori Dokumen</label>
						<select name="kategori" id="kategori" class="form-control">
							<option value="NULL">...</option>
							<option value="Dokumen Integrasi">Dokumen Integrasi</option>
							<option value="Dokumen SMK3">Dokumen SMK3L</option>
							<option value="Dokumen Laboratorium">Dokumen Laboratorium</option>
							<option value="Dokumen SMP">Dokumen SMP</option>
						</select>

						<label for="jenis_dokumen">Jenis Dokumen</label>
						<select name="jenis_dokumen" id="jenis_dokumen" class="form-control">
							<option value="NULL">...</option>
							<option value="Manual dan Kebijakan">Manual dan Kebijakan</option>
							<option value="Prosedur">Prosedur</option>
							<option value="Instruksi Kerja">Instruksi Kerja</option>
							<option value="Formulir">Formulir</option>
							<option value="Dokumen Eksternal">Dokumen Eksternal</option>
							<option value="Regulasi">Regulasi</option>
						</select><br>
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="customFile" name="files">
							<label class="custom-file-label" for="customFile">Pilih file</label>
						</div>
					</div>
					<div class="modal-footer bg-whitesmoke br">
						<button type="submit" class="btn btn-primary" id="btn_simpan">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- jQuery -->
	<script src="<?php echo site_url('plugins/jquery/jquery.min.js'); ?>"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
	<!-- Bootstrap 4 -->
	<script src="<?php echo site_url('plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
	<!-- DataTables -->
	<script src="<?php echo site_url('plugins/datatables/jquery.dataTables.js'); ?>"></script>
	<script src="<?php echo site_url('plugins/datatables-bs4/js/dataTables.bootstrap4.js'); ?>"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo site_url('dist/js/adminlte.min.js'); ?>"></script>
	<script src="<?php echo site_url('plugins/chosen/chosen.jquery.js'); ?>"></script>
	<!-- page script -->
	<script type="text/javascript">
		$(document).ready(function () {
			//Simpan Pengguna
			$('#btn_simpan').on('click', function () {
				var form = $('#fileUploadForm')[0];
				var data = new FormData(form);
				$.ajax({
					type: "POST",
					enctype: 'multipart/form-data',
					processData: false, // Important!
					contentType: false,
					cache: false,
					url: "<?php echo site_url('dokumen/add')?>",
					dataType: "JSON",
					data: data,
					success: function (data) {
						alert("Berhasil upload file.");
						$('[name="judul"]').val("");
						$('[name="kategori"]').val("");
						$('[name="jenis_dokumen"]').val("");
						$('[name="files"]').val("");
						window.location.reload(true); 
					}
				});
				return false;
			});

		});
	</script>
	<script>
		$(function () {
			$("#example1").DataTable({
				"language": {
				"sEmptyTable": "Tidak ada data yang tersedia pada tabel ini",
				"sProcessing": "Sedang memproses...",
				"sLengthMenu": "Tampilkan _MENU_ entri",
				"sZeroRecords": "Tidak ditemukan data yang sesuai",
				"sInfo": "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
				"sInfoEmpty": "Menampilkan 0 sampai 0 dari 0 entri",
				"sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
				"sInfoPostFix": "",
				"sSearch": "Cari:",
				"sUrl": "",
				"oPaginate": {
					"sFirst": "Pertama",
					"sPrevious": "Sebelumnya",
					"sNext": "Selanjutnya",
					"sLast": "Terakhir"
				}
			}
			});
		});

		$('document').ready(function () {
			$("#nama_pengirim").chosen();
			$("#id_surat_dari").chosen();
			$("#nip").chosen();
			$("#ja_nip").chosen();
		})

		$(document).ready(function () {
			$('#nama_pengirim').change(function () {
				var nama_pengirim = $(this).val();
				$.ajax({
					url: "<?php echo site_url('suratkeluar/get_surat');?>",
					method: "POST",
					data: {
						nama_pengirim: nama_pengirim
					},
					async: false,
					dataType: 'json',
					success: function (data) {
						var pengirim = '';
						var pertalian_nomor = '';
						var i;
						for (i = 0; i < data.length; i++) {
							pengirim += data[i].pengirim;
							pertalian_nomor += data[i].pertalian_nomor;
						}
						$('#alamat').val(pengirim);
						$('#pertalian_nomor').val(pertalian_nomor);
					}
				});
			});
		});

		$(document).ready(function () {
			$('#id_surat_dari').change(function () {
				var surat_dari = $(this).val();
				$.ajax({
					url: "<?php echo site_url('disposisisurat/get_surat');?>",
					method: "POST",
					data: {
						surat_dari: surat_dari
					},
					async: false,
					dataType: 'json',
					success: function (data) {
						var nomor = '';
						var tanggal = '';
						var isi = '';
						var i;
						for (i = 0; i < data.length; i++) {
							nomor += data[i].nomor;
							tanggal += data[i].tanggal;
							isi += data[i].isi;
						}
						$('#no_surat').val(nomor);
						$('#tanggal_surat').val(tanggal);
						$('#perihal').val(isi);
					}
				});
			});
		});

		$(document).ready(function () {
			$('#nip').change(function () {
				var nip = $(this).val();
				$.ajax({
					url: "<?php echo site_url('bidang/get_karyawan');?>",
					method: "POST",
					data: {
						nip: nip
					},
					async: false,
					dataType: 'json',
					success: function (data) {
						var nama = '';
						var jabatan = '';
						var golongan = '';
						var i;
						for (i = 0; i < data.length; i++) {
							nama += data[i].nama;
							jabatan += data[i].jabatan;
							golongan += data[i].golongan;
						}
						$('#nama').val(nama);
						$('#jabatan').val(jabatan);
						$('#golongan').val(golongan);
					}
				});
			});
		});

		$(document).ready(function () {
			$('#ja_nip').change(function () {
				var nip = $(this).val();
				$.ajax({
					url: "<?php echo site_url('jenis_administrasi/get_karyawan');?>",
					method: "POST",
					data: {
						nip: nip
					},
					async: false,
					dataType: 'json',
					success: function (data) {
						var nama = '';
						var jabatan = '';
						var i;
						for (i = 0; i < data.length; i++) {
							nama += data[i].nama;
							jabatan += data[i].jabatan;
						}
						$('#nama').val(nama);
						$('#jabatan').val(jabatan);
					}
				});
			});
		});

		function printContent(el) {
			var restorepage = document.body.innerHTML;
			var printcontent = document.getElementById(el).innerHTML;
			document.body.innerHTML = printcontent;
			window.print();
			document.body.innerHTML = restorepage;
		}

	</script>
	<!-- TinyMCE -->
	<script type="text/javascript">
		tinymce.init({
			selector: "textarea",
			plugins: [
				"advlist autolink lists link image charmap print preview anchor",
				"searchreplace visualblocks code fullscreen",
				"insertdatetime media table contextmenu paste"
			],
			toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
		});
	</script>
</body>

</html>
