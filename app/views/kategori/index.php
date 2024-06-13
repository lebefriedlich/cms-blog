<!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Blog Home - Start Bootstrap Template</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    -->
<link rel="stylesheet" href="<?= BASEURL; ?>/css/style_home.css">
</head>

<body>

    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="<?= BASEURL; ?>/home"><img src="<?= BASEURL; ?>/images/pasuruan Wonderful.png" style="width: 200px; height: 50px;"></a>
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
        <!-- <?php var_dump($data['kategori']) ?> -->
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-10 mx-auto">
                <!-- Nested row for non-featured blog posts-->
                <div class="row">
                    <p><a href="<?= BASEURL; ?>/home" class="text-decoration-none text-black">Home</a> &raquo;
                        <a href="<?= BASEURL; ?>/home" class="text-decoration-none text-black">Kategori</a>
                        &raquo; <a href="<?= BASEURL; ?>/home/kategori/<?= $data['slug'] ?>" class="text-decoration-none text-black"><?= $data['kategori']['nama'] ?></a>
                    </p>
                    <?php foreach ($data['article'] as $article) : ?>
                        <div class="col-lg-6">
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="/cms-blog/app/assets/artikel/<?= $article['gambar']; ?>" alt="..." style="width: 100%; height: 300px;" /></a>
                                <div class="card-body">
                                    <div class="small text-muted"><?= $article['hari_tanggal'] ?></div>
                                    <h2 class="card-title h4"><?= $article['judul'] ?></h2>
                                    <!-- <p class="card-text"><?= $article['summary'] ?></p> -->
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
                                    <a class="page-link" href="<?= BASEURL; ?>/home/kategori/<?= $data['slug'] . '/' . $data['prevPage'] ?>" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php for ($i = 1; $i <= $data["pagination"]; $i++) : ?>
                                <li class="page-item <?= ($i == $data['currentPage']) ? 'active' : '' ?>">
                                    <a class="page-link" href="<?= BASEURL; ?>/home/kategori/<?= $data['slug'] . '/' . $i ?>"><?= $i; ?></a>
                                </li>
                            <?php endfor; ?>
                            <?php if ($data['currentPage'] < $data['pagination']) : ?>
                                <li class="page-item">
                                    <a class="page-link" href="<?= BASEURL; ?>/home/kategori/<?= $data['slug'] . '/' . $data['nextPage'] ?>" aria-label="Next">
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

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html> -->