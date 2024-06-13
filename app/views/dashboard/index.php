        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link href="<?= BASEURL; ?>/css/style_dashboard.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        </head>

        <body class="sb-nav-fixed">
            <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
                <!-- Navbar Brand-->
                <a class="navbar-brand" href="<?= BASEURL; ?>/dashboard"><img src="./images/wonderful-pasuruan.png" class="mt-2 ms-2" style="width: 200px; height: 50px;"></a>
                <!-- Sidebar Toggle-->
                <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
                <!-- Navbar-->
                <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?= BASEURL; ?>/dashboard/logout">Keluar</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div id="layoutSidenav">
                <div id="layoutSidenav_nav">
                    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                        <div class="sb-sidenav-menu">
                            <div class="nav">
                                <a class="nav-link" href="<?= BASEURL ?>/dashboard">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    Dashboard
                                </a>
                                <a class="nav-link" href="<?= BASEURL ?>/penulis">
                                    <div class="sb-nav-link-icon"><i class="bi bi-person-fill"></i></div>
                                    Penulis
                                </a>
                                <a class="nav-link" href="<?= BASEURL ?>/kategori">
                                    <div class="sb-nav-link-icon"><i class="bi bi-check-square"></i></div>
                                    Kategori
                                </a>
                                <a class="nav-link" href="<?= BASEURL ?>/artikel">
                                    <div class="sb-nav-link-icon"><i class="bi bi-file-earmark"></i></div>
                                    Artikel
                                </a>
                                <hr>
                                <a class="nav-link" href="<?= BASEURL ?>/dashboard/logout">
                                    <div class="sb-nav-link-icon"><i class="bi bi-box-arrow-left"></i></i></div>
                                    Keluar
                                </a>
                            </div>
                        </div>
                        <div class="sb-sidenav-footer">
                            <div class="small">Masuk Sebagai</div>
                            <?= $data['admin']['email'] ?>
                        </div>
                    </nav>
                </div>
                <div id="layoutSidenav_content">
                    <main>
                        <div class="container-fluid px-4">
                            <h1 class="mt-4 mb-4">Dashboard</h1>
                            <div class="row">
                                <div class="col-xl-4 col-md-6">
                                    <div class="card bg-primary text-white mb-4">
                                        <div class="card-body fs-2">Penulis</div>
                                        <div class="card-body">Jumlah: <?= $data['jumlahPenulis']['0'] ?> Penulis</div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <a class="small text-white stretched-link text-decoration-none" href="<?= BASEURL; ?>/penulis">Lihat Rincian</a>
                                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="card bg-warning text-white mb-4">
                                        <div class="card-body fs-2">Kategori</div>
                                        <div class="card-body">Jumlah: <?= $data['jumlahKategori']['0'] ?> Kategori</div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <a class="small text-white stretched-link text-decoration-none" href="<?= BASEURL; ?>/kategori">Lihat Rincian</a>
                                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="card bg-success text-white mb-4">
                                        <div class="card-body fs-2">Artikel</div>
                                        <div class="card-body">Jumlah: <?= $data['jumlahArtikel']['0'] ?> Artikel</div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <a class="small text-white stretched-link text-decoration-none" href="<?= BASEURL; ?>/artikel">Lihat Rincian</a>
                                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
            <script src="<?= BASEURL; ?>/js/script_dashboard.js"></script>
        </body>

        </html>