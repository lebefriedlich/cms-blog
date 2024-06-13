<<<<<<< HEAD
<<<<<<< HEAD
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style_post.css">
    </head>

    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <div class="container">
                <a class="navbar-brand" href="<?= BASEURL; ?>/home"><img src="./../../images/wonderful-pasuruan.png" style="width: 200px; height: 50px;"></a>
            </div>
        </nav>

        <!-- Page content-->
        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <p><a href="<?= BASEURL; ?>/home" class="text-decoration-none text-black">Home</a>
                        &raquo; <a href="<?= BASEURL; ?>/home" class="text-decoration-none text-black">Kategori</a> &raquo;
                        <a href="<?= BASEURL; ?>/home/kategori/<?= $data['artikel']['slug_kategori'] ?>" class="text-decoration-none text-black"><?= $data['artikel']['nama_kategori'] ?></a>
                        &raquo; <a href="<?= BASEURL; ?>/post/index/<?= $data['artikel']['slug'] ?>" class="text-decoration-none text-black"><?= $data['artikel']['judul'] ?></a>
                    </p>
                    <article>
                        <header class="mb-4">
                            <h1 class="fw-bolder mb-1"><?= $data['artikel']['judul'] ?></h1>
                            <div class="text-muted fst-italic mb-2">Dipublikasikan pada <?= $data['artikel']['hari_tanggal'] ?> Oleh <?= $data['artikel']['nama'] ?></div>
                            <a class="badge bg-secondary text-decoration-none link-light" href="<?= BASEURL; ?>/home/kategori/<?= $data['artikel']['slug_kategori'] ?>"><?= $data['artikel']['nama_kategori'] ?></a>
                        </header>
                        <figure class="mb-4"><img class="img-fluid rounded" src="../../../app/assets/artikel/<?= $data['artikel']['gambar']; ?>" alt="..." style="width: 100%; height: 50%" /></figure>
                        <section class="mb-5">
                            <p><?= $data['artikel']['isi'] ?></p>
                        </section>
                    </article>
                </div>
            </div>
        </div>
=======
=======
>>>>>>> parent of b2b1a56 (update all)
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style_post.css">
    </head>

    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <div class="container">
<<<<<<< HEAD
                <a class="navbar-brand" href="<?= BASEURL; ?>/home"><img src="<?= BASEURL; ?>/images/pasuruan Wonderful.png" style="width: 200px; height: 50px;"></a>
=======
                <a class="navbar-brand" href="<?= BASEURL; ?>/home"><img src="<?= BASEURL; ?>/images/wonderful-pasuruan.png" style="width: 200px; height: 50px;"></a>
>>>>>>> parent of b2b1a56 (update all)
            </div>
        </nav>

        <!-- Page content-->
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <p><a href="<?= BASEURL; ?>/home" class="text-decoration-none text-black">Home</a>
                        &raquo; <a href="<?= BASEURL; ?>/home" class="text-decoration-none text-black">Kategori</a> &raquo;
                        <a href="<?= BASEURL; ?>/home/kategori/<?= $data['artikel']['slug_kategori'] ?>" class="text-decoration-none text-black"><?= $data['artikel']['nama_kategori'] ?></a>
                        &raquo; <a href="<?= BASEURL; ?>/post/index/<?= $data['artikel']['slug'] ?>" class="text-decoration-none text-black"><?= $data['artikel']['judul'] ?></a>
                    </p>
                    <article>
                        <header class="mb-4">
                            <h1 class="fw-bolder mb-1"><?= $data['artikel']['judul'] ?></h1>
                            <div class="text-muted fst-italic mb-2">Dipublikasikan pada <?= $data['artikel']['hari_tanggal'] ?> Oleh <?= $data['artikel']['nama'] ?></div>
                            <a class="badge bg-secondary text-decoration-none link-light" href="<?= BASEURL; ?>/home/kategori/<?= $data['artikel']['slug_kategori'] ?>"><?= $data['artikel']['nama_kategori'] ?></a>
                        </header>
                        <figure class="mb-4"><img class="img-fluid rounded" src="/cms-blog/app/assets/artikel/<?= $data['artikel']['gambar']; ?>" alt="..." style="width: 100%;" /></figure>
                        <section class="mb-5">
                            <p><?= $data['artikel']['isi'] ?></p>
                        </section>
                    </article>
                </div>
            </div>
<<<<<<< HEAD
        </div>

        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html> -->
>>>>>>> parent of 87c2a58 (revisi lagi)
=======
        </div>
>>>>>>> parent of b2b1a56 (update all)
