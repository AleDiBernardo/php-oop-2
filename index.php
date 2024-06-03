<?php

require_once __DIR__ . "/models/product.php";
require_once __DIR__ . "/models/food.php";
require_once __DIR__ . "/models/catalog.php";
require_once __DIR__ . "/models/toy.php";


$catalog = new Catalog();

$food1 = new Food("Cibo per gatto", 14, "Gatti", "https://picsum.photos/200/150?random=1", "2024-03-10", 500);
$food1->setDescription("I'm from India, here food is good");

$toy1 = new Toy("Ball", 23, "All", "https://picsum.photos/200/150?random=2", "Plastic", false);
$toy2 = new Toy("Bone", 10, "All", "https://picsum.photos/200/150?random=3", "Plastic", false);



$catalog->addProduct($food1);
$catalog->addProduct($toy2);
$catalog->addProduct($toy1);
$catalog->addProduct($food1);
$catalog->addProduct($toy2);
$catalog->addProduct($toy1);
$catalog->addProduct($food1);
$catalog->addProduct($toy2);
$catalog->addProduct($toy1);
$catalog->addProduct($food1);
$catalog->addProduct($toy2);
$catalog->addProduct($toy1);




// var_dump($catalog->getAllProduct());

// var_dump($product1);
// var_dump($food1);
// var_dump($toy1);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/style.css" />
    <title>Shop</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">AmazzaCheShop</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </li>
                </ul>
              </li>
              
            </ul>
            <form class="d-flex" role="search">
              <input
                class="form-control me-2"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="btn btn-outline-success" type="submit">
                Search
              </button>
            </form>
          </div>
        </div>
      </nav>
    </header>

    <main>
        <div class="container h-100 w-100 justify-content-center pt-5 pb-5">
            <div class="row row-cols-lg-4 row-cols-md-3 row-cols-1 g-4">
                <?php foreach ($catalog->getAllProduct() as $product) {?>
                    <div class="col">
                        <div class="card h-100 w-100">
                            <img src="<?= $product->getImage()?>" class="card-img-top" alt="...">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <h5 class="card-title fw-bold"><?= $product->getName() ?></h5>
                                <span class="prod-price"><?= $product->getPrice()?></span>
                                <p class="card-text"><?= $product->getDescription()?></p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </main>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
