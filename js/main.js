/*global $, window*/

$(function () {
	'use strict';
	// make a scroll from ul li a to id sections
$('#down, #down_two, #downup').click(function (e) {
	e.preventDefault();
    $('html, body').animate({
        scrollTop: $('#' + $(this).data('scroll')).offset().top
    }, 1000);
});

});