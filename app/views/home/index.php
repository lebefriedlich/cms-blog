<link rel="stylesheet" href="<?= BASEURL; ?>/css/style_home.css">
<style>
    ul {
        list-style: none;
    }

    ul#myList li::before {
        content: "\2022";
        color: blue;
        display: inline-block;
        width: 1em;
        margin-left: -0.9em;
        font-weight: bold;
        font-size: 1.1rem;
    }

    ul#myList1 li::before {
        content: "\2022";
        color: blue;
        display: inline-block;
        width: 1em;
        margin-left: -0.9em;
        font-weight: bold;
        font-size: 1.1rem;
    }

    @media (max-width: 992px) {
        .h-img-400 {
            height: 400px;
        }
    }
</style>
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="<?= BASEURL; ?>/home"><img src="./images/wonderful-pasuruan.png" style="width: 200px; height: 50px;"></a>
        </div>
    </nav>

    <!-- Page header with logo and tagline-->
    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">Selamat Datang di Wonderful Pasuruan!</h1>
                <p class="lead mb-0">Temukan pesona wisata alam yang memukau dan jejak sejarah yang mempesona bersama Pasuruan Wonderful.</p>
            </div>
        </div>
    </header>
    <!-- Page content-->
    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8">
                <!-- Featured blog post-->
                <div class="card mb-4">
                    <?php if (isset($data['artikelUtama'])) : ?>
                        <a href="<?= BASEURL; ?>/post/index/<?= $data['artikelUtama']['slug'] ?>"><img class="card-img-top" src="./../app/assets/artikel/<?= $data['artikelUtama']['gambar']; ?>" style="height: 500px;" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted"><?= $data['artikelUtama']['hari_tanggal'] ?></div>
                            <h2 class="card-title"><?= $data['artikelUtama']['judul'] ?></h2>
                            <a class="btn btn-primary" href="<?= BASEURL; ?>/post/index/<?= $data['artikelUtama']['slug'] ?>">Baca lebih lanjut →</a>
                        </div>
                    <?php endif; ?>
                </div>
                <!-- Nested row for non-featured blog posts-->
                <div class="row">
                    <?php foreach ($data['article'] as $article) : ?>
                        <div class="col-lg-6">
                            <div class="card mb-4">
                                <a href="<?= BASEURL; ?>/post/index/<?= $article['slug'] ?>"><img class="card-img-top" src="./../app/assets/artikel/<?= $article['gambar']; ?>" alt="..." style="width: 100%; height: 250px; @media (max-width: 992px) {height: 400px;}" /></a>
                                <div class="card-body">
                                    <div class="small text-muted"><?= $article['hari_tanggal'] ?></div>
                                    <h2 class="card-title h4"><?= $article['judul'] ?></h2>
                                    <a class="btn btn-primary" href="<?= BASEURL; ?>/post/index/<?= $article['slug'] ?>">Baca lebih lanjut →</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- Pagination for home-->
                <?php if ($data["pagination"] > 1) : ?>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination pagination-lg justify-content-center">
                            <?php if ($data['currentPage'] > 1) : ?>
                                <li class="page-item">
                                    <a class="page-link" href="<?= BASEURL; ?>/home/index/<?= $data['prevPage'] ?>" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php for ($i = 1; $i <= $data["pagination"]; $i++) : ?>
                                <li class="page-item <?= ($i == $data['currentPage']) ? 'active' : '' ?>">
                                    <a class="page-link" href="<?= BASEURL; ?>/home/index/<?= $i ?>"><?= $i; ?></a>
                                </li>
                            <?php endfor; ?>
                            <?php if ($data['currentPage'] < $data['pagination']) : ?>
                                <li class="page-item">
                                    <a class="page-link" href="<?= BASEURL; ?>/home/index/<?= $data['nextPage'] ?>" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </nav>
                <?php endif; ?>
            </div>
            <!-- Side widgets-->
            <div class="col-lg-4">
                <!-- Categories widget-->
                <div class="card mb-4">
                    <div class="card-header">Kategori</div>
                    <div class="card-body">
                        <div class="row">
                            <?php foreach ($data['kategoris'] as $kategori) : ?>
                                <div class="col-sm-6">
                                    <ul class="list-group mb-0 ms-4 custom-list-group" id="myList">
                                        <li><a href="<?= BASEURL ?>/home/kategori/<?= $kategori['slug_kategori'] ?>" class="text-decoration-none"><?= $kategori['nama_kategori'] ?></a></li>
                                    </ul>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">Artikel Populer</div>
                    <div class="card-body">
                        <?php foreach ($data['artikelPopuler'] as $data) : ?>
                            <ul class="list-group mb-0 ms-4" id="myList1">
                                <li><a href="<?= BASEURL; ?>/post/index/<?= $data['slug'] ?>" class="text-decoration-none"><?= $data['judul'] ?></a></li>
                            </ul>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- Side widget-->
                <div class="card mb-4">
                    <div class="card-header">About</div>
                    <div class="card-body" style="text-align: justify;">Selamat datang di Wonderful Pasuruan! <br><br>

                        Kami adalah destinasi daring yang menawarkan artikel-artikel tentang wisata alam dan sejarah di Pasuruan. Temukan keindahan alam yang menakjubkan dan jejak sejarah yang mempesona.

                        Mari menjelajahi keajaiban Indonesia bersama-sama!

                        Salam hangat,
                        <br><br>
                        Maulana Haekal Noval Akbar
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html> -->