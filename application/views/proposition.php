<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="icon" href="<?= base_url('assets/img/responsabilite-sociale.png') ?>">
    <title>Proposition</title>
</head>

<body>

    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Voici Quelques Propositions</h1>
                <p class="lead fw-normal text-white-50 mb-0">Acceptez ou Refusez ces Propositions par les autres utilisateurs</p>
            </div>
        </div>
    </header>

    <!-- Section-->
    <section class="py-5">
        <?php for ($i=0; $i < 5; $i++) { ?>

        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <!-- Anazy -->
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="<?= base_url('assets/img/basket.png') ?>" alt="..." width="284px"
                            height="177px" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h4 class="fw-bolder"><strong>Nike</strong></h4>
                                <!-- Product price-->
                                $80
                                <br>
                                <br>
                            </div>
                            <!-- Product description-->
                            <p><strong>Description: </strong>Air Force One amle vrai marque fa tsy Andouram</p>
                            <!-- Product property-->
                            <p><strong>Propriétaire: </strong>Ilohity</p>
                        </div>
                    </div>
                </div>

                <!-- Oui ou Non -->
                <div class="col mb-5">
                    <div class="h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="<?= base_url('assets/img/exchange.png') ?>" alt="..."/>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Action Button-->
                                <button class="btn btn-outline-success" type="submit">Accepter</button>
                                <button class="btn btn-outline-danger" type="submit">Refuser</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Anao -->
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="<?= base_url('assets/img/macbook.png') ?>" alt="..."
                            width="284px" height="177px" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h4 class="fw-bolder"><strong>MacBook</strong></h4>
                                <!-- Product price-->
                                $2400
                                <br>
                                <br>
                            </div>
                            <!-- Product description-->
                            <p><strong>Description: </strong>M2 Pro tena hiaka farany an'ny Apple</p>
                            <!-- Product property-->
                            <p><strong>Propriétaire: </strong>Vous</p>
                        </div>
                    </div>
                </div>        
            </div>
        </div>
        
        <?php } ?>
    </section>


    <script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>