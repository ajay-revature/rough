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
if(navigator.userAgent.match(/Trident\/7\./)||navigator.userAgent.match(/Edge\/\d./)) { // if IE
        $('body').on("mousewheel", function () {
            // remove default behavior
            event.preventDefault(); 

            //scroll without smoothing
            var wheelDelta = event.wheelDelta;
            var currentScrollPosition = window.pageYOffset;
            window.scrollTo(0, currentScrollPosition - wheelDelta);
        });
}
$('#section03').click(function(e){
    e.preventDefault();
    $('html, body').animate({
        scrollTop:$('#whatDo').offset().top
    }, 1000);
});
$('#section03').on('mouseover', function(){
    $(this).find('img').attr('src', '../wp-content/themes/revature/imgs/learn-more-arrow-h.svg');
    $(this).find('span').css('color', '#f7a528');
});
$('#section03').on('mouseout', function(){
    $(this).find('img').attr('src', '../wp-content/themes/revature/imgs/learn-more-arrow.svg');
    $(this).find('span').css('color', '#fff');
})
/* var video_count=1;
$('#hero-video').on('ended', function(e){
	var videoPlayer = $(this).get(0);
	video_count++;
	if(video_count==4){
		video_count=1;
	}
	var currentSrc = $(this).children('source').attr('src').split('_');
	var newSrc = currentSrc[0]+"_"+video_count+"_"+currentSrc[2];
	$(this).attr('src', newSrc);
	videoPlayer.load();
	videoPlayer.play();
	console.log(video_count);
}); */
	$('#hero-video').on('timeupdate', function(){
		if($(window)[0].innerWidth>=1024){
				var video = $(this)[0];
	var text = $('#hero-text');
			if(video.currentTime >= 0){
		text.html("We're a leading-edge<br/>technology solutions firm");
	}
	if(video.currentTime >= 5){
		text.html('with an unparalleled<br/>talent development platform');
	}
	if(video.currentTime >= 10.25){
		text.html('that empowers people<br/>and companies to</br>move forward, faster');
	}
	if(video.currentTime >= 16){
		text.html('by Advancing Talent<br/>and Technologies');
	}
		}
		else{
			$('#hero-text').html('Advancing Talent<br/>and Technologies.');
		}
});
if($(window)[0].innerWidth<1024){
	$('#hero-text').html('Advancing Talent<br/>and Technologies.');
}

$('#subnavigation-scroll  a').click(function(e){
	
	e.preventDefault();
	$(this).parent().parent().find('.rev-pro-active').removeClass('rev-pro-active');
	$(this).addClass('rev-pro-active');
	var href=$(this).attr('href');
	var speedValue = 1000;
	$('html, body').animate({
		scrollTop:$(href).offset().top
	},speedValue);
});

});