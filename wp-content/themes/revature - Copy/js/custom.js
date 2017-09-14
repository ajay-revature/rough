

 
		jQuery(document).ready(function($) {
     	
					
			$(".navbar-toggle").click(function(){		
				  $('.login-revature').hide();		
    		
});		
					
	
	$(window).resize(function() {		
			
     $('.mobile_user_icon').hide();		
    var width = $(document).width();		
    if (width < 767) {		
					
      $('.mobile_user_icon').show();		
    }		
});		

				
	if ($(window).width() < 767) {		
   $('.mobile_user_icon').show();		
}		
else {		
   $('.mobile_user_icon').hide();		
}		

	
	
			


      // store the slider in a local variable
      var $window = $(window),
          flexslider = { vars:{} };

      // tiny helper function to add breakpoints
      function getGridSize() {
        return (window.innerWidth < 600) ? 2 :
               (window.innerWidth < 900) ? 3 : 4;
      }

      
      $window.load(function() {
        $('.flexslider').flexslider({
          animation: "slide",
          animationSpeed: 400,
          animationLoop: false,
          itemWidth: 210,
          itemMargin: 5,
          minItems: getGridSize(), // use function to pull in initial value
          maxItems: getGridSize(), // use function to pull in initial value
          start: function(slider){
            $('body').removeClass('loading');
            flexslider = slider;
          }
        });
		
		$('.flexslider-white').flexslider({
          animation: "slide",
          animationSpeed: 400,
          animationLoop: false,
          itemWidth: 210,
          itemMargin: 5,
          minItems: getGridSize(), // use function to pull in initial value
          maxItems: getGridSize(), // use function to pull in initial value
          start: function(slider){
            $('body').removeClass('loading');
			
            flexslider = slider;
			slider.find('.flex-caption').addClass('white-txt');
          }
        });

		$('.flexsliders').flexslider({
          animation: "slide",
         
		  slideshowSpeed:2000,
		  animationDuration: 1000,
          animationLoop: true,
		  controlNav: false,
		  directionNav:false,
          itemWidth: 240,
		  itemHeight: 240,
          itemMargin: 5,
		   move: 1,
          
          start: function(slider){
            $('body').removeClass('loading');
            flexslider = slider;
          }
        });
		
		
      });
 
      // check grid size on resize event
      $window.resize(function() {
        var gridSize = getGridSize();

        flexslider.vars.minItems = gridSize;
        flexslider.vars.maxItems = gridSize;
      });


	if(document.getElementById('ResumeUpload')){
		 if($(window).width() < 768){
			document.getElementById("ResumeUpload").required = false;
			$(document).ready(function(){		
					$("#resume_star").hide();				
				});
		}
		else{
			document.getElementById("ResumeUpload").required = true;
			}
	}

				$('#myCarousel,#myCarousel-2').carousel({
			interval: false
			});		
  });
 
   

