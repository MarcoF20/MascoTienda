// Calculo del total de la compra y cantidad * precio
// Seleccion de cada precio y cantidad
const precios = document.querySelectorAll(".productPrice");
const cantidades = document.querySelectorAll('select[name="cantidad"]');
const hiddenInput = document.querySelector('input[name="totalPrice"]');
const arrayPrecios = Array.from(precios);
const arrayCantidades = Array.from(cantidades);
// Seleccion del total
const total = document.getElementById("total");

console.log(arrayCantidades[0].value * Number(arrayPrecios[0].innerHTML));
function initializePrice() {
  for (let i = 0; i < arrayPrecios.length; i++) {
    const initialPrice =
      arrayCantidades[i].value * Number(arrayPrecios[i].innerHTML);
    arrayPrecios[i].innerHTML = initialPrice.toFixed(2);
  }
}
// Funcion para calcular cantidad * precio
function calcularTotal() {
  let suma = 0;
  for (let i = 0; i < arrayPrecios.length; i++) {
    suma += Number(arrayPrecios[i].innerHTML);
  }
  total.innerHTML = "$" + suma.toFixed(2);
  hiddenInput.value = suma.toFixed(2).replace('.', '');
  console.log(hiddenInput.value);
}
function updatePrice() {
  arrayCantidades.map((cantidad, index) => {
    const precioBase = Number(arrayPrecios[index].innerHTML) * 1;
    
    cantidad.dataset.precioBase = precioBase;
    cantidad.addEventListener("change", function () {
      const precioOriginal = Number(cantidad.dataset.precioBase);
      let nuevoPrecio = Number(cantidad.value) * precioOriginal;
      arrayPrecios[index].innerHTML = nuevoPrecio.toFixed(2);
      calcularTotal();
    });
  });
}

updatePrice();
initializePrice();
calcularTotal()

