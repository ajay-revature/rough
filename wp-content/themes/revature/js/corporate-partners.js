jQuery(document).ready(function(e) {
	$('.revpro-sub-nav').sticky({
		topSpacing:0,
		zIndex:150
	});
	var aChildren = $('.revpro-sub-nav li').children();
	var aArray = [];
	for(var i=0;i<aChildren.length;i++){
		var aChild = aChildren[i];
		var ahref = $(aChild).attr('href');
		aArray.push(ahref);
	}
	$(window).scroll(function(){
		
		var windowPos = $(window).scrollTop();
		var windowHeight = $(window).height();
		var docHeight = $(document).height();
		for(var i=0;i<aArray.length;i++){
			var theID = aArray[i];
			var divPos = $(theID).offset().top - 50;
			var divHeight = $(theID).height();
			if(windowPos>=divPos&&windowPos<(divPos+divHeight)){
								$('a[href="'+theID+'"]').addClass('rev-pro-active');

			}else{
								$('a[href="'+theID+'"]').removeClass('rev-pro-active');

			}
		}
		if(windowPos+windowHeight==docHeight){
			if(!$('nav li:last-child a').hasClass('rev-pro-active')){
				var navActiveCurrent = $('.nav-active').attr('href');
				$('a[href="'+navActiveCurrent+'"]').removeClass('rev-pro-active');
				$('rev-pro-menu li:last-child a').addClass('rev-pro-active');
			}
		}
	});		
$('#myNavbar a').click(function(e){

	e.preventDefault();
	$(this).parent().parent().find('.rev-pro-active').removeClass('rev-pro-active');
	$(this).addClass('rev-pro-active');
	var href=$(this).attr('href');
	var speedValue = 1000;
	$('html, body').animate({
		scrollTop:$(href).offset().top 
	},speedValue);
});

	$('.corporate-q').on('click', function(){
		//var h4 = $(this).children('h4');
		var currentTitle = $(this);
		//down arrow
		var img = $(this).children('img');
		//check to see if clicked section is open
		//close the current section
		if(currentTitle.hasClass('accordion-active')){
			//change arrow to down arrow
			img.attr('src', '../wp-content/themes/revature/imgs/faq-down-arrow.svg');
		}else{
			//close the rest of the sections if another section is clicked
			//change the arrow to up
			$('.corporate-q.accordion-active>img').attr('src', '../wp-content/themes/revature/imgs/faq-down-arrow.svg');
			img.attr('src', '../wp-content/themes/revature/imgs/faq-up-arrow.svg');
			//close all active sections
			$('.faq li.active').slideToggle('fast','linear').toggleClass('active');
			//remove active from all accordion titles
			$('.faq .accordion-active').removeClass('accordion-active');
		}
		currentTitle.toggleClass('accordion-active');
		currentTitle.next('li').slideToggle('fast', 'linear').toggleClass('active');
	});
	$('.corp-benefits-box').on('click', function(){
		var img = $(this).children('.rev-benefit-icon');
		var content = $(this).children('.rev-benefit-content');
		var arrow = $(this).find('.arrow img');
		//not current section - close all sections
		if(!$(this).hasClass('active')){
			$('.arrow img.active').attr('src', '../wp-content/themes/revature/imgs/faq-down-arrow.svg').removeClass('active');
			arrow.attr('src', '../wp-content/themes/revature/imgs/faq-up-arrow.svg');
			$('.active>.rev-benefit-icon').slideToggle();
			$('.active>.rev-benefit-content').slideToggle();
			$('#revPro>.active').toggleClass('active');
		}
		//current section
		else{
			arrow.attr('src', '../wp-content/themes/revature/imgs/faq-down-arrow.svg');
		}
		img.slideToggle();
		content.slideToggle();
		$(this).toggleClass('active');
		arrow.toggleClass('active');
	});
});

	
	