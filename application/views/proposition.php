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
        <?php foreach ($propositions as $proposition) { ?>

        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <!-- Anazy -->
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="<?php echo base_url($proposition['objet1']['photo'][0]['photo']); ?>" alt="..." width="284px"
                            height="177px" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h4 class="fw-bolder"><strong><?php echo $proposition['objet1']['nom']; ?></strong></h4>
                                <!-- Product price-->
                                <?php echo $proposition['objet1']['prix']; ?>
                                <br>
                                <br>
                            </div>
                            <!-- Product description-->
                            <p><strong>Description: </strong><?php echo $proposition['objet1']['descr']; ?></p>
                            <!-- Product property-->
                            <p><strong>Propriétaire: </strong><?php echo $proposition['objet1']['user']; ?></p>
                        </div>
                    </div>
                </div>

                <!-- Oui ou Non -->
                <div class="col mb-5">
                    <div class="h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="<?php echo base_url('assets/img/exchange.png'); ?>" alt="..."/>
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
                        <img class="card-img-top" src="<?php echo base_url($proposition['objet2']['photo'][0]['photo']); ?>" alt="..."
                            width="284px" height="177px" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h4 class="fw-bolder"><strong><?php echo $proposition['objet2']['nom']; ?></strong></h4>
                                <!-- Product price-->
                                <?php echo $proposition['objet2']['prix']; ?>
                                <br>
                                <br>
                            </div>
                            <!-- Product description-->
                            <p><strong>Description: </strong><?php echo $proposition['objet2']['descr']; ?></p>
                            <!-- Product property-->
                            <p><strong>Propriétaire: </strong>Vous</p>
                        </div>
                    </div>
                </div>        
            </div>
        </div>
        
        <?php } ?>
    </section>