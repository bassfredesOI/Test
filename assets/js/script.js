var pregNombre = 0;
var pregEmail = 0;
var pregTele = 0;
var pregnombreEmpresa = 0;
var sitioWeb = 0;
var pregEmpresaFinal = 0;
var pregCel = 0;
var pregNombreComercial;


$(document).ready(function () {
    alturaPantalla = $(window).height();
    anchoPantalla = $(window).width();
    if (anchoPantalla > 991) {
        $('#todo').css('height', alturaPantalla + 'px');
        $('.formback').css('height', alturaPantalla + 'px');
        $('.contenidoback').css('height', alturaPantalla + 'px');
        $('.altura').css('height', alturaPantalla + 'px');
        
         $("#contenidoBox .carousel-inner .item .relative").each(function(){
            var altoElemento = $(this).actual("height");
            console.log(altoElemento);
            var MargenTopTotal = alturaPantalla/2 - altoElemento/2;
            MargenTopTotal = MargenTopTotal - $(".footer").height();
            $(this).parents(".item").css("margin-top", MargenTopTotal);
        });
    }


    /**setup**/
    $('#contenidoBox').carousel({

    });

    /**setup**/

    $('body').backstretch([
      "./assets/img/back1.jpg"
    , "./assets/img/back2.jpg"
    , "./assets/img/back3.jpg"
    , "./assets/img/back4.jpg"
    , "./assets/img/back5.jpg"
  ], {
        duration: 5000,
        fade: 750
    });




    $(".fancybox").fancybox();
    $('[data-toggle="tooltip"]').tooltip();



    //ANIMACIONES
    TweenLite.set($('#contenido'), {
        opacity: 0,
        scale: 0.8
    });
    TweenLite.to($('#contenido'), 1.5, {
        css: {
            autoAlpha: 1,
            scale: 1
        },
        ease: Power2.easeOut,
        delay: 0
    });

    TweenLite.set($('.boxIzq'), {
        y: 100
    });
    TweenLite.to($('.boxIzq'), 1, {
        css: {
            y: 0
        },
        ease: Power2.easeOut,
        delay: 0
    });
    TweenLite.set($('.boxDer'), {
        y: 100
    });
    TweenLite.to($('.boxDer'), 1, {
        css: {
            y: 0
        },
        ease: Power2.easeOut,
        delay: 0
    });

    //ANIMACIONES

    $('button.sharingSocial').on('click', function () {
        window.open('http://www.facebook.com/sharer.php?u=http://oninteractive.cl/desarrollo2015/molettoForm', 'sharer', 'toolbar=0,status=0,width=660,height=445');
    });


    function IsEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }

    function validatePhone(txtPhone) {
        var filter = /^[0-9-+]+$/;
        if (filter.test(txtPhone)) {
            return true;
        } else {
            return false;
        }
    }
    $("#nombre").on("blur", function () {
        if ($(this).val() == "" || $(this).val() == " " || $(this).val().length < 5) {
            $(this).addClass("wrongValue");
            $(this).parent().addClass("wrongParent");
            pregNombre = 0;
        } else {
            $(this).removeClass("wrongValue");
            $(this).parent().removeClass("wrongParent");
            pregNombre = 1;
        }
    });
    $("#email").on("blur", function () {
        if (!IsEmail($(this).val())) {
            $(this).addClass("wrongValue");
            $(this).parent().addClass("wrongParent");
            pregEmail = 0;
        } else {
            $(this).removeClass("wrongValue");
            $(this).parent().removeClass("wrongParent");
            pregEmail = 1;
        }
    });
    $("#tel").on("blur", function () {
        if (!validatePhone($(this).val())) {
            $(this).addClass("wrongValue");
            $(this).parent().addClass("wrongParent");
            pregTel = 0;
        } else {
            $(this).removeClass("wrongValue");
            $(this).parent().removeClass("wrongParent");
            pregTel = 1;
        }
    });
     $("#cel").on("blur", function () {
        if (!validatePhone($(this).val())) {
            $(this).addClass("wrongValue");
            $(this).parent().addClass("wrongParent");
            pregCel = 0;
        } else {
            $(this).removeClass("wrongValue");
            $(this).parent().removeClass("wrongParent");
            pregCel = 1;
        }
    });
    $("#empresa").on("blur", function () {
        if ($(this).val() == "" || $(this).val() == " " || $(this).val().length < 1) {
            $(this).addClass("wrongValue");
            $(this).parent().addClass("wrongParent");
            pregNombre = 0;
        } else {
            $(this).removeClass("wrongValue");
            $(this).parent().removeClass("wrongParent");
            pregNombre = 1;
        }
    });
     $("#nombrecomercial").on("blur", function () {
        if ($(this).val() == "" || $(this).val() == " " || $(this).val().length < 1) {
            $(this).addClass("wrongValue");
            $(this).parent().addClass("wrongParent");
            pregNombreComercial = 0;
        } else {
            $(this).removeClass("wrongValue");
            $(this).parent().removeClass("wrongParent");
            pregNombreComercial = 1;
        }
    });
    $("#sitio").on("blur", function () {
        if (/^(http|https|ftp):\/\/[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/i.test($(this).val())) {
            $(this).removeClass("wrongValue");
            $(this).parent().removeClass("wrongParent");
            pregNombre = 1;
        } else {
            $(this).addClass("wrongValue");
            $(this).parent().addClass("wrongParent");
            pregNombre = 0;
        }
    });
    $("#inversion").on("blur", function () {
        if ($(this).val() == "" || $(this).val() == " " || $(this).val().length <= 5) {
            $(this).addClass("wrongValue");
            $(this).parent().addClass("wrongParent");
            pregNombre = 0;
        } else {
            $(this).removeClass("wrongValue");
            $(this).parent().removeClass("wrongParent");
            pregNombre = 1;
        }
    });
    $("#formContacto").submit(function () {
        // COMPROBACION DATOS
        if ($("#nombre").val() == "" || $("#nombre").val() == " " || $("#nombre").val().length <= 5) {
            $("#nombre").addClass("wrongValue");
            $("#nombre").parent().addClass("wrongParent");
            pregNombre = 0;
        } else {
            $("#nombre").removeClass("wrongValue");
            $("#nombre").parent().removeClass("wrongParent");
            pregNombre = 1;
        }
        if (!IsEmail($("#email").val())) {
            $("#email").addClass("wrongValue");
            $("#email").parent().addClass("wrongParent");
            pregEmail = 0;
        } else {
            $("#email").removeClass("wrongValue");
            $("#email").parent().removeClass("wrongParent");
            pregEmail = 1;
        }
        // TODO OK?
        if (pregCel==1 && pregNombreComercial==1 && pregRut == 1 && pregNombre == 1 && pregEmail == 1 && pregTel == 1 && pregNombreEmpresa == 1 && pregRutEmpresa == 1 && pregSitioWeb == 1 && pregInversion == 1 && pregEmpresaFinal == 1) {
            return true;
        } else {
            return false;
        }
    });
});
$(window).resize(function () {
    alturaPantalla = $(window).height();
    anchoPantalla = $(window).width();
    if (anchoPantalla > 991) {
        $('#todo').css('height', alturaPantalla + 'px');
        $('.formback').css('height', alturaPantalla + 'px');
        $('.contenidoback').css('height', alturaPantalla + 'px');
        $('.altura').css('height', alturaPantalla + 'px');
        
        $("#contenidoBox .carousel-inner .item .relative").each(function(){
            var altoElemento = $(this).actual("height");
            console.log(altoElemento);
            var MargenTopTotal = alturaPantalla/2 - altoElemento/2;
            MargenTopTotal = MargenTopTotal - $(".footer").height();
            $(this).parents(".item").css("margin-top", MargenTopTotal);
        });
    }
});