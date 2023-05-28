/*En este ejercicio, se declara una variable global y una variable local dentro de una función.
Se muestra en la consola el valor de ambas variables tanto dentro como fuera de la función
para observar el alcance de cada una.*/

let auto="Mclaren P1";
function variablesLocalesGlobales(){
let moto="Galardi";
   console.log("Dentro de la función: "+ auto);
   console.log("Dentro de la función: "+ moto);
}
variablesLocalesGlobales();
console.log("Fuera de la función: "+ auto); // alcance fuera de la función
console.log("Fuera de la funcion: "+ moto); // alcance solo dentro de la función