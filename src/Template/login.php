<!doctype html>
<html lang="es">

<?php include_once 'snippets/head.php' ?>

<body class="bg-dark">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center text-white mb-4">ID90 Travel</h2>
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="mb-0">Login</h3>
                            </div>
                            <div class="card-body">
                                <form action="/login" method="POST" class="form" role="form" autocomplete="off">
                                    <div class="form-group">
                                        <label for="airline">Airline</label>
                                        <select name="airline" id="airline" class="form-control form-control-md">
                                            <?php foreach ($airlines as $airline) : ?>
                                                <option value="<?= $airline['display_name'] ?>">
                                                    <?= $airline['display_name'] ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" name="username" value="halucas"
                                               id="username" class="form-control form-control-md" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" value="1234567"
                                               id="password" class="form-control form-control-md" required>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                   name="remember_me" id="remember_me">
                                            <label class="form-check-label" for="remember_me">
                                                Remember me
                                            </label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-md float-right">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<?php include_once 'snippets/scripts.php' ?>
</html>
