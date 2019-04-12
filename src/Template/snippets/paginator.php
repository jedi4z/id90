<nav>
    <ul class="pagination">
        <?php foreach (range(1, $meta['total_pages']) as $pageNumber) : ?>
            <?php
                $pageLink = sprintf(
                    '?destination=%s&daterange=%s&guests=%s&page=%s',
                    $destination,
                    $daterange,
                    $guests,
                    $pageNumber
                );
            ?>
            <li class="page-item <?php if($meta['page'] == $pageNumber) : ?>active<?php endif; ?>">
                <a class="page-link" href="<?= $pageLink ?>">
                    <?= $pageNumber ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>
