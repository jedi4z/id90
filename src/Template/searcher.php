<!doctype html>
<html lang="es">

<?php include_once 'snippets/head.php' ?>

<body class="bg-dark">
<div class="container py-5">
    <div class="row">
        <div class="col-10 mx-auto">
            <form action="/secure/hotels/search" method="GET">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Book your Hotel</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="destination">Destination</label>
                                <input type="text" name="destination" id="destination"
                                       class="form-control" placeholder="Enter a city" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="daterange">Dates</label>
                                <input type="text" class="form-control" name="daterange" id="daterange" required>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="guests">Guests</label>
                                <select name="guests" id="guests" class="form-control">
                                    <?php foreach (range(1, 5) as $guests) : ?>
                                        <option value="<?= $guests ?>"><?= $guests ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success btn-md float-right">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>

<?php include_once 'snippets/scripts.php' ?>

<script>
    $(function() {
        $('input[name="daterange"]').daterangepicker({
            locale: {
                format: 'DD/MM/YYYY'
            }
        });
    });
</script>
</html>
