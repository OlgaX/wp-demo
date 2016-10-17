"use strict";

//SLICKNAV MENU
//-------------------------------------------------
(function($) {
  $('#nav').slicknav({
    prependTo: '#mobile_nav'
  });

  //create additional menu near slicknav menu
	//from menu items in the main navigation which have the class 'mmenu-show'
  $('#mobile_nav').find('.mmenu-show').prependTo('#mobile_nav').wrapAll('<ul class="mobile-nav-visible" />');

  //close slicknav menu after click outside an element
  $(document).on('click', function(event) {
    if (!$(event.target).closest('.slicknav_menu').length && !$(event.target).is('.slicknav_menu')) {
      if ($('.slicknav_open').size()) {
        $('#nav').slicknav('close');
      }
    }
  })

	$('.slicknav_btn').on('click', function(){
		if ($(this).hasClass('slicknav_open')) $('#header').addClass('mmenu-open');
		else $('#header').removeClass('mmenu-open');
	})
})(jQuery);

//TOP-SLIDER
//-------------------------------------------------
(function($) {
  $('#top_slider').owlCarousel({
    singleItem: true,
    autoPlay: 7000,
    stopOnHover: true,
    transitionStyle: "fade"
  });
})(jQuery);

//SERVICES-SLIDER
//-------------------------------------------------
(function($) {
  var $sync1 = $("#services_slider_2");
  var $sync2 = $("#services_slider_1");

  $sync1.owlCarousel({
    singleItem: true,
    autoPlay: 8000,
    stopOnHover: true,
    slideSpeed: 1000,
    pagination: true,
    dragBeforeAnimFinish: false,
    mouseDrag: false,
    touchDrag: false,
    responsiveRefreshRate: 200,
    transitionStyle: "fade",
    afterAction: syncPosition,
    afterInit: function(el) {
      this.owlControls.prependTo('#services_slider_controls');
    }
  });

  $sync2.owlCarousel({
    singleItem: true,
    pagination: false,
    dragBeforeAnimFinish: false,
    mouseDrag: false,
    touchDrag: false,
    responsiveRefreshRate: 100,
    transitionStyle: "fade",
    afterInit: function(el) {
      el.find(".owl-item").eq(0).addClass("synced");
    }
  });

  function syncPosition(el) {
    var current = this.currentItem;
    $sync2.find(".owl-item")
      .removeClass("synced")
      .eq(current)
      .addClass("synced")
    if ($sync2.data("owlCarousel") !== undefined) center(current);
  }

  function center(number) {
    $sync2.trigger("owl.goTo", number);
  }
})(jQuery);

//WRITERS-SLIDER
//-------------------------------------------------
(function($) {
	//rotateSlider plugin
  $.fn.rotateSlider = function() {
    var $this = this,
      $slide = $this.find('[data-rotateslider=slide]'),
      $nav = $this.find('[data-rotateslider=nav]'),
      totalSlides = $slide.length,
      defaultIndex = 0;

    changeIndex(defaultIndex);

    $nav.on('click', function(e) {
      var action = $(e.target).data('rotateslider'),
        nowIndex = $slide.index($this.find('.now'));

      if (action == 'next') {
        if (nowIndex === totalSlides - 1) changeIndex(0);
        else changeIndex(nowIndex + 1);
      } else if (action === 'prev') {
        if (nowIndex === 0) changeIndex(totalSlides - 1);
        else changeIndex(nowIndex - 1);
      }
    });

    function changeIndex(nowIndex) {
      $this.find('.now').removeClass('now');
      $this.find('.next').removeClass('next');
      $this.find('.prev').removeClass('prev');

		  if (nowIndex === totalSlides - 1) $slide.eq(0).addClass('next');
		  if (nowIndex === 0) $slide.eq(totalSlides - 1).addClass('prev');

      $slide.each(function(index) {
        if (index === nowIndex) $slide.eq(index).addClass('now');
        if (index === nowIndex + 1) $slide.eq(index).addClass('next');
        if (index === nowIndex - 1) $slide.eq(index).addClass('prev');
      });

    }

		return this;
  };

	//init rotateSlider plugin
	$('#writers_slider').rotateSlider();
})(jQuery);

//TESTIMONIALS-SLIDER
//-------------------------------------------------
(function($) {
  $('#testim_slider').owlCarousel({
    singleItem: true,
    autoPlay: 10000,
    stopOnHover: true,
    transitionStyle: "fade"
  });
})(jQuery);

//CONTENT-ACCORDION
//-------------------------------------------------
(function($) {
  $('[data-accordion=container]').on('click', accordionHandler);

	function accordionHandler (e) {
		var $header = $(e.target).closest('[data-accordion=header]');
		if ($header.length) {
			$header.toggleClass('open').next('[data-accordion=body]').not(":animated").slideToggle();
		}
	}

})(jQuery);

//SERVICES-TABS
//-------------------------------------------------
(function($) {
	//TABS
	var tablist = $('[data-tabs=tablist]'),
			content = $('[data-tabs=content]'),
			activeTab = 'active-tab';

	tablist.on('click', function(e) {
		var $this = $(e.target);

		if (!$this.is('[data-tabs=tablist-item]')) return false;

		var index = $this.addClass(activeTab).index();

		$this
		.siblings().removeClass(activeTab);
		content.children().removeClass(activeTab).eq(index).addClass(activeTab);
	});
})(jQuery);

//COUNTERS
//-------------------------------------------------
$('.counter').counterUp({
  delay: 20,
  time: 2000
});

//SCROLL TOP BUTTON
//-------------------------------------------------
(function($) {
  var findWindowHeight = function() {
    return windowHeight = $(window).height();
  };

  var addScrollButton = function() {
    if ($(window).scrollTop() > windowHeight && !$('#scrollButton').size()) {
      var scrollButton = '<div id="scrollButton" class="scroll-button"/>';
      $('body').append(scrollButton);
    } else if ($(window).scrollTop() < windowHeight && $('#scrollButton').size()) {
      $('#scrollButton').remove();
    }
  };

  var scrollPage = function() {
    $('body, html').animate({
      scrollTop: 0
    }, 800);
  };

  var windowHeight = findWindowHeight();

  $(window).scroll(addScrollButton);
  $(window).resize(findWindowHeight);

  $('body').on('click', '#scrollButton', scrollPage);
})(jQuery);

//ANIMATED HEADER
//-------------------------------------------------
(function($) {
  var fixedItem = $('#header'),
    fixedClass = 'animated',
    minMarginTop;

  if (fixedItem.size()) {
    var scrollTopValue = function() {
      return $(window).scrollTop()
    };

    var fixedFunc = function() {
      fixedItem.addClass(fixedClass);
    };

    var unfixedFunc = function() {
      fixedItem.removeClass(fixedClass);
    };

    var toggleFixedFunc = function() {

      minMarginTop = fixedItem.height();

      if (scrollTopValue() > minMarginTop) {
        fixedFunc();
      } else if (scrollTopValue() === 0) {
        unfixedFunc();
      }
    };

    $(window).on('scroll', toggleFixedFunc);
    $(window).on('load', toggleFixedFunc);
  }
})(jQuery);
