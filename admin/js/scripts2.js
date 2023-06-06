function recogerDatos(){
    console.log($(this));
    let tabla = document.getElementById("tablaDatos");
    console.log(tabla.rows);
    console.log(tabla.rows[2].cells[1].innerHTML);
};
$(function(){
    // 'use strict';
});


$( ".trdatos" ).click(function(e) {
    e.preventDefault();

    //Capturo el data-id de la fila seleccionada
    var id    =  $(this).attr("data-id");

    var usuario   = $(this).attr("data-trabajador");
    var usuarioID = $(this).attr("id"); 
    console.log('La fila corresponde al ID: ' + id + usuarioID)
    let tabla = document.getElementById("tablaDatos");
    console.log('La fila corresponde al ID: ' + id)
    $("#trabajador" + id).remove();

    $(document).ready(function(){     
            $('.contenedor-movil').css({'display':'block'});  
            $("#campo1").text
            (tabla.rows[id].cells[2].innerHTML);
            $("#campo2").text
            (tabla.rows[id].cells[1].innerHTML);
            $("#campo0").text
            (tabla.rows[id].cells[0].innerHTML);
    });
});

$( ".container" ).click(function(e) {
    $('.contenedor-movil').css({'display':'none'});
});
$( ".barra-lateral" ).click(function(e) {
    $('.contenedor-movil').css({'display':'none'});
});
