const teclas = document.querySelectorA11(".oitavo > div")

function desmarcar(tecla) {
    console.log("desmarcar")
 }    

teclas.forEach(function(tecla) {
 tecla.onmousedown = function() {
 tecla.

 }
 
 
 
tecla.onmouseup = () => desmarcar(tecla)
tecla.onmouseleave = () => desmarcar(tecla)
})