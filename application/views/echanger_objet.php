<section class="py-5 mt-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        <!-- Anazy -->
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="<?php echo base_url($objet['photo'][0]['photo']); ?>" alt="..." width="284px" height="177px"/>
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
                        <!-- Product property-->
                        <p><strong>Propriétaire: </strong><?php echo $objet['user']; ?></p>
                    </div>
                </div>
            </div>

        <!-- Fifanarahana -->
        
        <div class="col mb-5">
            <div class="h-100">
                <!-- Product image-->
                <img class="card-img-top" src="<?php echo base_url('assets/img/accept.png'); ?>" alt="..."/>
                <!-- Product details-->
                <div class="card-body p-4">
                    <div class="text-center">
                        <h4 class="fw-bolder"><strong>Proposer l'échange</strong></h4>
                        <br>
                        <br>
                        <!-- Proposition Button-->
                        <a href="<?php echo base_url('index.php/echange/envoyer?id=' . $id . '&&choix=' . $choix); ?>"><button class="btn btn-outline-success" type="submit">Proposer</button></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Anao -->
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="<?php echo base_url($objet_choice['photo'][0]['photo']); ?>" alt="..."  width="284px" height="177px"/>
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h4 class="fw-bolder"><strong><?php echo $objet_choice['nom']; ?></strong></h4>
                            <!-- Product price-->
                            <?php echo $objet_choice['prix']; ?>
                            <br>
                            <br>
                        </div>
                        <!-- Product description-->
                        <p><strong>Description: </strong><?php echo $objet_choice['descr']; ?></p>
                        <!-- Product property-->
                        <p><strong>Propriétaire: </strong>Vous</p>

                        <form method="get" action="<?php echo base_url('index.php/echange'); ?>" class="text-center">
                            <select class="selectpicker" name="choix">
                                <option selected>Choisissez un objet</option>
                                <?php foreach ($objets as $objet) { ?>
                                <option value="<?php echo $objet['id']; ?>"><?php echo $objet['nom']; ?></option>
                                <?php } ?>
                            </select>
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <button class="btn btn-outline-secondary mt-4" type="submit">Choisir</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>