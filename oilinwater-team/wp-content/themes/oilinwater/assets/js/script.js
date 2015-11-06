// DOCUMENT READY
// ------------------------------------------------------------

// This ready handler passes the jQuery alias in to avoid conflict with other libraries.

jQuery(document).ready(function($) {

console.log('========================');
console.log('Document ready');

var tear = $(".tear");

tear.css("height", "0!important");
console.log("tear");


// ------------------------------------------------------------
// GLOBAL VARIABLES
// ------------------------------------------------------------

var _window = $(window),
	$scroll_position_onload = $(document).scrollTop(),
	$body = $('body');

	// ------------------------------------------------------------
	// Menu - Toggle
	// ------------------------------------------------------------

	(function()
	{

	  console.log('====================');
	  console.log('Enter mobile nav function');

	  var nav_trigger     = $('#nav-trigger'),
	      nav_list        = $('.navigation-menu__list'),
	      $mainNavOpenCN  = 'active',
	      menu            = $('.menu');


	  nav_trigger.on('click', function(e){

	    console.log('Nav trigger clicked');

	    e.preventDefault();

	    if(_window.width() > 1140) { return; }
	    
	    nav_list
	      .stop()
	      .slideToggle(300,function(){
	        if(nav_list.is(':visible')) { 
	          nav_trigger.addClass($mainNavOpenCN);
	        }
	        else { nav_trigger.removeClass($mainNavOpenCN); }
	      });   
	  });

	  _window.resize(function(){
	    if(_window.width() <= 1140)
	    {
	      if(nav_list.is(':visible'))
	      {
	        nav_list.hide();
	        nav_trigger.removeClass($mainNavOpenCN);
	      }
	      return;
	    }
	    if(!nav_trigger.hasClass($mainNavOpenCN)) { nav_list.css('display', ''); } 
	  });

	})();

//--------------------------------
// CLASS SELECTOR
//--------------------------------

if ($('#navigation a').hasClass('active')) {
    $(this).parent().addClass('active');
}


// --------------------------------
// ADD Class Active on Menu
//---------------------------------
// Start midnight
// (function(){
//   // Change this to the correct selector.
//   $('nav.fixed').midnight();
// });

	// setTimeout(function() {
	// 	     $( ".push" ).addClass( "on" );
	// 	     $( ".container" ).addClass( "off" );
	// 	     $(".shape").css('stroke', '#ffffff');
	// 	     $( ".container" ).addClass( "off--opacity" );
 //    }, 3000);


	// setTimeout(function() {
	//  		$( ".container" ).addClass( "none" );
	//  		$( ".push" ).addClass( "on--opacity" );
 //    }, 3300);

	// if(_window.width() > 1140) { 
	//     var r = _window.height(),
	//         c = $(".detect--height").height();
	//     r > c && $(".detect--height").css({
	//         height: _window.height() + "px"
	//     }), _window.resize(function() {
	//         var t = _window.height(),
	//             o = $(".detect--height").height(),
	//             i = t - o,
	//             n = o + i,
	//             a = $(".detect--height").height();
	//         t > a && $(".detect--height").css("height", n + "px")
	//     });
	// }

// --------------------------------
// END OF JQUERY
//---------------------------------

});


