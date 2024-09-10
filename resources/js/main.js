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