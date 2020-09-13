$(document).ready(function(){

	toggler();
	factSlider();
//call factSlider
	$('section').each(function(){
		$(this).children('div').matchHeight();
	});

	$('input, textarea').placeholder();

	$('.career-wrap article:nth-child(even) section').addClass('dark');

	var seen = {};

	$('.coa-program-list li').each(function() {
	    
	    var txt = $(this).text();
	    
	    if (seen[txt]) {
	        $(this).remove();
	    } else {
	        seen[txt] = true;
	    }
	    
	});

	$('.bottom-form-anchor, .back-to-top, .toggle-content a, #cta-bar a').smoothScroll();

	$("form").on("submit", function () {
		    
	    var isInvalid = false;

	    $("select", this).each(function () {
	        if (!$(this).val()) {
	            isInvalid = true;
	        }
		});

	    if (isInvalid) {
	    	
	    	$('#mc_error_message, .ninja-forms-error-msg').slideDown(500);

    		setTimeout(function(){
				$('#mc_error_message, .ninja-forms-error-msg').slideUp(500);
			}, 5000);

	        return false;

	    } else {
	    	isInvalid = false;
	    	return true;
	    }
	
	});

	$('video').click(function (e) {
	    if(e.offsetY < ($(this).height() - 36)) // Check to see if controls where clicked
	    {
	        if(this.paused)
	            this.play();
	        else
	            this.pause();
	    }
	});

	var hash = location.hash;

    if(hash !== ''){

        $('html, body').animate({ scrollTop: $(hash).offset().top - 100}, 1000);

    }

    landingCTA();

});


$(window).scroll(function() {
	elevator();
});

$( window ).resize(function() {
	if (isMobile()) {
		$('.career-wrap .toggle').parent().removeClass('open minus-icon');
		$('.career-wrap .toggle').next().css("display","");
	}
    //landingCTA();
});

function elevator(){
	if ($(this).scrollTop() > 150) {
		$('.back-to-top:hidden').stop(true, true).fadeIn();
	} else {
		$('.back-to-top').stop(true, true).fadeOut();
	}
}

function isMobile() {
	if(window.innerWidth < 768) {
		return true;
	} else {
		return false;
	}
}

function toggler() {

	$('.diamond-wrap .toggle').on('click',function(){
		$(this).parent().toggleClass('minus-icon');
		$('.diamond-wrap .toggle-content ul').slideToggle();
	});

	$('.career-wrap .toggle, .coa-program-list .toggle').on('click',function(){
		//var origHeight = $(this).next().height();
		//console.log(origHeight);
		if (isMobile()) {
			$(this).parent().toggleClass('minus-icon');
			$(this).next().toggle(function(){
			    //$(this).animate( { height: origHeight }, 200);
			});
		} else {
			$(this).next().css("display","");
			$(this).parent().toggleClass('open minus-icon');
			$(this).parents('section').children('div').matchHeight();
		}
	});

}

function landingCTA() {

	var body = $('body'),
		formWrapper = $('.form-section-wrap'),
		barCTA = $('#cta-bar');

	// Reset event loop, hide form, and unbind for resize
	//formWrapper.stop();
	//formWrapper.hide();	
	barCTA.unbind('click');
	
	barCTA.on('click',function(e){
		e.preventDefault()
		body.toggleClass('form-exposed');
		//formWrapper.slideToggle(400, function() {});
	});
	$('#close-form').on('click',function(e){
		e.preventDefault();
		body.toggleClass('form-exposed');
		//formWrapper.slideToggle(400, function() {});
	});

}

//owlCarousel function
function factSlider() {
   $(".fact-container").owlCarousel({
       navigation: true,
       pagination: true,
       center: true,
       margin: 0,
       responsiveBaseElement: window,
       itemsCustom : [
           [0, 1],
           [768, 2],
           [1070, 3],
       ],
   });
   $( ".owl-prev").html('<i class="fa fa-angle-left"></i>');
   $( ".owl-next").html('<i class="fa fa-angle-right"></i>');
}

