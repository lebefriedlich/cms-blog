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
            <a class="navbar-brand" href="<?= BASEURL; ?>/home">Start Bootstrap</a>
        </div>
    </nav>

    <!-- Page header with logo and tagline-->
    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">Welcome to Blog Home!</h1>
                <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
            </div>
        </div>
    </header>
    <!-- Page content-->
    <div class="container">
        <!-- <?php var_dump($data) ?> -->
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8">
                <!-- Featured blog post-->
                <div class="card mb-4">
                    <?php if (isset($data['artikelUtama'])) : ?>
                        <a href="#!"><img class="card-img-top" src="/cms-blog/app/assets/artikel/<?= $data['artikelUtama'][0]['gambar']; ?>" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted"><?= $data['artikelUtama'][0]['hari_tanggal'] ?></div>
                            <h2 class="card-title"><?= $data['artikelUtama'][0]['judul'] ?></h2>
                            <!-- <p class="card-text"><?= $data['artikelUtama'][0]['summary'] ?></p> -->
                            <a class="btn btn-primary" href="<?= BASEURL; ?>/post/index/<?= $data['artikelUtama'][0]['slug'] ?>">Baca lebih lanjut →</a>
                        </div>
                    <?php endif; ?>
                </div>
                <!-- Nested row for non-featured blog posts-->
                <div class="row">
                    <?php foreach ($data['article'] as $article) : ?>
                        <div class="col-lg-6">
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="/cms-blog/app/assets/artikel/<?= $article['gambar']; ?>" alt="..." style="width: 100%; height: 250px;" /></a>
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
                <!-- Search widget-->
                <div class="card mb-4">
                    <div class="card-header">Cari</div>
                    <div class="card-body">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Masukkan Pencarian" aria-label="Enter search term..." aria-describedby="button-search" />
                            <button class="btn btn-primary" id="button-search" type="button">Cari!</button>
                        </div>
                    </div>
                </div>
                <!-- Categories widget-->
                <div class="card mb-4">
                    <div class="card-header">Kategori</div>
                    <div class="card-body">
                        <div class="row">
                            <?php foreach ($data['kategoris'] as $kategori) : ?>
                                <div class="col-sm-6">
                                    <ul class="list-group mb-0 ms-4">
                                        <li><a href="<?= BASEURL ?>/home/kategori/<?= $kategori['slug_kategori'] ?>" class="text-decoration-none text-black"><?= $kategori['nama_kategori'] ?></a></li>
                                    </ul>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <!-- Side widget-->
                <div class="card mb-4">
                    <div class="card-header">About</div>
                    <div class="card-body" style="text-align: justify; text-justify: inter-word;">Selamat datang di Pasuruan Wonderful! <br><br>

                        Kami adalah destinasi daring yang menawarkan artikel-artikel tentang wisata alam, sejarah, dan religi di Pasuruan. Temukan keindahan alam yang menakjubkan, jejak sejarah yang mempesona, dan tempat-tempat suci yang memberikan kedamaian bersama kami.

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