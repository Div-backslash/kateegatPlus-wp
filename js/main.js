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
    slidesToShow: 2,
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

// the tabs
$(document).ready(function(){
    // select tabs ul on click
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');
        
		$('.tab-content').removeClass('current');
                
		$(this).addClass('current');
        
		$("#"+tab_id).addClass('current');
        
        if(
            $('ul.tabs li.current').css('color', '#21427c'),
            $('ul.tabs li.current').css('background', '#eee')
        
        ) {
            
        $(this).css("color", "#555");
        $(this).css("background", "#ddd"); 
            
        }
        else{        
        $(this).css("color", "#21427c");  
        }
   
    });
    

});