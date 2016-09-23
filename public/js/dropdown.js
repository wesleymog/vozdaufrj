var dropNav = $(".dropdownNav");

$(window).scroll(function() {
    if( $(this).scrollTop() > 150){
        dropNav.addClass("scrollednav");
    }else{
        dropNav.removeClass("scrollednav");
    }
});