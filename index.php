<!doctype html>
<html lang="en">

<?php require("./Fragments/head.php") ?>

<body>
  <!-- Importing navigation bar -->
  <?php require('./Fragments/navbar.php') ?>
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
  <h2 class="content_title text-center mt-3">Todos los productos</h2>

  <!-- PRODUCTOS -->
  <!-- import products fragment -->
  <?php require('./Fragments/products.php') ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/4b777ceb0e.js" crossorigin="anonymous"></script>
</body>

</html>