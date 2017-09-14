(function($){	
	$('.contactus-email a').on('click', function(){
		var href = this.href.replace('mailto:','');
		var event = '';
		switch(href.replace('@revature.com','')){
			case 'info':
				event = 'General';
				break;
			case 'universities':
				event = 'Academic Partners';
				break;
			case 'employers':
				event = 'Corporate Partners';
				break;
			case 'support':
				event = "Support";
				break;
		}
		try{
			__gaTracker('send','event', 'Email', 'Click', event);
		}catch(err){
			console.log('Google Analytics not loaded');
		}
	});
$('.contact-q').on('click', function(){
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
			$('.contact-q.accordion-active>img').attr('src', '../wp-content/themes/revature/imgs/faq-down-arrow.svg');
			img.attr('src', '../wp-content/themes/revature/imgs/faq-up-arrow.svg');
			//close all active sections
			$('.faq li.active').slideToggle('fast','linear').toggleClass('active');
			//remove active from all accordion titles
			$('.faq .accordion-active').removeClass('accordion-active');
		}
		currentTitle.toggleClass('accordion-active');
		currentTitle.next('li').slideToggle('fast', 'linear').toggleClass('active');
	});
	
	
	$('#contactSubmit').on('mouseover', function(){
		$(this).find('input[type="submit"]').css('color', '#FAB62B');
	});
	$('#contactSubmit').on('mouseout', function(){
		$(this).find('input[type="submit"]').css('color', '#fff');
	});
	$('#contactSubmit').on("click", function(e){
		e.preventDefault();
		var status = true;
		var requiredElements = $('input[required]');
		$.each(requiredElements, function(){
			if($(this).val().trim()==""){
				$(this).closest('.form-group').addClass('has-error');
				$(this).next('.help-block').show();
				status=false;
			}
			else{
				if($(this).attr('type')=='email'){
					var regex = /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i;
					if(!regex.test($(this).val())){
						$(this).closest('.form-group').addClass('has-error');
						$(this).next('.help-block').show();
						status=false;
					}
					else{
						$(this).closest('.form-group').removeClass('has-error');
						$(this).next('.help-block').hide();
					}
				}
								else if($(this).attr('type')=='tel'){
					if(!$(this)[0].validity.valid){
												$(this).closest('.form-group').addClass('has-error');
						$(this).next('.help-block').show();
						status=false;
					}
															else{
						$(this).closest('.form-group').removeClass('has-error');
						$(this).next('.help-block').hide();
					}
				}
								else if($(this).attr('id')=='Name'){
					var name = $(this).val().trim();
					if(!name.split(" ")[1]){
												$(this).closest('.form-group').addClass('has-error');
						$(this).next('.help-block').show();
						status=false;
					}
										else{
						$(this).closest('.form-group').removeClass('has-error');
						$(this).next('.help-block').hide();
					}
				}
				else{
					$(this).closest('.form-group').removeClass('has-error');
					$(this).next('.help-block').hide();	
				}
			}
		});
		if(status){
				$('#confirmFrame').on('load', function(){
				$('#contactFormContainer').hide();
		$('#confirm').show();
	});
	try{
			__gaTracker('send','event', 'Confirm Page', 'Submit', 'Contact Us');
	}catch(err){
		console.log('Google Analytics not loaded');
	}
	$('#Phone').val($('#Phone').val().replace(/[^\d]/g,'').substring(0,15));
			$('#contactForm').submit();
		}
	});

	var inquiryType = window.location.search;
	inquiryType = inquiryType.substring(1);
	var value = "";
	if(inquiryType==="online"){
		$('#Inquiry').val('RevaturePro Online');
	}else if(inquiryType==="bootcamp"){
		$('#Inquiry').val('RevaturePro Bootcamp');
	}
	else if(inquiryType==="academic"){
		$('#Inquiry').val('Academic Partners');
	}
	else if(inquiryType==="corporate"){
		$('#Inquiry').val('Client');
	}
})(jQuery);
		