<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="<?= BASEURL; ?>/css/style_dashboard.css" rel="stylesheet" />
<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand" href="<?= BASEURL; ?>/dashboard"><img src="<?= BASEURL; ?>/images/pasuruan Wonderful.png" class="mt-2 ms-2" style="width: 200px; height: 50px;"></a>
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
        <div class="container position-absolute top-0 end-0 mt-5 me-2">
            <div class="row justify-content-end">
                <div class="col-md-4 mt-3">
                    <?php Flasher::flash(); ?>
                </div>
            </div>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4 mt-4">
                    <h1 class="mb-4">Penulis</h1>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Penulis
                        </div>
                        <div class="card-body">
                            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addPenulis">
                                <i class="bi bi-plus-circle"></i> Tambah Penulis
                            </button>
                            <table class="table table-dark table-striped-columns">
                                <thead class="table-light fs-6">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="fs-6">
                                    <?php
                                    $i = 1;
                                    foreach ($data['penuliss'] as $penulis) : ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $penulis['nama'] ?></td>
                                            <td><?= $penulis['email'] ?></td>
                                            <td>
                                                <a href="" class="text-decoration-none btn btn-primary btn-sm m-1" data-bs-toggle="modal" data-bs-target="#EditModal<?= $penulis['id_penulis']; ?>">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                                <a href="" class="text-decoration-none btn btn-danger btn-sm m-1" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $penulis['id_penulis']; ?>">
                                                    <i class="bi bi-trash3"></i>
                                                </a>
                                            </td>
                                        </tr>

                                        <div class="modal fade" id="EditModal<?= $penulis['id_penulis']; ?>" tabindex="-1" aria-labelledby="EditModalLabel<?= $penulis['id_penulis']; ?>" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="EditModalLabel<?= $penulis['id_penulis']; ?>">Edit Penulis</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="<?= BASEURL; ?>/penulis/edit/<?= $penulis['id_penulis']; ?>" method="post">
                                                            <div class="mb-3">
                                                                <label for="nama<?= $penulis['id_penulis']; ?>" class="form-label fs-5 d-block">Nama :</label>
                                                                <input type="text" name="nama" id="nama<?= $penulis['id_penulis']; ?>" class="form-control" value="<?= $penulis['nama']; ?>" required />
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="email<?= $penulis['id_penulis']; ?>" class="form-label fs-5 d-block">Email :</label>
                                                                <input type="email" name="email" id="email<?= $penulis['id_penulis']; ?>" class="form-control" value="<?= $penulis['email']; ?>" autocomplete="username" required />
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="password<?= $penulis['id_penulis']; ?>" class="form-label fs-5 d-block">Password :</label>
                                                                <input type="password" name="password" id="password<?= $penulis['id_penulis']; ?>" class="form-control" placeholder="Masukkan Password baru (Apabila ingin merubah password)" autocomplete="current-password" />
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary" name="edit">Simpan Perubahan</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="modal fade" id="deleteModal<?= $penulis['id_penulis']; ?>" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Penghapusan</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah Anda yakin ingin menghapus?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <a id="deleteLink" href="<?= BASEURL; ?>/penulis/delete/<?= $penulis['id_penulis']; ?>" class="btn btn-danger">Hapus</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <?php if ($data["pagination"] > 1) : ?>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination pagination-lg justify-content-center">
                                        <?php if ($data['currentPage'] > 1) : ?>
                                            <li class="page-item">
                                                <a class="page-link" href="<?= BASEURL; ?>/penulis/index/<?= $data['prevPage'] ?>" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                </a>
                                            </li>
                                        <?php endif; ?>
                                        <?php for ($i = 1; $i <= $data["pagination"]; $i++) : ?>
                                            <li class="page-item <?= ($i == $data['currentPage']) ? 'active' : '' ?>">
                                                <a class="page-link" href="<?= BASEURL; ?>/penulis/index/<?= $i ?>"><?= $i; ?></a>
                                            </li>
                                        <?php endfor; ?>
                                        <?php if ($data['currentPage'] < $data['pagination']) : ?>
                                            <li class="page-item">
                                                <a class="page-link" href="<?= BASEURL; ?>/penulis/index/<?= $data['nextPage'] ?>" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                </a>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                </nav>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <div class="modal fade" id="addPenulis" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Penulis</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL; ?>/penulis/add" method="post">
                        <div class="mb-3">
                            <label for="nama" class="form-label fs-5 d-block">Nama :</label>
                            <input type="text" name="nama" id="nama" class="form-control" required />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label fs-5 d-block">Email :</label>
                            <input type="email" name="email" id="email" class="form-control" autocomplete="username" required />
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label fs-5 d-block">Password :</label>
                            <input type="password" name="password" id="password" class="form-control" autocomplete="current-password" required />
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="add">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?= BASEURL; ?>/js/script_dashboard.js"></script>
</body>

</html>