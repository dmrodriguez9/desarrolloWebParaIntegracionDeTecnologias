/*En este ejercicio, se declara una variable con el mismo nombre en el ámbito global y en una
función. Se muestra en la consola el valor de ambas variables para observar cómo se
accede a ellas y cuál prevalece en cada contexto.*/

let nombre="Natasha";
function variablesAcceso(){
    let nombre="Hola";
    console.log("nombre: "+ nombre);
}

variablesAcceso();
console.log("nombre: "+nombre);