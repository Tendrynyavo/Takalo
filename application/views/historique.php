<!-- PAGE Historique -->     <!-- PAGE Historique -->     <!-- PAGE Historique -->

<!-- Header-->
    <header class="bg-dark pt-5 pb-2">
        <div class="container px-4 px-lg-5 mt-5 mb-2">
            <div class="text-center text-white">
                <h2 class="fw-bolder">Historique D'échange</h2>
            </div>
        </div>
    </header>

<section>
    <div class="container py-4 py-xl-5">
        <div class="row row-cols-1 row-cols-md-2">
            <?php foreach ($histories as $history) { ?>
            <div class="col-xl-6 d-flex flex-column justify-content-center p-4">
                <div class="text-center"><Strong><h5 class="text-info">Ancien Propriétaire</h5></Strong> <br><p class="text-dark"><?php echo $history['nom']; ?></p></div>
            </div>
            <div class="col-xl-6 d-flex flex-column justify-content-center p-4">
                <div class="text-center"><Strong><h5 class="text-info">Date d'échange</h5></Strong> <br><p class="text-dark"><?php echo $history['date']; ?></p></div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>