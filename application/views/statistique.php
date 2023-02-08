<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="icon" href="<?= base_url('assets/img/responsabilite-sociale.png') ?>">
    <title>Statistique Takalo</title>
</head>

<body>
    <nav id="mainNav" class="bg-light navbar navbar-light navbar-expand-md fixed-top navbar-shrink py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="<?= base_url('assets/img/logo.png') ?>" width="35px" height="35px">
                <span>Takalo Takalo</span>
            </a>
            <div id="navcol-1" class="collapse navbar-collapse">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/categorie'); ?>">Gestion de categorie</a></li>
                </ul>

                <a class="btn btn-danger shadow" role="button" href="<?php echo base_url('index.php/admin/deconnecte'); ?>">Log Out</a>
            </div>
        </div>
    </nav>

    <!-- PAGE ADMIN STATISTIC -->     <!-- PAGE ADMIN STATISTIC -->     <!-- PAGE ADMIN STATISTIC -->

    <!-- Header-->
    <header class="bg-dark pt-5 pb-2">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h2 class="fw-bolder">Statistic for Admin</h2>
            </div>
        </div>
    </header>

    <!-- Begin Page Content -->
    <div class="container-fluid mt-3">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-0 text-gray-800">Tableau de Bord</h4>
        </div>
        
        <!-- Content Row -->
        <div class="row">
        
            <!-- Progress User Incrits -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Utilisateurs Inscrits</div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $nombre_user['nb_user']; ?></div>
                                        </div>
                                        <div class="col">
                                            <div class="progress progress-sm mr-2">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $nombre_user['nb_user']; ?>%" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Progress Echange Done -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Echange Effectuées
                                </div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $nombre_echange['nb_echanges']; ?></div>
                                        </div>
                                        <div class="col">
                                            <div class="progress progress-sm mr-2">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo $nombre_echange['nb_echanges']; ?>%" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>