<?php include "inc/script.php" ?>
<?php include "inc/functions.inc.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination</title>
</head>

<body>
    <div class="container">
        <h1 class="fw-bold">Pagination Demo</h1>
        <?php require "inc/pagination.php" ?>

        <div class="content">
            <?php $result = $stmt->fetchAll() ?>
            <?php display_record_table($result) ?>
        </div>

        <?php require "inc/pagination.php" ?>
    </div>
</body>

</html>