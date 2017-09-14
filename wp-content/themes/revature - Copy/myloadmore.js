
			$('#submitBtn').on('mouseover', function(){
		$(this).find('input[type="submit"]').css('color', '#f26925');
	});
	$('#submitBtn').on('mouseout', function(){
		$(this).find('input[type="submit"]').css('color', '#fff');
	});
	$('.revpro-sub-nav').affix({
		offset:{
			top:$('.blog-search-bg').outerHeight(true)+$('.blog-hero').outerHeight(true)+$('.navbar-wrapper').outerHeight(true)
		}
	});
/* 		$('.revpro-sub-nav').sticky({
		topSpacing:0,
		zIndex:150,
		getWidthFrom:".sub-nav",
		responsiveWidth:true
	});

	    var onFunctions = {
        on: {
            is: {
                xs: function(){console.log('is xs');$('.revpro-sub-nav').sticky('update');},
                sm: function(){console.log('is sm');},
                md: function(){console.log('is md');},
                lg: function(){console.log('is lg');}
            },
            was: {
                xs: function(){console.log('was xs');},
                sm: function(){console.log('was sm');},
                md: function(){console.log('was md');},
                lg: function(){console.log('was lg');}
            }
        }
    };
	$(document).ready(function(){
		$.respond({functions:onFunctions});
	}); */