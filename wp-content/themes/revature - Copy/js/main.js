jQuery(document).ready(function($){
	
$('#revature-online-btn').on("click",function(){
  var usersid =  $(this).attr("id");

})
	$('.revpro-sub-nav').sticky({
		topSpacing:0,
		zIndex:150,
		wrapperClassName:'rev-pro-sticky-wrapper'
	});
	var aChildren = $('.revpro-sub-nav li').children();
	var aArray = [];
	for(var i=0;i<aChildren.length;i++){
		var aChild = aChildren[i];
		var ahref = $(aChild).attr('href');
		aArray.push(ahref);
	}
$('.qq').on('click', function(){
	
	
		var h4 = $(this).children('h4');
		var img = $(this).children('img');
		//not current section - close all sections
		if(h4.hasClass('cod-active')){
			$('.qq img.active').attr('src', '/wp-content/themes/imgs/faq-actdown-arrow.svg').removeClass('active');
			img.attr('src', '/wp-content/themes/imgs/faq-actup-arrow.svg');
			$('.faq li.active').slideToggle('fast','linear').toggleClass('active');
			$('.faq h4').not('.cod-active').addClass('cod-active');
			
		}
		//current title - close current section
		else{
			img.attr('src', '/wp-content/themes/imgs/faq-actdown-arrow.svg');
			h4.removeClass('cod-active');
			$('.qq img.active').toggleClass('active');
		}
		h4.toggleClass('cod-active');
		img.toggleClass('active');
		$(this).next('li').slideToggle('fast', 'linear').toggleClass('active');
	});
	
	$('.q').on('click', function(){
		var h4 = $(this).children('h4');
		var img = $(this).children('img');
		//not current section - close all sections
		if(h4.hasClass('cod-active')){
			$('.q img.active').attr('src', '../wp-content/themes/revature/imgs/faq-actdown-arrow.svg').removeClass('active');
			img.attr('src', '../wp-content/themes/revature/imgs/faq-actup-arrow.svg');
			$('.faq li.active').slideToggle('fast','linear').toggleClass('active');
			$('.faq h4').not('.cod-active').addClass('cod-active');
			
		}
		//current title - close current section
		else{
			img.attr('src', '../wp-content/themes/revature/imgs/faq-actdown-arrow.svg');
			h4.removeClass('cod-active');
			$('.q img.active').toggleClass('active');
		}
		h4.toggleClass('cod-active');
		img.toggleClass('active');
		$(this).next('li').slideToggle('fast', 'linear').toggleClass('active');
	});
	$('.rev-pro-blog').on('click', function(){
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

$('#applyBtn').click(function(e){
    e.preventDefault();
    $('html, body').animate({
        scrollTop:$('#apply').offset().top - 50
    }, 2000);
	$(this).mouseup(function(){
		$(this).blur();
	});
});
$('#stickyNav a').click(function(e){
	e.preventDefault();
	$(this).parent().parent().find('.rev-pro-active').removeClass('rev-pro-active');
	$(this).addClass('rev-pro-active');
	var href=$(this).attr('href');
	var speedValue = 1000;
	$('html, body').animate({
		scrollTop:$(href).offset().top - 30
	},speedValue);
});



