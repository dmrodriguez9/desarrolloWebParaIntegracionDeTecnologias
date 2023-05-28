/*En este ejercicio, se utiliza una función expresiva o función anónima para calcular el área de
un triángulo. La función recibe la base y la altura como parámetros, realiza el cálculo del
área y devuelve el resultado. Se realiza la llamada a la función y se muestra el resultado en
la consola.*/


//Funcion expresiva o anonima 
const areaTriangulo = function(base, altura){
    return base*altura;
}
console.log("El area del triangulo es: " + areaTriangulo(110,20));