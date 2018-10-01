/*!
* JQuery Theme Color Switcher by Billy Foo - Based on Matrix HTML Template
* Modified by Rama Adithya
*/

$(document).ready(function(){
	$(".cblue").click(function(){
       $("link#clink").attr("href", "css/theme-blue.css");
       return false;
    });
	$(".cred").click(function(){
       $("link#clink").attr("href", "css/theme-red.css");
       return false;
    });
	$(".cpurple").click(function(){
       $("link#clink").attr("href", "css/theme-purple.css");
       return false;
    });
	$(".cgreen").click(function(){
       $("link#clink").attr("href", "css/theme-green.css");
       return false;
    });
	$(".cyellow").click(function(){
       $("link#clink").attr("href", "css/theme-yellow.css");
       return false;
    });
	$(".cblack").click(function(){
       $("link#clink").attr("href", "css/theme-black.css");
       return false;
    });
});