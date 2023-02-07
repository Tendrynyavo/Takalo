<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css')?>">
    <link rel="icon" href="<?= base_url('assets/img/responsabilite-sociale.png')?>">
    <title>Login Takalo Takalo</title>
</head>
<body>

<section class="py-4 py-md-5 my-5">
    <div class="container py-md-5">
        <div class="row">
            <div class="col-md-6 text-center"><img class="img-fluid w-100" src="#" /></div>
            <div class="col-md-5 col-xl-4 text-center text-md-start">
                <h2 class="display-6 fw-bold mb-5"><span class="underline pb-1"><strong>Login</strong><br /></span></h2>
                <form method="post">
                    <div class="mb-3"><input class="shadow form-control" type="email" name="email" placeholder="Email" /></div>
                    <div class="mb-3"><input class="shadow form-control" type="password" name="password" placeholder="Password" /></div>
                    <div class="mb-5"><button class="btn btn-primary shadow" type="submit">Log in</button></div>
                    <p class="text-muted"></p>
                </form>
            </div>
        </div>
    </div>
</section>

    <script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
</body>
</html>