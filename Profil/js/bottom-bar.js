$('#bottom-bar') .hide();
$(function () {
    $(window) .scroll(function () {
        if ($(this) .scrollTop() > 150) {
            $('#bottom-bar') .slideDown(350)
        } else {
            $('#bottom-bar') .slideUp(300)
        }
    });
    $('.go-top') .click(function () {
        $('html,body') .animate({
            scrollTop: 0
        }, 800);
        return false
    })
});