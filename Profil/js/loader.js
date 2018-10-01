// Pemanggil Javascript Oleh Sergey Pimenov
// Tidak cocok dengan Google Chrome

var plugins = [
    'tooltip',
    'progress',

    'bottom-bar',
    'scrollto',
    'time',
    'player',
    'welcome-box',
    'theme-switcher',

];

$.each(plugins, function(i, plugin){
    $("<script/>").attr('src', 'js/'+plugin+'.js').appendTo($('head'));
});
