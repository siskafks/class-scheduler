    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!">CV School</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" href="<?php echo base_url('user/dashboard') ?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('register') ?>">Register</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('login') ?>">Login</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-warning border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Welcome to CV School!</h1>
                    <p class="lead mb-0">Crescencio Vocal School Official Website</p>
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
                        <img class="card-img-top" src="<?php echo base_url() ?>/assets/assets_user/img/singing3.jpg"></a>
                        <div class="card-body">
                            <div class="small text-muted">January 1, 2021</div>
                            <h2 class="card-title h4">English Singing Contest</h2>
                            <p class="card-text">Let’s see the impressive pictures of the students CV School in the English Singing Contest 2021</p>
                        </div>
                    </div>
                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <img class="card-img-top" src="<?php echo base_url() ?>/assets/assets_user/img/singing5.jpg"></a>
                            </div>
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <img class="card-img-top" src="<?php echo base_url() ?>/assets/assets_user/img/singing4.jpg"></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <img class="card-img-top" src="<?php echo base_url() ?>/assets/assets_user/img/singing6.jpg"></a>
                            </div>
                            <!-- Blog post-->
                            <div class="card mb-4">
                               <img class="card-img-top" src="<?php echo base_url() ?>/assets/assets_user/img/singing7.jpg"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Contact Us :</div>
                        <div class="card-body">
                            <div class="row">
                                    <ul class="list-unstyled mb-0">
                                        <li>Email : cvschool@gmail.com</li>
                                        <li>Telp : 089452612675</li>
                                        <li>Address : Jl.Angkasa</li>
                                    </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-->
