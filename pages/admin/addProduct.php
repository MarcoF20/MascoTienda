<!DOCTYPE html>
<html lang="en">
<?php require("../../Fragments/adminHead.php"); ?>

<body>
  <?php require("../../Fragments/adminNavbar.php"); ?>
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