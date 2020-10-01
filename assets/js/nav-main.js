jQuery(document).ready(function($){
	//if you change this breakpoint in the style.css file (or _layout.scss if you use SASS), don't forget to update this value as well
	var MQL = 1170;

	//open/close primary navigation
	$('.nav-primary-nav-trigger').on('click', function(){
		$('.nav-menu-icon').toggleClass('is-clicked');

		//in firefox transitions break when parent overflow is changed, so we need to wait for the end of the trasition to give the body an overflow hidden
		if( $('.nav-primary-nav').hasClass('is-visible') ) {
			$('.nav-primary-nav').removeClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',function(){
				$('body').removeClass('overflow-hidden');
			});
		} else {
			$('.nav-primary-nav').addClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',function(){
				$('body').addClass('overflow-hidden');
			});
		}
	});


});
