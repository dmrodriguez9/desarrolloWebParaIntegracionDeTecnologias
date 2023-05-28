const numeros = [1, 2, 3, 4, 5];

// Método Filter: Filtra elementos que cumplan una condición
const numerosPares = numeros.filter((num) => num % 2 === 0);
console.log(numerosPares); // [2, 4]

// Método Map: Crea un nuevo array aplicando una función a cada elemento
const numerosDobles = numeros.map((num) => num * 2);
console.log(numerosDobles); // [2, 4, 6, 8, 10]

// Método Find: Encuentra el primer elemento que cumpla una condición
const numeroMayor3 = numeros.find((num) => num > 3);
console.log(numeroMayor3); // 4

// Método forEach: Itera sobre cada elemento del array
numeros.forEach((num) => {
  console.log(num);
});

// Método Some: Verifica si al menos un elemento cumple una condición
const hayNumerosNegativos = numeros.some((num) => num < 0);
console.log(hayNumerosNegativos); // false

// Método Every: Verifica si todos los elementos cumplen una condición
const todosNumerosPositivos = numeros.every((num) => num > 0);
console.log(todosNumerosPositivos); // true

// Método Reduce: Aplica una función acumuladora a todos los elementos
const sumaTotal = numeros.reduce((acumulador, num) => acumulador + num, 0);
console.log(sumaTotal); // 15

// Método Includes: El método `includes` verifica si un elemento está presente en el array.

console.log(numeros.includes(3)); // true
console.log(numeros.includes(6)); // false