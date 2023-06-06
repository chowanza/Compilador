$(function(){
    'use strict';
    /*Ventana compilador*/ 
    var menu1 = $('.menu-desplegable.uno');
    var menu2 = $('.menu-desplegable.dos');
    var menu3 = $('.menu-desplegable.tres');
    var span1 = $('span.s-uno');
    var span2 = $('span.s-dos');
    var span3 = $('span.s-tres');
    var span1aux= span1;
    var span2aux= span2;
    var span3aux= span3;
    console.log(menu1);
    $('span.s-uno').on('click',function(){abrirOCerrar(menu1,span1);});
    $('span.s-dos').on('click',function(){abrirOCerrar(menu2,span2);});
    $('span.s-tres').on('click',function(){abrirOCerrar(menu3,span3);});
    console.log($('div .contenido-header span'));
    
    var mostrar= true;
    var mostrar2= true;
    var mostrar3= true;
    

    function abrirOCerrar(menu, span){
        if(span==span1aux && mostrar==true){
            $('.menu-desplegable').css({'display':'none'});
            menu.css({'display':'block'});
            $('.contenido-header span').css({'color':'white'});
            span.css({'color':'#b3d4fc'}); 
            mostrar=false;
            
        }
        else if(span==span2aux && mostrar2==true){
            $('.menu-desplegable').css({'display':'none'});
            menu.css({'display':'block'});
            $('.contenido-header span').css({'color':'white'});
            span.css({'color':'#b3d4fc'}); 
            mostrar2=false;
        }
        else if(span==span3aux && mostrar3==true){
            $('.menu-desplegable').css({'display':'none'});
            menu.css({'display':'block'});
            $('.contenido-header span').css({'color':'white'});
            span.css({'color':'#b3d4fc'}); 
            mostrar3=false;
        }
        else
         {
            $('.menu-desplegable').css({'display':'none'});
            $('.contenido-header span').css({'color':'white'});
            mostrar=true;
            mostrar2=true;
            mostrar3=true;
         }
    }



    $('.cajaTexto').on('click', function(){
        $('.menu-desplegable').css({'display':'none'});
        $('.contenido-header span').css({'color':'white'});
        mostrar=true;
        mostrar2=true;
        mostrar3=true;
    });
    $('.corrida').on('click', function(){
        $('.menu-desplegable').css({'display':'none'});
        $('.contenido-header span').css({'color':'white'});
        mostrar=true;
        mostrar2=true;
        mostrar3=true;
    });
    /*Ventana compilador*/ 


    
    
    /*Ventana presentacion*/
    var bandera = true;
    var bandera2 = true;
    var bandera3 = true;
    $('nav ul li:nth(3)').on('click',function(){
        if(bandera3==true){
            $('.quienes-somos').show(1000);
            $('.quienes-somos').slideDown(1000);
            
            bandera3=false;
        }
        else{
            $('.quienes-somos').hide(1000);
            $('.quienes-somos').slideUp(1000);
            
            
            bandera3=true;
        }
    });
    // $('nav ul:nth-child(2)').on('click',function(){
    //     if(bander2==true){
    //         $('.quienes-somos').show(1000);
    //         $('.quienes-somos').slideDown(1000);
            
    //         bandera2=false;
    //     }
    //     else{
    //         $('.quienes-somos').hide(1000);
    //         $('.quienes-somos').slideUp(1000);
            
            
    //         bandera2=true;
    //     }
    // });
    $('nav ul li:nth(2)').on('click',function(){
        if(bandera==true){
            $('.fundadores-org').show(1000);
            $('.fundadores-org').slideDown(1000);
            
            bandera=false;
        }
        else{
            $('.fundadores-org').hide(1000);
            $('.fundadores-org').slideUp(1000);
            
            
            bandera=true;
        }
    });

    


    /*Ventana presentacion*/
    


    


});