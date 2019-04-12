<!doctype html>
<html lang="es">

<?php include_once 'snippets/head.php' ?>

<body class="bg-light">
    <?php include_once 'snippets/navbar.php' ?>

    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-md-3 mx-auto">
                <?php include_once 'snippets/searcher_form.php'?>
            </div>
            <div class="col-md-9 mx-auto">
                <?php if (empty($hotels)) : ?>
                    <div class="alert alert-danger" role="alert">
                        We can't find any hotel in "<?= $destination ?>" between <?= $daterange ?>
                    </div>
                <?php else : ?>
                    <?php foreach ($hotels as $hotel) : ?>
                        <div class="row mb-3">
                            <div class="col-12">
                                <div class="card">
                                    <div class="row no-gutters">
                                        <div class="col-md-3">
                                            <img src="<?= $hotel['image'] ?>" class="card-img" style="height: 100%">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <h6 class="card-title mb-0"><?= $hotel['name'] ?></h6>
                                                <p class="card-text text-muted"><?= $hotel['location']['city'] ?></p>
                                                <p class="card-text"><?= $hotel['location']['description'] ?></p>
                                                <p class="card-text"><?= $hotel['star_rating'] ?> Starts</p>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <h5 class="text-center mt-5 mb-0">
                                                <?= money_format('%i', $hotel['total']) ?>
                                            </h5>
                                            <small class="text-muted text-center">
                                                Final price for <?= $hotel['nights'] ?> nights.
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 offset-md-3">
                <?php include_once 'snippets/paginator.php' ?>
            </div>
        </div>
    </div>
</body>

<?php include_once 'snippets/scripts.php' ?>
</html>
