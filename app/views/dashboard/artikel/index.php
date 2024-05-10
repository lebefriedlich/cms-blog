        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link href="<?= BASEURL; ?>/css/style_dashboard.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/super-build/ckeditor.js"></script>
        <script src="<?= BASEURL; ?>/js/script_ckeditor.js"></script>
        <style>
            #container {
                width: 1000px;
                margin: 20px auto;
            }

            .ck-editor__editable[role="textbox"] {
                min-height: 200px;
            }

            .ck-content .image {
                max-width: 80%;
                margin: 20px auto;
            }
        </style>
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
                            <h1 class="mb-4">Artikel</h1>
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-table me-1"></i>
                                    Data Artikel
                                </div>
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addPenulis">
                                        <i class="bi bi-plus-circle"></i> Tambah Artikel
                                    </button>
                                    <table class="table table-dark table-striped-columns">
                                        <thead class="table-light fs-6">
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Hari, Tanggal</th>
                                                <th scope="col">Judul</th>
                                                <th scope="col">Isi</th>
                                                <th scope="col">Gambar</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody class="fs-6">
                                            <?php
                                            $i = 1;
                                            foreach ($data['artikels'] as $artikel) : ?>
                                                <p id="countEditor" class="visually-hidden"><?= $i ?></p>
                                                <tr>
                                                    <td><?= $i ?></td>
                                                    <td><?= $artikel['hari_tanggal'] ?></td>
                                                    <td><?= $artikel['judul'] ?></td>
                                                    <td><?= $artikel['isi'] ?></td>
                                                    <td><img src="/cms-blog/app/assets/artikel/<?= $artikel['gambar'] ?>" class="rounded mx-auto d-block w-100" alt="..."></td>
                                                    <td>
                                                        <a href="" class="text-decoration-none btn btn-primary btn-sm m-1" data-bs-toggle="modal" data-bs-target="#EditModal<?= $artikel['id_artikel']; ?>">
                                                            <i class="bi bi-pencil-square"></i>
                                                        </a>
                                                        <a href="" class="text-decoration-none btn btn-danger btn-sm m-1" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $artikel['id_artikel']; ?>">
                                                            <i class="bi bi-trash3"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <div class="modal fade" id="EditModal<?= $artikel['id_artikel']; ?>" tabindex="-1" aria-labelledby="EditModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-xl">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="EditModalLabel">Edit Artikel</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="<?= BASEURL; ?>/artikel/edit/<?= $artikel['id_artikel'] . '/' . $artikel['id_kontributor'] ?>" method="post" enctype="multipart/form-data">
                                                                    <input type="text" name="id_artikel" class="visually-hidden" value="<?= $artikel['id_artikel'] ?>">
                                                                    <div class="mb-3">
                                                                        <label for="judul" class="form-label">Judul:</label>
                                                                        <input type="text" name="judul" id="judul-edit" class="form-control" value="<?= $artikel['judul'] ?>" required />
                                                                    </div>
                                                                    <input type="text" name="slug" id="slug-edit" class="visually-hidden" value="<?= $artikel['slug'] ?>" required />
                                                                    <div class="mb-3">
                                                                        <label for="kategori" class="form-label">Kategori</label>
                                                                        <select id="kategori" class="form-select" name="kategori" required>
                                                                            <option value="<?= $artikel['id_kategori'] ?>" selected><?= $artikel['nama_kategori'] ?></option>
                                                                            <?php foreach ($data['kategoris'] as $kategori) : ?>
                                                                                <?php if ($kategori['id_kategori'] == $artikel['id_kategori']) continue; ?>
                                                                                <option value="<?= $kategori['id_kategori'] ?>"><?= $kategori['nama_kategori'] ?></option>
                                                                            <?php endforeach; ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="penulis" class="form-label">Penulis</label>
                                                                        <select id="penulis" class="form-select" name="penulis" required>
                                                                            <option value="<?= $artikel['id_penulis'] ?>" selected><?= $artikel['nama_penulis'] ?></option>
                                                                            <?php foreach ($data['penuliss'] as $penulis) : ?>
                                                                                <?php if ($penulis['id_penulis'] == $artikel['id_penulis']) continue; ?>
                                                                                <option value="<?= $penulis['id_penulis'] ?>"><?= $penulis['nama'] ?></option>
                                                                            <?php endforeach; ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="editor<?= $i ?>" class="form-label">Isi</label>
                                                                        <textarea name="isi" id="editor<?= $i ?>"><?= $artikel['isi'] ?>"</textarea>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="image" class="form-label">Gambar :</label>
                                                                        <input type="file" name="image" class="form-control" />
                                                                        <input type="text" name="image-lawas" class="visually-hidden" value="<?= $artikel['gambar'] ?>">
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary" name="edit">Edit</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="deleteModal<?= $artikel['id_artikel']; ?>" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
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
                                                                <a id="deleteLink" href="<?= BASEURL; ?>/artikel/delete/<?= $artikel['id_artikel'] ?>/<?= $artikel['id_kontributor'] ?>/<?= $artikel['gambar'] ?>" class="btn btn-danger">Hapus</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                                $i++;
                                            endforeach; ?>
                                        </tbody>
                                    </table>
                                    <?php if ($data["pagination"] > 1) : ?>
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination pagination-lg justify-content-center">
                                                <?php if ($data['currentPage'] > 1) : ?>
                                                    <li class="page-item">
                                                        <a class="page-link" href="<?= BASEURL; ?>/artikel/index/<?= $data['prevPage'] ?>" aria-label="Previous">
                                                            <span aria-hidden="true">&laquo;</span>
                                                        </a>
                                                    </li>
                                                <?php endif; ?>
                                                <?php for ($i = 1; $i <= $data["pagination"]; $i++) : ?>
                                                    <li class="page-item <?= ($i == $data['currentPage']) ? 'active' : '' ?>">
                                                        <a class="page-link" href="<?= BASEURL; ?>/artikel/index/<?= $i ?>"><?= $i; ?></a>
                                                    </li>
                                                <?php endfor; ?>
                                                <?php if ($data['currentPage'] < $data['pagination']) : ?>
                                                    <li class="page-item">
                                                        <a class="page-link" href="<?= BASEURL; ?>/artikel/index/<?= $data['nextPage'] ?>" aria-label="Next">
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
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Artikel</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= BASEURL; ?>/artikel/add" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="judul" class="form-label">Judul:</label>
                                    <input type="text" name="judul" id="judul-add" class="form-control" required />
                                </div>
                                <input type="text" name="slug" id="slug-add" class="visually-hidden" required />
                                <div class="mb-3">
                                    <label for="kategori" class="form-label">Kategori</label>
                                    <select id="kategori" class="form-select" name="kategori" required>
                                        <?php foreach ($data['kategoris'] as $kategori) : ?>
                                            <option value="<?= $kategori['id_kategori'] ?>"><?= $kategori['nama_kategori'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="penulis" class="form-label">Penulis</label>
                                    <select id="penulis" class="form-select" name="penulis" required>
                                        <?php foreach ($data['penuliss'] as $penulis) : ?>
                                            <option value="<?= $penulis['id_penulis'] ?>"><?= $penulis['nama'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="editor" class="form-label">Isi</label>
                                    <textarea name="isi" id="editor"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Gambar :</label>
                                    <input type="file" name="image" class="form-control" required />
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
            <script>
                function slugify(string) {
                    string = string.toLowerCase();
                    string = string.replace(/[^a-z0-9]+/g, '-');
                    string = string.replace(/^-+|-+$/g, '');

                    return string;
                }

                const judulAdd = document.getElementById('judul-add');
                const slugAdd = document.getElementById('slug-add');

                judulAdd.addEventListener('blur', function() {
                    const judulValue = judulAdd.value;
                    const slugValue = slugify(judulValue);
                    slugAdd.value = slugValue;
                });

                const judulEdit = document.getElementById('judul-edit');
                const slugEdit = document.getElementById('slug-edit');

                judulEdit.addEventListener('blur', function() {
                    const judulValue = judulEdit.value;
                    const slugValue = slugify(judulValue);
                    slugEdit.value = slugValue;
                });

                ClassicEditor
                    .create(document.querySelector('#editor'))
                    .catch(error => {
                        console.error(error);
                    });

                const countEditorElement = document.getElementById('countEditor');

                const countEditorData = countEditorElement.textContent;
                for (let i = countEditorData; i <= countEditorData + 1; i++) {
                    ClassicEditor
                        .create(document.querySelector(`#editor${i}`))
                        .catch(error => {
                            console.error(error);
                        });
                }
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
            <script src="<?= BASEURL; ?>/js/script_dashboard.js"></script>
        </body>

        </html>