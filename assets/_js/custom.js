jQuery.noConflict();
jQuery(document).ready(function($) {
	
	// NAVIGATION JQUERY
    jQuery('ul.nav li.dropdown').hover(function (){
        jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn();
    }, function (){
        jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut();
    });
	
	
	// TOOLTIP ACTIVATION
	jQuery("[data-toggle='tooltip']").tooltip();
	
	
	// MEDIA PLAYER ACTIVATION
	jQuery('audio').mediaelementplayer();
	
	
	// NIVO SLIDER ACTIVATION
	jQuery(".frontpageslider").show();
	jQuery(".frontpageslider").startslider({

		slideTransitionSpeed: 500,
		slideTransitionEasing: "easeOutExpo",
		slidesDraggable: true,
		sliderResizable: true,
		showDots:true,
		sliderWidth: "100%",
		sliderHeight: "550px"

	});
	  
	// FLICKR WIDGET OPTIONS
	$.getJSON("http://api.flickr.com/services/feeds/photos_public.gne?id=52617155@N08&lang=en-us&format=json&jsoncallback=?", function(data){
	  
		$.each(data.items, function(i,item){
		  
			if(i<12){
			  
				$("<img/>").attr("src", item.media.m.replace('_m', '_s')).appendTo("ul.flickrhere").wrap("<li><a href='" + item.link + "' target='_blank' title='Flickr'></a></li>");
			  
			}
		
		});	
		
	});
	
	// AJAX CONTACT FORM SECTION
	jQuery("#ajax-contact-form").submit(function(event) {
		
		event.preventDefault();
			
		var successmessage = "Your message has been sent. Thank you!";
		var email = jQuery("#email");
		var name = jQuery("#name");
		var message = jQuery("#message");
		var isvalid = 1;
		var url = "contact.php";
			
		jQuery.post(url,{ name: name.val(), email: email.val(), message: message.val(), isvalid: isvalid } , function(data) {
					
			if(data == "OK"){
			
				jQuery("#email").val("");
				jQuery("#message").val("");
				jQuery("#name").val("");
				jQuery("#fields").fadeOut(1000).delay(4000).fadeIn(1000);
				jQuery("#note").html("<div class=\"alert alert-success\">"+successmessage+"</div>").delay(1000).fadeIn(1000).delay(2000).fadeOut(1000);
				jQuery("input[type=submit]", jQuery("#ajax-contact-form")).removeAttr("disabled");
						
			} else {
				
				jQuery("#note").html(data).fadeIn().delay(1000).fadeOut();
				jQuery("input[type=submit]", jQuery("#ajax-contact-form")).removeAttr("disabled");
				return false;
							
			}
					
		});
			
	});
	
	// PORTFOLIO PAGES
		jQuery('ul#filters > li > a').click(function(){
			var selector = jQuery(this).attr('data-filter');
			jQuery('#ublportfolio').isotope({ filter: selector });
			return false;
		 });
	 
		// set selected menu items
		var thisoptionSets = jQuery('.option-set'),
		thisoptionLinks = thisoptionSets.find('a');
		
		thisoptionLinks.click(function(){
		  var thisss = jQuery(this);
		// don't proceed if already selected
		if ( thisss.hasClass('selected') ) {
		  return false;
		}
		var thisoptionSets = thisss.parents('.option-set');
		thisoptionSets.find('.selected').removeClass('selected');
		thisss.addClass('selected'); 
	});
	
	// SHARRRE JQUERY
		jQuery('#ublportfoliotwitter').sharrre({
		share: {
			twitter: true
		},
		enableHover: false,
		enableTracking: true,
		buttons: {},
		click: function(api, options){
			api.simulateClick();
			api.openPopup('twitter');
		}
	});
	jQuery('#ublportfoliofacebook').sharrre({
		share: {
			facebook: true
		},
		enableHover: false,
		enableTracking: true,
		click: function(api, options){
			api.simulateClick();
			api.openPopup('facebook');
		}
	});
	jQuery('#ublportfoliogoogleplus').sharrre({
		share: {
			googlePlus: true
		},
		enableHover: false,
		enableTracking: true,
		click: function(api, options){
			api.simulateClick();
			api.openPopup('googlePlus');
		}
	});
	jQuery('#ublportfoliodelicious').sharrre({
		share: {
			delicious: true
		},
		enableHover: false,
		enableTracking: true,
		click: function(api, options){
			api.simulateClick();
			api.openPopup('delicious');
		}
	});
	jQuery('#ublportfoliostumbleupon').sharrre({
		share: {
			stumbleupon: true
		},
		enableHover: false,
		enableTracking: true,
		click: function(api, options){
			api.simulateClick();
			api.openPopup('stumbleupon');
		}
	});
	jQuery('#ublportfoliopinterest').sharrre({
		share: {
			pinterest: true
		},
		enableHover: false,
		enableTracking: true,
		click: function(api, options){
			api.simulateClick();
			api.openPopup('pinterest');
		}
	});
	jQuery('#ublportfoliolinkedin').sharrre({
		share: {
			linkedin: true
		},
		enableHover: false,
		enableTracking: true,
		click: function(api, options){
			api.simulateClick();
			api.openPopup('linkedin');
		}
	});
	
});

// PORTFOLIO ON PAGE LOAD
jQuery(window).load(function() {

	jQuery('#ublportfolio').isotope({
		animationOptions: {
		  duration: 750
		},
		animationEngine : 'best-available',
		itemSelector: '.thisportfolioitem, .portfolioitem'
	});
});