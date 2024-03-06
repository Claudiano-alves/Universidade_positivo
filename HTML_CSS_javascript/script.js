function calcularSoma() {
  
  var numero1 = parseFloat(document.getElementById('numero1').value);
  var numero2 = parseFloat(document.getElementById('numero2').value);
  
  if (!isNaN(numero1) && !isNaN(numero2)) {
  
   var resultado = numero1 + numero2;

   document.getElementById('resultado').textContent = 'A soma é: ' + resultado;
  } else {
  
  document.getElementById('resultado').textContent = 'Por favor, insira números válidos.';
  }
}
