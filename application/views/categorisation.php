<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css')?>">
    <link rel="icon" href="<?= base_url('assets/img/responsabilite-sociale.png')?>">
    <title>Catégorisation</title>
</head>
<body>
    <nav id="mainNav" class="navbar navbar-light navbar-expand-md fixed-top navbar-shrink py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="<?= base_url('assets/img/logo.png')?>" width="35px" height="35px">
                <span>Takalo Takalo</span>
            </a>
            <div id="navcol-1" class="collapse navbar-collapse">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Admin Logged In</a></li>
                </ul>

                <a class="btn btn-danger shadow" role="button" href="#">Log Out</a>
            </div>
        </div>
    </nav>
    <section class="py-4 py-md-5 my-5">
        <div class="container py-md-5">
            <div class="card-body">
                <p>Objet à catégoriser:
                    <h3 class="text-dark mb-4"><?=$objet['nom'] ?></h3>
                </p>
                <div class="card shadow"></div>
                <br>
            </div>
                <div class="container-fluid">
                    <div class="card shadow">
                        <div class="card-body" style="padding-right: 20px;padding-left: 20px;margin-right: 415px;">
                            <h3>Choisir la Catégorie :</h3>
                            <form method="post" action="<?= base_url('index.php/categorie/update') ?>">
                                <select name="categorie">
                                    <optgroup label="Catégories">
                                        <?php foreach ($categories as $categorie) { ?>
                                        <option value="<?=$categorie['id'] ?>" <?php if ($categorie['id'] == $objet['idCategorie']) echo "selected"; ?>><?=$categorie['nom'] ?></option>
                                        <?php } ?>
                                    </optgroup>
                                </select>
                                <input type="hidden" name="objet" value="<?=$objet['id'] ?>">
                                <br>
                                <br>
                                <input type="submit" value="Valider" class="btn btn-success shadow w-25 text-decoration-none text-white">
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
</body>
</html>