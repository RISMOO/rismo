


function changeColor(color) { document.body.style.background = color; }

function changeImage(url) { document.body.style.backgroundImage = url; document.body.style.backgroundRepeat = "no-repeat"; document.body.style.backgroundAttachment = "fixed"; document.body.style.backgroundSize = "cover"; document.body.style.backgroundPosition = "center center"; }
function changeImage2() { document.body.style.backgroundImage = 'url("https://images.unsplash.com/photo-1593881135366-021cb95fd82d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1267&q=80")'; document.body.style.backgroundRepeat = "no-repeat"; document.body.style.backgroundAttachment = "fixed"; document.body.style.backgroundSize = "cover"; document.body.style.backgroundPosition = "center center"; }
function changeImage3() { document.body.style.backgroundImage = 'url("https://images.pexels.com/photos/5613942/pexels-photo-5613942.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260")'; document.body.style.backgroundRepeat = "no-repeat"; document.body.style.backgroundAttachment = "fixed"; document.body.style.backgroundSize = "cover"; document.body.style.backgroundPosition = "center center"; }
function changeImage4() { document.body.style.backgroundImage = 'url("img/blur.webp")'; document.body.style.backgroundRepeat = "no-repeat"; document.body.style.backgroundAttachment = "fixed"; document.body.style.backgroundSize = "cover"; document.body.style.backgroundPosition = "center center"; }


$(function () {
    $("#check1").change(function () {
        if ($(this).is(":checked")) { changeImage("url('https://images.unsplash.com/photo-1482192505345-5655af888cc4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1400&q=80')"); document.getElementById("check2").checked = false; document.getElementById("check3").checked = false; }
        else { changeImage("url('https://images.pexels.com/photos/5948342/pexels-photo-5948342.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260')"); }
    })
}); $(function () {
    $("#check2").change(function () {
        if ($(this).is(":checked")) { changeImage("url('https://images.unsplash.com/photo-1593881135366-021cb95fd82d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1267&q=80')"); document.getElementById("check1").checked = false; document.getElementById("check3").checked = false; }
        else { changeImage("url('https://images.pexels.com/photos/5948342/pexels-photo-5948342.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260')"); }
    })
}); $(document).ready(function () {
    $("#check3").change(function () {
        if ($(this).is(":checked")) { changeImage("url('https://images.pexels.com/photos/5613942/pexels-photo-5613942.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260')"); document.getElementById("check1").checked = false; document.getElementById("check2").checked = false; }
        else { changeImage("url('https://images.pexels.com/photos/5948342/pexels-photo-5948342.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260')"); }
    });

    var message = 'Votre écran à une résolution de ' + screen.width + 'x' + screen.height + '.';
    if (screen.width <= 1800 && screen.height <= 1080) {
        changeImageBody();
        document.getElementById('pexels2').style.display = "block";
        $(function () {
            setTimeout(function () {
                $('#pexels2').hide('slow')

            }, 5000);
        });

        document.getElementById("reseausocial1").style.color = "white";
        document.getElementById("reseausocial2").style.color = "white";


    } else {
        changeImageBody4();
        document.getElementById("reseausocial1").style.color = "black";
        document.getElementById("reseausocial2").style.color = "black";
    }
    alert(message);



}); $('#confMessage1').on('click', function () { $('#confMessage').remove(); });

$(function () { if (getCookie('modalAccepted') = 'true') { console.log(getCookie('modalAccepted')); } }); $("#closeModal").on('click', function () { $('#openModal').hide(); setCookie('modalAccepted', 'true', 3) }); $('#search_button').on('click', function () { $('.tooltipped').tooltip('close'); $('.tooltipped').tooltip(); }); $(document).ready(function ($) {
    $('.button-collapse').sideNav(); $('.parallax').parallax(); $('select').material_select(); $('.carousel').carousel({ padding: 100, }); $("#virage1").mouseover(function () { $('#virage1').attr('src', 'img/face.png'); }); $("#virage1").mouseout(function () { $('#virage1').attr('src', 'img/vir.png'); }); $('.modal').modal(); $('.dropdown-button').dropdown(); $('#prof1').on('click', () => { $('#ris').show(1000, function () { }); }); $('#prof2').on('click', () => { $('#th').show(1000, function () { }); }); $('#prof3').on('click', () => { $('#mic').show(1000, () => { }); }); $('#face').on('click', () => { $('#face').hide(); }); $('#titre .materialboxed').on('click', () => { $('#messages').toggle(); $(document).one("scroll", function () { $('#messages').show(); }); }); $('#fermer').on('click', () => { $('#face').show(); }); $('#psw').on('click', () => { $('#modalLogin').hide(); }); $('#competence').on('click', () => { $('#competences').toggle(1500, () => { }); }); $('#exp').on('click', () => { $('#expe').toggle(1500, () => { }); }); $('#formation').on('click', () => { $('#formations').toggle(1500, () => { }); }); $('#textarea1').val('New Text'); $('#textarea1').trigger('autoresize'); $(document).ready(function () { $('select').material_select(); }); $('#hide').click(function () { $('#modalLogin').toggle(); }); $('#tab').click(function () { $("#modalAccueil").slideUp(2000).slideDown(1000); }); $(document).ready(function () { $('select').material_select(); }); $('.dropdown-button').dropdown(); $('.scrollspy').scrollSpy(); $(document).ready(function () {//mon bouton appele la fonction sideNav
        $('.tap-target').tapTarget(); $('.responsive-img').materialbox(); $('.tooltipped').tooltip(); $('input#input_text, textarea#textarea2').characterCounter(); $('#modalAccueil').open(); $(function () { setTimeout(function () { $('.circle').toggleClass('blurred') }, 2000); });
    }); var options = [{ selector: "#infobulle", offset: 300, callback: 'Materialize.toast("Merci pour votre visite, laissez-moi un message, a bientôt",3500)' }]; Materialize.scrollFire(options);
}); $(document).ready(function () { $('input#input_text, textarea#textarea2').characterCounter(); }); window.fbAsyncInit = function () { FB.init({ appId: '232393018493826', autoLogAppEvents: true, xfbml: true, version: 'v9.0' }); };


function changeImageBody() {
    document.body.style.backgroundImage = 'url("https://images.pexels.com/photos/2047905/pexels-photo-2047905.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260")';
    document.body.style.backgroundRepeat = "no-repeat";
    document.body.style.backgroundAttachment = "fixed";
    document.body.style.backgroundSize = "cover";
    document.body.style.backgroundPosition = "center center";
}

$(document).ready(function () {
    $('input#input_text, textarea#textarea2').characterCounter();
});

$("#diplome1").on('click', function () {
    $("#vosMessages").toggle('slow');
});
$("#diplome2").on('click', function () {
    $("#sectionContact").toggle('slow');
});

$("#diplome4").on('click', function () {
    $("#sectionProjets").toggle('slow');
});

$("#diplome3").on('click', function () {
    $("#sectionPortfolio").toggle('slow');
});



