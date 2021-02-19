//JQUERY
$(document).ready(function ($) {
    $('.button-collapse').sideNav(); //on appele la fonction nav bar
    $('.parallax').parallax(); //on appele la fonction parallax
    $('select').material_select(); ///toutes les balises select du html
    $('.carousel').carousel();
    $('.modal').modal();

    $('.dropdown-button').dropdown();
    //SECTION MESSAGES//////////////////
    $('#prof1').on('click', () => {
        $('#ris').show(1000, function () {

        });
    });
    $('#prof2').on('click', () => {
        $('#th').show(1000, function () {

        });
    });

    $('#prof3').on('click', () => {
        $('#mic').show(1000, () => {

        });
    });

    $('#face').on('click', () => {
        $('#face').hide();

    });

    /*
    $('a').click(function(){
        // Change l'image
        $('#logo1, #logo3, #logo4, #logo, #logo6').attr("src", "img/Virage.png");
    });
*/
    $('#psw').on('click', () => {
        $('#modalLogin').hide();

    });

    $('#competence').on('click', () => {
        $('#competences').toggle(1500, () => {

        });
    });
    $('#exp').on('click', () => {
        $('#expe').toggle(1500, () => {

        });
    });
    $('#formation').on('click', () => {
        $('#formations').toggle(1500, () => {

        });
    });
    $('#textarea1').val('New Text');
    $('#textarea1').trigger('autoresize');


    $(document).ready(function () {
        $('select').material_select();
    });


    $('#hide').click(function () {
        $('#modalLogin').toggle();
    });

    $('#tab').click(function () {
        $("#modalAccueil").slideUp(2000).slideDown(1000);
    });

    $(document).ready(function () {
        $('select').material_select();
    });
    $('.dropdown-button').dropdown();


    $('.materialboxed').materialbox({
        inDuration:275,
        outDuration:200,
        onOpenStart: function() {console.log("onOpenStart");},
        onOpenEnd: function() {console.log("onOpenEnd");},
        onCloseStart: function() {console.log("onCloseStart");},
        onCloseEnd: function() {console.log("onCloseEnd");}
    });




    $('.scrollspy').scrollSpy();
    $(document).ready(function () {
        $('.fixed-action-btn').floatingActionButton();
        $('.sidenav').sidenav(); //mon bouton appele la fonction sideNav
        $('.tap-target').tapTarget();
        $('.responsive-img').materialbox();
        $('.tooltipped').tooltip();
        $('input#input_text, textarea#textarea2').characterCounter();

        $('#modalAccueil').open();
        $(function () {
            setTimeout(function () {
                $('.circle').toggleClass('blurred')
            }, 2000);
        });

    });

    //  $("#modalAccueil").slideUp(3000).slideDown(3000);


    //TEXTE H1
    $(".vitrine").slideUp(3000).slideDown(3000);



    //INFO BULLE2
    var options = [{
        selector: "#infobulle",
        offset: 300,
        callback: 'Materialize.toast("Merci pour votre visite, laissez-moi un message, a bientôt",3500)' //message a afficher

    }];
    Materialize.scrollFire(options); //fera apparaitre mon info bulle en paramettte de la fonction options

});



document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
});


//$('section').hide(3000);cache les sections
/*
$(window).scroll(function(){

  if($(window).scrollTop()>100){
 $('nav').addClass('sticky-nav');

  }else{

    $('nav').removeClass('sticky-nav');
  }
});
*/

z
$(document).ready(function () {
    $('input#input_text, textarea#textarea2').characterCounter();
});

M.toast({ html: 'Vous vous etes déconnectés' })
$('.dropdown-button').dropdown();





window.fbAsyncInit = function() {
  FB.init({
    appId            : '232393018493826',
    autoLogAppEvents : true,
    xfbml            : true,
    version          : 'v9.0'
  });
};


