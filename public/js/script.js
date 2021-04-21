/*
var parallax = document.getElementById('martin');
var parallax1 = document.getElementById('martin1');
var parallax2 = document.getElementById('martin2');
var string = "url('img/reu.png')";

*/
/*
if (screen.width <= 1000 && screen.height <= 900) {

    $('.tooltipped').tooltip('hide');


} else {

    $('.tooltipped').tooltip();
}
/*CHanger la couleur du body*/


function changeColor(color) {
    document.body.style.background = color;
}

function changeImage() {
    document.body.style.backgroundImage ='url("https://images.unsplash.com/photo-1482192505345-5655af888cc4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1400&q=80")';
    document.body.style.backgroundRepeat = "no-repeat";
    document.body.style.backgroundAttachment = "fixed";
    document.body.style.backgroundSize = "cover";
    document.body.style.backgroundPosition = "center center";
    /*
    document.getElementById("check2").disabled = true;
    document.getElementById("check3").disabled = true;
*/

}
function changeImage2() {
    document.body.style.backgroundImage ='url("https://images.unsplash.com/photo-1593881135366-021cb95fd82d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1267&q=80")';
    document.body.style.backgroundRepeat = "no-repeat";
    document.body.style.backgroundAttachment = "fixed";
    document.body.style.backgroundSize = "cover";
    document.body.style.backgroundPosition = "center center";

}


function changeImage3() {
    document.body.style.backgroundImage ='url("https://images.pexels.com/photos/5613942/pexels-photo-5613942.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260")';
    document.body.style.backgroundRepeat = "no-repeat";
    document.body.style.backgroundAttachment = "fixed";
    document.body.style.backgroundSize = "cover";
    document.body.style.backgroundPosition = "center center";

}


function changeImage4() {
    document.body.style.backgroundImage ='url("img/reu.webp")';
    document.body.style.backgroundRepeat = "no-repeat";
    document.body.style.backgroundAttachment = "fixed";
    document.body.style.backgroundSize = "cover";
    document.body.style.backgroundPosition = "center center";

}



$(document).ready(function() {
    $("#check1").change(function() {
      if($(this).is(":checked")) {
        changeImage();
        document.getElementById("check2").checked = false;
        document.getElementById("check3").checked = false;

      }
      else{
       changeImage4();
       /*
       document.getElementById("check2").disabled = false;
       document.getElementById("check3").disabled = false;
       */
      }
    })
  });

  $(document).ready(function() {
    $("#check2").change(function() {
      if($(this).is(":checked")) {
        changeImage2();
        document.getElementById("check1").checked = false;
        document.getElementById("check3").checked = false;
      }
      else{
       changeImage4();
       /*
       document.getElementById("check2").disabled = false;
       document.getElementById("check3").disabled = false;
       */
      }
    })
  });

  $(document).ready(function() {
    $("#check3").change(function() {
      if($(this).is(":checked")) {
        changeImage3();
        document.getElementById("check1").checked = false;
        document.getElementById("check2").checked = false;
      }
      else{
       changeImage4();
       /*
       document.getElementById("check2").disabled = false;
       document.getElementById("check3").disabled = false;
       */
      }

    });

});


    $('#confMessage1').on('click',function(){
        $('#confMessage').remove();
    });


$(function() {


    if(getCookie('modalAccepted') === 'true'){
        $('#openModal').hide();
    }
});

$("#closeModal").on('click', function (){
    $('#openModal').hide();
    setCookie('modalAccepted', 'true', 3)
});


function setCookie(cname, cvalue, exdays) {
    if(getCookie('accepte-cookie') === "true") {
        var d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        var expires = "expires="+ d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }
  }

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }





$('#search_button').on('click',function(){

    // hde all tooltips
    $('.tooltipped').tooltip('close');
    // now you must re-open tooltip, otherwise, it will stay close state
    $('.tooltipped').tooltip();

});

$(document).ready(function ($) {
    $('.button-collapse').sideNav(); //on appele la fonction nav bar
    $('.parallax').parallax(); //on appele la fonction parallax
    $('select').material_select();

    //$(".vitrine").slideUp(3000).slideDown(3000);
    /*  $(window).on('load', function (event) {
          $('.preloader').delay(500).fadeOut(500);
      });
  */





    $('.carousel').carousel({
        padding: 100,
    });
    $("#virage1").mouseover(function () {
        $('#virage1').attr('src', 'img/face.png');
    });
    $("#virage1").mouseout(function () {
        $('#virage1').attr('src', 'img/vir.png');
    });

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

    $('#titre .materialboxed').on('click', () => {
        $('#messages').toggle();
        $(document).one("scroll", function () {
            $('#messages').show();
        });

    });


    $('#fermer').on('click', () => {
        $('#face').show();

    });

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




    $('.scrollspy').scrollSpy();
    $(document).ready(function () {



      /*  $('.fixed-action-btn').floatingActionButton();*/
      /*  $('.sidenav').sidenav(); *///mon bouton appele la fonction sideNav
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

    //INFO BULLE2id="martin"
    var options = [{
        selector: "#infobulle",
        offset: 300,
        callback: 'Materialize.toast("Merci pour votre visite, laissez-moi un message, a bientôt",3500)' //message a afficher

    }];
    Materialize.scrollFire(options); //fera apparaitre mon info bulle en paramettte de la fonction options

});

/*
document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
});

*/
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


$(document).ready(function () {
    $('input#input_text, textarea#textarea2').characterCounter();
});
/*
M.toast({ html: 'Vous vous etes déconnectés' })
$('.dropdown-button').dropdown();

*/
window.fbAsyncInit = function () {
    FB.init({
        appId: '232393018493826',
        autoLogAppEvents: true,
        xfbml: true,
        version: 'v9.0'
    });
};


