jQuery(function(){
	$('a.lightbox').fancybox();
	$('a.fancybox').fancybox();

  $('.csc-textpic-caption').each(function(){
    var text = $(this).text();
    var image = $(this).prev();
    if (text.length > 0) {
        $(this).css({
          'width': image.outerWidth() + 'px'
        });
    }
  });

  $(document).ready(function() {
    var headerHeight = $("#page").offset().top;
    var pageHeight = $("#pagefooter").offset().top-headerHeight;
    var footerHeight = $("#pagefooter").height();
    if(headerHeight + pageHeight < window.innerHeight - footerHeight){
      $("html").addClass("stickyfooter");
    }
  });

	$('.slickSlider').each(function(){
		if ($(this).attr('data-autoplay')==0 && $(this).attr('data-autoplay')) {
			var autoplay = false;
		} else {
			var autoplay = true;
		}

		var slideSpeed = (typeof $(this).attr('data-slidespeed') === 'undefined') ? 300 : $(this).attr('data-slidespeed'),
			autoSpeed = (typeof $(this).attr('data-autospeed') === 'undefined') ? 6400 : $(this).attr('data-autospeed');

		$(this).slick({
			dots: true,
			infinite: true,
			speed: parseInt(slideSpeed),
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: autoplay,
			autoplaySpeed: parseInt(autoSpeed),
			prevArrow: '<span href="#" class="prev slickNav"><span class="adminui-back51"></span></span>',
			nextArrow: '<span href="#" class="next slickNav"><span class="adminui-play96"></span></span>'
		});
	});


  $(document).on('mouseenter mouseleave', '.socialMenu li',function(event){
    var hint = $(this).find('.hint');
    switch (event.type) {
      case "mouseenter":
        var newMargin = parseInt(hint.outerWidth()) / 2;
        hint.css({
          'margin-left': '-'+newMargin+'px'
        });
        break;
      case "mouseleave":
        hint.removeAttr('style');
        break;
    }
  });


	$(document).on('click touchstart','.mainmenu ul.Level1>li.dropdown>a',function(event){
		if($('.mobile').is(':visible')){
			event.preventDefault();
			$('ul.Level1 li').toggleClass('subactive');
			$(this).parent().toggleClass('subactive');
			console.log($(this).parent('li').children('ul'));
			$(this).parent().toggleClass('active');
      if($(this).parent('li').children('ul').attr("style") === "left: 0px;"){
        $(this).parent('li').children('ul').animate({left: '100vw'}, {duration: 500});
      }else{
        $(this).parent('li').children('ul').animate({left: '0'}, {duration: 500});
      }
		}
	});

  $(document).on('click touchstart','.mainmenu ul.Level2>li.dropdown>a',function(event){
    if($('.mobile').is(':visible')){
      event.preventDefault();
      $('ul.Level2 li').toggleClass('subactive');
      $('ul.Level2').css({top:0});
      $('ul.Level1 li').toggleClass('subactive');
      //$('.Level2>li').hide();
      //$('.dropdown.subactive.active').show();
      $('.dropdown.subactive.active>li').show();
      $(this).parent().toggleClass('subactive');
      console.log($(this).parent('li').children('ul'));
      $(this).parent().toggleClass('active');
      if($(this).parent('li').children('ul').attr("style") === "left: 0px;"){
        $(this).parent('li').children('ul').animate({left: '100vw'}, {duration: 500});
      }else{
        $(this).parent('li').children('ul').animate({left: '0'}, {duration: 500});
      }
    }
  });

  $(document).on('click touchstart','.breadcrumb ul li:eq(1) a',function(event){
    event.preventDefault();
  });


	$(document).on('click touchstart','#nav-toggle',function(event){
		event.preventDefault();
		$(this).next('.mainmenu').slideToggle(250);
		return false;
	});

	$(document).on('click touchstart','.accordionBox',function(event){
		$(this).toggleClass('open');
		$(this).next('.accordionInner').slideToggle(250);
	});

	$(document).on('click touchstart','#fontSizer a',function(event){
		event.preventDefault();
		var elementsToResize = '#page, .mainmenu, footer',
			currenFontSize = parseInt($(elementsToResize).css('font-size')),
			resizeDifference = 1;
		if ($(this).hasClass('makeItSmaller')) {
			var newSize = currenFontSize - resizeDifference;
		}
		if ($(this).hasClass('makeItBigger')) {
			var newSize = currenFontSize + resizeDifference;
		}
		$(elementsToResize).css({
			'font-size': newSize + 'px'
		});
		return false;
	});


  //inserted for offCanvas
  $(document).on('click touchstart','.mobileMenuTrigger',function(event){
      event.preventDefault();
      var action = $(this).attr('data-action');
      $('#siteWrapper').attr('data-status',action);
      return false;
  });

  $(document).on('click touchstart','.permanentOffCanvasTrigger',function(event){
      event.preventDefault();
      var action = $(this).attr('data-action');
      if(action=="open"){
        $(this).attr('data-action','close');
      }else{
        $(this).attr('data-action','open');
      }
      $('#siteWrapper').attr('data-status',action);
      return false;
  });

  $(document).on('click touchstart','.offCanvasMenu .subOpener,.permanentOffCanvas .subOpener',function(event){
    event.preventDefault();
    var currentStatus = $(this).attr('data-status');
    console.log(currentStatus);
    switch (currentStatus) {
      case "open":
        $(this).attr('data-status','close');
        $(this).next().slideUp(250);
        break;
      case "close":
        $(this).attr('data-status','open');
        $(this).next().slideDown(250);
        break;
    }
    return false;
  });

  $(document).on('click touchstart','.accordeonWrapper .opener',function(){
    var status = $(this).attr('data-status');
    var thisElement = $(this);
    switch (status) {
      case "open":
        break;
      case "close":
        var openElement = $(this).parents('.accordeonWrapper').find('.opener[data-status="open"]');
        if (openElement.length > 0) {
          openElement.attr('data-status','close');
          openElement.next('.foldout').slideUp(250);
        }
        thisElement.attr('data-status','open');
        thisElement.next('.foldout').slideDown(250);
        break;
    }
  });

  function initBasePositionForSidebar(){
    var parentContainer = $('.mainmenu .innerWrap');
    var slidebarElement = parentContainer.find('.slidebar');
    var activeElement = parentContainer.find('.active');
    var linkElement = activeElement.children('a');
    var newXOffset = activeElement.offset().left - parentContainer.offset().left + parseInt(linkElement.css('padding-left'));
    var width = linkElement.innerWidth() - parseInt(linkElement.css('padding-left')) - parseInt(linkElement.css('padding-right'));
    slidebarElement.css({
      'left': newXOffset+'px',
      'width': width+'px'
    });
    slidebarElement.attr('data-status','active');
  }
  setTimeout(function() { 
    initBasePositionForSidebar();
  }, 1000);
  

  $(document).on('mouseenter mouseleave','.Level1 > li',function(event){
    var parentContainer = $(this).parents('.innerWrap');
    var slidebarElement = parentContainer.find('.slidebar');
    var linkElement = $(this).children('a');
    switch(event.type){
      case "mouseenter":
        var newXOffset = $(this).offset().left - parentContainer.offset().left + parseInt(linkElement.css('padding-left'));
        var width = linkElement.innerWidth() - parseInt(linkElement.css('padding-left')) - parseInt(linkElement.css('padding-right'));
        slidebarElement.css({
          'left': newXOffset+'px',
          'width': width+'px'
        });
        slidebarElement.removeAttr('data-status');
        if ($(this).hasClass('active')){
          slidebarElement.attr('data-status','active');
        }
        break;
      default:
        initBasePositionForSidebar();
        break;
    }
    if ($(this).hasClass('dropdown')){
      //$(this).find('.Level2').slideToggle(250);      
    }
  });


  $('a[rel="lightbox[myImageSet]"], .fancybox, .lightbox').fancybox({
    maxWidth: 1000,
    maxHeight: 1000,
    padding: 0,
    autoSize: true,
    autoScale: true,
  });
  
});
