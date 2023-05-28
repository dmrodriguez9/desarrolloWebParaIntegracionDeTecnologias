// Scope Local
function suma(a, b) {
    const resultado = a + b;
    console.log(resultado); // La variable resultado solo es accesible dentro de la función
  }
  
  suma(2, 3);
  
  // Scope Global
  const mensaje = "Hola, mundo!"; // La variable mensaje es global
  
  function imprimirMensaje() {
    console.log(mensaje); // La función puede acceder a la variable global
  }
  
  imprimirMensaje();