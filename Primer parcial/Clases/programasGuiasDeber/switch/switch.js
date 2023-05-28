
const diaSemana = 5;
let mensaje;

switch (diaSemana) {
  case 1:
    mensaje = "Lunes";
    break;
  case 2:
    mensaje = "Martes";
    break;
  case 3:
    mensaje = "Miércoles";
    break;
  case 4:
    mensaje = "Jueves";
    break;
  case 5:
    mensaje = "Viernes";
    break;
  default:
    mensaje = "Fin de semana";
    break;
}

console.log(mensaje); // "Miércoles"