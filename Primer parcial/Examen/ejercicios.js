/*1 Crea una variable llamada "nombre" y asígnale tu nombre como valor.*/
let nombre="Danny";
console.log(nombre);
/*2. Crea una función llamada "suma" que reciba dos parámetros (a y b) y retorne la suma de ambos. */
function suma(num1,num2){
    return num1+num2;
}
suma(5,6);
/*3. Escribe un condicional que verifique si una persona es mayor de edad. Si es mayor de edad, imprime "Es mayor de edad", de lo contrario, imprime "Es menor de edad".*/
mayorEdad=18;
if(mayorEdad>=18){
console.log("Es mayor de edad");
}else{
console.log("Es menor de edad");
}
/*4. Crea un ciclo "for" que imprima los números del 1 al 5. */
for(let i=1; i<=5; i++){
    console.log(i);
}
/*5.	Crea una función llamada "imprimirArray" que reciba como parámetro un array y lo imprima elemento por elemento. Respuesta: */

function imprimirArray(array) {
    for (let i = 0; i < array.length; i++) {
      console.log(array[i]);
    }
  }
  
  let array = [17, 89, 334, 4145, 51];
  imprimirArray(array);

/* 6. ¿Cuánto es 2 + 2? Respuesta: 4*/

let num1=2;
let num2=2;
suma=num1+num2;
console.log(suma);

/*11. Crea una función llamada "primerElementoArray" que reciba como parámetro un array y retorne el primer elemento.  */
function primerElementoArray(arrayPrimerElemento) {
    if (arrayPrimerElemento.length > 0) {
      return arrayPrimerElemento[0];
    }
  }
let arrayPrimerElemento = [11.9, 20, 33, 94, 5];
let primerElemento = primerElementoArray(arrayPrimerElemento);
console.log(primerElemento);
/*12. Crea una función llamada "imprimirElementosArray" que reciba como parámetro un array y lo imprima usando un ciclo "for".*/
function imprimirElementosArray(array2) {
    for (let i = 0; i < array2.length; i++) {
      console.log(array2[i]);
    }
  }
  
  let array2 = [10, 89, 3, 34, 15];
  imprimirElementosArray(array2);

  /*13.	¿Cuál es la salida del siguiente código? */
  let nombre1 = "Juan";

function saludar() {
  let nombre1 = "María";
  console.log("Hola " + nombre1);
}

saludar();
console.log("Hola " + nombre1);
/* ¿Cuál es la salida del siguiente código?*/
let x = 5;

function sumarUno() {
  x++;
}

function restarUno() {
  x--;
}

sumarUno();
sumarUno();
restarUno();
console.log(x);
