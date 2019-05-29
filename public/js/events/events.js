//Animacion css para el boton de ver mas
$('.btnMore').mouseover(function(){
        $('.btnMore').css('background-color', '#007cc4');
        $('.btnMore').css('color', 'white');
        $('.btnMore').css('border', '2px solid #006097');

        $('#arrow').css('-webkit-transition', 'all 0.5s ease-out');
        $('#arrow').css('transform', 'rotate(90deg)');
        $('.btnMore').css('-webkit-transition', 'all 0.5s ease-out');
        $('.btnMore').css('transform', 'scale(1.2)');
});

$('.btnMore').mouseleave(function(){
        $('.btnMore').css('background-color', 'transparent');
        $('.btnMore').css('color', 'white');
        $('.btnMore').css('border', '2px solid white');

        $('#arrow').css('transform', 'rotate(0deg)');
        $('.btnMore').css('transform', 'scale(1)');
});

//Estilos para el foco a los links de la navbar
$(".enlaces li > a").click(function(){
    var element = $(this);
    cambiarFoco(element);
});

function cambiarFoco(element){
    $('.enlaces li > a').css('color', 'rgba(255,255,255,.5)');
    $(element).css("color", "#007cc4");
}

//Efecto scroll al ir a los href de los links de la navbar
$('a[href="#"]').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: 0,
      }, 500, 'linear');
});

$('a[href="#home"]').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: $($(this).attr('href')).offset().top,
      }, 500, 'linear');
});

$('a[href="#sobreMi"]').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: $($(this).attr('href')).offset().top,
      }, 500, 'linear');
});

$('a[href="#portfolio"]').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: $($(this).attr('href')).offset().top,
      }, 500, 'linear');
});

$('a[href="#footer"]').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: $($(this).attr('href')).offset().top,
      }, 500, 'linear');
});

//cambiar el foco de los links de la navbar al hacer scroll
var pos_inicio = $('#home').position().top-200;
console.log(pos_inicio);
var pos_sobreMi = $('#sobreMi').position().top-200;
console.log(pos_sobreMi);
var pos_proyectos = $('#portfolio').position().top-200;
var pos_footer = $('#footer').position().top-400;
$(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
    //console.log(scroll);
    if(scroll >= pos_inicio && scroll < pos_sobreMi){
        var ele = $('.enlaces a[href="#home"]');
        cambiarFoco(ele);
    }
    else if(scroll >= pos_sobreMi && scroll < pos_proyectos){
        var ele = $('.enlaces a[href="#sobreMi"]');
        cambiarFoco(ele);
    }
    else if(scroll >= pos_proyectos && scroll < pos_footer){
        var ele = $('.enlaces a[href="#portfolio"]');
        cambiarFoco(ele);
    }
    else if(scroll >= pos_footer){
        var ele = $('.enlaces a[href="#footer"]');
        cambiarFoco(ele);
    }
});

//Eventos de la barra de proyectos
$('#gridProyectos').css('min-height', $('#gridProyectos').height());
$("#barraProjectes ul > li").click(function(){
    $("#barraProjectes ul > li").removeClass('clicado');
    $("#barraProjectes ul > li").css('color', 'rgb(0,0,0)');
    $(this).addClass('clicado');
    $(this).css("color", "#005281");

    var tipo = $(this).data('tipo')
    $('#gridProyectos > figure').hide();
    switch (tipo) {
        case "php":
            $('#gridProyectos > figure[data-tipo='+tipo+']').show(500);
            break;
        case "ionic":
            $('#gridProyectos > figure[data-tipo='+tipo+']').show(500);
            break;
        case "android":
            $('#gridProyectos > figure[data-tipo='+tipo+']').show(500);
            break;
        default:
            $('#gridProyectos > figure').show();
            break;
    }
});


