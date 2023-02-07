<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="icon" href="<?php echo base_url('assets/img/responsabilite-sociale.png'); ?>">
    <title>Gestion d'objet</title>
</head>
<body>
    <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Voici vos Objets</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Ici vous pouvez apporter des modifications</p>
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
                            <img class="card-img-top" src="<?php echo base_url('assets/img/macbook.png'); ?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h4 class="fw-bolder"><strong><?php echo $objet['nom']; ?></strong></h4>
                                    <!-- Product price-->
                                    <?php echo $objet['prix']; ?>
                                    <br>
                                    <br>
                                </div>
                                <!-- Product description-->
                                <p><strong>Description: </strong><?php echo $objet['descr']; ?></p>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Modifier</a></div>
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