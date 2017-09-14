<?php
/**
 * Template Name: Signup
 */

?>

<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta name="theme-color" content="#f26925">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/carousel.css" rel="stylesheet" />
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="icon" />
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/responsive.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/imgs/favicon.ico" rel="icon" type="image/x-icon" />
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/imgs/favicon_192.png"/>
    <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/imgs/favicon_192.png"/>
    <meta name="msapplication-square150x150logo" content="<?php echo get_stylesheet_directory_uri(); ?>/favicon_150.png"/>  
       
  
   <script src="https://use.typekit.net/pvo4jdm.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    
       
    <meta content="We’re a leading-edge technology solutions firm with an unparalleled talent development platform that empowers people and companies to move forward, faster." name="description">
    <meta name="keywords" content="training program, software development, find developers, hire software developer" />
    <style type="text/css">
    .wf-loading{
    visibility:hidden;
    }
	.form-group {
    margin-bottom: 32px;
}

#requestForm label {
    font-family: 'futura-pt';
    font-size: 17px;
    color: #fff;
	 font-weight: 400;
}
.help-block
{
	 color: #7b0228 !important;
}
.filestyle-width
{
width:45%;	
}
    </style>
    <script src="https://use.fontawesome.com/8d8fa1da46.js"></script>
<?php wp_head(); ?>
</head>

<body>

<section class="signup_section_background">

<div class="container-fluid">
<div class="lock-container pos-rel">

<div class="col-lg-1 col-sm-1 col-md-1 col-xs-1"></div>

