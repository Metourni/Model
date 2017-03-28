

$(document).ready(function(){

	//animationClick('#logo','lightSpeedIn');
/*
	$('.navbar').addClass('animated fadeInUpBig');
	animationHover('#bra','animated rotateOut');
	$('.list-group').addClass('animated bounceInRight');
*/
    animationHover('#logo','animated rotateOut');

	function animationHover(element, animation){
	  element = $(element);
	  element.hover(
	    function() {
	      element.addClass('animated ' + animation);
	    },
	    function(){
	      //wait for animation to finish before removing classes
	      window.setTimeout( function(){
	        element.removeClass('animated ' + animation);
	      }, 2000);
	    }
	  );
	};


	function animationClick(element, animation){
	  element = $(element);
	  element.click(
	    function() {
	      element.addClass('animated ' + animation);
	      //wait for animation to finish before removing classes
	      window.setTimeout( function(){
	          element.removeClass('animated ' + animation);
	      }, 2000);
	    }
	  );
	};


});