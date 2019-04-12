<form action="/secure/hotels/search" method="GET" autocomplete="off">
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label for="destination">Destination</label>
                <input type="text" name="destination" id="destination"
                       class="form-control" value="<?= $destination ?>" required>
            </div>
            <div class="form-group">
                <label for="daterange">Dates</label>
                <input type="text" name="daterange" id="daterange"
                       class="form-control" value="<?= $daterange ?>" required>
            </div>
            <div class="form-group">
                <label for="guests">Guests</label>
                <select name="guests" id="guests" class="form-control">
                    <?php foreach (range(1, 5) as $g) : ?>
                        <option value="<?= $g ?>" <?php if ($g == $guests) : ?>selected<?php endif; ?>><?= $g ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="card-footer">
            <input type="hidden" value="1" name="page" id="page">
            <button type="submit" class="btn btn-success btn-md float-right">Search</button>
        </div>
    </div>
</form>
