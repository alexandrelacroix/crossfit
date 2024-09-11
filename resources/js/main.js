$(".fade_out").fadeOut("slow");
$(".animate").removeClass("active");

$('.scroller').on( "click", function(e) {
    e.preventDefault();
    let scroll_element = $(this).attr('data-scroll');
    let scrollposition = $(".into_scroll[data-scroll='"+scroll_element+"']").offset().top;
    scroll_to(scrollposition, 1000);
});

function scroll_to(scroll, duration){
    $('html,body').animate({
        scrollTop: scroll
    }, duration);
}

window.addEventListener("scroll", function(event) {
    var top = this.scrollY;
    if(top >= 200){
        if (!$("header").hasClass("fixed_activated")){
            $("header").addClass("fixed_activated");
        }
    }else{
        if ($("header").hasClass("fixed_activated")){
            $("header").removeClass("fixed_activated");
        }
    }
}, false);

// SPOTLIGHT GALLERY
Spotlight.init();

var button = Spotlight.addControl("my-control", function(event){
    // condition d'ouverture : si pas encore inscrit a la newsletter
    open_modal("download");
});

// MODAL
function close_modal(modal){
    $(".modal[data-modal='"+modal+"']").removeClass("active");
    $('body').removeClass("overflow-hidden");
}

function open_modal(modal){
    $(".modal[data-modal='"+modal+"']").addClass("active");
    $('body').addClass("overflow-hidden");
}

$('.close_modal').on( "click", function(e) {
    e.preventDefault();
    let modal = $(this).parents('.modal').attr('data-modal');
    close_modal(modal);
    if(modal == 'newsletter'){
        setCookie("newsletter", "start", 10);
    }else if(modal == 'download'){
        Spotlight.download();
    }
});


// COOKIES
function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    let expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function delCookie(cname) {
    document.cookie = cname+"=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
}

function getCookie(cname) {
    let name = cname + "=";
    let ca = document.cookie.split(';');
    for(let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function checkCookie(cname) {
    let cookie_exist = getCookie(cname);
    if (cookie_exist != "") {
        return true;
    } else {
        return false;
    }
}

if (!getCookie("newsletter")){
    open_modal("newsletter");
}

// delCookie("newsletter");