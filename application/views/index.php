<body id="page-top">
	<!-- Navigation-->
	<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
		<div class="container px-5">
			<a class="navbar-brand" href="#page-top">Codingku</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link" href="<?= base_url('tiket/aboutus') ?>">Tentang Kami</a>
					</li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url('tiket/kontak') ?>">Kontak</a></li>
					<li class="nav-item"><a class="nav-link active" href="<?= base_url('tiket/paket') ?>">Daftar Paket
							KELAS</a></li>
				</ul>
				<div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
					<ul class="navbar-nav navbar-right">
						<?php if ($_SESSION['email'] != null) {
						?>
							<div class="dropdown">
								<a class="nav-link" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
									<span class="fas fa-user-circle"></span> Welcome, <?= $username['nama'] ?>
								</a>
								<ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
									<li><a class="dropdown-item" href="<?= base_url('tiket/rencanap') ?>">Report</a></li>
									<li>
										<hr class="dropdown-divider">
									</li>
									<li><a class="dropdown-item" href="<?= base_url('auth/logout') ?>">Log Out</a></li>
								</ul>
							</div>
						<?php } else { ?>
							<li class="nav-item"><a class="nav-link" href="<?= base_url('auth/register') ?>">Sign Up</a></li>
							<li class="nav-item"><a class="nav-link" href="<?= base_url('auth/') ?>">Login</a></li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	<!-- Header-->
	<header class="masthead text-center text-white">
		<div class="masthead-content">
			<div class="container px-5">
				<h1 class="masthead-heading mb-0">Codingku</h1>
				<h2 class="masthead-subheading mb-0">Kami Hadir Menemani </h2>
				<a class="btn btn-primary btn-xl rounded-pill mt-5" href="#scroll">Lihat Selengkapnya</a>

			</div>
		</div>
		<div class="bg-circle-1 bg-circle"></div>
		<div class="bg-circle-2 bg-circle"></div>
		<div class="bg-circle-3 bg-circle"></div>
		<div class="bg-circle-4 bg-circle"></div>
	</header>
	<!-- Content section 1-->
	<section id="scroll">
		<div class="container px-5">
			<div class="row gx-5 align-items-center">
				<div class="col-lg-6 order-lg-2">
					<div class="p-5"><img class="img-fluid rounded" src="<?= base_url('assets/image/softskill.png'); ?>" alt="..." /></div>
				</div>
				<div class="col-lg-6 order-lg-1">
					<div class="p-20">
						<h2 class="display-4">Kelas Softskill</h2>
						<p> Soft skill sebagai kemampuan-kemampuan yang tidak dapat terlihat dan harus dimiliki atau diperlukan untuk mencapai kesuksesan, sebagai contoh kemampuan seseorang berkomunikasi, kejujuran atau integritas dan sebagainya</p>
						<button type="button" class="btn btn-primary p-3" data-toggle="modal" data-target="#birthday">
							Lihat Selengkapnya
						</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Content section 2-->
	<section>
		<div class="container px-5">
			<div class="row gx-5 align-items-center">
				<div class="col-lg-6">
					<div class="p-5"><img class="img-fluid rounded" src="<?= base_url() ?>assets/image/koding.png" alt="..." /></div>
				</div>
				<div class="col-lg-6">
					<div class="p-5">
						<h2 class="display-4">Kelas Koding</h2>
						<p>coding adalah aktivitas yang dilakukan programmer untuk bisa melakukan komunikasi dengan komputer. Tanpa adanya coding dari programmer, komputer tidak bisa melakukan apa-apa, hanya berupa tumpukan besi biasa.</p>
						<button type="button" class="btn btn-primary p-3" data-toggle="modal" data-target="#wedding">
							Lihat Selengkapnya
						</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Content section 3-->
	<section>
		<div class="container px-5">
			<div class="row gx-5 align-items-center">
				<div class="col-lg-6 order-lg-2">
					<div class="p-5"><img class="img-fluid rounded" src="<?= base_url() ?>assets/image/ui.png" alt="..." /></div>
				</div>
				<div class="col-lg-6 order-lg-1">
					<div class="p-5">
						<h2 class="display-4">Kelas Desain</h2>
						<p>UI sendiri merupakan singkatan dari User Interface dan UX adalah singkatan dari User Experience. Walaupun UI/UX merupakan istilah yang sering digunakan, bukan berarti keduanya memiliki fungsi yang sama
						</p>
						<button type="button" class="btn btn-primary p-3" data-toggle="modal" data-target="#play">
							Lihat Selengkapnya
						</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Footer-->
	<footer class="py-5 bg-black">
		<div class="container px-5">
			<p class="m-0 text-center text-white small">Copyright &copy; Your Website 2021</p>
		</div>
	</footer>
	<!-- Bootstrap core JS-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
	<!-- Core theme JS-->
	<script src="js/scripts.js"></script>
</body>

</html>