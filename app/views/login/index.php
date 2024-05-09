        <link rel="stylesheet" href="<?= BASEURL; ?>/css/style_login.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?= BASEURL; ?>/home">Start Bootstrap</a>
        </div>
    </nav>

    <div class="container position-absolute top-0 end-0 mt-5 me-2">
        <div class="row justify-content-end">
            <div class="col-md-4 mt-3">
                <?php Flasher::flash(); ?>
            </div>
        </div>
    </div>
    
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="<?= BASEURL; ?>/images/draw2.webp"
                    class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form action="<?= BASEURL; ?>/login/login" method="post">
                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="email" name="email" id="form3Example3" class="form-control form-control-lg"
                        placeholder="Masukkan alamat Email" />
                    </div>

                    <!-- Password input -->
                    <div data-mdb-input-init class="form-outline mb-3">
                        <input type="password" name="password" id="form3Example4" class="form-control form-control-lg"
                        placeholder="Masukkan Password" />
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" name="login" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
                        style="padding-left: 2.5rem; padding-right: 2.5rem;">Masuk</button>
                        <p class="small fw-bold mt-2 pt-1 mb-0">Apakah kamu tidak memiliki akun? <a href="<?= BASEURL; ?>/register"
                            class="link-danger">Daftar</a></p>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </section>