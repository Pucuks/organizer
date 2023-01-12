<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container px-5">
            <a class="navbar-brand" href="#page-top">CODINGKU</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="<?= base_url('tiket/aboutus') ?>">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('tiket/kontak') ?>">Kontak</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('tiket/paket') ?>">Daftar Paket Kelas</a></li>
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
            <div class="container-fluid py-2">
                <div class="container">
                    <h3 class="masthead-heading ">TENTANG KAMI</h3>
                    <hr>
                    <p>
                    <h4>
                        Codingku Merupakan website untuk belajar design dan code dari mentor yang sangat berpengalaman di bidangnya masing-masing.<h4>
                            </p><br>
                            <p>
                           


                            <div class="col order-lg-20">
                                <div class="">

                                </div>
                            </div>
                </div>


    </header>
    <!-- Content section 1-->

    </section>
    <!-- Footer-->
    <footer class="masthead text-justify text-white">

        <footer class="masthead-content py-1 bg-primary ">
            <div class="masthead-container  bg-primary">
                <h6>
                    <center><small>Copyright &copy; Your Website 2021</small></center>
                    <h6>
                        </p>]
            </div>
            </div>

        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
</body>

</html>
