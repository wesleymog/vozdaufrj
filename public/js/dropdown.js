var dropNav = $(".dropdownNav");

$(window).scroll(function() {
    if( $(this).scrollTop() > 87){
        dropNav.addClass("scrollednav");
    }else{
        dropNav.removeClass("scrollednav");
    }
});

$('.curso').height($('.curso').width());