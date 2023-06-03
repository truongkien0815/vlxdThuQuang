$(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {

            $('#bentop').css('top', '0');
            $('#bentop').css('position', 'fixed');
            $('#bentop').css('opacity', '0.9');

        } else


        {
            $('#bentop').css('position', 'relative');
            $('#bentop').css('opacity', '1');
        }
    });

});

// 
$(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) $('#goTop').fadeIn();
        else $('#goTop').fadeOut();
    });
    $('#goTop').click(function() {
        $('body,html').animate({
            scrollTop: 0
        }, 'slow');
    });
});