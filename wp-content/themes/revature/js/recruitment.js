	$('#submitBtn').on('mouseover', function(){
		$(this).find('input[type="submit"]').css('color', '#f26925');
	});
	$('#submitBtn').on('mouseout', function(){
		$(this).find('input[type="submit"]').css('color', '#fff');
	});
	var monthNames = ["January", "February", "March", "April", "May", "June",
  "July", "August", "September", "October", "November", "December"
];

	
	var d = new Date();
	
	var month = d.getMonth();
	var year = d.getFullYear();
	$('#GraduationMonth').val(monthNames[month]);
	$('#GraduationYear').val(year);
	
	$('#ReferenceSelect').on('change', function(){
		if($(this).val()=="Other"){
			$('#OtherSection').html('<input class="shortfield-home form-control" type="text" placeholder="How did you hear about our program?" name="OtherReference" id="OtherReference" required/><span class="help-block" style="display:none;">Please enter how you heard about our program..</span>');
		}else{
			$('#OtherSection').html('');
		}
	});
	$('#Phone1').autotab({format:'number', target:'#Phone2'});
	$('#Phone2').autotab({format:'number', target:'#Phone3', previous:'#Phone1'});
	$('#Phone3').autotab({format:'number', previous:'#Phone2'});

	$('#submitBtn').on("click", function(e){
		e.preventDefault();
		var status = true;
		var phoneStatus = true;
		var requiredPhone = $('.phone');
		$.each(requiredPhone, function(){
			if($(this).val()==""){
				status = false;
				phoneStatus = false;
			}
		});
		if(phoneStatus==false){
			$('#PhoneGroup').addClass('has-error');
			$('#PhoneHelp').show();
		}else{
			$('#PhoneGroup').removeClass('has-error');
			$('#PhoneHelp').hide();			
		}
			var requiredElements = $('input,select').filter('[required]:visible');
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
				else{
					$(this).closest('.form-group').removeClass('has-error');
					$(this).next('.help-block').hide();	
				}
			}
		});
		if(status){
					$('#iframe').on('load', function(){
					$('#formContainer').hide();
		$('#confirm').show();
	});
	try{
		__gaTracker('send','event', 'Confirm Page', 'Submit', $('input[name=SendKey]').val());
	}catch(err){
		console.log('Google Analytics is not loaded');
	}
	
	$('#Phone').val($('#Phone1').val()+$('#Phone2').val()+$('#Phone3').val());
	$('#Phone1').attr('disabled', 'disabled');
	$('#Phone2').attr('disabled', 'disabled');
	$('#Phone3').attr('disabled', 'disabled');
	$('#GraduationDate').val($('#GraduationMonth').val()+" "+$('#GraduationYear').val());
	$('#GraduationMonth').attr('disabled', 'disabled');
	$('#GraduationYear').attr('disabled', 'disabled');
	if($('#ReferenceSelect').val()=="Other"){
		$('#Reference').val($('#OtherReference').val());
		$('#OtherReference').attr('disabled', 'disabled');
	}else{
		$('#Reference').val($('#ReferenceSelect').val());
	}
	$('#ReferenceSelect').attr('disabled', 'disabled');
			$('#schoolForm').submit();
		}
	});
	$('#applyBtn, #applyBtnXs').click(function(e){
    e.preventDefault();
    $('html, body').animate({
        scrollTop:$('#apply').offset().top
    }, 2000);
	$(this).mouseup(function(){
		$(this).blur();
	});
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