<div class="col-lg-10 col-sm-10 col-md-10 col-xs-8 margin-top-30 ">
<h2 style="padding-top: 5px; color:#fff;" class="social-and-form-header mobile-padding">
<center>Reserve Your Spot Today!</center>
</h2>
<h4 style="padding-top: 5px; padding-bottom:31px; color:#fff;font-size: 27px;" class="social-and-form-header mobile-padding">
<center>learn more about how to reserve your spot,just fill out the form below and we'll get back to you.</center>
</h4>
<div class="padding-left" style="height: auto !important;">
<form id="requestForm" method="post" target="confirmFrame" action="" enctype="multipart/form-data">
  <div class="row">
 <div class="col-lg-6 col-xs-6 form-group">
	<label class="control-label" for="FirstName">First Name*</label>
        <input class="shortfield-home form-control" type="text" name="FirstName" id="FirstName" placeholder="First name" maxlength="50" required/>
		    <span id="nameHelp" class="help-block" style="display:none;">Please enter first name.</span>
 </div>                                 
 <div class="col-lg-6 col-xs-6 form-group">
	<label class="control-label" for="LastName">Last Name*</label>
        <input class="shortfield-home form-control" type="text" name="LastName" id="LastName"  placeholder="Last name" maxlength="50" required/>
			<span id="nameHelp" class="help-block" style="display:none;">Please enter last name.</span>
 </div>
  </div>
  <div class="row">
  <div class="col-lg-6 col-xs-6 form-group">
	<label class="control-label" for="Email">Email*</label>
        <input class="shortfield-home form-control"  type="email" name="Email" placeholder="Email" id="Email" maxlength="50" required/>
			<span id="emailHelp" class="help-block" style="display:none;">Please enter a valid email address.</span>
  </div>
   <div class="col-lg-6 col-xs-6 form-group">
							<label class="control-label col-xs-12 text-left" for="GraduationMonth">Graduation Date*</label>
							<div class="col-xs-6">
												<select class="shortfield-home form-control col-xs-6" id="GraduationMonth" name="GraduationMonth" required>
												<option value=""></option>
												<option value="12-01">Fall</option>
												<option value="05-01">Spring</option>
												<option value="07-01">Summer</option>
												</select>
												<span class="help-block" id="GraduationSemesterHelp" style="display:none;">Please select the Semester of your Graduation</span>
							</div>
							<div class="col-xs-6">
												<span class="input-group-btn" style="width:0px;"></span>
												<select class="shortfield-home form-control col-xs-6" id="GraduationYear" name="GraduationYear">
												<option value=""></option>
												<option value="2000">2000</option>
												<option value="2001">2001</option>
												<option value="2002">2002</option>
												<option value="2003">2003</option>
												<option value="2004">2004</option>
												<option value="2005">2005</option>
												<option value="2006">2006</option>
												<option value="2007">2007</option>
												<option value="2008">2008</option>
												<option value="2009">2009</option>
												<option value="2010">2010</option>
												<option value="2011">2011</option>
												<option value="2012">2012</option>
												<option value="2013">2013</option>
												<option value="2014">2014</option>
												<option value="2015">2015</option>
												<option value="2016">2016</option>
												<option value="2017">2017</option>
												<option value="2018">2018</option>
												<option value="2019">2019</option>
												<option value="2020">2020</option>
												<option value="2021">2021</option>
												<option value="2022">2022</option>
												<option value="2023">2023</option>
												<option value="2024">2024</option>
												<option value="2025">2025</option>
												<option value="2026">2026</option>
												</select>
												<span class="help-block" id="GraduationSemesterHelp" style="display:none;">Please select the Year of your Graduation</span>
							</div>                   
 </div>
  </div>
   <div class="row">
  <div class="col-lg-6 col-xs-6 form-group">
	<label class="control-label" for="major">Major*</label>
                              <select class="shortfield-home form-control" name="major" id="major" required>
								<option value=""></option>
                                <option value="12">Computer Related value</option>
								<option value="23">Science & Math value </options>
								<option value="30">Engineering value</options>
								<option value="22">Business value</options>
								<option value="5">Liberal Arts value</options>
								<option value="5">Other value</options>
                            </select>
							<span class="help-block" style="display:none;">Please select an option.</span>
  </div>
   <div class="col-lg-6 col-xs-6 form-group">
   <label class="control-label" for="school">School*</label>
                              <input class="shortfield-home form-control jsondata" name="school" id="school" autocomplete="off" required>					
                            </input>  
							<span class="help-block" style="display:none;">Please select an option.</span>
							</div>
							</div>
   <div class="row">
  <div class="col-lg-6 col-xs-6 form-group">
	<label class="control-label" for="major">Major*</label>
                              <select class="shortfield-home form-control" name="major" id="major" required>
								<option value=""></option>
                                <option value="12">Computer Related value</option>
								<option value="23">Science & Math value </options>
								<option value="30">Engineering value</options>
								<option value="22">Business value</options>
								<option value="5">Liberal Arts value</options>
								<option value="5">Other value</options>
                            </select>
							<span class="help-block" style="display:none;">Please select an option.</span>
  </div>
   <div class="col-lg-6 col-xs-6 form-group">
   <label class="control-label" for="school">School*</label>
                              <input class="shortfield-home form-control jsondata" name="school" id="school" autocomplete="off" required>					
                            </input>  
							<span class="help-block" style="display:none;">Please select an option.</span>
							</div>
							</div>
    <div class="row">
  <div class="col-lg-6 col-xs-6 form-group">
   <label class="control-label col-xs-12 text-left" for="Phone1">Phone*</label>
							<div class="col-xs-4">
							<input class="shortfield-home form-control phone" type="tel" name="Phone1" id="Phone1" maxlength="3" size="3"/>
							</div>
							<div class="col-xs-4">
							<input class="shortfield-home form-control phone" type="tel" name="Phone2" id="Phone2" maxlength="3" size="3"/>
							</div>
							<div class="col-xs-4">
							<input class="shortfield-home form-control phone" type="tel" name="Phone3" id="Phone3" maxlength="4" size="4"/>
							</div>
							<div class="col-xs-12">
							<span class="help-block" id="PhoneHelp" style="display:none;">Please enter a contact phone number.</span>
							</div>
							</div>
							</div>
							<div class="col-xs-12 form-group">
						<label class="control-label">Resume<span id="resume_star" style="display: none;">*</span></label><br>
						<input type="file" id="ResumeUpload" name="ResumeUpload" class="filestyle" data-buttonbefore="true" data-buttonname="Orange-read-btn btn-lg" data-icon="false" required="" tabindex="-1" style="position: absolute; clip: rect(0px 0px 0px 0px);">
						<div class="bootstrap-filestyle input-group filestyle-width">
						<span class="group-span-filestyle input-group-btn" tabindex="0">
						<label for="ResumeUpload" class="btn white-submit-btn  ">
						<span class="buttonText">Choose file</span></label></span>
						<input  type="text" class="form-control " placeholder="" disabled="" >
						</div>
					    <span id="fileHelp" class="help-block" style="display:none;">Please select a file to upload (pdf, docx, doc, rtf, txt).</span>
						<input type="hidden" name="FileBase64" id="FileBase64">
						<input type="hidden" name="FileExt" id="FileExt">
						</div>	
         	<div class="col-lg-12 col-xs-12 text-center"> <span class="white-submit-btn" id="contactSubmit"><input type="submit" value="SUBMIT" style="color: rgb(255, 255, 255);"><i class="fa fa-angle-right" aria-hidden="true"></i></div>							
  </form>
</div>
</div>
<div class="col-lg-1 col-sm-1 col-md-1 col-xs-1"></div>
<div class="clear-cus"></div>


</div>
</div>
</section>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-2.1.1.js"></script> 
    	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script> 

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.autotab.min.js"></script> 
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/careerdetail.js"></script>
<script>
var $jqW = jQuery.noConflict();
  $jqW(document).ready(function() {
  $jqW('.jsondata').autocomplete({
    source: function(request, response) {
     $jqW.ajax({
        url: "<?php echo get_stylesheet_directory_uri(); ?>/page-templates/univ.json",
        dataType: "json",
        success: function(jData) {
          var results = [];
          $jqW.each(jData, function(ind, val) {
            if (val.label.toLowerCase().indexOf(request.term) === 0) {
              results.push(val);
            }
          });
          response(results);
        }
      });
    },
    minLength: 0,
    autoFocus: true,
    select: function(event, ui) {
      event.preventDefault();
      $jqW(".jsondata").val(ui.item.label);
    },
  });
});
  </script>


<?php wp_footer(); ?>
</body>
</html>