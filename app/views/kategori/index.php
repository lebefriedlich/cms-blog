        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link href="<?= BASEURL; ?>/css/style_dashboard.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        </head>

        <body class="sb-nav-fixed">
            <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
                <!-- Navbar Brand-->
                <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
                <!-- Sidebar Toggle-->
                <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
                <!-- Navbar-->
                <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?= BASEURL; ?>/dashboard/logout">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div id="layoutSidenav">
                <div id="layoutSidenav_nav">
                    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                        <div class="sb-sidenav-menu">
                            <div class="nav">
                                <div class="sb-sidenav-menu-heading"></div>
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
                            </div>
                        </div>
                        <div class="sb-sidenav-footer">
                            <div class="small">Logged in as:</div>
                            <?= $_SESSION['admin']['nama'] ?>
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
                            <h1 class="mb-4">Kategori</h1>
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-table me-1"></i>
                                    Data Kategori
                                </div>
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addPenulis">
                                        <i class="bi bi-plus-circle"></i> Tambah Kategori
                                    </button>
                                    <table class="table table-dark table-striped-columns">
                                        <thead class="table-light fs-6">
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama Kategori</th>
                                                <th scope="col">Keterangan</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody class="fs-6">
                                            <?php
                                            $i = 1;
                                            foreach ($data['kategoris'] as $kategori) : ?>
                                                <tr>
                                                    <td><?= $i ?></td>
                                                    <td><?= $kategori['nama_kategori'] ?></td>
                                                    <td><?= $kategori['keterangan'] ?></td>
                                                    <td>
                                                        <a href="" class="text-decoration-none btn btn-primary btn-sm m-1" data-bs-toggle="modal" data-bs-target="#EditModal<?= $kategori['id_kategori']; ?>">
                                                            <i class="bi bi-pencil-square"></i>
                                                        </a>
                                                        <a href="" class="text-decoration-none btn btn-danger btn-sm m-1" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $kategori['id_kategori']; ?>">
                                                            <i class="bi bi-trash3"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <div class="modal fade" id="EditModal<?= $kategori['id_kategori']; ?>" tabindex="-1" aria-labelledby="EditModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="EditModalLabel">Edit User</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="<?= BASEURL; ?>/kategori/edit/<?= $kategori['id_kategori']; ?>" method="post">
                                                                    <div class="mb-3">
                                                                        <label for="nama" class="form-label">Nama Kategori:</label>
                                                                        <input type="text" name="nama" class="form-control" value="<?= $kategori['nama_kategori'] ?>" required />
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="keterangan" class="form-label">Keterangan :</label>
                                                                        <textarea name="keterangan" class="form-control" required><?= $kategori['keterangan'] ?></textarea>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary" name="edit">Save changes</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="deleteModal<?= $kategori['id_kategori']; ?>" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
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
                                                                <a id="deleteLink" href="<?= BASEURL; ?>/kategori/delete/<?= $kategori['id_kategori']; ?>" class="btn btn-danger">Hapus</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                                $i++;
                                            endforeach; ?>
                                        </tbody>
                                    </table>
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
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Kategori</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= BASEURL; ?>/kategori/add" method="post">
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama Kategori:</label>
                                    <input type="text" name="nama" class="form-control" required />
                                </div>
                                <div class="mb-3">
                                    <label for="keterangan" class="form-label">Keterangan :</label>
                                    <textarea name="keterangan" class="form-control" required>Artikel ini menyajikan informasi mendalam tentang .............., mengulas dengan detail dan menyeluruh berbagai aspek yang terkait dengan topik tersebut, termasuk sejarahnya, perkembangan terbaru, implikasi praktisnya, serta pandangan dari berbagai ahli dan praktisi di bidangnya.</textarea>
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