<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css')?>">
    <link rel="icon" href="<?= base_url('assets/img/responsabilite-sociale.png')?>">
    <title>Gestion d'objet</title>
</head>
<body>
    <nav id="mainNav" class="bg-light navbar navbar-light navbar-expand-md fixed-top navbar-shrink py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="<?= base_url('assets/img/logo.png')?>" width="35px" height="35px">
                <span>Takalo Takalo</span>
            </a>
            <div id="navbarResponsive" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#">Liste Objet</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#">Echanges</a></li>
                </ul>
                
                <ul class="navbar-nav mx-auto">
                <img src="<?= base_url('assets/img/user.png')?>" width="35px" height="35px">
                    <li class="nav-item"><a class="nav-link" href="#">Tendry</a></li>
                </ul>

                <a class="btn btn-danger shadow" role="button" href="#">Se Déconnecter</a>
            </div>
        </div>
    </nav>
    <section class="py-4 py-md-5 my-5">
        <div class="container py-md-5">
            <div class="card-body">
                <div class="row">
                    <h2 class="display-6 fw-bold mb-5"><span class="underline pb-1"><strong>Gestion d'Objet</strong><br /></span></h2>
                </div>
            </div>
            <div class="card-body">
                <div id="dataTable" class="table-responsive table mt-2" role="grid" aria-describedby="dataTable_info">
                    <table id="dataTable" class="table my-0">
                        <thead>
                            <tr>
                                <th>Nom Produit</th>
                                <th>Catégorie</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>iPhone</td>
                                <td>Néant</td>
                                <td><button class="btn btn-secondary shadow" type="button">Catégoriser</button></td>
                            </tr>
                            <tr>
                                <td>MacBook</td>
                                <td>Néant</td>
                                <td><button class="btn btn-secondary shadow" type="button">Catégoriser</button></td>
                            </tr>
                            <tr>
                                <td>Tee-Shirt</td>
                                <td>Néant<br /></td>
                                <td><button class="btn btn-secondary shadow" type="button">Catégoriser</button></td>
                            </tr>
                            <tr>
                                <td>Autocolants</td>
                                <td>Néant<br /></td>
                                <td><button class="btn btn-secondary shadow" type="button">Catégoriser</button></td>
                            </tr>
                            <tr>
                                <td>Chargeur</td>
                                <td>Néant</td>
                                <td><button class="btn btn-secondary shadow" type="button">Catégoriser</button></td>
                            </tr>
                            <tr>
                                <td>Tomobile Kely</td>
                                <td>Néant<br /></td>
                                <td><button class="btn btn-secondary shadow" type="button">Catégoriser</button></td>
                            </tr>
                            <tr>
                                <td>Saribakoly</td>
                                <td>Néant<br /></td>
                                <td><button class="btn btn-secondary shadow" type="button">Catégoriser</button></td>
                            </tr>
                            <tr>
                                <td>Kanety</td>
                                <td>Néant<br /></td>
                                <td><button class="btn btn-secondary shadow" type="button">Catégoriser</button></td>
                            </tr>
                            <tr>
                                <td>Lovako</td>
                                <td>Néant<br /></td>
                                <td><button class="btn btn-secondary shadow" type="button">Catégoriser</button></td>
                            </tr>
                            <tr>
                                <td>Ohabolana Malagasy</td>
                                <td>Néant<br /></td>
                                <td><button class="btn btn-secondary shadow" type="button">Catégoriser</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    

    <script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
</body>
</html>