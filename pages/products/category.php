<!DOCTYPE html>
<html lang="en">
<?php require("../../Fragments/productHead.php"); ?>

<body>
  <div class="container">
    <?php require("../../Fragments/productNavbar.php"); ?>
    <div class="container mt-3">
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
                <img src="../../images/carnazas perro.jpeg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title">Barkers Club Health Omega Carnaza en Forma de Palitos para Perro Receta de Res, 25 Piezas</h5>
                  <p class="card-text">$65.00</p>
                  <a href="./product.php" class="btn btn-primary">Ver mas</a>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="card" style="width: 18rem;">
                <img src="../../images/comida en latada perro.jpeg" class="card-img-top" alt="...">
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
                <img src="../../images/costal perro 2.jpeg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title">Royal Canin Alimento Seco para Perro Adulto Raza Mediana, 13.6 kg</h5>
                  <p class="card-text">$2007.00</p>
                  <a href="./product.php" class="btn btn-primary">Ver mas</a>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="card" style="width: 18rem;">
                <img src="../../images/Costal Perro.jpeg" class="card-img-top" alt="...">
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