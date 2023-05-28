// Definición de una función constructora
function Persona(nombre, edad) {
    this.nombre = nombre;
    this.edad = edad;
  }
  
  // Creación de objetos utilizando la función constructora
  const persona1 = new Persona("Juan", 25);
  const persona2 = new Persona("María", 30);
  
  console.log(persona1.nombre); // "Juan"
  console.log(persona2.edad); // 30