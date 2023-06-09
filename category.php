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
    </nav>    <div class="container mt-3">
      <div class="row d-flex">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item nav-item"><a href="#" class="nav-link">Perros</a></li>
            <li class="breadcrumb-item nav-link" aria-current="page">Comida</li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-4">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Marca
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div><input type="checkbox" name="" id="">
                    <label for="" class="form-label">Royal canin</label>
                  </div>
                  <div><input type="checkbox" name="" id="">
                    <label for="" class="form-label">Pro Plan</label>
                  </div>
                  <div><input type="checkbox" name="" id="">
                    <label for="" class="form-label">Barkers Club</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Precio
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul class="list-group">
                    <li class="list-group-item">Hasta $600</li>
                    <li class="list-group-item">$650 a $1000</li>
                    <li class="list-group-item">Mas de $1000</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Tipo de envio
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Gratis
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Express
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-8">
          <div class="row d-flex" id="products_row">
            <div class="col-6">
              <div class="card" style="width: 18rem;">
                <img src="./images/carnazas perro.jpeg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title">Barkers Club Health Omega Carnaza en Forma de Palitos para Perro Receta de Res, 25 Piezas</h5>
                  <p class="card-text">$65.00</p>
                  <a href="./product.php" class="btn btn-primary">Ver mas</a>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="card" style="width: 18rem;">
                <img src="./images/comida en latada perro.jpeg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title">Royal Canin Alimento Húmedo para Perro Adulto Todas las Razas Receta Pollo, 385 g</h5>
                  <p class="card-text">$95.00</p>
                  <a href="./product.php" class="btn btn-primary">Ver mas</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row d-flex" id="products_row">
            <div class="col-6">
              <div class="card" style="width: 18rem;">
                <img src="./images/costal perro 2.jpeg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title">Royal Canin Alimento Seco para Perro Adulto Raza Mediana, 13.6 kg</h5>
                  <p class="card-text">$2007.00</p>
                  <a href="./product.php" class="btn btn-primary">Ver mas</a>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="card" style="width: 18rem;">
                <img src="./images/Costal Perro.jpeg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title">Pro Plan Optihealth Alimento Seco para Perro Adulto Raza Mediana Receta Pollo y Arroz, 13 kg</h5>
                  <p class="card-text">$1622.00</p>
                  <a href="./product.php" class="btn btn-primary">Ver mas</a>
                </div>
              </div>
            </div>
          </div>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/4b777ceb0e.js" crossorigin="anonymous"></script>
</body>

</html>