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

window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky");
    navbar.classList.remove("navbar_section");
  } else {
    navbar.classList.remove("sticky");
    navbar.classList.add("navbar_section");
  }
}


$('.your-class').slick({
    centerMode: true,
    autoPlay: true,
    autoplaySpeed: 2000,
  centerPadding: '10vh',
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});