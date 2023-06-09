<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MascoTienda - Inicio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
  <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cabin&family=Lato:wght@300;400&family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
  <!-- Navigation bar -->
  <div class="container">

    <nav class="navbar navbar-expand-lg border-bottom">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a href="#" class="navbar-brand">
          <img src="./images/logo.png" alt="" id="logo" height="33px" width="47px">
        </a>
        <a class="navbar-brand" href="#">MascoTienda</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item mx-4">
              <a class="nav-link" aria-current="page" href="#">Inicio</a>
            </li>
            <li class="nav-item mx-4">
              <a class="nav-link" href="#">Articulos</a>
            </li>
            <li class="nav-item mx-4">
              <div class="dropdown">
                <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
              <a href="./shoppingCart.php" class="nav-link"><i class="fas fa-regular fa-cart-shopping" style="color: #07a081;"></i> Carrito</a>
            </li>
            <li class="nav-item mx">
              <a href="#" class="nav-link"><i class="fas fa-user" style="color:#000000"></i> Perfil</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div id="video_container">
      <video autoplay loop muted>
        <source src="./images/banner for website.mp4" type="video/mp4">
      </video>
    </div>
    <h2 class="text-center" class="content_title">Elige la categoria</h2>
    <p class="text-center">Elige para que mascota quieres comprar o bien busca entre todos nuestros productos</p>
    <div class="container">
      <div class="row category_row" style="display:flex; justify-content:space-between;">
        <div class="col-2 text-center category">
          <img src="./images/cat_category.jpg" alt="Gatos" class="category_image">
          <h3>Gatos</h3>
        </div>
        <div class="col-2 text-center category">
          <img src="./images/fish_category.jpg" alt="Peces" class="category_image">
          <h3>Peces</h3>
        </div>
        <div class="col-2 text-center category">
          <img src="./images/dog_category.jpg" alt="Juguetes" class="category_image">
          <h3>Perros</h3>
        </div>
        <div class="col-2 text-center category">
          <img src="./images/toys_category.jpg" alt="Perros" class="category_image">
          <h3>Juguetes</h3>
        </div>
        <div class="col-2 text-center category">
          <img src="./images/food_category.jpg" alt="Comida" class="category_image">
          <h3>Comida</h3>
        </div>
      </div>
    </div>
    <h2 class="content_title text-center mt-5">Todos los productos</h2>

    <!-- PRODUCTOS -->
    <div class="container mt-3" id="productRowContainer">
      <div class="row d-flex" id="products_row">
        <?php
        $user = 'root';
        $password = '';
        $db = 'mascotienda';
        $host = 'localhost';
        $port = 3306;
        $conn = new mysqli($host, $user, $password, $db, $port);
        if ($conn->connect_error) {
          die('Connection failed: ' . $conn->connect_error);
        }
        $sql = 'SELECT * FROM productos';
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
          echo ('<div  class="col-3">
            <div class="card" style="width: 18rem;">
              <img src="' . $row["foto"] . '" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title">' . $row["nombre"] . '</h5>
                <p class="card-text">$' . $row["precio"] . '</p>
                <form method="get" action="./product.php">
                  <input type="hidden" name="id" value="' . $row["id_producto"] . '">
                  <button type="submit" class="btn btn-primary">Ver mas</button>
                </form>
              </div>
            </div>
          </div>');
        }
        ?>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/4b777ceb0e.js" crossorigin="anonymous"></script>
</body>

</html>