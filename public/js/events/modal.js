$(document).ready(function(){
    $('a[href="openModal"]').on('click', function(e) {
        e.preventDefault();
    });

    var video = document.getElementById('videoInteractivo');

    $('#btnVideoInicio').click(function(){
        video.currentTime = 0;
        video.play();
    });
    $('#btnVideoHobbies').click(function(){
        video.currentTime = 20;
        video.play();
    });
    $('#btnVideoEstudis').click(function(){
        video.currentTime = 44.5;
        video.play();
    });
    $('#btnVideoFutur').click(function(){
        video.currentTime = 96.5;
        video.play();
    });
    $('#btnVideoDespido').click(function(){
        video.currentTime = 114;
        video.play();
    });


});
