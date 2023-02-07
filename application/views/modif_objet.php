<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="icon" href="<?= base_url('assets/img/responsabilite-sociale.png') ?>">
    <title>Modification d'objet</title>
</head>

<body>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Voici un objet</h1>
                <p class="lead fw-normal text-white-50 mb-0">Procédez aux modifications</p>
            </div>
        </div>
    </header>

    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-1">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">
                    <legend class="text-center">MacBook</legend>
                    <!-- Product image-->
                    <a href="#">
                        <img class="card-img-top" src="<?= base_url('assets/img/macbook.png') ?>" alt="..." />
                    </a>

                        <!-- Product details-->
                        <div class="card-body p-4">
                                <form method="post" action="#">
                                    
                                    <div class="form-group m-2">
                                        <label for="nom">Nom de Votre Objet</label>
                                        <input type="text" class="form-control" id="nom" value="MacBook">
                                    </div>
                                    
                                    <div class="form-group m-2">
                                        <label for="text">Son Prix Estimatif</label>
                                        <input type="text" class="form-control" id="text" value="$2400">
                                    </div>

                                    <div class="form-group m-2">
                                    <label for="bio">Description</label>
                                    <p><textarea class="form-control" id="bio" rows="3">M2 Pro tena hiaka farany an'ny Apple</textarea></p>
                                </div>

                                <a class="btn btn-outline-success mt-auto" href="#">Confirmer</a>
                                <a class="btn btn-outline-danger mt-2" href="#">Supprimer ce Produit</a>
                                </form>
                        </div>
                    </div>
            </div>  
            </div>
        </div>
    </section>


    <script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>