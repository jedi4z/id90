<?php include_once 'snippets/header.php'?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <select name="airline" id="airline">
                <?php foreach ($airlines as $airline) : ?>
                    <option value="<?= $airline['display_name'] ?>">
                        <?= $airline['display_name'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
</div>

<?php include_once 'snippets/footer.php'?>
