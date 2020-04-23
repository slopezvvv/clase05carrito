/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 
function calcularPI(){
    return Math.PI;
}

function efectoFadeInOut(){
    //alert("Funciona");
    var titulo = document.getElementById("titulo_pagina");
    titulo.style.fontSize = "50px";
    
    var opacidad = 0.0;
    for(var i = 0; i < 4; i++){
        console.log(i);
        window.setTimeout(
            function(){
                opacidad += 0.25;
                console.log(opacidad);
                titulo.style.opacity = opacidad;
            }, 6000
        );
    }
}