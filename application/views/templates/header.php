<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="icon" href="<?php echo base_url('assets/img/responsabilite-sociale.png'); ?>">
    <title>Takalo</title>
</head>

<body>
<nav id="mainNav" class="bg-light navbar navbar-light navbar-expand-md fixed-top navbar-shrink py-3">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="<?php echo base_url('assets/img/logo.png'); ?>" width="35px" height="35px">
            <span>Takalo Takalo</span>
        </a>
        <div id="navbarResponsive" class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?php echo base_url('index.php/objet'); ?>">Accueil</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#">Mes Objets</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#">Echanges</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?php echo base_url('index.php/echange/proposition'); ?>">Propositions</a></li>
            </ul>

            <ul class="navbar-nav mx-auto">
                <img src="<?php echo base_url('assets/img/user.png'); ?>" width="35px" height="35px">
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/objet/gestion'); ?>"><?php echo $user['nom']; ?></a></li>
            </ul>

            <a class="btn btn-danger shadow" role="button" href="<?php echo base_url('index.php/login/deconnecte'); ?>">Se Déconnecter</a>
        </div>
    </div>
</nav>