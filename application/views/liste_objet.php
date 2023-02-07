<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="icon" href="<?php echo base_url('assets/img/responsabilite-sociale.png'); ?>">
    <title>Annonces</title>
</head>

<body>
<<<<<<< HEAD
=======
    <nav id="mainNav" class="bg-light navbar navbar-light navbar-expand-md fixed-top navbar-shrink py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="<?php echo base_url('assets/img/logo.png'); ?>" width="35px" height="35px">
                <span>Takalo Takalo</span>
            </a>
            <div id="navbarResponsive" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#">Accueil</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#">Echanges</a></li>
                </ul>

                <ul class="navbar-nav mx-auto">
                    <img src="<?php echo base_url('assets/img/user.png'); ?>" width="35px" height="35px">
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/objet/gestion'); ?>"><?php echo $user['nom']; ?></a></li>
                </ul>

                <a class="btn btn-danger shadow" role="button" href="<?php echo base_url('index.php/login/deconnecte'); ?>">Se Déconnecter</a>
            </div>
        </div>
    </nav>

    <!-- Fin NavBar -->
>>>>>>> 606b8e900591c8530a96e96752fed6437de3cfd6

    <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Organisez des echanges</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Voyez par vous mêmes les objets disponibles</p>
                </div>
            </div>
        </header>
    
    <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                <?php foreach ($objets as $objet) { ?>
                
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="<?php echo base_url('assets/img/basket.png'); ?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo $objet['nom']; ?></h5>
                                    <!-- Product price-->
                                    <?php echo $objet['prix']; ?>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Proposer d'echanger</a></div>
                            </div>
                        </div>
                    </div>

                <?php } ?>

                </div>
            </div>
        </section>

    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>