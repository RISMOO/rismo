function changeColor(e) {
    document.body.style.background = e;
}
function changeImage(e) {
    (document.body.style.backgroundImage = e),
        (document.body.style.backgroundRepeat = "no-repeat"),
        (document.body.style.backgroundAttachment = "fixed"),
        (document.body.style.backgroundSize = "cover"),
        (document.body.style.backgroundPosition = "center center");
}
function changeImageBody1() {
    changeImage("url('img/minou3.jpg')");
}
function setCookie(e, o, t) {
    var c = new Date();
    c.setTime(c.getTime() + 24 * t * 60 * 60 * 1e3);
    var n = "expires=" + c.toUTCString();
    document.cookie = e + "=" + o + ";" + n + ";path=/";
}
function getCookie(e) {
    for (
        var o = e + "=",
            t = decodeURIComponent(document.cookie).split(";"),
            c = 0;
        c < t.length;
        c++
    ) {
        for (var n = t[c]; " " == n.charAt(0); ) n = n.substring(1);
        if (0 == n.indexOf(o)) return n.substring(o.length, n.length);
    }
    return "";
}
function changeImageBody() {
    (document.body.style.backgroundImage = document.body.style.backgroundRepeat =
        "no-repeat"),
        (document.body.style.backgroundAttachment = "fixed"),
        (document.body.style.backgroundSize = "cover"),
        (document.body.style.backgroundPosition = "center center");
}
$(function() {
    $("#check1").change(function() {
        $(this).is(":checked")
            ? (changeImage(
                  "url('https://images.unsplash.com/photo-1482192505345-5655af888cc4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1400&q=80')"
              ),
              (document.getElementById("check2").checked = !1),
              (document.getElementById("check3").checked = !1))
            : changeImage("url('img/body54.webp')");
    });
}),
    $(function() {
        $("#check2").change(function() {
            $(this).is(":checked")
                ? (changeImage(
                      "url('https://images.unsplash.com/photo-1593881135366-021cb95fd82d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1267&q=80')"
                  ),
                  (document.getElementById("check1").checked = !1),
                  (document.getElementById("check3").checked = !1))
                : changeImage("url('img/body54.webp')");
        });
    }),
    $(document).ready(function() {
        $("#check3").change(function() {
            $(this).is(":checked")
                ? (changeImage(
                      "url('https://images.pexels.com/photos/5613942/pexels-photo-5613942.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260')"
                  ),
                  (document.getElementById("check1").checked = !1),
                  (document.getElementById("check2").checked = !1))
                : changeImage("url('img/body54.webp')");
        }),
            (screen.width <= 1800 && screen.height <= 1080) && (window.location =='home')
                ? (changeImageBody(),
                  changeImage("url('img/bodyHome')"),
                  (document.getElementById("reseausocial1").style.color =
                      "white"),
                  (document.getElementById("reseausocial2").style.color =
                      "white"),
                  (document.getElementById("diplome1").style.fontSize = "50px"),
                  (document.getElementById("diplome2").style.fontSize = "50px"),
                  (document.getElementById("diplome3").style.fontSize = "50px"),
                  (document.getElementById("diplome4").style.fontSize = "50px"))
                : (changeImageBody(),
                  (document.getElementById("reseausocial1").style.color =
                      "black"),
                  (document.getElementById("reseausocial2").style.color =
                      "black"));
    }),
    $("#confMessage1").on("click", function() {
        $("#confMessage").remove();
    }),
    $(function() {
        "true" === getCookie("modalAccepted") &&
        "true" === getCookie("accepte-cookie")
            ? $("#openModal").hide()
            : (window.location.href = "#openModal");
    }),
    $("#closeModal").on("click", function() {
        $("#openModal").hide(), setCookie("modalAccepted", "true", 3);
    }),
    $("#search_button").on("click", function() {
        $(".tooltipped").tooltip("close"), $(".tooltipped").tooltip();
    }),
    $(document).ready(function(e) {
        e(".button-collapse").sideNav(),
            e(".parallax").parallax(),
            e("select").material_select(),
            e(".carousel").carousel({ padding: 100 }),
            e("#virage1").mouseover(function() {
                e("#virage1").attr("src", "img/facebook.webp");
            }),
            e("#virage1").mouseout(function() {
                e("#virage1").attr("src", "img/virage360.png");
            }),
            e("#goelo1").mouseover(function() {
                e("#goelo1").attr("src", "img/facebook.webp");
            }),
            e("#goelo1").mouseout(function() {
                e("#goelo1").attr("src", "img/brestgoeloppeurs.png");
            }),
            e("#rismodev1").mouseover(function() {
                e("#rismodev1").attr("src", "img/facebook.webp");
            }),
            e("#rismodev1").mouseout(function() {
                e("#rismodev1").attr("src", "img/rismodev.webp");
            }),


            e(".modal").modal(),
            e(".dropdown-button").dropdown(),
            e("#prof1").on("click", () => {
                e("#ris").show(1e3, function() {});
            }),
            e("#prof2").on("click", () => {
                e("#th").show(1e3, function() {});
            }),
            e("#prof3").on("click", () => {
                e("#mic").show(1e3, () => {});
            }),
            e("#face").on("click", () => {
                e("#face").hide();
            }),
            e("#titre .materialboxed").on("click", () => {
                e("#messages").toggle(),
                    e(document).one("scroll", function() {
                        e("#messages").show();
                    });
            }),
            e("#fermer").on("click", () => {
                e("#face").show();
            }),
            e("#psw").on("click", () => {
                e("#modalLogin").hide();
            }),
            e("#competence").on("click", () => {
                e("#competences").toggle(1500, () => {});
            }),
            e("#exp").on("click", () => {
                e("#expe").toggle(1500, () => {});
            }),
            e("#hobbie").on("click", () => {
                e("#hobbies").toggle(1500, () => {});
            }),
            e("#soft").on("click", () => {
                e("#softs").toggle(1500, () => {});
            }),
            e("#formation").on("click", () => {
                e("#formations").toggle(1500, () => {});
            }),
            e("#textarea1").val("New Text"),
            e("#textarea1").trigger("autoresize"),
            e(document).ready(function() {
                e("select").material_select();
            }),
            e("#hide").click(function() {
                e("#modalLogin").toggle();
            }),
            e("#tab").click(function() {
                e("#modalAccueil")
                    .slideUp(2e3)
                    .slideDown(1e3);
            }),
            e(document).ready(function() {
                e("select").material_select();
            }),
            e(".dropdown-button").dropdown(),
            e(".scrollspy").scrollSpy(),
            e(document).ready(function() {
                e(".tap-target").tapTarget(),
                    e(".responsive-img").materialbox(),
                    e(".tooltipped").tooltip(),
                    e("input#input_text,textarea#textarea2").characterCounter(),
                    e("#modalAccueil").open(),
                    e(function() {
                        setTimeout(function() {
                            e(".circle").toggleClass("blurred");
                        }, 2e3);
                    });
            }),
            Materialize.scrollFire([
                {
                    selector: "#infobulle",
                    offset: 300,
                    callback:
                        'Materialize.toast("Merci pour votre visite, laissez-moi un message, a bientôt",3500)'
                }
            ]);
    }),
    $(document).ready(function() {
        $("input#input_text, textarea#textarea2").characterCounter();
    }),
    $(document).ready(function() {
        $("input#input_text,textarea#textarea2").characterCounter();
    }),
    jQuery("#closeModal")
        .fadeOut()
        .delay(5e3)
        .fadeIn(2e3),
    $("#diplome1").on("click", function() {
        $("#vosMessages").toggle("slow");
    }),
    $("#diplome2").on("click", function() {
        $("#sectionContact").toggle("slow");
    }),
    $("#diplome4").on("click", function() {
        $("#sectionProjets").toggle("slow");
    }),
    $("#diplome3").on("click", function() {
        $("#sectionPortfolio").toggle("slow");
    }),
    $("#portfolio2").on("click", function() {
        $("#sectionPortfolio").toggle("slow");
    }),
    $("#projet2").on("click", function() {
        $("#sectionProjets").toggle("slow");
    }),
    $("#experiences").on("click", function() {
        $("#sectionExperience").toggle("slow");
    }),
    $("#formation").on("click", function() {
        $("#sectionFormation").toggle("slow"),
            $("#article4").show(),
            $("#article5").show();
    }),
    $("#softskills").on("click", function() {
        $("#sectionSoftskills").toggle("slow");
    }),
    $("#hobbies").on("click", function() {
        $("#sectionHobbies").toggle("slow");
    }),
    $("#projets").on("click", function() {
        $("#sectionProjets").toggle("slow");
    }),
    $("#closeError1").on("click", function() {
        $("#closeError").hide();
    });
