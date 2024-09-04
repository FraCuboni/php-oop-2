<?php

// collegamenti
require_once __DIR__ . '/Models/Products.php';
require_once __DIR__ . '/Models/CatProducts.php';
require_once __DIR__ . '/Models/DogProducts.php';
require_once __DIR__ . '/data/db.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cats&Dogs</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row">
            <!-- inizio foreach -->
            <?php
            foreach ($db as $product):
            ?>
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        <h5><?php  ?></h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo $product->getProductName()  ?></li>
                        <li class="list-group-item"><?php echo $product->getProductPrice()  ?></li>
                        <li class="list-group-item"><?php echo $product->getProductDescription()  ?></li>
                        <li class="list-group-item"><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><?php echo $product->getProductLink()  ?></a></li>
                        <li class="list-group-item"><?php echo $product->type  ?></li>
                    </ul>
                </div>
            <?php endforeach; ?>
            <!-- fine foreach -->
        </div>
    </div>
</body>

</html>