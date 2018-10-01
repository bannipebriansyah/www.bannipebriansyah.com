$(window) .bind('load', function () {
    $('#welcome-box') .animate({
        bottom: '145px'
    }, 1000);
    $('a.close') .click(function () {
        $(this) .parent() .fadeOut(400);
        return false;
    });
});
