<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MascoTienda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles.css">
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin&family=Lato:wght@300;400&family=Poppins&display=swap"
      rel="stylesheet">

  </head>

  <body>
    <?php
      $user = 'root';
      $password = '';
      $db = 'mascotienda';
      $host = 'localhost';
      $port = 3306;
      $conn = new mysqli($host, $user, $password, $db, $port);
      $id = $_GET['id'];
      $sql = "SELECT * FROM productos where id_producto = '$id'";
      $result = $conn->query($sql);
      $row = $result->fetch_assoc();
    ?>
    <div class="container">
      <nav class="navbar navbar-expand-lg border-bottom">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a href="./index.php" class="navbar-brand">
            <img src="./images/logo.png" alt="" id="logo" height="33px" width="47px">
          </a>
          <a class="navbar-brand" href="./index.php">MascoTienda</a>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item mx-4">
                <a class="nav-link" aria-current="page" href="./index.php">Inicio</a>
              </li>
              <li class="nav-item mx-4">
                <a class="nav-link" href="#">Articulos</a>
              </li>
              <li class="nav-item mx-4">
                <div class="dropdown">
                  <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Categorías
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="./category.php">Gatos</a></li>
                    <li><a class="dropdown-item" href="./category.php">Peces</a></li>
                    <li><a class="dropdown-item" href="./category.php">Perros</a></li>
                    <li><a class="dropdown-item" href="./category.php">Juguetes</a></li>
                    <li><a class="dropdown-item" href="./category.php">Comida</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item mx-4">
                <a class="nav-link" href="#">Contacto</a>
              </li>
            </ul>
            <form class="d-flex flex-grow-1" role="search">
              <div class="input_icon">
                <input class="form-control me-2" type="search" placeholder="Buscar temas" aria-label="Search">
                <i class="fas fa-search icon"></i>
              </div>
            </form>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-5 ms-auto">
              <li class="nav-item">
                <a href="./shoppingCart.php" class="nav-link"><i class="fas fa-regular fa-cart-shopping"
                    style="color: #07a081;"></i> Carrito</a>
              </li>
              <li class="nav-item mx">
                <a href="#" class="nav-link"><i class="fas fa-user" style="color:#000000"></i> Perfil</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container mt-3">
        <div class="row">
          <nav
            style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item nav-item"><a href="#" class="nav-link">Perros</a></li>
              <li class="breadcrumb-item nav-link" aria-current="page">Juguetes</li>
            </ol>
          </nav>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="aspect-ratio-container aspect-ratio-16-9">
              <img src="<?php echo $row['foto']?>" alt="" class="aspect-ratio-content img-fluid"
                style="border-radius: 22px;">
            </div>
          </div>
          <div class="col-md-6">
            <div class="descriptionContainer">
              <h2 class="mb-4"><?php echo $row['nombre']?>
              </h2>
              <div class="priceReviews">
                <span class="priceTag">$<?php echo $row['precio']?></span>
                <div class="reviews">
                  <i class="fa-solid fa-star" style="color: #FFDF00;"></i>
                  <i class="fa-solid fa-star" style="color: #FFDF00;"></i>
                  <i class="fa-solid fa-star" style="color: #FFDF00;"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                </div>
              </div>
              <span class="productDetailTitle">Acerca de este articulo</span>
              <p class="text-muted" style="text-align: justify;">
                <?php echo $row['descripcion']?>
              </p>
              <div class="d-flex justify-content-start">
                <button class="btn btn-primary send-form">Agregar al carrito</button>
              </div>
              <div class="mt-4">
                <span class="productDetailTitle">Cantidad</span>
                <select name="" id="" class="form-select">
                  <option value="">1</option>
                  <option value="">2</option>
                  <option value="">3</option>
                  <option value="">4</option>
                  <option value="">5</option>
                  <option value="">6</option>
                  <option value="">7</option>
                  <option value="">8</option>
                  <option value="">9</option>
                  <option value="">10</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <h2 class="productDetailTitle text-center mt-5">Productos comprados juntos habitualmente</h2>
          <div class="buyWith">
            <div class="d-flex justify-content-center">
              <img src="./images/carnazas perro.jpeg" alt="">
              <p>Barkers Club Health Omega Carnaza en Forma de Palitos para Perro Receta de Res, 25 Piezas</p>
            </div>
            <div class="mx-5">
              <span class="plus">+</span>
            </div>
            <div class="d-flex justify-content-center">
              <img src="./images/comida en latada perro.jpeg" alt="">
              <p class="">Royal Canin Alimento Húmedo para Perro Adulto Todas las Razas Receta Pollo, 385 g</p>
            </div>
            <button class="btn text-light  buyWithButton">Agregar al carrito</button>
          </div>
        </div>
      </div>

    </div>
    <footer class="mt-5">
      <div class="d-flex justify-content-evenly pt-5 border-bottom">
        <h2>Acerca de</h2>
        <h2>Soporte</h2>
        <h2>Contactanos</h2>
      </div>
      <div class="d-flex justify-content-center">
        <p>© 2023. MascoTienda Todos los derechos reservados</p>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/4b777ceb0e.js" crossorigin="anonymous"></script>
  </body>

</html>