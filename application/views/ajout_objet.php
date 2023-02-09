<!-- PAGE AJOUTER OBJET -->     <!-- PAGE AJOUTER OBJET -->     <!-- PAGE AJOUTER OBJET -->

<!-- Header-->
<header class="bg-dark pt-5 pb-2">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Bienvenue</h1>
            <p class="lead fw-normal text-white-50 mb-0">Ici vous pouvez ajouter un objet à échanger</p>
        </div>
    </div>
</header>

<!-- Section-->
<section class="py-5" id="form">
    <div class="container px-4 px-lg-5 mt-0">
        <div class=" row gx-4 row-cols-xl-2 justify-content-center">
            <div class="col mb-5">
                <div class="card h-100">

                    <div class="text-center">
                        <img class="card-img-top w-25" src="<?php echo base_url('assets/img/upload.png'); ?>" alt="..." />
                        <legend class="text-center">Ajoutez votre objet</legend>
                    </div>
                    <!-- Product details-->
                    <div class="card-body p-4 pt-0">
                        <form method='post' action='<?php echo base_url('index.php/objet/ajouter'); ?>'
                        enctype='multipart/form-data'>
                            <!-- NOM -->
                            <div class="form-group m-2">
                                <label for="nom">Nom de Votre Objet</label>
                                <input type="text" class="form-control" id="nom" name="nom" value="" placeholder="Entrer le nom de votre objet">
                            </div>
                            <!-- PRIX -->
                            <div class="form-group m-2">
                                <label for="text">Son Prix Estimatif</label>
                                <input type="text" class="form-control" id="text" name="prix" value="" placeholder="Evaluer son prix estimatif">
                            </div>
                            <!-- DESCRIPTION -->
                            <div class="form-group m-2">
                                <label for="bio">Description</label>
                                <p><textarea class="form-control" id="bio" rows="3" name="descr"></textarea></p>
                            </div>
                            <!-- PHOTO -->
                            <div class="form-group m-2">
                                <label for="fileToUpload">Ajoutez une image</label>
                                <br>
                                <head>
                                <input type="file" name="file" class="form-control" id="fileToUpload">
                            </div>
                            <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                            <input type="submit" value="Valider" name="upload" class="btn btn-outline-primary ms-2 mt-3">
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>