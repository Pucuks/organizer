<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container px-5">
            <a class="navbar-brand" href="#page-top">CODINGKU</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('tiket/aboutus') ?>">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link active" href="<?= base_url('tiket/kontak') ?>">Kontak</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('tiket/paket') ?>">Daftar Paket KELAS</a></li>
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
    <header class="masthead text-center text-white ">
        <div class="masthead-content">
            <h1 class="masthead-heading  ">CODINGKU </h1>
            <h1 class="masthead">Alamat Kami </h1><br>
            <div class="masthead text-justify text-white">
                <div class="container px-5 ">
                    <div class="container px-5">
                        <p>
                        <h4>
                            <center>
                                Kontak
                                Jl. Margonda Raya No.8, Pondok Cina, Kecamatan Beji, Kota Depok, Jawa Barat 164225
                                <center>
                        </h4>
                        <h4>
                            <center>
                                (+62) 000-0000<center>
                        </h4>
                        </p>
                        </p>
                        <hr>

                        <body>
                            <h1>GOOGLE MAPS<h2><br>
                                    <center>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.287642209829!2d106.83119551419492!3d-6.356800963956182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec3c53dfed75%3A0xad5f6ba586fc5d5e!2sUniversitas%20Bina%20Sarana%20Informatika%20Kampus%20Margonda%20(UBSI%20Margonda)!5e0!3m2!1sid!2sid!4v1622555261549!5m2!1sid!2sid" width="1180" height="720" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                    </center>

                        </body>
                    </div>
                    <div class="bg-circle-1 bg-circle"></div>
                    <div class="bg-circle-2 bg-circle"></div>
                    <div class="bg-circle-3 bg-circle"></div>
                </div>
            </div>
        </div>

    </header>
    <!-- Content section 1-->

    <!-- Footer-->
    <footer class="masthead text-justify text-white">

    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>