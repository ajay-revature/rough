$('#contactSubmit').on('mouseover', function(){
		
		$(this).find('input[type="submit"]').parent().css({'background-color': '#f26925','color': '#fff'});
		$(this).find('input[type="submit"]').css('color', '#fff');
	});
	$('#contactSubmit').on('mouseout', function(){
		$(this).find('input[type="submit"]').parent().css({'background-color': '#fff','color': '#f26925'});
		$(this).find('input[type="submit"]').css('color', '#f26925');
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
				if($(this).attr('type')=='file'){
					$(this).nextAll('.help-block').show();
				}
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
				}else if($(this).attr('type')=='file'){
					var val = $(this).val().toLowerCase();
					var regex = new RegExp("(.*?)\.(docx|doc|pdf|rtf|txt)$");
					if(!(regex.test(val))) {
						$(this).closest('.form-group').addClass('has-error');
						$(this).nextAll('.help-block').show();
						status=false;
					}else{
						$(this).closest('.form-group').removeClass('has-error');
						$(this).next('.help-block').hide();
					}
				}else if($(this).attr('id')=='First_name'){
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
					else if($(this).attr('id')=='Last_name'){
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
				else if($(this).attr('id')=='file'){
					var file = $(this).val().trim();
					if(!file.split(" ")[1]){
						
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
			ga('send','event', 'Confirm Page', 'Submit', 'New Job Application');

	}catch(err){
		console.log('Google Analytics Not Loaded');
	}
	$('#Phone').val($('#Phone').val().replace(/[^\d]/g,'').substring(0,15));
			$('#career-apply-form').submit();
		}
	});

		