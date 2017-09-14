	$('#submitBtn').on('mouseover', function(){
		$(this).find('input[type="submit"]').css('color', '#f26925');
	});
	$('#submitBtn').on('mouseout', function(){
		$(this).find('input[type="submit"]').css('color', '#fff');
	});
	$('.btn').on('mouseout', function(){
		$(this).find('span').css('color', '#fff');
	});
		$('.btn').on('mouseover', function(){
		$(this).find('span').css('color', '#f26925');
	});
	var monthNames = ["01", "02", "03", "04", "05", "06",
  "07", "08", "09", "10", "11", "12"
];

	
	var d = new Date();
	
	var month = d.getMonth();
	var year = d.getFullYear();
	$('#GraduationMonth').val(monthNames[month]);
	$('#GraduationYear').val(year);
	
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
					var email = $(this).val();
					var domain = email.split('@')[1];
					if(!regex.test($(this).val())||domain=="gmail.com"){
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
	var phone = $('#Phone1').val()+$('#Phone2').val()+$('#Phone3').val();
	$('#Phone1').attr('disabled', 'disabled');
	$('#Phone2').attr('disabled', 'disabled');
	$('#Phone3').attr('disabled', 'disabled');
	var marketoForm = MktoForms2.allForms()[0];
	marketoForm.addHiddenFields({
		"FirstName":$('#FirstName').val(),
		"LastName":$('#LastName').val(),
		"Email":$('#Email').val(),
		"Phone":phone,
		"Company":$('#Company').val(),
		"NumberOfEmployees":$('#NumberOfEmployees').val()
	});
	marketoForm.submit();
		}
	});

	$('#recruitSubmitBtn').on("click", function(e){
		e.preventDefault();
		var fileStatus = false;
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
				if($(this).attr('type')=='file'){
					$(this).nextAll('.help-block').show();
				}
			}
			else{
				if($(this).attr('type')=='email'){
					var regex = /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i;
					var email = $(this).val();
					var domain = email.split('@')[1];
					if(!regex.test($(this).val())){
						$(this).closest('.form-group').addClass('has-error');
						$(this).next('.help-block').show();
						status=false;
					}else{
						$(this).closest('.form-group').removeClass('has-error');
						$(this).next('.help-block').hide();
					}
					}
					else{
						$(this).closest('.form-group').removeClass('has-error');
						$(this).next('.help-block').hide();
										if($(this).attr('type')=='file'){
					$(this).nextAll('.help-block').hide();
				}
					}
				}
		});
					
			var file = $('input[type="file"]');
			var val = file.val().toLowerCase();
			if(val){
				var regex = new RegExp("(.*?)\.(docx|doc|pdf|rtf|txt)$");
				if(!(regex.test(val))) {
					file.closest('.form-group').addClass('has-error');
					file.nextAll('.help-block').show();
					status=false;
				}else{
					file.closest('.form-group').removeClass('has-error');
					file.nextAll('.help-block').hide();
					fileStatus = true;
				}
			}
		
		if(status){
	
			var phone = $('#Phone1').val()+$('#Phone2').val()+$('#Phone3').val();
			$('#Phone1').attr('disabled', 'disabled');
			$('#Phone2').attr('disabled', 'disabled');
			$('#Phone3').attr('disabled', 'disabled');
			
			var gradDate = $('#GraduationYear').val()+"-"+$('#GraduationMonth').val()+"-01";
			$('#GraduationMonth').attr('disabled', 'disabled');
			$('#GraduationYear').attr('disabled', 'disabled');
			
			if(fileStatus){
				var file = document.getElementById('ResumeUpload').files[0];
				var reader = new FileReader();
				reader.readAsDataURL(file);
				reader.onload = function(e){
					$('#FileBase64').val(reader.result.split(',')[1]);
					var data = {
						"key":"245583662863Rk863369",
						"person":$('#FirstName').val()+" "+$('#LastName').val(),
						"filename": $('input[type=file]').val().split('\\').pop(),
						"file": reader.result.split(',')[1]
					};
					$.ajax({
						url: 'https://8y1ub2vjek.execute-api.us-east-1.amazonaws.com/prod/ResumePush',
						dataType: 'json',
						type: 'post',
						contentType: 'application/json',
						data: JSON.stringify(data),
						beforeSend: function(){
							/* $('#loading').attr('src', '../imgs/ajax-loader.gif'); */
							$('#loading').show();
							$('#recruitSubmitBtn').hide();
						},
						success: marketoSend(data),
						error: function(){
							$('#confirmMsg').show();
							$('#loading').hide();
							$('#recruitSubmitBtn').show();
						}
					});
				}
			}else{
				marketoSend();
			}
		}
		function marketoSend(data){
			if(typeof data === "undefined"){
				data = {
					link:""
				}
			}
			var marketoForm = MktoForms2.allForms()[0];
			marketoForm.addHiddenFields({
			"FirstName":$('#FirstName').val(),
			"LastName":$('#LastName').val(),
			"Email":$('#Email').val(),
			"Phone":phone,
			"graduationDate":gradDate,
			"relocation":$('#Relocate').val(),
			"workAuthorization":$('#WorkAuthorization').val(),
			"university":$('#University').val(),
			"resumeURL":data.link
			});
			marketoForm.submit();
		}
	});
	
