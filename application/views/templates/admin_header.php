<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?= $judul ?></title>

	<!-- Custom fonts for this template -->
	<link href="<?= base_url() ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="<?= base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

	<!-- Custom styles for this page -->
	<link href="<?= base_url() ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
	<?php
	function rupiah($angka)
	{

		$hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
		return $hasil_rupiah;
	}
	?>

</head>

<body id="page-top" class="">
	<!-- Page Wrapper -->
	<div id="wrapper">
		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<?php if ($_SESSION['role'] == "Admin") { ?>
				<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('tiket/admin') ?>">
				<?php } else { ?>
					<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('tiket') ?>">
					<?php } ?>
					<div class="sidebar-brand-icon">
						<i class="fas fa-user-shield"></i>
					</div>
					<div class="sidebar-brand-text mx-3">Codingku</div>
					</a>

					<!-- Divider -->
					<hr class="sidebar-divider my-0">

					<!-- Nav Item - Dashboard -->
					<li class="nav-item active">
						<?php if ($_SESSION['role'] == "Admin") { ?>
							<a class="nav-link" href="<?= base_url('tiket/admin') ?>">
								<i class="fas fa-fw fa-tachometer-alt"></i>
								<span>Dashboard</span></a>
						<?php } else { ?>
							<a class="nav-link" href="<?= base_url('tiket/rencanap') ?>">
								<i class="fas fa-fw fa-tachometer-alt"></i>
								<span>Dashboard</span></a>
						<?php } ?>
					</li>

					<!-- Divider -->
					<hr class="sidebar-divider">

					<!-- Sidebar Toggler (Sidebar) -->
					<div class="text-center d-none d-md-inline">
						<button class="rounded-circle border-0" id="sidebarToggle"></button>
					</div>

		</ul>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

					<!-- Sidebar Toggle (Topbar) -->
					<form class="form-inline">
						<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
							<i class="fa fa-bars"></i>
						</button>
					</form>



					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">


						<div class="topbar-divider d-none d-sm-block"></div>

						<!-- Nav Item - User Information -->
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="mr-2 d-none d-lg-inline text-gray-600 small"><span class="fas fa-user-circle"></span> Welcome, <?= $username['nama'] ?></span>
								<span class="fa fa-user-circle ">
							</a>
							<!-- Dropdown - User Information -->
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

								<a class="dropdown-item" href="auth/logout" data-toggle="modal" data-target="#logoutModal">
									<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
									Logout
								</a>
							</div>
						</li>

					</ul>
			</div>
			</nav>
			<!-- End of Topbar -->