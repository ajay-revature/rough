	
	$(document).ready(function() {
	
	$('#filterSubmit').on('mouseover', function(){
		
		
		$(this).css({'background-color': '#f26925','color': '#fff'});
		
	});
	$('#filterSubmit').on('mouseout', function(){
		$(this).css({'background-color': '#fff','color': '#f26925'});
		
	});
	$('#filterSubmit').on("click", function(e){
	

		var e = document.getElementById("Location");
        var optionSelIndex = e.options[e.selectedIndex].value;
        var optionSelectedText = e.options[e.selectedIndex].text;
		var dept = document.getElementById("Department");
		
        var optionSelIndexx = e.options[dept.selectedIndex].value;
        var optionSelectedTextt = e.options[dept.selectedIndex].text;
        if ((optionSelIndex == 0) &&(optionSelIndexx == 0)){
            $('.form-group').addClass('has-error');
			$('#locationHelp').show();
			$('.department-portion').addClass('has-error');
			$('#departmentHelp').css("display", "block");
			return false;
        }
        else {
             $('.form-group').removeClass('has-error');
			$('#locationHelp').hide();
			$('.department-portion').removeClass('has-error');
			$('#departmentHelp').hide();
        }
		
       
	});
});
		