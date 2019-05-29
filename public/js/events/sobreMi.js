//escondemos el scroll
$('body').css('overflow-x', 'hidden');
$(document).ready(function(){
    var tituloSobreMi = $("#tituloSobreMi").position();
    //console.log(tituloSobreMi.top);
    var mostrarSkills = false;
    var mostrarYo = false;

    function funcionmostrarSkills(){
        var scrollTop = $(window).scrollTop();
        if(scrollTop > tituloSobreMi.top - 500 && mostrarSkills == false){
            mostrarSkills = true;
            $.ajax({
                type: "GET",
                url: "api/skills",
                dataType: "json",
                async: 'true',
                success: function(json) {

                    $('#cardSkills').animate({left:0, }, 2000);
                    var skills = json.data.skills;

                    skills.forEach(skill => {
                        $('#tituloSkills').append('<div class="row mt-2"><div class="col-3"><h4>'+ skill.nombre+'</h4></div><div class="col-9 my-auto"><div class="myProgress"><div class="myBar" data-porcentage='+ skill.porcentage +'>'+ skill.porcentage +'%</div></div></div></div>');
                    });

                    $('.myBar').each(function(){
                        var element = $(this);
                        var width = 1;
                        var id = setInterval(frame, 40);
                        function frame() {
                            if (width >= element.data('porcentage')) {
                                clearInterval(id);
                            } else {
                                width++;
                                element.html(width + '%');
                                element.css('width', width + '%');
                                //console.log('estoy ampliando');
                            }
                        }
                        //console.log('hola');
                    });
                }
            });
            //$('html body').css('overflow-x', 'scroll!important');
        }
    }

    function mostrarQuienSoy(){
        var scrollTop = $(window).scrollTop();
        if(scrollTop > tituloSobreMi.top - 500 && mostrarYo == false){
            mostrarYo = true;
            $('#cardQuiSoc').animate({right:0, }, 2000);
        }

    }

    mostrarQuienSoy();
    funcionmostrarSkills();
    $(window).scroll(function(event) {
        mostrarQuienSoy();
        funcionmostrarSkills();
      });



});
