<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MascoTienda</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="./styles.css">
  <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <script src="https://js.stripe.com/v3/"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cabin&family=Lato:wght@300;400&family=Poppins&display=swap" rel="stylesheet">

</head>

<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg border-bottom">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
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
  </div>
  <div class="container mt-3">
    <h2 class="content_title">Carrito de compras</h2>
    <form action="./checkout.php" method="post">

      <?php
      $user = 'root';
      $password = '';
      $db = 'mascotienda';
      $host = 'localhost';
      $port = 3306;
      $conn = new mysqli($host, $user, $password, $db, $port);
      $sql = "SELECT * FROM carrito INNER JOIN productos ON carrito.id_producto = productos.id_producto";
      $result = $conn->query($sql);
      while ($rowCarrito = $result->fetch_assoc()) {
        if ($result->num_rows > 0) {
          echo ('
        <div class="row" id="shopingContainer">
        <div class="col-3">
        <img src="' . $rowCarrito["foto"] . '" alt="imagen del producto" class="img-fluid">
        </div>
          <div class="col-3">
            <h4>' . $rowCarrito["nombre"] . '</h4>
          </div>
          <div class="col-3">
          <select name="cantidad" id="" class="form-select">
          <option value="1" ' . ($rowCarrito["cantidad"] == 1 ?  "selected" :  "") . '>1</option>
          <option value="2" ' . ($rowCarrito["cantidad"] == 2 ? 'selected' : '') . '>2</option>
          <option value="3" ' . ($rowCarrito["cantidad"] == 3 ? 'selected' : '') . '>3</option>
          <option value="4" ' . ($rowCarrito["cantidad"] == 4 ? 'selected' : '') . '>4</option>
          <option value="5" ' . ($rowCarrito["cantidad"] == 5 ? 'selected' : '') . '>5</option>
          <option value="6" ' . ($rowCarrito["cantidad"] == 6 ? 'selected' : '') . '>6</option>
          <option value="7" ' . ($rowCarrito["cantidad"] == 7 ? 'selected' : '') . '>7</option>
          <option value="8" ' . ($rowCarrito["cantidad"] == 8 ? 'selected' : '') . '>8</option>
          <option value="9" ' . ($rowCarrito["cantidad"] == 9 ? 'selected' : '') . '>9</option>
          <option value="10" ' . ($rowCarrito["cantidad"] == 10 ? 'selected' : '') . '>10</option>
          </select>
          </div>
          <div class="col-3">
          <h4 class="productPrice">' . $rowCarrito["precio"] . '</h4>
          </div>
          </div>
          ');
        } else {
          echo "Tu carrito esta vacio";
        }
      }
      ?>
      <h4 class="text-end" id="total"></h4>
      <input type="hidden" name="totalPrice">
      <button class="btn btn-primary send-form" id="checkout" type="submit">Proceder al pago</button>
    </form>

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
  <script src="./app.js"></script>
</body>

</html>