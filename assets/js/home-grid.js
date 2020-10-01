/**
 * This script adds the jquery effects to the PA Theme.
 *
 * @package PA\JS
 * @author StudioPress
 * @license GPL-2.0-or-later
 */
( function( $ ) {


		var servCard = document.getElementsByClassName('skill-card__card');
		for (var i = 0; i < servCard.length; i++) {
			servCard[i].addEventListener('click', function() {
				this.classList.toggle('active');
			});
		    // list[i] is a node with the desired class name
		}

		/*
		$('.skill-card').on('touchstart', function (e) {
			'use strict'; //satisfy code inspectors
			var link = $(this); //preselect the link
			if (link.hasClass('hover')) {
				return true;
			} else {
				link.addClass('hover');
				$('.skill-card').not(this).removeClass('hover');
				return false; //extra, and to make sure the function has consistent return points
			}
		});
		*/
		var ANIMATION_SPEED = 300
		var SCROLL_SPEED = 200

		// Adjust case-study-details position relative to grid based on changing number of
		// columns per row.
		var updateCardDetailsPos = function () {
		  var w = jQuery(window).width
		  var cardDetailsHalf = jQuery('.case-study-grid.half .case-study-details')
		  var cardDetailsSizeHalf = cardDetailsHalf.length
		  var cardDetailsThirds = jQuery('.case-study-grid.thirds .case-study-details')
		  var cardDetailsSizeThirds = cardDetailsThirds.length

		  cardDetailsHalf.each(function (i) {
		    var cardsPerRowHalf = jQuery(this).css('grid-column-end') - 2
		    var rowHalf = Math.floor(i / cardsPerRowHalf)
		    var gridRowStyleHalf = (rowHalf + 2) + ' / ' + (rowHalf + 3)

		    jQuery(this).css('grid-row', gridRowStyleHalf)
		  })

		  cardDetailsThirds.each(function (i) {
		    var cardsPerRowThirds = jQuery(this).css('grid-column-end') - 1
		    var rowThirds = Math.floor(i / cardsPerRowThirds)
		    var gridRowStyleThirds = (rowThirds + 2) + ' / ' + (rowThirds + 3)

		    jQuery(this).css('grid-row', gridRowStyleThirds)
		  })
		}

		var handleResize = function () {
		  updateCardDetailsPos()
		}

		var scrollToButton = function (button) {
		  jQuery('html, body').animate({
		    scrollTop: button.offset().top
		  }, SCROLL_SPEED)
		}

		// Clicking a card should toggle its corresponding details block open (and
		// close other details blocks that might already be open).
		var handleCardClick = function () {
		  var clickedCard = jQuery(this)
		  var clickedCardIcon = clickedCard.find('.case-study-icon').first()
		  var cards = jQuery('.case-study')
		  var cardsSize = cards.length
		  var i = cards.index(this)
		  var clickedDetails = jQuery('.case-study-details:eq(' + i + ')')
		  var openCard = jQuery('.case-study.open').first()
		  var openDetails = jQuery('.case-study-details.open').first()
		  var sameRowDetails = clickedDetails.css('grid-row') === openDetails.css('grid-row')
		  var clickClose = clickedCard.hasClass('open')

		  // set all cards to "closed"
		  jQuery('.case-study').removeClass('open')
		  jQuery('.case-study .case-study-icon').removeClass('case-study-close')
		  jQuery('.case-study-details').removeClass('open')

		  if (!clickClose) {
		    clickedCardIcon.addClass('case-study-close')
		    clickedCard.addClass('open')
		    clickedDetails.addClass('open')
		  }

		  // close/open details (use "fade" if on same row as existing open details,
		  // otherwise, use "slide").
		  if (clickClose) {
		    clickedDetails.slideToggle(ANIMATION_SPEED)
		    scrollToButton(clickedCard)
		  } else if (!clickClose && sameRowDetails) {
		    clickedDetails.fadeIn(ANIMATION_SPEED)
		    openDetails.fadeOut(ANIMATION_SPEED)
		  } else {
		    openDetails.slideUp(ANIMATION_SPEED).promise().done(function () {
		      clickedDetails.slideToggle(ANIMATION_SPEED)
		      scrollToButton(clickedCard)
		    })
		  }
		}

		// Wait until markup and styles have finished rendering before intializing
		// JS resizing (setTimeout(0) forces wait until next available draw cycle).
		jQuery(document).ready(function () {
		  setTimeout(function () {
		    jQuery('.case-study').click(handleCardClick)
		    jQuery(window).resize(handleResize)
		    handleResize()
		  }, 0)
		})

}( jQuery ) );
