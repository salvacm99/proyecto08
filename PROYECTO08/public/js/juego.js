//Hacemos el array.
var contador=0;
document.getElementById('contador.movimientos').innerHTML=contador;
var fila=[[2,6,5,4,5,5],[4,6,6,3,2,6],[3,4,1,2,6,3],[1,4,2,5,6,1],[5,5,3,2,2,1],[4,1,4,3,1,3]];

var color=[['blue','yellow','pink','red','yellow','blue'],['blue','white','pink','red','yellow','blue'],['blue','yellow','blue','red','red','pink'],['pink','white','pink','red','green','red'],['green','white','green','green','white','yellow'],['green','white','pink','white','green','yellow']];

function inicioTablero(){
  document.write("<table border='5' width='500' height='500'>");
  for (var j = 0; j < 6; j++) {
    document.write("<tr>");
    for (var i = 0; i < 6; i++) {
      document.write("<td id='"+j+i+"' onclick=\"pillarceldas(this)\" data-fila=\""+j+"\"data-columna=\""+i+"\"bgcolor=\""+color[j][i]+"\" align=center class='celda'>"+fila[j][i]+"</td>");
    }
    document.write("</tr>");
  }
  document.write("</table>");
}
inicioTablero();
function pillarceldas(celda){
  contador++
  document.getElementById('mov.realizado').innerHTML=celda.dataset.columna+","+celda.dataset.fila;
  document.getElementById('contador.movimientos').innerHTML=contador;
}
