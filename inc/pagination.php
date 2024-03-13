<div class="page-info">
    <?php
    if (!isset($_GET["page"])) {
        $page = 1;
    } else {
        $page = $_GET["page"];
    }
    ?>
    Page <?= $page ?> of <?= $pages ?>
</div>
<div class="pagination">
    <a href="?page=1" class='link'>First</a>
    <?php
    if (isset($_GET["page"]) && $_GET["page"] > 1) {
    ?>
        <a href="?page=<?= $_GET["page"] - 1 ?>" class='link'>Previous</a>
    <?php
    } else {
    ?>
        <a class='link'>Previous</a>
    <?php
    }
    ?>

    <div class="page-numbers">
        <?php
        for ($counter = 1; $counter <= $pages; $counter++) {
        ?>
            <a href="?page=<?= $counter ?>" class='link'><?= $counter ?></a>
        <?php
        }
        ?>
    </div>
    <?php
    if (!isset($_GET["page"])) {
    ?>
        <a href="?page=2" class='link'>Next</a>
        <?php
    } else {
        if ($_GET["page"] >= $pages) {
        ?>
            <a class='link'>Next</a>
        <?php
        } else {
        ?>
            <a href="?page=<?= $_GET["page"] + 1 ?>" class='link'>Next</a>
    <?php
        }
    }
    ?>

    <a href="?page=<?= $pages ?>" class='link'>Last</a>
</div>