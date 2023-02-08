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
        <div class="container mw-100">
            <a class="navbar-brand d-flex align-items-center" href="<?php echo base_url('index.php/objet'); ?>">
                <img src="<?php echo base_url('assets/img/logo.png'); ?>" width="35px" height="35px">
                <span>Takalo Takalo</span>
            </a>

            <!-- NAVBAR MENU -->
            <div id="navbarResponsive" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?php echo base_url('index.php/objet'); ?>">Accueil</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?php echo base_url('index.php/objet/gestion'); ?>">Mes Objets</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?php echo base_url('index.php/echange/proposition'); ?>">Propositions</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?php echo base_url('index.php/echange/proposition'); ?>">Historique</a></li>
                </ul>
                
                <ul class="navbar-nav mx-auto">
                    <img src="<?php echo base_url('assets/img/user.png'); ?>" width="35px" height="35px">
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/objet/gestion'); ?>"><?php echo $user['nom']; ?></a></li>
                </ul>

            <!-- RESEARCH FORM -->
                <form method="get" action="<?php echo base_url('index.php/objet/search'); ?>" class="text-center m-2">
                    <fieldset>
                        <div class="input-group">
                            <input id="oSaisie" name="search" type="text" class="form-control" aria-label="Saisie de mots clés" placeholder="Mot(s) clé(s)" required="required">
                            <select class="selectpicker" name="categorie">
                                <option selected>Catégorie</option>
                                <?php foreach ($categories as $categorie) { ?>
                                <option value="<?php echo $categorie['id']; ?>"><?php echo $categorie['nom']; ?></option>
                                <?php } ?>
                                <option value="-1">Tous</option>
                            </select>
                            <button class="btn btn-outline-dark" type="submit">Rechercher</button>
                        </div>
                    </fieldset> 
                </form>
                
                <a class="btn btn-danger shadow" role="button" href="<?php echo base_url('index.php/login/deconnecte'); ?>">Se Déconnecter</a>
            </div>
        </div>
    </nav>