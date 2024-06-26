<?php

require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Kennel.php';
require_once __DIR__ . '/Models/Toy.php';

$productsList = [];

//primo prodotto
$product1 = new Food('Croccantini', 'dog');
$product1->setWeight(10.58);
$product1->setSize('medium');
$product1->setFlavor('chicken');
$product1->setProduct();
$product1->setPrice(35.89);
$product1->setImageUrl('https://www.bauzaar.it/media/catalog/product/g/r/grafiche-magento-bauzaar_-_2023-09-13t163825.488.jpg?width=700&height=700&store=default&image-type=image');

$productsList[] = $product1;
//var_dump($product1);

//secondo prodotto
$product2 = new Toy('Tiragraffi', 'cat');
$product2->setWeight(5.02);
$product2->setSize('big');
$product2->setNoise(false);
$product2->setColor('green');
$product2->setProduct();
$product2->setPrice(12.56);
$product2->setImageUrl('https://pelosamici.com/cdn/shop/files/H9941aa699ef04ef1b1134c2994d765ces.webp?v=1713534098');

$productsList[] = $product2;
//var_dump($product2);

//terzo prodotto
$product3 = new Kennel('Cuccia di legno', 'dog');
$product3->setSize('big');
$product3->setColor('brown');
$product3->setProduct();
$product3->setPrice(132.76);
$product3->setImageUrl('https://www.ilverdemondo.it/public/catalog/product/medium/cucce-per-cani-in-legno-000.jpg');

$productsList[] = $product3;
//var_dump($product3);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--link to stylesheets-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>OOP Shop</title>
</head>
<body>

    <div class="container">

        <div class="row">

            <div class="col">

                <?php

                    foreach ($productsList as $product) : ?>

                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo $product->getImageUrl() ?>" class="card-img-top" alt="<?php echo $product->getName() ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $product->getName() ?></h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        
                    <?php endforeach;

                ?>

            </div>

        </div>

    </div>
    
</body>
</html>