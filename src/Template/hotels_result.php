<!doctype html>
<html lang="es">

<?php include_once 'snippets/head.php' ?>

<body class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-10">
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
                                        <small class="text-muted">
                                            Final price for <?= $hotel['nights'] ?> nights.
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>

<?php include_once 'snippets/scripts.php' ?>
</html>
