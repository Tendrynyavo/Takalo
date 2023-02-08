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
    <section class="py-5" id="form">
        <div class="container px-4 px-lg-5 mt-1">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">
                    <legend class="text-center">MacBook</legend>
                    <!-- Product image-->
                    <a href="#">
                        <img class="card-img-top" src="<?php echo base_url('assets/img/macbook.png'); ?>" alt="..." />
                    </a>

                        <!-- Product details-->
                        <div class="card-body p-4">
                                <form method="post" action="<?php echo base_url('index.php/objet/modifier'); ?>">
                                    
                                    <div class="form-group m-2">
                                        <label for="nom">Nom de Votre Objet</label>
                                        <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $objet->nom; ?>">
                                    </div>
                                    
                                    <div class="form-group m-2">
                                        <label for="text">Son Prix Estimatif</label>
                                        <input type="text" class="form-control" id="text" name="prix" value="<?php echo $objet->prix; ?>">
                                    </div>

                                    <div class="form-group m-2">
                                        <label for="bio">Description</label>
                                        <p><textarea class="form-control" id="bio" rows="3" name="descr"><?php echo $objet->descr; ?></textarea></p>
                                    </div>
                                    <input type="hidden" name="id" value="<?php echo $objet->id; ?>">
                                    <?php if ($error != null) { ?>
                                    <h3 class="text-danger"><?php echo $error; ?></h3>    
                                    <?php } ?>
                                    <input type="submit" value="Confirmer" class="btn btn-outline-success mt-auto"></a>
                                </form>
                            <a class="btn btn-outline-danger mt-2" href="<?php echo base_url('index.php/objet/supprimer'); ?>">Supprimer ce Produit</a>
                        </div>
                    </div>
            </div>  
            </div>
        </div>
    </section>