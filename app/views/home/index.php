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
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8">
                <!-- Featured blog post-->
                <div class="card mb-4">
                    <?php if ($_SERVER['REQUEST_URI'] == "/cms-blog/public/home" || $_SERVER['REQUEST_URI'] == "/cms-blog/public/home/1") : ?>
                        <a href="#!"><img class="card-img-top" src="/cms-blog/app/assets/artikel/<?= $data['article'][0]['image']; ?>" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted"><?= $data['article'][0]['date_upload'] ?></div>
                            <h2 class="card-title"><?= $data['article'][0]['judul'] ?></h2>
                            <p class="card-text"><?= $data['article'][0]['summary'] ?></p>
                            <a class="btn btn-primary" href="<?= BASEURL; ?>/post/index/<?= $data['article'][0]['slug'] ?>">Read more →</a>
                        </div>
                    <?php endif; ?>
                </div>
                <!-- Nested row for non-featured blog posts-->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card mb-4">
                            <a href="#!"><img class="card-img-top" src="/cms-blog/app/assets/artikel/<?= $data['article'][1]['image']; ?>" alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted"><?= $data['article'][1]['date_upload'] ?></div>
                                <h2 class="card-title h4"><?= $data['article'][1]['judul'] ?></h2>
                                <p class="card-text"><?= $data['article'][1]['summary'] ?></p>
                                <a class="btn btn-primary" href="#!">Read more →</a>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <a href="#!"><img class="card-img-top" src="/cms-blog/app/assets/artikel/<?= $data['article'][2]['image']; ?>" alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted"><?= $data['article'][2]['date_upload'] ?></div>
                                <h2 class="card-title h4"><?= $data['article'][2]['judul'] ?></h2>
                                <p class="card-text"><?= $data['article'][2]['summary'] ?></p>
                                <a class="btn btn-primary" href="#!">Read more →</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card mb-4">
                            <a href="#!"><img class="card-img-top" src="/cms-blog/app/assets/artikel/<?= $data['article'][2]['image']; ?>" alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted"><?= $data['article'][2]['date_upload'] ?></div>
                                <h2 class="card-title h4"><?= $data['article'][2]['judul'] ?></h2>
                                <p class="card-text"><?= $data['article'][2]['summary'] ?></p>
                                <a class="btn btn-primary" href="#!">Read more →</a>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <a href="#!"><img class="card-img-top" src="/cms-blog/app/assets/artikel/<?= $data['article'][2]['image']; ?>" alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted"><?= $data['article'][2]['date_upload'] ?></div>
                                <h2 class="card-title h4"><?= $data['article'][2]['judul'] ?></h2>
                                <p class="card-text"><?= $data['article'][2]['summary'] ?></p>
                                <a class="btn btn-primary" href="#!">Read more →</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pagination-->
                <nav aria-label="Pagination">
                    <hr class="my-0" />
                    <ul class="pagination justify-content-center my-4">
                        <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                        <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                        <li class="page-item"><a class="page-link" href="#!">2</a></li>
                        <li class="page-item"><a class="page-link" href="#!">3</a></li>
                        <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                        <li class="page-item"><a class="page-link" href="#!">15</a></li>
                        <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Side widgets-->
            <div class="col-lg-4">
                <!-- Search widget-->
                <div class="card mb-4">
                    <div class="card-header">Search</div>
                    <div class="card-body">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                            <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                        </div>
                    </div>
                </div>
                <!-- Categories widget-->
                <div class="card mb-4">
                    <div class="card-header">Categories</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#!">Web Design</a></li>
                                    <li><a href="#!">HTML</a></li>
                                    <li><a href="#!">Freebies</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#!">JavaScript</a></li>
                                    <li><a href="#!">CSS</a></li>
                                    <li><a href="#!">Tutorials</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Side widget-->
                <div class="card mb-4">
                    <div class="card-header">Side Widget</div>
                    <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                </div>
            </div>
        </div>
    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html> -->