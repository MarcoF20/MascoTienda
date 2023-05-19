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
    <label for="exampleInputEmail1" class="form-label">Nombre de la categoría</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary send-form">Añadir categoría</button>
</form>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/4b777ceb0e.js" crossorigin="anonymous"></script>
</body>

</html>