    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style_post.css">
    </head>

    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <div class="container">
                <a class="navbar-brand" href="<?= BASEURL; ?>/home">Start Bootstrap</a>
            </div>
        </nav>

        <!-- Page content-->
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <article>
                        <header class="mb-4">
                            <h1 class="fw-bolder mb-1"><?= $data['article']['judul'] ?></h1>
                            <div class="text-muted fst-italic mb-2">Dipublikasikan pada <?= $data['article']['date_upload'] ?> Oleh <?= $data['article']['nama'] ?></div>
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!"><?= $data['article']['category'] ?></a>
                        </header>
                        <figure class="mb-4"><img class="img-fluid rounded" src="/cms-blog/app/assets/artikel/<?= $data['article']['image']; ?>" alt="..." /></figure>
                        <section class="mb-5">
                            <p><?= $data['article']['content'] ?></p>
                        </section>
                    </article>
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