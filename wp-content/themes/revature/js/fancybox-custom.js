$(document).ready(function() {
			
		
			
			/*
			 *  Simple image gallery. Uses default settings
			 */

			
 $(".fancybox").fancybox({'width':700,
                         'height':400,
                         'autoSize' : false});
			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});
			
			 $(".fancybox-marketo").fancybox({'maxWidth':700,
											'maxHeight':500});
			/*
			 *  Different effects
			 */


			
			
			


		});

