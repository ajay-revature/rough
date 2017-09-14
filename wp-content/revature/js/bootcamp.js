/* window.sr = ScrollReveal({duration: 1000, distance:'30px'});
sr.reveal('.icon-holder-left', {origin:'left'});
sr.reveal('.icon-holder-right', {origin:'right'});
sr.reveal('.icon-content-right', {origin:'right'});
sr.reveal('.icon-content-left', {origin:'left'});
sr.reveal('.wwd-content', {origin:'bottom'});
 */

$('#applyBtn').click(function(e){
    e.preventDefault();
    $('html, body').animate({
        scrollTop:$('#apply').offset().top
    }, 2000);
	$(this).mouseup(function(){
		$(this).blur();
	});
});
	$('#bootcampSubmit').on('mouseover', function(){
		$(this).find('input[type="submit"]').css('color', '#f26925');
	});
	$('#bootcampSubmit').on('mouseout', function(){
		$(this).find('input[type="submit"]').css('color', '#fff');
	});
	$('#bootcampSubmit').on("click", function(e){
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
				$('#iframe').on('load', function(){
					$('#bootcampFormContainer').hide();
		$('#confirm').show();
	});
	try{
			__gaTracker('send','event', 'Confirm Page', 'Submit', 'RevaturePRO Bootcamp');

	}catch(err){
		console.log('Google Analytics not loaded');
	}
			$('#bootcampForm').submit();
		}
	});
	
