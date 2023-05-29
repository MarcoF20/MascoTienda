<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MascoTienda - Administracion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles.css">
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin&family=Lato:wght@300;400&family=Poppins&display=swap" rel="stylesheet">
  </head>
<body>
  <nav class="navbar navbar-expand-lg border-bottom">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a href="./admin.php" class="navbar-brand">
        <img src="./images/logo.png" alt="" id="logo" height="33px" width="47px">
      </a>
      <a class="navbar-brand" href="./admin.php">MascoTienda - Administración</a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 flex-grow-1">
          <li class="nav-item mx-4">
            <a class="nav-link" aria-current="page" href="./admin.php">Gestion de productos</a>
          </li>
        </ul>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-5 ms-auto">
          <li class="nav-item mx">
            <a href="#" class="nav-link"><i class="fas fa-user" style="color:#000000"></i> Perfil</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <h2 class="content_title text-center mt-3">Gestion de productos</h2>
  <div class="text-center d-flex justify-content-center">
    <div class="border align-items-center d-flex" style="
      width: 201px;
      height: 30px;
      justify-content: space-between;
      border-radius: 27px;
      border-color: #404146;
    ">
      <a href="./addCategory.php" class="nav-link" style="margin-left: 14px;">Categoría</a>
      <a href="./addProduct.php" class="nav-link" style="margin-right: 14px;">Productos</a>
    </div>
  </div>
<div class="formContainer d-flex justify-content-center">
<form style="min-width: 406px;" class="mt-3">
  <div class="mb-3 vstack gap-2">
    <label for="productName" class="form-label">Nombre del producto</label>
    <input type="text" class="form-control" id="productName" aria-describedby="productNameHelp" name="productName">
    <label for="category" class="form-label">Categoría(s)</label>
    <input type="text" class="form-control" id="category_input" aria-describedby="categoryHelp" name="category">
    <label for="brand" class="form-label">Marca</label>
    <input type="text" class="form-control" id="brand" aria-describedby="brandHelp" name="brand">
    <label for="price" class="form-label">Precio</label>
    <input type="number" class="form-control" id="price" aria-describedby="priceHelp" name="price" min="1">
    <label for="satCode" class="form-label">Código SAT</label>
    <input type="text" class="form-control" id="satCode" aria-describedby="satCodeHelp" name="satCode">
    <label for="stock" class="form-label">Inventario</label>
    <input type="number" class="form-control" id="stock" aria-describedby="stockHelp">
    <label for="sku" class="form-label">Código de producto</label>
    <input type="text" class="form-control" id="sku" aria-describedby="skuHelp" name="sku">
    <label for="image" class="form-label">Imágen del producto</label>
    <input type="file" class="form-control" id="imageInput" aria-describedby="imageHelp" name="image">
  </div>
  <button type="submit" class="btn btn-primary send-form">Añadir producto</button>
</form>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/4b777ceb0e.js" crossorigin="anonymous"></script>
</body>

</html>