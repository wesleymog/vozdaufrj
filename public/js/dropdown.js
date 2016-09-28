var dropNav = $(".dropdownNav");

$(window).scroll(function() {
    if( $(this).scrollTop() > 90){
        dropNav.addClass("scrollednav");
    }else{
        dropNav.removeClass("scrollednav");
    }
});

$('.curso').height($('.curso').width());