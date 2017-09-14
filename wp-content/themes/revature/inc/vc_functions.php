<?php

$relURLMessage = 'Enter the relative URL for Button - Format: ../<page name> (Example: revature.com/bootstrap is ../bootstrap)';

/*===================================Temporary Job Listing for A/B Testing=====================*/
	function job_temp_header_func($atts, $content=null){
		
		return '<section class="career_detail_section padding-75">
					<div class="row no-margin">
						<div class="col-lg-12 col-md-12 col-sm-12 no-margin no-padding">
							<h3 class="margin-bottom-15">Work with us.</h3>                                      
						</div>
					</div>
				</section>';
	}
	add_shortcode('job_temp_header','job_temp_header_func');
/*=============================================================================================*/

/*===================================WitNY Page================================================*/

function witny_form_func($atts, $content=null){
	$a=shortcode_atts(array(
		'title'=>'Title',
		'btn_txt'=>'Button Text',
		'form_header'=>'',
		'marketo_id'=>''
	), $atts);
	

	return'<section class="quickcont-bg">

	<div class="row no-margin">

		<div class="col-lg-12 col-md-12 col-sm-12 no-padding">

			<div>

               <div class="row">

                  <div class="col-lg-12 col-md-12 col-sm-12 whitetext_class">

                <p>'.$content.'</p>

                  <a class="white-read-btn margin-top-25 fancybox-marketo" href="#inline">'.$a['btn_txt'].'<i class="fa fa-angle-right"></i></a>

                    </div>

               </div>

            </div>

		</div>

	</div>

</section>
<div id="inline" class="principle-quick-content" style="display:none;">
	<div class="col-lg-12 col-xs-12"><h4 class="marketo-form-header">'.$a['form_header'].'</h4></div>
					<div class="row form-label-txt">
						<form id="b2bform" method="post" action="https://733-JWE-559.mktorest.com/rest">
                        <div class="col-lg-12 col-xs-12 form-group">
							<label class="control-label" for="FirstName">First Name*</label>
                            <input class="shortfield-home form-control" type="text" name="FirstName" id="FirstName" placeholder="First name" maxlength="50" required/>
							<span id="nameHelp" class="help-block" style="display:none;">Please enter first name.</span>
                        </div>
						<div class="col-lg-12 col-xs-12 form-group">
						<label class="control-label" for="LastName">Last Name*</label>
                            <input class="shortfield-home form-control" type="text" name="LastName" id="LastName"  placeholder="Last name" maxlength="50" required/>
							<span id="nameHelp" class="help-block" style="display:none;">Please enter last name.</span>
                        </div>
						<div class="col-lg-12 col-xs-12 form-group">
						<label class="control-label" for="Email">Email*</label>
                            <input class="shortfield-home form-control"  type="email" name="Email" placeholder="Email" id="Email" maxlength="50" required/>
							<span id="emailHelp" class="help-block" style="display:none;">Please enter a valid email address.</span>
                        </div>
						<div class="col-lg-12 col-xs-12 form-group inline-no-padding" id="PhoneGroup">
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
							<div class="col-lg-12 col-xs-12 form-group inline-no-padding">
							<label class="control-label col-xs-12" for="GraduationMonth">Graduation Date*</label>
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
												<select class="shortfield-home form-control col-xs-6" id="GraduationYear" name="GraduationYear" required>
												<option value=""></option>
												<option value="2004">Prior to 2005</option>
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
												</select>
												<span class="help-block" id="GraduationYearHelp" style="display:none;">Please select the Year of your Graduation</span>
							</div>
                        </div>
                        <div class="col-lg-12 col-xs-12 form-group">
						<label class="control-label" for="WorkAuthorization">Work Authorization*</label>
                              <select class="shortfield-home form-control" name="WorkAuthorization" id="WorkAuthorization" required>
								<option value=""></option>
                                <option value="U.S. Citizen">U.S. Citizen</option>
								<option value="Green Card">Green Card</options>
								<option value="OPT">OPT</options>
								<option value="Other Visa">Other Visa</options>
                            </select>
							<span class="help-block" style="display:none;">Please select an option.</span>
                        </div>
						<div class="col-xs-12 form-group">
						<label class="control-label">Resume<span id="resume_star">*</span></label><br>
						<input type="file" id="ResumeUpload" name="ResumeUpload" class="filestyle" data-buttonBefore="true" data-buttonName="Orange-read-btn" data-icon="false">
					    <span id="fileHelp" class="help-block" style="display:none;">Please select a file to upload (pdf, docx, doc, rtf, txt).</span>
						<input type="hidden" name="FileBase64" id="FileBase64"/>
						<input type="hidden" name="FileExt" id="FileExt"/>
						</div>
                        <div class="col-lg-12 col-xs-12 text-center">
							<span class="orange-submit-btn" id="contactSubmit"><input type="submit" value="SUBMIT"/><i class="fa fa-angle-right"></i></span>
							<img id="loading" style="display:none;" src="'.get_template_directory_uri().'/imgs/ajax-loader.gif"></img>
							<span class="help-block" style="display:none;" id="confirmMsg">There was an issue with your submission, please try again.</span>
                        </div>

                    </form>
                </div>
        </div>
		            <script src="//app-sj20.marketo.com/js/forms2/js/forms2.min.js"></script>
<form id="mktoForm_'.$a['marketo_id'].'" style="display:none;"></form>
<script>MktoForms2.loadForm("//app-sj20.marketo.com", "733-JWE-559", '.$a['marketo_id'].');</script>';
}
add_shortcode('witny_form','witny_form_func');


/*===================================End WitNY Page================================================*/

/*===================================Universities Page=========================================*/
function universities_apply_func($atts, $content=null){
	$a=shortcode_atts(array(
		'btn_txt'=>'Button'
	), $atts);
	
	$returnHTML = '<section class="acd-par-orangebar revaturepro">
    <div class="container acd-orangebar-container">
        <div class="text-center">
            <h4 class="rev-online-bh4">'.$content.'</h4>
            <a href="#inline" class="white-read-btn mob-top-margin fancybox-marketo">'.$a['btn_txt'].'<i class="fa fa-angle-right"></i></a>
        </div>
    </div>
</section>';
 
 return $returnHTML;
}
add_shortcode('universities_apply', 'universities_apply_func');

function universities_form_banner_func( $atts, $content=null){

    $a = shortcode_atts(array(
		'title'=>'',
		'btn_txt'=>'',
		'form_header'=>'',
		'marketo_id'=>''
    ), $atts);

    $returnHTML =  '<section class="quickcont-bg-marketo">

	<div class="row no-margin">

		<div class="col-lg-12 col-md-12 col-sm-12 no-padding">

			<div>

               <div class="row">

                  <div class="col-lg-12 col-md-12 col-sm-12">

                <h2 class="margin-bottom-15">'.$a['title'].'</h2>
				<p class="margin-bottom-35 acd-part-today-cont">
				'.$content.'
				</p>

                 <a href="#inline" class="white-read-btn fancybox-marketo">'.$a['btn_txt'].'<i class="fa fa-angle-right"></i></a>

                    </div>

               </div>

            </div>

		</div>

	</div>
</section>
 			<div id="inline" class="principle-quick-content" style="display:none;">
			
<div class="col-lg-12 col-xs-12"><h4 class="marketo-form-header">'.$a['form_header'].'</h4></div>
			              <div class="row form-label-txt">
						<form id="b2bform" method="post" action="https://733-JWE-559.mktorest.com/rest">
                        <div class="col-lg-12 col-xs-12 form-group">
							<label class="control-label" for="FirstName">First Name*</label>
                            <input class="shortfield-home form-control" type="text" name="FirstName" id="FirstName" placeholder="First Name" maxlength="50" required/>
							<span id="nameHelp" class="help-block" style="display:none;">Please enter first name.</span>
                        </div>
						<div class="col-lg-12 col-xs-12 form-group">
						<label class="control-label" for="LastName">Last Name*</label>
                            <input class="shortfield-home form-control" type="text" name="LastName" id="LastName"  placeholder="Last Name" maxlength="50" required/>
							<span id="nameHelp" class="help-block" style="display:none;">Please enter last name.</span>
                        </div>
						<div class="col-lg-12 col-xs-12 form-group">
						<label class="control-label" for="Email">Email*</label>
                            <input class="shortfield-home form-control"  type="email" name="Email" placeholder="Email" id="Email" maxlength="50" required/>
							<span id="emailHelp" class="help-block" style="display:none;">Please enter a valid corporate email address (No personal email accounts).</span>
                        </div>
						<div class="col-lg-12 col-xs-12 form-group inline-no-padding" id="PhoneGroup">
						<label class="control-label col-xs-12" for="Phone1">Phone*</label>
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
						  <div class="col-lg-6 col-xs-12 form-group">
						  <label class="control-label" for="University">University*</label>
                            <input class="shortfield-home form-control" type="text" name="University" id="University" placeholder="University" maxlength="100" required/>
							<span id="UniversityHelp" class="help-block" style="display:none;">Please enter the full name of your University, if your University is not shown please type it in manually.</span>
                        </div>
                        <div class="col-lg-6 col-xs-12 form-group">
							<label class="control-label" for="Title">Job Title</label>
							<input id="Title" name="Title" class="shortfield-home form-control" placeholder="Job Title" type="text" maxlength="100" required/>
							<span id="JobTitleHelp" class="help-block" style="display:none;">Please enter your Job Title.</span>
                        </div>
                        <div class="col-lg-12 col-xs-12 form-group">
							<label class="control-label" for="Comments">Comments</label>
							<textarea id="Comments" name="Comments" class="form-control shortfield-home" maxlength="1000" rows="4" placeholder="Comments"></textarea>
                        </div>
                        <div class="col-lg-12 col-xs-12 form-group">
							<span class="orange-submit-btn" id="submitBtn"><input type="submit" value="SUBMIT"/><i class="fa fa-angle-right"></i></span>
                        </div>
												<div class="col-lg-12 col-xs-12 text-center">
							<span class="help-block"><small>Revature is committed to safeguarding your privacy. We will never sell or share your personal information. Our complete Privacy Policy is available <a href="/privacy-policy">here</a></small></span>
						</div>
                    </form>
                </div>
        </div>
		            <script src="//app-sj20.marketo.com/js/forms2/js/forms2.min.js"></script>
<form id="mktoForm_'.$a['marketo_id'].'" style="display:none;"></form>
<script>MktoForms2.loadForm("//app-sj20.marketo.com", "733-JWE-559", '.$a['marketo_id'].');</script>';
return $returnHTML;
}

add_shortcode('universities_form_banner', 'universities_form_banner_func');

/*===================================End Universities Page=====================================*/

/*===================================RevaturePRO Sign Up Page==================================*/

function revpro_signup_func($atts, $content=null){
	$a=shortcode_atts(array(
		'form_header'=>'',
		'marketo_id'=>''
	), $atts);

	$returnHTML = '<section class="recurt-form-bg" id="apply">
      <div class="mob-container-unset tab-container" id="formContainer">
         <div class="row no-margin">
               <div class="col-lg-12 col-md-12 col-sm-12 no-margin no-padding">
					<h3 class="margin-bottom-15">'.$a['form_header'].'</h3>
					<p class="margin-bottom-15 recurt-form-bg-cont white-link">
						'.$content.'
					</p>
               </div>
         </div>
       <div class="container">
        <div class="row no-margin">
            <div class="col-lg-12 col-md-12 col-xs-12 padding-lr-150 mob-padding-5">

                <div class="row form-label-txts text-left">
                    <form id="schoolForm" method="post" >
                        <div class="col-lg-6 col-xs-12 form-group">
                            <label class="control-label" for="FirstName">First Name*</label>
                            <input class="shortfield-home form-control" type="text" name="FirstName" id="FirstName" required/>
							<span class="help-block" style="display:none;">Please enter first name.</span>
                        </div>
						<div class="col-lg-6 col-xs-12 form-group">
                            <label class="control-label" for="LastName">Last Name*</label>
                            <input class="shortfield-home form-control" type="text" name="LastName" id="LastName" required/>
							<span class="help-block" style="display:none;">Please enter last name.</span>
                        </div>
                        <div class="col-lg-6 col-xs-12 form-group">
                           <label class="control-label" for="Email">Email*</label>
                           <input class="shortfield-home form-control"  type="email" name="Email" id="Email" required/>
						   <span id="emailHelp" class="help-block" style="display:none;">Please enter a valid email address.</span>
                        </div>
                        <div class="col-lg-6 col-xs-12 form-group inline-no-padding">
														<label class="control-label col-xs-12" for="GraduationMonth">Graduation Date*</label>
							<div class="col-xs-6 form-group">
												<select class="shortfield-home form-control col-xs-6" id="GraduationMonth" name="GraduationMonth" required>
												<option value=""></option>
												<option value="12-01">Fall</option>
												<option value="05-01">Spring</option>
												<option value="07-01">Summer</option>
												</select>
												<span class="help-block" id="GraduationSemesterHelp" style="display:none;">Please select the Semester of your Graduation</span>
							</div>
							<div class="col-xs-6 form-group">
												<span class="input-group-btn" style="width:0px;"></span>
												<select class="shortfield-home form-control col-xs-6" id="GraduationYear" name="GraduationYear" required>
												<option value=""></option>
												<option value="2004">Prior to 2005</option>
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
												</select>
												<span class="help-block" id="GraduationYearHelp" style="display:none;">Please select the Year of your Graduation</span>
							</div>
                        </div>
						<div class="col-lg-12 col-xs-12">
						</div>
						<div class="col-lg-6 col-xs-12 form-group">
							<label class="control-label" for="Major">Major</label>
							<select class="shortfield-home form-control" id="Major" name="Major" required>
								<option value=""></option>
								<option value="12">Computer Related</option>
								<option value="23">Science & Math</option>
								<option value="30">Engineering</option>
								<option value="22">Business</option>
								<option value="5">Liberal Arts</option>
								<option value="5">Other</option>
							</select>
							<span class="help-block" style="display:none;">Please select a Major.</span>
						</div>
						<div class="col-lg-6 col-xs-12 form-group">
							<label class="control-label" for="School">School (Full Name)*</label>
							<input id="SchoolRevPRO" name="SchoolRevPRO" class="shortfield-home form-control" required/>
							<span class="help-block" style="display:none;">Please enter your School. If your School does not show up or match, please type the full name of your School.</span>
						</div>
						<div class="col-lg-6 col-xs-12 form-group inline-no-padding" id="PhoneGroup">
							<label class="control-label col-xs-12" for="AreaCode">Phone*</label>
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
						<div class="col-lg-6 col-xs-12 form-group">
						<label class="control-label" for="WorkAuthorization">Work Authorization*</label>
                              <select class="shortfield-home form-control" name="WorkAuthorization" id="WorkAuthorization" required>
								<option value=""></option>
                                <option value="U.S. Citizen">U.S. Citizen</option>
								<option value="Green Card">Green Card</options>
								<option value="OPT">OPT</options>
								<option value="Other Visa">Other Visa</options>
                            </select>
							<span class="help-block" style="display:none;">Please select an option.</span>
                        </div>
						<div class="col-xs-12 col-lg-12"></div>
						<div class="col-xs-12 col-lg-6 form-group">
						<label class="control-label">Resume</label><br>
						<input type="file" id="ResumeUploadRevPro" name="ResumeUploadRevPro" class="filestyle" data-buttonBefore="true" data-buttonName="white-submit-btn" data-icon="false">
					    <span id="fileHelp" class="help-block" style="display:none;">Please select a file to upload (pdf, docx, doc, rtf, txt).</span>
						<input type="hidden" name="FileBase64" id="FileBase64"/>
						<input type="hidden" name="FileExt" id="FileExt"/>
						</div>
                        <div class="col-xs-12">
							<p class="rec-req">*Required</p>
						</div>
						<div class="col-xs-12 text-center">
							<span class="white-submit-btn" id="submitBtn">
                             <input type="submit" value="SUBMIT"/><i class="fa fa-angle-right"></i></span>
							<img id="loading" style="display:none;" src="'.get_template_directory_uri().'/imgs/ajax-loader.gif"></img>
							<span class="help-block" style="display:none;" id="confirmMsg">There was an issue with your submission, please try again.</span>
						</div>
												<div class="col-lg-12 col-xs-12 text-center">
							<span class="help-block white-link"><small>Revature is committed to safeguarding your privacy. We will never sell or share your personal information. Our complete Privacy Policy is available <a href="/privacy-policy">here</a></small></span>
						</div>
                    </form>
                </div>
            </div>
             
        </div>
</div>
     </div>

</section>
<script src="//app-sj20.marketo.com/js/forms2/js/forms2.min.js"></script>
<form id="mktoForm_'.$a['marketo_id'].'" style="display:none;"></form>
<script>MktoForms2.loadForm("//app-sj20.marketo.com", "733-JWE-559", '.$a['marketo_id'].');</script>';
 return $returnHTML;
}
add_shortcode('revpro_signup', 'revpro_signup_func');

function revpro_signup_india_func($atts, $content=null){
	$a=shortcode_atts(array(
		'form_header'=>''
	), $atts);

	$returnHTML = '<section class="recurt-form-bg" id="apply">
      <div class="mob-container-unset tab-container" id="formContainer">
         <div class="row no-margin">
               <div class="col-lg-12 col-md-12 col-sm-12 no-margin no-padding">
					<h3 class="margin-bottom-15">'.$a['form_header'].'</h3>
					<p class="margin-bottom-15 recurt-form-bg-cont white-link">
						'.$content.'
					</p>
               </div>
         </div>
       <div class="container">
        <div class="row no-margin">
            <div class="col-lg-12 col-md-12 col-xs-12 padding-lr-150 mob-padding-5">

                <div class="row form-label-txts text-left">
                    <form id="signup_india" method="post" >
                        <div class="col-lg-6 col-xs-12 form-group">
                            <label class="control-label" for="FirstName">First Name*</label>
                            <input class="shortfield-home form-control" type="text" name="FirstName" id="FirstName" required/>
							<span class="help-block" style="display:none;">Please enter first name.</span>
                        </div>
						<div class="col-lg-6 col-xs-12 form-group">
                            <label class="control-label" for="LastName">Last Name*</label>
                            <input class="shortfield-home form-control" type="text" name="LastName" id="LastName" required/>
							<span class="help-block" style="display:none;">Please enter last name.</span>
                        </div>
                        <div class="col-lg-6 col-xs-12 form-group">
                           <label class="control-label" for="Email">Email*</label>
                           <input class="shortfield-home form-control"  type="email" name="Email" id="Email" required/>
						   <span id="emailHelp" class="help-block" style="display:none;">Please enter a valid email address.</span>
                        </div>
						<div class="col-lg-6 col-xs-12 form-group inline-no-padding" id="PhoneGroup">
							<label class="control-label col-xs-12" for="AreaCode">Phone*</label>
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
						<div class="col-xs-12 col-lg-12"></div>
                        <div class="col-xs-12">
							<p class="rec-req">*Required</p>
						</div>
						<div class="col-xs-12 text-center">
							<span class="white-submit-btn" id="submitBtn">
                             <input type="submit" value="SUBMIT"/><i class="fa fa-angle-right"></i></span>
							<img id="loading" style="display:none;" src="'.get_template_directory_uri().'/imgs/ajax-loader.gif"></img>
							<span class="help-block" style="display:none;" id="confirmMsg">There was an issue with your submission, please try again.</span>
						</div>
												<div class="col-lg-12 col-xs-12 text-center">
							<span class="help-block white-link"><small>Revature is committed to safeguarding your privacy. We will never sell or share your personal information. Our complete Privacy Policy is available <a href="/privacy-policy">here</a></small></span>
						</div>
                    </form>
                </div>
            </div>
             
        </div>
</div>
     </div>

</section>';
 return $returnHTML;
}
add_shortcode('revpro_signup_india', 'revpro_signup_india_func');


/*==============================End SignUP page================================================================*/


/*------------------------Video Header Shortcodes-------------------------------------*/
function video_header_func($atts, $content=null){
    $a=shortcode_atts(array(
        'background_img'=>'Background image',
        'logo_img' => 'Video Thumbnail',
        'header_video' => 'Video url', 
        'header_title' => 'Default Title',
        'button_text_right'=>'Link Text',        
    ), $atts);
    return
    "<style>
.join_our_page_header_section:after {
    content: ''; 
   background-image:url('".wp_get_attachment_url($a['background_img'])."');
  
    position: absolute;
    top: 0;
    left: 0;
    width:100%;
    height: 100%;
    z-index: -1;
    background-repeat: no-repeat;
    background-size: cover;
}
    </style>
    <section class='join_our_page_header_section'>
    <div class='row'>
     <div class='col-sm-5 col-sm-push-7 relative_join_get_hired'>
		<div>
		   <a class='fancybox fancybox.iframe' href='".$a['header_video']."'><img style='display: initial !important;' class='img-responsive' src='". wp_get_attachment_url($a['logo_img']) ."'  draggable='false'></a>
	   </div>
   </div>
   <div class='col-sm-6 col-sm-pull-4'>
         <div class='join_our_page_content'>             
               <h1 class='hero-rev-htitle mobile_relative_position'> ". $a['header_title'] . "</h1>
               <p class='hero-rev-content mobile_padding_content'>".$content."</p>
             
		      <a href='#inline' class='white-read-btn margin-top-10 fancybox-marketo'>".$a['button_text_right']."<i class='fa fa-angle-right'></i></a>
          </div>
   </div>
  
    </div>
           </section>";
}
add_shortcode('video_header', 'video_header_func');
/*-------------------------End Video Header Shortcodes------------------------------------------------*/

/*------------------------Housing Page Shortcodes Functions ------------------------------------*/
function housing_header_hero_func($atts, $content=null){
		$a=shortcode_atts(array(
			'title'=>'Title',
		), $atts);
		
		$returnHTML = '<div class="housing-hero">
			<div class="row no-margin contact-hero-content">
				<div class="col-lg-12 col-md-12 col-sm-12 margin-top-120">
					<h2 class="margin-bottom-15">'.$a['title'].'</h2>
					
				</div>
			</div>
		</div>';
	 
	 return $returnHTML;
	}
	add_shortcode('housing_header_hero', 'housing_header_hero_func');
function housing_container_func($atts, $content=null){

	$a=shortcode_atts(array(
	), $atts);

	return

	' <section class="RevPro-bgcolor housing">
     <div class="container no-padding">
         <div class="row">
		 '.do_shortcode($content).'
         </div>
      </div>
 </section>';

}

add_shortcode('housing_container', 'housing_container_func');

function housing_header_func($atts, $content=null){

	$a=shortcode_atts(array(
		'header'=>''
	), $atts);

	return '<div class="col-lg-12 col-md-12 col-sm-12 margin-bottom-100">
              
                <p class="margin-bottom-25 RevPro-cont">
					'.$content.'
                </p>
               </div>';

}

add_shortcode('housing_header', 'housing_header_func');

function housing_row_func($atts, $content=null){

	$a=shortcode_atts(array(
		'img'=>'',
		'caption'=>'',
		'url'=>''
	), $atts);

	return '<div class="col-lg-6 col-md-6 col-sm-12 overflow-hidden height-320 no-padding">
			  <figure class="imghvr-fade">
				<img class="business-img left" src="'.wp_get_attachment_url($a['img']).'">
				<figcaption>
				<h3>'.$a['caption'].'</h3>
				</figcaption>
				<a href="'.$a['url'].'" target="_blank"></a>
			</figure>
              </div>';
}

add_shortcode('housing_row', 'housing_row_func');


/*-------------------------End Housing Page Shortcodes Functions---------------------------------*/
/*----------------------- Home Page Shortcodes functions -------------------------------------*/


/* Home - Video Header */

function home_video_header_func($atts, $content=null){

	$a=shortcode_atts(array(

		'video_src'=>'Video Source',

	), $atts);

	return

	'<div class="hero-hw-video">

		<video id="hero-video" autoplay class="hero-video" preload="auto" loop poster="../wp-content/themes/revature/imgs/hp-carousel.jpg">

			<source src="'.wp_get_attachment_url($a['video_src']).'" type="video/mp4"/>

		</video>

		<div class="slidertext">

			<h3 id=hero-text>'.$content.'</h3>

		</div>

	</div>';

}

add_shortcode('home_video_header', 'home_video_header_func');

/* Home - Start Advanced Faster Section */


function home_advanced_faster_header_func( $atts, $content=null){

	$a = shortcode_atts(array(

		'title' => 'Default Title',

		

	), $atts);

	return '<div class="col-lg-12 col-md-12 col-sm-12  advanced-faster">

                <h2 class="margin-bottom-25">' . $a['title'] . '</h2>

                <p style="color: #474c55 !important;" class="margin-bottom-25 RevPro-cont">

					' . $content . '

                </p>

                

               </div>';

}

add_shortcode('home_advanced_faster_header', 'home_advanced_faster_header_func');

/* Home - End Advanced Faster Section */


/* Home - What We Do */

function home_what_we_do_func($atts, $content=null){

	$a=shortcode_atts(array(

		 'title'=>'Default Title',
         'button_text' => 'Button Text',
      	 'button_url' => 'Button URL'
	), $atts);

	return 

	'<section class="wwd-bg" id="whatDo">

        <div class="row wwd-content">

            <div class="col-lg-12 col-md-12 col-sm-12">

                <h2 class="margin-bottom-35">'.$a['title'].'</h2>

                <p class="margin-bottom-35">

					'.$content.'

				</p>
            	<a href="'.$a['button_url'].'" class="Orange-read-btn">'.$a['button_text'].'<i class="fa fa-angle-right"></i></a>
            </div>

        </div>

    </section>';

}

add_shortcode('home_what_we_do', 'home_what_we_do_func');
function recruitment_subhead_func($atts, $content=null){

	$a=shortcode_atts(array(
		 'title'=>'Default Title'
	), $atts);

	return
	'<section class="recurt-form-bg">
      <div class="mob-container-unset">
         <div class="row no-margin">
               <div class="col-lg-12 col-md-12 col-sm-12 no-margin no-padding">
                <h3 class="margin-bottom-15">'.$a['title'].'</h3>
                <p class="margin-bottom-15 acd-part-today-cont">'.$content.'</p>
                               
               </div>
         </div>
     </div>
</section>';

}

add_shortcode('recruitment_subhead', 'recruitment_subhead_func');
function recruitment_subhead_grey_func($atts, $content=null){

	$a=shortcode_atts(array(
		 'title'=>'Default Title'
	), $atts);

	return
	'<section class="recruit-bg-grey">
      <div class="mob-container-unset">
         <div class="row no-margin">
               <div class="col-lg-12 col-md-12 col-sm-12 no-margin no-padding">
                <h3 class="margin-bottom-15">'.$a['title'].'</h3>
                <p class="margin-bottom-15 acd-part-today-cont">'.$content.'</p>
                               
               </div>
         </div>
     </div>
</section>';

}

add_shortcode('recruitment_subhead_grey', 'recruitment_subhead_grey_func');

function corporate_partner_schedule_form_func($atts, $content=null){
	$a=shortcode_atts(array(
		'title'=>'Title',
		'btn_txt_2'=>'Button Text',
		'form_header'=>'',
		'marketo_id'=>''
	), $atts);
	

	return'<section class="quickcont-bg">

	<div class="row no-margin">

		<div class="col-lg-12 col-md-12 col-sm-12 no-padding">

			<div>

               <div class="row">

                  <div class="col-lg-12 col-md-12 col-sm-12">

                <h3 class="whitetext_class margin-bottom-35">'.$content.'</h3>

                  <a class="white-read-btn margin-top-25 fancybox-marketo" href="#inline">'.$a['btn_txt_2'].'<i class="fa fa-angle-right"></i></a>

                    </div>

               </div>

            </div>

		</div>

	</div>

</section>
<div id="inline" class="principle-quick-content" style="display:none;">
	<div class="col-lg-12 col-xs-12"><h4 class="marketo-form-header">'.$a['form_header'].'</h4></div>
					<div class="row form-label-txt">
						<form id="b2bform" method="post" action="https://733-JWE-559.mktorest.com/rest">
						                        <div class="col-lg-12 col-xs-12 form-group">
							<label class="control-label" for="FirstName">First Name*</label>
                            <input class="shortfield-home form-control" type="text" name="FirstName" id="FirstName" placeholder="First Name" maxlength="50" required/>
							<span id="nameHelp" class="help-block" style="display:none;">Please enter first name.</span>
                        </div>
						<div class="col-lg-12 col-xs-12 form-group">
						<label class="control-label" for="LastName">Last Name*</label>
                            <input class="shortfield-home form-control" type="text" name="LastName" id="LastName"  placeholder="Last Name" maxlength="50" required/>
							<span id="nameHelp" class="help-block" style="display:none;">Please enter last name.</span>
                        </div>
						<div class="col-lg-12 col-xs-12 form-group">
						<label class="control-label" for="Email">Email*</label>
                            <input class="shortfield-home form-control"  type="email" name="Email" placeholder="Email" id="Email" maxlength="50" required/>
							<span id="emailHelp" class="help-block" style="display:none;">Please enter a valid email address.</span>
                        </div>
						<div class="col-lg-12 col-xs-12 form-group inline-no-padding" id="PhoneGroup">
						<label class="control-label col-xs-12" for="Phone1">Phone*</label>
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
							<div class="col-lg-12 col-xs-12 form-group inline-no-padding">
							<label class="control-label col-xs-12" for="GraduationMonth">Graduation Date*</label>
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
												<select class="shortfield-home form-control col-xs-6" id="GraduationYear" name="GraduationYear" required>
												<option value=""></option>
												<option value="2004">Prior to 2005</option>
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
												</select>
												<span class="help-block" id="GraduationYearHelp" style="display:none;">Please select the Year of your Graduation</span>
							</div>
							
                        </div>
                        <div class="col-lg-12 col-xs-12 form-group">
						<label class="control-label" for="WorkAuthorization">Work Authorization*</label>
                              <select class="shortfield-home form-control" name="WorkAuthorization" id="WorkAuthorization" required>
								<option value=""></option>
                                <option value="U.S. Citizen">U.S. Citizen</option>
								<option value="Green Card">Green Card</options>
								<option value="OPT">OPT</options>
								<option value="Other Visa">Other Visa</options>
                            </select>
							<span class="help-block" style="display:none;">Please select an option.</span>
                        </div>
						<div class="col-xs-12 form-group">
						<label class="control-label">Resume<span id="resume_star">*</span></label><br>
						<input type="file" id="ResumeUpload" name="ResumeUpload" class="filestyle" data-buttonBefore="true" data-buttonName="Orange-read-btn" data-icon="false">
					    <span id="fileHelp" class="help-block" style="display:none;">Please select a file to upload (pdf, docx, doc, rtf, txt).</span>
						<input type="hidden" name="FileBase64" id="FileBase64"/>
						<input type="hidden" name="FileExt" id="FileExt"/>
						</div>
                        <div class="col-lg-12 col-xs-12 text-center">
							<span  id="submitBtn"><input class="orange-submit-btn" type="submit" value="SUBMIT"/><i style="position: relative;
    left: -26px;color: #fff;" class="fa fa-angle-right"></i></span>
							<img id="loading" style="display:none;" src="'.get_template_directory_uri().'/imgs/ajax-loader.gif"></img>
							<span class="help-block" style="display:none;" id="confirmMsg">There was an issue with your submission, please try again.</span>
                        </div>
												<div class="col-lg-12 col-xs-12 text-center">
							<span class="help-block"><small>Revature is committed to safeguarding your privacy. We will never sell or share your personal information. Our complete Privacy Policy is available <a href="/privacy-policy">here</a></small></span>
						</div>

                    </form>
                </div>
        </div>
		            <script src="//app-sj20.marketo.com/js/forms2/js/forms2.min.js"></script>
<form id="mktoForm_'.$a['marketo_id'].'" style="display:none;"></form>
<script>MktoForms2.loadForm("//app-sj20.marketo.com", "733-JWE-559", '.$a['marketo_id'].');</script>';
}
add_shortcode('corporate_partner_schedule_form','corporate_partner_schedule_form_func');
/*----------------------------------------Start Request Landing page-----Ajay-----------------------------------------------------------*/


                /* Request Landing Header page */
				
function request_landing_header_func($atts, $content=null){

	$a=shortcode_atts(array(

		'backgroung_src'=>'Background Source',
		'header'=>'',
		'sub_header'=>''

	), $atts);

	return

	'<div class="hero-bg-pro">
             <div class="request-bg-content">
              <h1>'.$a['header'].'</h1>
			  <h2>'.$a['sub_header'].'</h2>
                 </div>
	<div class="request-background-wrapper">
	<div class="request-floating-background">
		<img style="width:100%;" src="'.wp_get_attachment_url($a['backgroung_src']).'">
	<div>
	</div>

</div>
</div>
</div>';

}

add_shortcode('request_landing_header', 'request_landing_header_func');

function request_landing_header_text_right_func($atts, $content=null){

	$a=shortcode_atts(array(

		'backgroung_src'=>'Background Source',

	), $atts);

	return

	'<div class="hero-bg-pro">
             <div class="request-bg-content">
              <h1>'.$content.'</h1>
                 </div>
	<div class="request-background-wrapper">
	<div class="request-floating-background">
		<img style="width:100%;" src="'.wp_get_attachment_url($a['backgroung_src']).'">
	<div>
	</div>

</div>
</div>
</div>';

}

add_shortcode('request_landing_header_text_right', 'request_landing_header_text_right_func');

  /* request orange bar */
function request_orange_bar_function($atts, $content=null){

	
	return

	'<section class="below-header-bg-bar">

</section>';

}
                      
						 
add_shortcode('request_orange_bar', 'request_orange_bar_function');

  /* request landing info */
function request_left_landing_info_func($atts, $content=null){

	return '<div class="col-lg-8 col-md-8 col-sm-12 request-form-intro-paragraph">
                
               
              <p>'.$content.'</p>
                   
               </div>';
}

add_shortcode('request_left_landing_info', 'request_left_landing_info_func');
                   
				    /* Request Page Icon */ 
				   
  function request_right_landing_form_func($atts, $content=null){
	  	$a=shortcode_atts(array(

		'form_title'=>'',

	), $atts);
	/* $content = rawurldecode( base64_decode( strip_tags( $content ) ) ); */
			  return '
                 <div class="col-lg-4 col-md-4 col-sm-12 blog-bottom-border" id="requestFormContainer">
                           
                <div class="col-xs-12">
                    <h4 id="requestFormTitle">'.$a['form_title'].'</h4>
                </div>
                <div class="row form-label-txt">
						<form id="requestForm" method="post" action="https://733-JWE-559.mktorest.com/rest">
                        <div class="col-lg-12 col-xs-12 form-group">
							<label class="control-label" for="FirstName">First Name*</label>
                            <input class="shortfield-home form-control" type="text" name="FirstName" id="FirstName" placeholder="First name" maxlength="50" required/>
							<span id="nameHelp" class="help-block" style="display:none;">Please enter first name.</span>
                        </div>
						<div class="col-lg-12 col-xs-12 form-group">
						<label class="control-label" for="LastName">Last Name*</label>
                            <input class="shortfield-home form-control" type="text" name="LastName" id="LastName"  placeholder="Last name" maxlength="50" required/>
							<span id="nameHelp" class="help-block" style="display:none;">Please enter last name.</span>
                        </div>
						<div class="col-lg-12 col-xs-12 form-group">
						<label class="control-label" for="Email">Email*</label>
                            <input class="shortfield-home form-control"  type="email" name="Email" placeholder="Email" id="Email" maxlength="50" required/>
							<span id="emailHelp" class="help-block" style="display:none;">Please enter a valid corporate email address (No personal email accounts).</span>
                        </div>
						<div class="col-lg-12 col-xs-12 form-group inline-no-padding" id="PhoneGroup">
						<label class="control-label col-xs-12" for="Phone1">Phone*</label>
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
						  <div class="col-lg-12 col-xs-12 form-group">
						  <label class="control-label" for="Company">Company*</label>
                            <input class="shortfield-home form-control" type="text" name="Company" placeholder="Company" id="Company" maxlength="100" required/>
							<span id="companyHelp" class="help-block" style="display:none;">Please enter Company name.</span>
                        </div>
                        <div class="col-lg-12 col-xs-12 form-group">
						<label class="control-label" for="NumberOfEmployees">Number of Employees</label>
                              <select class="shortfield-home form-control" id="NumberOfEmployees" name="NumberOfEmployees">
								<option value=""></option>
                                <option value="1-5 Employees">1-5 Employees</option>
                                <option value="6-20 Employees">6-20 Employees</option>
                                <option value="21-200 Employees">21-200 Employees</option>
								<option value="101-500 Employees">101-500 Employees</option>
								<option value="500-3,000 Employees">500-3,000 Employees</option>
								<option value="3,501+ Employees">3,501+ Employees</option>
                            </select>
                        </div>

						
                       
                          
                        <div class="col-lg-12 col-xs-12 form-group">
							<span class="white-submit-btn" id="submitBtn"><input type="submit" value="SUBMIT"/><i class="fa fa-angle-right"></i></span>
                        </div>
												<div class="col-lg-12 col-xs-12 text-center">
							<span class="help-block"><small>Revature is committed to safeguarding your privacy. We will never sell or share your personal information. Our complete Privacy Policy is available <a href="/privacy-policy">here</a></small></span>
						</div>
                    </form>
                </div>
            <script src="//app-sj20.marketo.com/js/forms2/js/forms2.min.js"></script>
<form id="mktoForm_1128" style="display:none;"></form>
<script>MktoForms2.loadForm("//app-sj20.marketo.com", "733-JWE-559", 1128);</script>
               </div>';
}
add_shortcode('request_right_landing_form', 'request_right_landing_form_func');

  function request_right_landing_form_recruitment_func($atts, $content=null){
	  	$a=shortcode_atts(array(

		'form_title'=>'',

	), $atts);
	/* $content = rawurldecode( base64_decode( strip_tags( $content ) ) ); */
			  return '
                 <div class="col-lg-4 col-md-4 col-sm-12 blog-bottom-border" id="requestFormContainer">
                           
                <div class="col-xs-12">
                    <h4 id="requestFormTitle">'.$a['form_title'].'</h4>
                </div>
                <div class="row form-label-txt">
						<form id="requestForm" method="post" action="'.get_template_directory_uri().'/recruitment.php" enctype="multipart/form-data">
                        <div class="col-lg-12 col-xs-12 form-group">
							<label class="control-label" for="FirstName">First Name*</label>
                            <input class="shortfield-home form-control" type="text" name="FirstName" id="FirstName" placeholder="First Name" maxlength="50" required/>
							<span id="nameHelp" class="help-block" style="display:none;">Please enter first name.</span>
                        </div>
						<div class="col-lg-12 col-xs-12 form-group">
						<label class="control-label" for="LastName">Last Name*</label>
                            <input class="shortfield-home form-control" type="text" name="LastName" id="LastName"  placeholder="Last Name" maxlength="50" required/>
							<span id="nameHelp" class="help-block" style="display:none;">Please enter last name.</span>
                        </div>
						<div class="col-lg-12 col-xs-12 form-group">
						<label class="control-label" for="Email">Email*</label>
                            <input class="shortfield-home form-control"  type="email" name="Email" placeholder="Email" id="Email" maxlength="50" required/>
							<span id="emailHelp" class="help-block" style="display:none;">Please enter a valid email address.</span>
                        </div>
						<div class="col-lg-12 col-xs-12 form-group inline-no-padding" id="PhoneGroup">
						<label class="control-label col-xs-12" for="Phone1">Phone*</label>
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
							<div class="col-lg-12 col-xs-12 form-group inline-no-padding">
							<label class="control-label col-xs-12" for="GraduationMonth">Graduation Date*</label>
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
												<select class="shortfield-home form-control col-xs-6" id="GraduationYear" name="GraduationYear" required>
												<option value=""></option>
												<option value="2004">Prior to 2005</option>
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
												</select>
												<span class="help-block" id="GraduationYearHelp" style="display:none;">Please select the Year of your Graduation</span>
							</div>
                        </div>
                        <div class="col-lg-12 col-xs-12 form-group">
						<label class="control-label" for="WorkAuthorization">Work Authorization*</label>
                              <select class="shortfield-home form-control" name="WorkAuthorization" id="WorkAuthorization" required>
								<option value=""></option>
                                <option value="U.S. Citizen">U.S. Citizen</option>
								<option value="Green Card">Green Card</options>
								<option value="OPT">OPT</options>
								<option value="Other Visa">Other Visa</options>
                            </select>
							<span class="help-block" style="display:none;">Please select an option.</span>
                        </div>
						<div class="col-xs-12 form-group">
						<label class="control-label">Resume<span id="resume_star">*</span></label><br>
						<input type="file" id="ResumeUpload" name="ResumeUpload" class="filestyle" data-buttonBefore="true" data-buttonName="white-submit-btn" data-icon="false">
					    <span id="fileHelp" class="help-block" style="display:none;">Please select a file to upload (pdf, docx, doc, rtf, txt).</span>
						<input type="hidden" name="FileBase64" id="FileBase64"/>
						<input type="hidden" name="FileExt" id="FileExt"/>
						</div>
                        <div class="col-lg-12 col-xs-12 text-center">
							<span class="white-submit-btn" id="recruitSubmitBtn"><input type="submit" value="SUBMIT"/><i class="fa fa-angle-right"></i></span>
							<img id="loading" style="display:none;" src="'.get_template_directory_uri().'/imgs/ajax-loader.gif"></img>
							<span class="help-block" style="display:none;" id="confirmMsg">There was an issue with your submission, please try again.</span>
                        </div>
												<div class="col-lg-12 col-xs-12 text-center">
							<span class="help-block white-link"><small>Revature is committed to safeguarding your privacy. We will never sell or share your personal information. Our complete Privacy Policy is available <a href="/privacy-policy">here</a></small></span>
						</div>

                    </form>
                </div>
            <script src="//app-sj20.marketo.com/js/forms2/js/forms2.min.js"></script>
<form id="mktoForm_1137" style="display:none;"></form>
<script>MktoForms2.loadForm("//app-sj20.marketo.com", "733-JWE-559", 1137);</script>
               </div>';
}
add_shortcode('request_right_landing_form_recruitment', 'request_right_landing_form_recruitment_func');
      
	  
	    function request_right_landing_form_university_func($atts, $content=null){
	  	$a=shortcode_atts(array(

		'form_title'=>'',
		'marketo_id'=>''

	), $atts);
	/* $content = rawurldecode( base64_decode( strip_tags( $content ) ) ); */
			  return '
                 <div class="col-lg-4 col-md-4 col-sm-12 blog-bottom-border" id="requestFormContainer">
                           
                <div class="col-xs-12">
                    <h4 id="requestFormTitle">'.$a['form_title'].'</h4>
                </div>
                <div class="row form-label-txt">
						<form id="requestForm" method="post" action="'.get_template_directory_uri().'/recruitment.php" enctype="multipart/form-data">
                        <div class="col-lg-12 col-xs-12 form-group">
							<label class="control-label" for="FirstName">First Name*</label>
                            <input class="shortfield-home form-control" type="text" name="FirstName" id="FirstName" placeholder="First name" maxlength="50" required/>
							<span id="nameHelp" class="help-block" style="display:none;">Please enter first name.</span>
                        </div>
						<div class="col-lg-12 col-xs-12 form-group">
						<label class="control-label" for="LastName">Last Name*</label>
                            <input class="shortfield-home form-control" type="text" name="LastName" id="LastName"  placeholder="Last name" maxlength="50" required/>
							<span id="nameHelp" class="help-block" style="display:none;">Please enter last name.</span>
                        </div>
						<div class="col-lg-12 col-xs-12 form-group">
						<label class="control-label" for="Email">Email*</label>
                            <input class="shortfield-home form-control"  type="email" name="Email" placeholder="Email" id="Email" maxlength="50" required/>
							<span id="emailHelp" class="help-block" style="display:none;">Please enter a valid email address.</span>
                        </div>
						<div class="col-lg-12 col-xs-12 form-group inline-no-padding" id="PhoneGroup">
						<label class="control-label col-xs-12" for="Phone1">Phone*</label>
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
						<div class="col-lg-12 col-xs-12 form-group">
						<label class="control-label" for="University">University*</label>
                              <select class="shortfield-home form-control" name="University" id="University" required>
								<option value=""></option>
                                <option value="Broward College">Broward College</option>
								<option value="Florida Atlantic University">Florida Atlantic University</options>
								<option value="Florida College">Florida College</options>
								<option value="Florida Gulf Coast University">Florida Gulf Coast University</options>
								<option value="Florida Institute of Technology">Florida Institute of Technology</options>
								<option value="Florida International University">Florida International University</options>
								<option value="Florida State University">Florida State University</options>
								<option value="Jacksonville University">Jacksonville University</options>
								<option value="Lake-Sumter State College College">Late-Sumter State College</options>
								<option value="Miami Date College">Miami Dade College</options>
								<option value="New College of Florida">New College of Florida</options>
								<option value="Nova Southeastern University">Nova Southeastern University</options>
								<option value="University of Central Florida">University of Central Florida</options>
								<option value="University of Florida">University of Florida</options>
								<option value="University of Miami">University of Miami</options>
								<option value="University of North Florida">University of North Florida</options>
								<option value="University of South Florida">University of South Florida</options>
								<option value="University of Tampa">University of Tampa</options>
								<option value="University of West Florida">University of West Florida</options>
								<option value="Valencia Community College">Valencia Community College</options>
								<option value="Other">Other</options>
                            </select>
							<span class="help-block" style="display:none;">Please select a University or Other.</span>
                        </div>
							<div class="col-lg-12 col-xs-12 form-group inline-no-padding">
							<label class="control-label col-xs-12" for="GraduationMonth">Graduation Date*</label>
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
												<select class="shortfield-home form-control col-xs-6" id="GraduationYear" name="GraduationYear" required>
												<option value=""></option>
												<option value="2004">Prior to 2005</option>
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
												</select>
												<span class="help-block" id="GraduationYearHelp" style="display:none;">Please select the Year of your Graduation</span>
							</div>
                        </div>
                        <div class="col-lg-12 col-xs-12 form-group">
						<label class="control-label" for="WorkAuthorization">Work Authorization*</label>
                              <select class="shortfield-home form-control" name="WorkAuthorization" id="WorkAuthorization" required>
								<option value=""></option>
                                <option value="U.S. Citizen">U.S. Citizen</option>
								<option value="Green Card">Green Card</options>
								<option value="OPT">OPT</options>
								<option value="Other Visa">Other Visa</options>
                            </select>
							<span class="help-block" style="display:none;">Please select an option.</span>
                        </div>
						<div class="col-xs-12 form-group">
						<label class="control-label">Resume</label><br>
						<input type="file" id="ResumeUpload" name="ResumeUpload" class="filestyle" data-buttonBefore="true" data-buttonName="white-submit-btn" data-icon="false">
					    <span id="fileHelp" class="help-block" style="display:none;">Please select a file to upload (pdf, docx, doc, rtf, txt).</span>
						<input type="hidden" name="FileBase64" id="FileBase64"/>
						<input type="hidden" name="FileExt" id="FileExt"/>
						</div>
                        <div class="col-lg-12 col-xs-12 text-center">
							<span class="white-submit-btn" id="recruitSubmitBtn"><input type="submit" value="SUBMIT"/><i class="fa fa-angle-right"></i></span>
							<img id="loading" style="display:none;" src="'.get_template_directory_uri().'/imgs/ajax-loader.gif"></img>
							<span class="help-block" style="display:none;" id="confirmMsg">There was an issue with your submission, please try again.</span>
                        </div>
												<div class="col-lg-12 col-xs-12 text-center">
							<span class="help-block"><small>Revature is committed to safeguarding your privacy. We will never sell or share your personal information. Our complete Privacy Policy is available <a href="/privacy-policy">here</a></small></span>
						</div>
                    </form>
                </div>
            <script src="//app-sj20.marketo.com/js/forms2/js/forms2.min.js"></script>
<form id="mktoForm_'.$a['marketo_id'].'" style="display:none;"></form>
<script>MktoForms2.loadForm("//app-sj20.marketo.com", "733-JWE-559", '.$a['marketo_id'].');</script>
               </div>';
}
add_shortcode('request_right_landing_form_university', 'request_right_landing_form_university_func');
	
				    /* request form grey icon */

function request_form_icon_func($atts, $content=null){
	
        	$a = shortcode_atts(array(
			'img_1'=>'',
			'title_1'=>'Default Title',

			'first_content_1'=>'Default Text',
			'img_2'=>'',
			'title_2'=>'Default Title',
			
			'second_content_1'=>'Default Text',
			'img_3'=>'',
			'title_3'=>'Default Title',

			'third_content_1'=>'Default Text',

	), $atts);

	return '<section class="">
    <div class="row no-margin">
		<div class="col-lg-12 col-md-12 col-sm-12 no-padding-revaturepro">
			            <div class="requestform-bg">
               <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4">
				     <span class="margin-bottom-35"><img style="height:58px;" src="'.wp_get_attachment_url($a['img_1']).'"></span>
                      <h3 class="request-form-title">'.$a['title_1'].'</h3>
                     <p class="request-form-content">'.$a['first_content_1'].'</p>
					 
					   
                    </div>
					 <div class="col-lg-4 col-md-4 col-sm-4">
                <span class="margin-bottom-35"><img style="height:58px;" src="'.wp_get_attachment_url($a['img_2']).'"></span>
                      <h3 class="request-form-title">'.$a['title_2'].'</h3>
                     <p class="request-form-content">'.$a['second_content_1'].'</p>
					
					
                    </div>
					 <div class="col-lg-4 col-md-4 col-sm-4">
                <span class="margin-bottom-35"><img style="height:58px;" src="'.wp_get_attachment_url($a['img_3']).'"></span>
                      <h3 class="request-form-title">'.$a['title_3'].'</h3>
                     <p class="request-form-content">'.$a['third_content_1'].'</p>
					
					
                    </div>
               </div>
              
            </div>
		</div>
		
    </div>
</section>';
}
add_shortcode('request_form_icon', 'request_form_icon_func');
/*----------------------------------------End Request Landing page--------------Ajay-----------------------*/

/* Home ------------------------------------------------------------- Start-------------- Insight Section latest post---Ajay----------------- */

 function my_recent_post($atts, $content=null)
 {
	 $a=shortcode_atts(array(

 'title'=>'Default Title',
        
	), $atts);
  global $post;

  $html = "";

  $my_query = new WP_Query( array(
       'post_type' => 'post',
       'posts_per_page' => 4
  ));
$html .= '<section class="ins-bgcolor hidden-xs insight-position">';
    $html .='<div class="container ">
         <div class="row margin-bottom-35">
               <div class="col-lg-12 col-md-12 col-sm-12">
                <h2 class="margin-bottom-35" style="color:#fff;">'.$a['title'].'</h2>
                <p class="margin-bottom-25 ins-content-desc">'.$content.'</p>
               </div>
         </div>
          <div class="row">';
   if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();

       $html .= '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-left ins-blog-BR">
	             
                  <h4 class="ins-blog-head">'.get_the_title(). '</h4> <p class="ins-blog-sub">'.get_the_date('m.d.y').'</p>';
       $html .= '<p class="margin-bottom-25 blog-home-content-desc">' . get_the_excerpt() . '</p>';
	  
	   
       $html .= '<span class="margin-top-25"><a class="white-insight-read-btn" href=' . basename(get_permalink()) . '>Read more<i class="fa fa-angle-right"></i></a></span></div>';

  endwhile; endif;
 $html .= '</div>';
 $html .='</section>';
 $html .= '<section class="ins-bgcolor hidden-lg hidden-sm hidden-md"> <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
      <!-- Indicators -->
	  
      <ol class="carousel-indicators homepage-insight-corousel">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
		 <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" role="listbox">';
	  $my_query = new WP_Query( array(
       'post_type' => 'post',
       'posts_per_page' => 1
  ));
  $html .= '<div class="item active">
          <div class="container">';
		       $html .= '<div class="carousel-caption">
	             
                  <h4 class="ins-blog-head">'.get_the_title(). '</h4> <p class="ins-blog-sub">'.get_the_date('m.d.y').'</p>';
       $html .= '<p class="margin-bottom-25 blog-home-content-desc">' . get_the_excerpt() . '</p>';
	  
	   
       $html .= '<span class="margin-top-25"><a class="white-insight-read-btn" href='. basename(get_permalink()) . '>Read more<i class="fa fa-angle-right"></i></a></span></div>';
            
         $html .= '</div></div>';
		 $my_query1 = new WP_Query( array(
       'post_type' => 'post',
       'posts_per_page' => 4 ));
	   if( $my_query->have_posts() ) : while( $my_query1->have_posts() ) : $my_query1->the_post();
      $html .= '<div class="item">
          <div class="container">';
		       $html .= '<div class="carousel-caption">
	             
                  <h4 class="ins-blog-head">'.get_the_title(). '</h4> <p class="ins-blog-sub">'.get_the_date('m.d.y').'</p>';
       $html .= '<p class="margin-bottom-25 blog-home-content-desc">' . get_the_excerpt() . '</p>';
	  
	   
       $html .= '<span class="margin-top-25"><a class="white-insight-read-btn" href=' . basename(get_permalink()) . '>Read more<i class="fa fa-angle-right"></i></a></span></div>';
            
         $html .= '</div></div>';
         endwhile; endif;
        
        
       $html .= '</div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="prev-arrow" aria-hidden="true">
            <img src="../wp-content/uploads/2016/11/left-arrow.svg"/>
        </span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
       <span class="right-arrow" aria-hidden="true">
            <img src="../wp-content/uploads/2016/11/right-arrow.svg"/>
        </span>
        <span class="sr-only">Next</span>
      </a>
    </div>';
     
 $html .= '</div>';	
  $html .='</section>';
  return $html;
 }
 add_shortcode( 'recent-posts', 'my_recent_post' );

/* Home ----------------------------------------------------------- End--------------------- Insight Section latest post----------Ajay----------------------- */

function home_img_txt_container_func( $atts, $content=null){

	return ' <section class="RevPro-bgcolor">

     <div class="container no-padding">

         <div class="row">

		 ' . do_shortcode($content) . '

         </div>

      </div>

 </section>';

}

add_shortcode('home_img_txt_container', 'home_img_txt_container_func');



function home_img_txt_header_func( $atts, $content=null){

	$a = shortcode_atts(array(

		'title' => 'Default Title',

		'logo_img' => 'Image URL',

		'button_text' => 'Button Text',

		'button_url' => 'Button URL'

	), $atts);

	return '<div class="col-lg-12 col-md-12 col-sm-12 margin-bottom-100">

                <h2 class="margin-bottom-25">' . $a['title'] . '</h2>

                <p class="margin-bottom-25 RevPro-cont">

					' . $content . '

                </p>

                <span class="RevPro-logo-block"><img src="'. wp_get_attachment_url($a['logo_img']) .'" /></span>

				<a href="'.$a['button_url'].'" class="Orange-read-btn">'.$a['button_text'].'<i class="fa fa-angle-right"></i></a>

               </div>';

}

add_shortcode('home_img_txt_header', 'home_img_txt_header_func');



function home_img_left_text_right_func( $atts, $content=null){

	$a = shortcode_atts(array(

			'title_img_left' => 'Default Title',

			'logo_img_img_left' => 'Default Image',

			'button_text_img_left' => 'Button Text',

			'button_url_img_left' => 'Button URL'

	), $atts);

	 $returnHTML = '<div class="col-lg-6 col-md-6 col-sm-12 overflow-hidden height-320 no-padding {$changebg}">

                  <div class="">

                      <img class="business-img left" src="'. wp_get_attachment_url($a['logo_img_img_left']) .'" />

                  </div>

              </div>

              <div class="col-lg-6 col-md-6 col-sm-12 text-left padding-70 height-320 $changebgclassind">

                 <div class="RevPro-Bootcamp-container right">

                     <h4 class="RevPro-Online-head">' . $a['title_img_left'] . '</h4>

                      <p class="RevPro-Online-content">'.  $content  .'</p>

				  <a class="Orange-read-btn" href="' . $a['button_url_img_left'] . '">' . $a['button_text_img_left'] . '<i class="fa fa-angle-right"></i></a>    

			   </div>

              </div>';

			  return $returnHTML;

}

add_shortcode('home_img_left_text_right', 'home_img_left_text_right_func');



function home_text_left_img_right_func( $atts, $content=null){

	$a = shortcode_atts(array(

			'title_left' => 'Default Title',

			'img_right' => 'Default Image',

			'button_text' => 'Button Text',

			'button_url' => 'Button URL'

	), $atts);

	 $returnHTML = '<div class="col-lg-6 col-md-6 col-sm-12 overflow-hidden mob-right height-320 no-padding">

                  <div class="">

                      <img class="business-img right" src="'.wp_get_attachment_url($a['img_right']).'" />

                  </div>

              </div>



                <div class="col-lg-6 col-md-6 col-sm-12 text-left padding-70 height-320">

                 <div class="text-right RevPro-Bootcamp-container left">

                     <h4 class="RevPro-Bootcamp-head">'.$a['title_left'].'</h4>

                      <p class="RevPro-Bootcamp-content">

                      '.$content.'

                  </p>

				<a class="Orange-read-btn" href="'.$a['button_url'].'">'.$a['button_text'].'<i class="fa fa-angle-right"></i></a>

                 </div>

              </div>';

			  return $returnHTML;

}

add_shortcode('home_text_left_img_right', 'home_text_left_img_right_func');



function home_testimonial_func( $atts, $content=null){

	$a = shortcode_atts(array(

			'title'=>'Default Title',

			'content_1'=>'Default Text',

			'name_1'=>'Default Text',

			'content_2'=>'Default Text',

			'name_2'=>'Default Text',

			'content_3'=>'Default Text',

			'name_3'=>'Default Text',

			'content_4'=>'Default Text',

			'name_4'=>'Default Text',

			'content_5'=>'Default Text',

			'name_5'=>'Default Text',

			'content_6'=>'Default Text',

			'name_6'=>'Default Text',

			'content_7'=>'Default Text',

			'name_7'=>'Default Text',

			'school_1'=>'Default Text',

			'school_2'=>'Default Text',

			'school_3'=>'Default Text',

			'school_4'=>'Default Text',

			'school_5'=>'Default Text',

			'school_6'=>'Default Text',

			'school_7'=>'Default Text'

	), $atts);

	 $returnHTML = ' <section class="Testimon-bgcolor">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12">

                    <h2>'.$a['title'].'</h2>

                </div>

            </div>

        </div>

      <!-- Carousel

    ================================================== -->

    <div id="myCarousel-2" class="carousel slide" data-ride="carousel" data-interval="4000">

      <!-- Indicators -->

      <ol class="carousel-indicators">

        <li data-target="#myCarousel-2" data-slide-to="0" class="active"></li>

        <li data-target="#myCarousel-2" data-slide-to="1"></li>

        <li data-target="#myCarousel-2" data-slide-to="2"></li>

		<li data-target="#myCarousel-2" data-slide-to="3"></li>

		<li data-target="#myCarousel-2" data-slide-to="4"></li>

		<li data-target="#myCarousel-2" data-slide-to="5"></li>

		<li data-target="#myCarousel-2" data-slide-to="6"></li>

      </ol>

      <div class="carousel-inner" role="listbox">

        <div class="item active">

          <div class="container">

            <div class="carousel-caption">

              <h2 class="Testimon-quoate"><i class="fa fa-quote-right"></i></h2>

              <h3>'.$a['content_1'].'</h3>



              <p>- '.$a['name_1'].',<span class="">'.$a['school_1'].'</span></p>

            </div>

          </div>

        </div>

        <div class="item">

             <div class="container">

            <div class="carousel-caption">

              <h2 class="Testimon-quoate"><i class="fa fa-quote-right"></i></h2>

              <h3>'.$a['content_2'].'</h3>

              <p>- '.$a['name_2'].',<span class="">'.$a['school_2'].'</span></p>

            </div>

          </div>

        </div>

        <div class="item">

            <div class="container">

            <div class="carousel-caption">

              <h2 class="Testimon-quoate"><i class="fa fa-quote-right"></i></h2>

              <h3>'.$a['content_3'].'</h3>



              <p>- '.$a['name_3'].',<span class="">'.$a['school_3'].'</span></p>

            </div>

          </div>

        </div>

		        <div class="item">

            <div class="container">

            <div class="carousel-caption">

              <h2 class="Testimon-quoate"><i class="fa fa-quote-right"></i></h2>

              <h3>'.$a['content_4'].'</h3>



              <p>- '.$a['name_4'].',<span class="">'.$a['school_4'].'</span></p>

            </div>

          </div>

        </div>

		        <div class="item">

            <div class="container">

            <div class="carousel-caption">

              <h2 class="Testimon-quoate"><i class="fa fa-quote-right"></i></h2>

              <h3>'.$a['content_5'].'</h3>



              <p>- '.$a['name_5'].',<span class="">'.$a['school_5'].'</span></p>

            </div>

          </div>

        </div>

		        <div class="item">

            <div class="container">

            <div class="carousel-caption">

              <h2 class="Testimon-quoate"><i class="fa fa-quote-right"></i></h2>

              <h3>'.$a['content_6'].'</h3>



              <p>- '.$a['name_6'].',<span class="">'.$a['school_6'].'</span></p>

            </div>

          </div>

        </div>

		        <div class="item">

            <div class="container">

            <div class="carousel-caption">

              <h2 class="Testimon-quoate"><i class="fa fa-quote-right"></i></h2>

              <h3>'.$a['content_7'].'</h3>



              <p>- '.$a['name_7'].',<span class="">'.$a['school_7'].'</span></p>

            </div>

          </div>

        </div>

      </div>

      <a class="left carousel-control" href="#myCarousel-2" role="button" data-slide="prev">

        <span class="prev-arrow" aria-hidden="true">

            <img src="../wp-content/uploads/2016/11/left-arrow.svg"/>

        </span>

        <span class="sr-only">Previous</span>

      </a>

      <a class="right carousel-control" href="#myCarousel-2" role="button" data-slide="next">

       <span class="right-arrow" aria-hidden="true">

            <img src="../wp-content/uploads/2016/11/right-arrow.svg"/>

        </span>

        <span class="sr-only">Next</span>

      </a>

    </div>

 </section>';

	  return $returnHTML;

}

add_shortcode('home_testimonial', 'home_testimonial_func');

function marketo_form_header_func( $atts, $content=null){

    $a = shortcode_atts(array(

		'btn_txt'=>'',

		'form_header'=>''

    ), $atts);

    $returnHTML =  '<section class="quickcont-bg-marketo">

	<div class="row no-margin">

		<div class="col-lg-12 col-md-12 col-sm-12 no-padding">

			<div>

               <div class="row">

                  <div class="col-lg-12 col-md-12 col-sm-12">

                <h2 class="margin-bottom-35">'.$content.'</h2>

                 <a href="#inline" class="white-read-btn fancybox-marketo">'.$a['btn_txt'].'<i class="fa fa-angle-right"></i></a>

                    </div>

               </div>

            </div>

		</div>

	</div>
<script src="https://www.linkedin.com/autofill/js/autofill.js" type="text/javascript" async></script><script type="IN/Form2" data-form="b2bform" data-field-firstname="FirstName" data-field-lastname="LastName" data-field-email="Email" data-field-company="Company"></script>
</section>
 			<div id="inline" class="principle-quick-content" style="display:none;">
			
<div class="col-lg-12 col-xs-12"><h4 class="marketo-form-header">'.$a['form_header'].'</h4></div>
			              <div class="row form-label-txt">
						<form id="b2bform" method="post" action="https://733-JWE-559.mktorest.com/rest">
                        <div class="col-lg-12 col-xs-12 form-group">
							<label class="control-label" for="FirstName">First Name*</label>
                            <input class="shortfield-home form-control" type="text" name="FirstName" id="FirstName" placeholder="First name" maxlength="50" required/>
							<span id="nameHelp" class="help-block" style="display:none;">Please enter first name.</span>
                        </div>
						<div class="col-lg-12 col-xs-12 form-group">
						<label class="control-label" for="LastName">Last Name*</label>
                            <input class="shortfield-home form-control" type="text" name="LastName" id="LastName"  placeholder="Last name" maxlength="50" required/>
							<span id="nameHelp" class="help-block" style="display:none;">Please enter last name.</span>
                        </div>
						<div class="col-lg-12 col-xs-12 form-group">
						<label class="control-label" for="Email">Email*</label>
                            <input class="shortfield-home form-control"  type="email" name="Email" placeholder="Email" id="Email" maxlength="50" required/>
							<span id="emailHelp" class="help-block" style="display:none;">Please enter a valid corporate email address (No personal email accounts).</span>
                        </div>
						<div class="col-lg-12 col-xs-12 form-group inline-no-padding" id="PhoneGroup">
						<label class="control-label col-xs-12" for="Phone1">Phone*</label>
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
						  <div class="col-lg-12 col-xs-12 form-group">
						  <label class="control-label" for="Company">Company*</label>
                            <input class="shortfield-home form-control" type="text" name="Company" placeholder="Company" id="Company" maxlength="100" required/>
							<span id="companyHelp" class="help-block" style="display:none;">Please enter Company name.</span>
                        </div>
                        <div class="col-lg-12 col-xs-12 form-group">
						<label class="control-label" for="NumberOfEmployees">Number of Employees</label>
                              <select class="shortfield-home form-control" id="NumberOfEmployees" name="NumberOfEmployees">
								<option value=""></option>
                                <option value="1-5 Employees">1-5 Employees</option>
                                <option value="6-20 Employees">6-20 Employees</option>
                                <option value="21-200 Employees">21-200 Employees</option>
								<option value="101-500 Employees">101-500 Employees</option>
								<option value="500-3,000 Employees">500-3,000 Employees</option>
								<option value="3,501+ Employees">3,501+ Employees</option>
                            </select>
                        </div>

                        <div class="col-lg-12 col-xs-12 form-group">
							<span class="orange-submit-btn" id="submitBtn"><input type="submit" value="SUBMIT"/><i class="fa fa-angle-right"></i></span>
                        </div>
												<div class="col-lg-12 col-xs-12 text-center">
							<span class="help-block"><small>Revature is committed to safeguarding your privacy. We will never sell or share your personal information. Our complete Privacy Policy is available <a href="/privacy-policy">here</a></small></span>
						</div>
                    </form>
                </div>
        </div>
		            <script src="//app-sj20.marketo.com/js/forms2/js/forms2.min.js"></script>
<form id="mktoForm_1128" style="display:none;"></form>
<script>MktoForms2.loadForm("//app-sj20.marketo.com", "733-JWE-559", 1128);</script>';
return $returnHTML;
}

add_shortcode('marketo_form_header', 'marketo_form_header_func');

function bootcamp_banner_func($atts, $content=null){
	$a=shortcode_atts(array(
	'title'=>'',
	'btn_txt'=>'',
	'form_header'=>'',
	'marketo_id'=>''
	), $atts);
	
	$returnHTML = '<section class="acd-par-orangebar revaturepro">
    <div class="container acd-orangebar-container">
        <div class="text-center">
            <h4 class="rev-online-bh4">'.$a['title'].'</h4>
            <a href="#inline" class="white-read-btn mob-top-margin fancybox-marketo">'.$a['btn_txt'].'<i class="fa fa-angle-right"></i></a>
        </div>
    </div>
</section>
<div id="inline" class="principle-quick-content" style="display:none;">
<div class="col-lg-12 col-xs-12"><h4 class="marketo-form-header">'.$a['form_header'].'</h4></div>
			              <div class="row form-label-txt">
						<form id="b2bform" method="post" action="https://733-JWE-559.mktorest.com/rest">
						                        <div class="col-lg-12 col-xs-12 form-group">
							<label class="control-label" for="FirstName">First Name*</label>
                            <input class="shortfield-home form-control" type="text" name="FirstName" id="FirstName" placeholder="First name" maxlength="50" required/>
							<span id="nameHelp" class="help-block" style="display:none;">Please enter first name.</span>
                        </div>
						<div class="col-lg-12 col-xs-12 form-group">
						<label class="control-label" for="LastName">Last Name*</label>
                            <input class="shortfield-home form-control" type="text" name="LastName" id="LastName"  placeholder="Last name" maxlength="50" required/>
							<span id="nameHelp" class="help-block" style="display:none;">Please enter last name.</span>
                        </div>
						<div class="col-lg-12 col-xs-12 form-group">
						<label class="control-label" for="Email">Email*</label>
                            <input class="shortfield-home form-control"  type="email" name="Email" placeholder="Email" id="Email" maxlength="50" required/>
							<span id="emailHelp" class="help-block" style="display:none;">Please enter a valid email address.</span>
                        </div>
						<div class="col-lg-12 col-xs-12 form-group inline-no-padding" id="PhoneGroup">
						<label class="control-label col-xs-12" for="Phone1">Phone*</label>
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
							<div class="col-lg-12 col-xs-12 form-group inline-no-padding">
														<label class="control-label col-xs-12" for="GraduationMonth">Graduation Date*</label>
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
												<select class="shortfield-home form-control col-xs-6" id="GraduationYear" name="GraduationYear" required>
												<option value=""></option>
												<option value="2004">Prior to 2005</option>
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
												</select>
												<span class="help-block" id="GraduationYearHelp" style="display:none;">Please select the Year of your Graduation</span>
							</div>
							
                        </div>
                        <div class="col-lg-12 col-xs-12 form-group">
						<label class="control-label" for="WorkAuthorization">Work Authorization*</label>
                              <select class="shortfield-home form-control" name="WorkAuthorization" id="WorkAuthorization" required>
								<option value=""></option>
                                <option value="U.S. Citizen">U.S. Citizen</option>
								<option value="Green Card">Green Card</options>
								<option value="OPT">OPT</options>
								<option value="Other Visa">Other Visa</options>
                            </select>
							<span class="help-block" style="display:none;">Please select an option.</span>
                        </div>
						<div class="col-xs-12 form-group">
						<label class="control-label">Resume<span id="resume_star">*</span></label><br>
						<input type="file" id="ResumeUpload" name="ResumeUpload" class="filestyle" data-buttonBefore="true" data-buttonName="Orange-read-btn" data-icon="false">
					    <span id="fileHelp" class="help-block" style="display:none;">Please select a file to upload (pdf, docx, doc, rtf, txt).</span>
						<input type="hidden" name="FileBase64" id="FileBase64"/>
						<input type="hidden" name="FileExt" id="FileExt"/>
						</div>
                        <div class="col-lg-12 col-xs-12 text-center">
							<span class="orange-submit-btn" id="submitBtn"><input type="submit" value="SUBMIT"/><i class="fa fa-angle-right"></i></span>
							<img id="loading" style="display:none;" src="'.get_template_directory_uri().'/imgs/ajax-loader.gif"></img>
							<span class="help-block" style="display:none;" id="confirmMsg">There was an issue with your submission, please try again.</span>

                        </div>
												<div class="col-lg-12 col-xs-12 text-center">
							<span class="help-block"><small>Revature is committed to safeguarding your privacy. We will never sell or share your personal information. Our complete Privacy Policy is available <a href="/privacy-policy">here</a></small></span>
						</div>

                    </form>
                </div>
        </div>
		            <script src="//app-sj20.marketo.com/js/forms2/js/forms2.min.js"></script>
<form id="mktoForm_'.$a['marketo_id'].'" style="display:none;"></form>
<script>MktoForms2.loadForm("//app-sj20.marketo.com", "733-JWE-559", '.$a['marketo_id'].');</script>';
 
 return $returnHTML;
}
add_shortcode('bootcamp_banner', 'bootcamp_banner_func');

function bootcamp_apply_now_marketo_func( $atts, $content=null){

    $a = shortcode_atts(array(

		'title'=>'',

		'sub_title'=>'',
		
		'marketo_id'=>'',
		
		'btn_txt'=>'',
		
		'form_header'=>''

    ), $atts);

    $returnHTML =  '<section class="rev-online-today" id="apply">
					<div id="confirm" style="display:none;" class="mob-container-unset margin-top-150">
						<h3>'.$a['confirm_title'].'</h3>
						<p>'.$a['confirm_content'].'</p>
					</div>
					<div class="mob-container-unset" id="bootcampFormContainer">
						<div class="row no-margin">
							<div class="col-lg-12 col-md-12 col-sm-12 no-margin no-padding">
								<h3 class="margin-bottom-15">'.$a['title'].'</h3>
								<p class="margin-bottom-15 acd-part-today-cont">'.$a['sub_title'].'</p>
								<a href="#inline" class="Orange-read-btn fancybox-marketo">'.$a['btn_txt'].'<i class="fa fa-angle-right"></i></a>
						  </div>
					 </div>
				 </div>
			</section>
			<div id="inline" class="principle-quick-content" style="display:none;">
<div class="col-lg-12 col-xs-12"><h4 class="marketo-form-header">'.$a['form_header'].'</h4></div>
			              <div class="row form-label-txt">
						<form id="b2bform" method="post" action="https://733-JWE-559.mktorest.com/rest">
						                        <div class="col-lg-12 col-xs-12 form-group">
							<label class="control-label" for="FirstName">First Name*</label>
                            <input class="shortfield-home form-control" type="text" name="FirstName" id="FirstName" placeholder="First Name" maxlength="50" required/>
							<span id="nameHelp" class="help-block" style="display:none;">Please enter first name.</span>
                        </div>
						<div class="col-lg-12 col-xs-12 form-group">
						<label class="control-label" for="LastName">Last Name*</label>
                            <input class="shortfield-home form-control" type="text" name="LastName" id="LastName"  placeholder="Last Name" maxlength="50" required/>
							<span id="nameHelp" class="help-block" style="display:none;">Please enter last name.</span>
                        </div>
						<div class="col-lg-12 col-xs-12 form-group">
						<label class="control-label" for="Email">Email*</label>
                            <input class="shortfield-home form-control"  type="email" name="Email" placeholder="Email" id="Email" maxlength="50" required/>
							<span id="emailHelp" class="help-block" style="display:none;">Please enter a valid email address.</span>
                        </div>
						<div class="col-lg-12 col-xs-12 form-group inline-no-padding" id="PhoneGroup">
						<label class="control-label col-xs-12" for="Phone1">Phone*</label>
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
							<div class="col-lg-12 col-xs-12 form-group inline-no-padding">
							<label class="control-label col-xs-12" for="GraduationMonth">Graduation Date*</label>
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
												<select class="shortfield-home form-control col-xs-6" id="GraduationYear" name="GraduationYear" required>
												<option value=""></option>
												<option value="2004">Prior to 2005</option>
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
												</select>
												<span class="help-block" id="GraduationYearHelp" style="display:none;">Please select the Year of your Graduation</span>
							</div>
							
                        </div>
                        <div class="col-lg-12 col-xs-12 form-group">
						<label class="control-label" for="WorkAuthorization">Work Authorization*</label>
                              <select class="shortfield-home form-control" name="WorkAuthorization" id="WorkAuthorization" required>
								<option value=""></option>
                                <option value="U.S. Citizen">U.S. Citizen</option>
								<option value="Green Card">Green Card</options>
								<option value="OPT">OPT</options>
								<option value="Other Visa">Other Visa</options>
                            </select>
							<span class="help-block" style="display:none;">Please select an option.</span>
                        </div>
						<div class="col-xs-12 form-group">
						<label class="control-label">Resume<span id="resume_star">*</span></label><br>
						<input type="file" id="ResumeUpload" name="ResumeUpload" class="filestyle" data-buttonBefore="true" data-buttonName="Orange-read-btn" data-icon="false">
					    <span id="fileHelp" class="help-block" style="display:none;">Please select a file to upload (pdf, docx, doc, rtf, txt).</span>
						<input type="hidden" name="FileBase64" id="FileBase64"/>
						<input type="hidden" name="FileExt" id="FileExt"/>
						</div>
                        <div class="col-lg-12 col-xs-12 text-center">
							<span class="orange-submit-btn" id="submitBtn"><input type="submit" value="SUBMIT"/><i class="fa fa-angle-right"></i></span>
							<img id="loading" style="display:none;" src="'.get_template_directory_uri().'/imgs/ajax-loader.gif"></img>
							<span class="help-block" style="display:none;" id="confirmMsg">There was an issue with your submission, please try again.</span>
                        </div>
												<div class="col-lg-12 col-xs-12 text-center">
							<span class="help-block"><small>Revature is committed to safeguarding your privacy. We will never sell or share your personal information. Our complete Privacy Policy is available <a href="/privacy-policy">here</a></small></span>
						</div>

                    </form>
                </div>
        </div>
		            <script src="//app-sj20.marketo.com/js/forms2/js/forms2.min.js"></script>
<form id="mktoForm_'.$a['marketo_id'].'" style="display:none;"></form>
<script>MktoForms2.loadForm("//app-sj20.marketo.com", "733-JWE-559", '.$a['marketo_id'].');</script>';
return $returnHTML;
}

add_shortcode('bootcamp_apply_now_marketo', 'bootcamp_apply_now_marketo_func');

function home_contact_us_func( $atts, $content=null){

    $a = shortcode_atts(array(

		'btn_txt'=>'Default Text',

		'btn_url'=>'URL'

    ), $atts);

    return '<section class="quickcont-bg">

	<div class="row no-margin">

		<div class="col-lg-12 col-md-12 col-sm-12 no-padding">

			<div>

               <div class="row">

                  <div class="col-lg-12 col-md-12 col-sm-12">

                <h2 class="margin-bottom-35">'.$content.'</h2>

                 <a href="'.$a['btn_url'].'" class="white-read-btn">'.$a['btn_txt'].'<i class="fa fa-angle-right"></i></a>

                    </div>

               </div>

            </div>

		</div>

	</div>

</section>';

}

add_shortcode('home_contact_us', 'home_contact_us_func');

/*------------------------------------ Start Join Our Team - Header-------------------------------------------------------*/

function join_our_team_header_func($atts, $content=null){
	$a=shortcode_atts(array(
		'logo_img' => 'Video Thumbnail',
		'header_title' => 'Default Title',
		'header_video' => 'Video url',
        'button_text_right' => ' text',
        
	), $atts);
	return
	'<section class="join_our_page_header_section">
	<div class="row">
	  <div class="col-sm-5 col-sm-push-7 relative_join">
		      <div>
		       <a class="fancybox fancybox.iframe" href="'.$a['header_video'].'"><img style="display: initial !important;" class="img-responsive" src="'. wp_get_attachment_url($a['logo_img']) .'"  draggable="false"></a>
		   </div>
		   </div>
    <div class="col-sm-6 col-sm-pull-4">
	 <div class="join_our_page_content">
               
               <h1 class="hero-rev-htitle mobile_relative_position"> '. $a['header_title'] . '</h1>
               <p class="hero-rev-content mobile_padding_content">'.$content.'</p>
             
		      <a href="#inline" class="white-read-btn margin-top-10 fancybox-marketo">'.$a['button_text_right'].'<i class="fa fa-angle-right"></i></a>
           
		   </div>
	
	</div>
		   </section>
	<div id="inline" class="principle-quick-content" style="display:none;">
<div class="col-lg-12 col-xs-12"><h4 class="marketo-form-header">Quick Apply</h4></div>
			              <div class="row form-label-txt">
						<form id="b2bform" method="post" action="https://733-JWE-559.mktorest.com/rest">
						                        <div class="col-lg-12 col-xs-12 form-group">
							<label class="control-label" for="FirstName">First Name*</label>
                            <input class="shortfield-home form-control" type="text" name="FirstName" id="FirstName" placeholder="First Name" maxlength="50" required/>
							<span id="nameHelp" class="help-block" style="display:none;">Please enter first name.</span>
                        </div>
						<div class="col-lg-12 col-xs-12 form-group">
						<label class="control-label" for="LastName">Last Name*</label>
                            <input class="shortfield-home form-control" type="text" name="LastName" id="LastName"  placeholder="Last Name" maxlength="50" required/>
							<span id="nameHelp" class="help-block" style="display:none;">Please enter last name.</span>
                        </div>
						<div class="col-lg-12 col-xs-12 form-group">
						<label class="control-label" for="Email">Email*</label>
                            <input class="shortfield-home form-control"  type="email" name="Email" placeholder="Email" id="Email" maxlength="50" required/>
							<span id="emailHelp" class="help-block" style="display:none;">Please enter a valid email address.</span>
                        </div>
						<div class="col-lg-12 col-xs-12 form-group inline-no-padding" id="PhoneGroup">
						<label class="control-label col-xs-12" for="Phone1">Phone*</label>
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
							<div class="col-lg-12 col-xs-12 form-group inline-no-padding">
							<label class="control-label col-xs-12" for="GraduationMonth">Graduation Date*</label>
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
												<select class="shortfield-home form-control col-xs-6" id="GraduationYear" name="GraduationYear" required>
												<option value=""></option>
												<option value="2004">Prior to 2005</option>
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
												</select>
												<span class="help-block" id="GraduationYearHelp" style="display:none;">Please select the Year of your Graduation</span>
							</div>
							
                        </div>
                        <div class="col-lg-12 col-xs-12 form-group">
						<label class="control-label" for="WorkAuthorization">Work Authorization*</label>
                              <select class="shortfield-home form-control" name="WorkAuthorization" id="WorkAuthorization" required>
								<option value=""></option>
                                <option value="U.S. Citizen">U.S. Citizen</option>
								<option value="Green Card">Green Card</options>
								<option value="OPT">OPT</options>
								<option value="Other Visa">Other Visa</options>
                            </select>
							<span class="help-block" style="display:none;">Please select an option.</span>
                        </div>
						<div class="col-xs-12 form-group">
						<label class="control-label">Resume<span id="resume_star">*</span></label><br>
						<input type="file" id="ResumeUpload" name="ResumeUpload" class="filestyle" data-buttonBefore="true" data-buttonName="Orange-read-btn" data-icon="false">
					    <span id="fileHelp" class="help-block" style="display:none;">Please select a file to upload (pdf, docx, doc, rtf, txt).</span>
						<input type="hidden" name="FileBase64" id="FileBase64"/>
						<input type="hidden" name="FileExt" id="FileExt"/>
						</div>
                        <div class="col-lg-12 col-xs-12 text-center">
							<span  id="submitBtn"><input type="submit" class="orange-submit-btn" value="SUBMIT"/></span>
							<img id="loading" style="display:none;" src="'.get_template_directory_uri().'/imgs/ajax-loader.gif"></img>
							<span class="help-block" style="display:none;" id="confirmMsg">There was an issue with your submission, please try again.</span>
                        </div>
												<div class="col-lg-12 col-xs-12 text-center">
							<span class="help-block"><small>Revature is committed to safeguarding your privacy. We will never sell or share your personal information. Our complete Privacy Policy is available <a href="/privacy-policy">here</a></small></span>
						</div>

                    </form>
                </div>
        </div>
		            <script src="//app-sj20.marketo.com/js/forms2/js/forms2.min.js"></script>
<form id="mktoForm_1139" style="display:none;"></form>
<script>MktoForms2.loadForm("//app-sj20.marketo.com", "733-JWE-559", "1139");</script>';
}
add_shortcode('join_our_team_header', 'join_our_team_header_func');

function join_our_team_sub_nav_func($atts, $content=null){
	return
	'<section class="revpro-sub-nav hidden-xs">
    <div style="width:782px!important;" class="container sticky-nav">
        <div class="">
             <nav class="rev-pro-menu" id="stickyNav">
                 <ul>
                     <li><a href="#benefits">BENEFITS</a></li>
					  <li><a href="#differentaion">OUR DIFFERENTIATORS</a></li>
                     <li><a href="#howItWorks">HOW IT WORKS</a></li>
                     <li><a href="#apply">APPLY</a></li>
                     
                 </ul>
             </nav>
        </div>
    </div>
</section>';
}

add_shortcode('join_our_team_sub_nav','join_our_team_sub_nav_func');
/*------------------------------------ End Join Our Team - Header-------------------------------------------------------*/


/*------------------------------------ RevaturePro - Header-------------------------------------------------------*/


function pro_header_func($atts, $content=null){

	$a=shortcode_atts(array(

		'title'=>'',
		'logo_img'=>'',
		'content'=>'',
		'btn_url_1'=>'',
		'btn_txt_1'=>'',
		'btn_url_2'=>'',
		'btn_txt_2'=>'',
		'banner_img'=>''


	), $atts);
	
	
	$returnHTML = 
	
	'<div class="hero-bg-pro">
  <div class="hero-bg-content">
    <div class="hero-rev-logo"> <img src="'.wp_get_attachment_url($a['logo_img']).'" /> </div>
    <h1 class="hero-rev-htitle">'.$a['title'].'</h1>
    <p class="hero-rev-content">'.$content.'</p>
    <a class="white-read-btn margin-right-15" href="'.$a['btn_url_1'].'">'.$a['btn_txt_1'].'<i class="fa fa-angle-right"></i></a></span> <span class="white-read-btn margin-top-10" href="'.$a['btn_txt_2'].'" id="applyBtn">'.$a['btn_txt_2'].'<i class="fa fa-angle-right"></i>
    </button>
  </div>
  <div class="cd-background-wrapper hidden-xs">
    <div class="cd-floating-background"><img src="'.wp_get_attachment_url($a['banner_img']).'"></img>
      <div> </div>
    </div>
  </div>
</div>';

	return $returnHTML;

}

add_shortcode('pro_header', 'pro_header_func');



/*------------------------------------ RevaturePro - Sub Nav Bar---------------------------------------------------*/


function pro_sub_nav_container_func( $atts, $content=null){

	return '<section class="revpro-sub-nav hidden-xs">
    <div class="container sticky-nav">
        <div class="">
         <nav class="rev-pro-menu" id="stickyNav">
           <ul>
		 ' . do_shortcode($content) . '

          </ul>
          </nav>
        </div>
    </div>
</section>';

}

add_shortcode('pro_sub_nav', 'pro_sub_nav_container_func');



function pro_sub_nav_func($atts, $content=null){

	$a=shortcode_atts(array(

		'link_url'=>'',
		'link_txt'=>''

	), $atts);
	
	
	$returnHTML = '<li><a href="'.$a['link_url'].'">'.$a['link_txt'].'</a></li>';

	return $returnHTML;

}

add_shortcode('pro_sub_nav', 'pro_sub_nav_func');


/* ===================================== RevaturePro Online ======================================*/

function online_header_func($atts, $content=null){
	$a=shortcode_atts(array(
		'title'=>'Title',
		'logo_img'=>'',
		'btn_url'=>'',
		'btn_txt'=>'Button'
	), $atts);
	
	$returnHTML = '<div class="rev-online-hero">
        <div class="row no-margin contact-hero-content">
            <div class="col-lg-12 col-md-12 col-sm-12 margin-top-100 margin-bottom-25 mob-bottom-50">
                <h1 class="margin-bottom-15">'.$a['title'].'</h1>
                <p class="">
				 '.$content.'
				</p>
            </div>
            <div class="container margin-bottom-50">
                <div class="margin-top-50">
                    <img src="'.wp_get_attachment_url($a['logo_img']).'" />
                </div>

                <a href="'.$a['btn_url'].'" class="white-read-btn margin-top-25">'.$a['btn_txt'].'<i class="fa fa-angle-right"></i></a>              
            </div>
        </div>
 </div>';
 
 return $returnHTML;
}
add_shortcode('online_header', 'online_header_func');

function online_log_in_banner_func($atts, $content=null){
	$a=shortcode_atts(array(
		'btn_url'=>'',
		'btn_txt'=>'Button'
	), $atts);
	
	$returnHTML = '<section class="acd-par-orangebar revaturepro">
    <div class="container acd-orangebar-container">
        <div class="text-center">
            <h4 class="rev-online-bh4">'.$content.'</h4>
            <a href="'.$a['btn_url'].'" target="_blank" class="white-read-btn mob-top-margin">'.$a['btn_txt'].'<i class="fa fa-angle-right"></i></a>
        </div>
    </div>
</section>';
 
 return $returnHTML;
}
add_shortcode('online_log_in_banner', 'online_log_in_banner_func');

function academic_banner_func($atts, $content=null){
	$a=shortcode_atts(array(
		'btn_url'=>'',
		'btn_txt'=>'Button'
	), $atts);
	
	$returnHTML = '<section class="acd-par-orangebar revaturepro">
    <div class="container acd-orangebar-container">
        <div class="text-center">
            <h4 class="rev-online-bh4">'.$content.'</h4>
            <a href="'.$a['btn_url'].'" class="white-read-btn mob-top-margin">'.$a['btn_txt'].'<i class="fa fa-angle-right"></i></a>
        </div>
    </div>
</section>';
 
 return $returnHTML;
}
add_shortcode('academic_banner', 'academic_banner_func');

function online_two_column_txt_img_func($atts, $content=null){
	$a=shortcode_atts(array(
		'title'=>'Title',
		'img_url'=>''
	), $atts);
	
	$returnHTML = '<section class="rev-online">
    <div class="row no-margin">
        <div class="col-lg-6 col-md-6 col-sm-12 no-padding">
            <div class="padding-50 rev-online">
                <h2 class="rev-online-head">
                    '.$a['title'].'
                </h2>
                <p class="rev-online-p">
					'.$content.'
				</p>
            </div>
        </div>
         <div class="col-lg-6 col-md-6 col-sm-12 overflow-hidden hidden-xs hidden-sm no-padding rev-online">
             <img class="" src="'.wp_get_attachment_url($a['img_url']).'" />
        </div>
    </div>
</section>';
 
 return $returnHTML;
}
add_shortcode('online_two_column_txt_img', 'online_two_column_txt_img_func');

function online_quick_facts_func($atts, $content=null){
	$a=shortcode_atts(array(
		'title'=>'Title',
		'header_1'=>'Header',
		'content_1'=>'Content',
		'header_2'=>'Header',
		'content_2'=>'Content',
		'header_3'=>'Header',
		'content_3'=>'Content',
	), $atts);
	
	$returnHTML = '<section class="rev-online-quickfacts">
          <div class="container margin-bottom-50">
         <div class="row no-margin">
               <div class="col-lg-12 col-md-12 col-sm-12 margin-top-70">
                <h3 class="margin-bottom-35 online-fat-h3">'.$a['title'].'</h3>
             </div>
         </div>
         </div>
    <div class="rev-online-quick-contain">
        <div class="rev-online-quick-1 margin-bottom-75 mob-bottom-45">
            <h2 class="">'.$a['header_1'].'</h2>
            <p>'.$a['content_1'].'</p>
        </div>
         <div class="rev-online-quick-1 margin-bottom-75 mob-bottom-45">
            <h2 class="">'.$a['header_2'].'</h2>
            <p>'.$a['content_2'].'</p>
        </div>
         <div class="rev-online-quick-1 margin-bottom-75 mob-bottom-45">
            <h2 class="">'.$a['header_3'].'</h2>
            <p>'.$a['content_3'].'</p>
        </div>
    </div>
</section>';
 
 return $returnHTML;
}
add_shortcode('online_quick_facts', 'online_quick_facts_func');

function online_sign_up_func($atts, $content=null){
	$a=shortcode_atts(array(
		'title'=>'Title',
		'btn_txt'=>'Button Text',
		'btn_url'=>''
	), $atts);
	
	$returnHTML = '<section class="rev-online-today padding-75">
      <div class="mob-container-unset">
         <div class="row no-margin">
               <div class="col-lg-12 col-md-12 col-sm-12 no-margin no-padding">
                <h3 class="margin-bottom-15">'.$a['title'].'</h3>
                <p class="margin-bottom-15 acd-part-today-cont">'.$content.'</p>
                   <a href="'.$a['btn_url'].'" class="Orange-read-btn margin-top-25 margin-right-15">'.$a['btn_txt'].'<i class="fa fa-angle-right"></i></a>
                   
               </div>
         </div>
     </div>
</section>';
 
 return $returnHTML;
}
add_shortcode('online_sign_up', 'online_sign_up_func');

function online_bottom_two_column_func($atts, $content=null){
	$a=shortcode_atts(array(
		'left_title'=>'Title',
		'left_content'=>'Content',
		'left_btn_url'=>'',
		'left_btn_txt'=>'Button',
		'right_title'=>'Title',
		'right_content'=>'Content',
		'right_btn_url'=>'',
		'right_btn_txt'=>'Button'
	), $atts);
	
	$returnHTML = '<section class="">
    <div class="row no-margin">
        <div class="col-lg-6 col-md-6 col-sm-12 no-padding-revaturepro">
            <div class="rev-online-ins">
                <div class="row margin-top-100">
                    <div class="col-lg-12 col-md-12 col-sm-12 margin-bottom-25 text-left">
                        <h4 class="">'.$a['left_title'].'</h4>
                        <p class="">
							'.$a['left_content'].'
						</p>
                        <span class="white-blank-btn"><a href="'.$a['left_btn_url'].'">'.$a['left_btn_txt'].'<i class="fa fa-chevron-circle-right"></i></a></span>
                    </div>
               
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 no-padding-revaturepro">
            <div class="rev-online-call">
               <div class="row margin-top-100">
                  <div class="col-lg-12 col-md-12 col-sm-12 margin-bottom-25 text-left">
                <h4 class="">'.$a['right_title'].'</h4>
                <p class="">
					'.$a['right_content'].'
				</p>
                 <span class="white-blank-btn"><a href="'.$a['right_btn_url'].'">'.$a['right_btn_txt'].'<i class="fa fa-chevron-circle-right"></i></a></span>
                    </div>
               </div>
            </div>
        </div>
    </div>
</section>';
 
 return $returnHTML;
}
add_shortcode('online_bottom_two_column', 'online_bottom_two_column_func');

function contact_header_func($atts, $content=null){
	$a=shortcode_atts(array(
		'title'=>'Title',
	), $atts);
	
	$returnHTML = '<div class="contactus-hero">
        <div class="row no-margin contact-hero-content">
            <div class="col-lg-12 col-md-12 col-sm-12 margin-top-50">
                <h2 class="margin-bottom-15">'.$a['title'].'</h2>
                <p class="">
					'.$content.'
				</p>
            </div>
        </div>
    </div>';
 
 return $returnHTML;
}

add_shortcode('contact_header', 'contact_header_func');
function request_landing_container_func( $atts, $content=null){		
	return '<section class="request-articals" id="benefits">		
      <div class="container">		
         <div class="row no-margin">		
		'.do_shortcode($content).'		
		 <div class="clear"></div>		
         </div>		
     </div>		
	 			<iframe id="confirmFrame" name="confirmFrame" style="display:none;">		
			</iframe>		
</section>';		
}		
add_shortcode('request_landing_container', 'request_landing_container_func');		

function contact_container_func( $atts, $content=null){

	return '<section class="contactus-form-bg padding-top-100">
    <div class="container">
        <div class="row">
		'.do_shortcode($content).'
		</div>
	</div>
	</section>';
}

add_shortcode('contact_container', 'contact_container_func');

function contact_marketo_form_func($atts, $content=null){
		$a=shortcode_atts(array(
		'title'=>'',
	), $atts);
	return'            <div class="col-lg-8 padding-LR-50" id="contactFormContainer">
                <div class="">
                    <h4 id="contactFormTitle">'.$a['title'].'</h4>
                </div>
                <div class="row form-label-txt">
					'.$content.'
				</div>
				</div>';
}
add_shortcode('contact_marketo_form', 'contact_marketo_form_func');

function contact_form_func($atts, $content=null){
	return '		<div class="col-lg-8 padding-LR-50 margin-bottom-50" style="display:none;" id="confirm">
			<h4>
				Thank you for your interest in Revature. We will contact you shortly regarding your inquiry.
			</h4>
		</div>
            <div class="col-lg-8 padding-LR-50" id="contactFormContainer">
                <div class="">
                    <h4 id="contactFormTitle">Contact Information</h4>
                </div>
                <div class="row form-label-txt">
                    <form id="contactForm" method="post" target="confirmFrame" action="https://app.revature.com/contactus">

                        <div class="col-lg-12 form-group">
                            <label class="control-label" for="Name">Name*</label>
                            <input class="shortfield-home form-control" type="text" name="Name" id="Name" maxlength="50" required/>
							<span id="nameHelp" class="help-block" style="display:none;">Please enter first and last name.</span>
                        </div>
                        <div class="col-lg-6 form-group">
                           <label class="control-label" for="Email">Email*</label>
                           <input class="shortfield-home form-control"  type="email" name="Email" id="Email" maxlength="50" required/>
						   <span id="emailHelp" class="help-block" style="display:none;">Please enter a valid email address.</span>
                        </div>
                        <div class="col-lg-6 form-group">
                           <label class="control-label" for="Phone">Phone*</label>
                           <input class="shortfield-home form-control" pattern="(.*\d.*){10,10}" type="tel" name="Phone" id="Phone" required/>
						   <span id="phoneHelp" class="help-block" style="display:none;">Please enter a contact phone number.</span>
                        </div>
                         <div class="col-lg-12 form-group">
                            <label class="control-label" for="University">University/Company Name</label>
                            <input class="shortfield-home form-control" type="text" name="University" id="University" maxlength="100"/>
                        </div>
                        <div class="col-lg-12 form-group">
                            <label class="control-label" for="Inquiry">Inquiry Type</label>
                            <select class="shortfield-home form-control" id="Inquiry" name="SendKey">
                                <option value="General">General</option>
                                <option value="Academic Partners">Academic Partners</option>
                                <option value="RevaturePro Bootcamp">RevaturePro Bootcamp</option>
								<option value="RevaturePro Online">RevaturePro Online</option>
								<option value="Client">Client Partners</option>
                            </select>
                        </div>
                          <div class="col-lg-12 form-group">
                            <label class="control-label" for="Message">Message</label>
                            <textarea name="Message" class="shortfield-home form-control" rows="10" id="Message"></textarea>
                        </div>
                        <div class="col-lg-12 form-group">
                            <p class="text-left "><span class="">*</span>Required</p>
                            <div class="desktop-right mob-center">
							<span class="white-submit-btn" id="contactSubmit"><input type="submit" value="SUBMIT"/><i class="fa fa-angle-right"></i></span>
                            </div>
                        </div>
												<div class="col-lg-12 col-xs-12 text-center">
							<span class="help-block"><small>Revature is committed to safeguarding your privacy. We will never sell or share your personal information. Our complete Privacy Policy is available <a href="/privacy-policy">here</a></small></span>
						</div>
                    </form>
                </div>
            </div>
						<iframe id="confirmFrame" name="confirmFrame" style="display:none;">
			</iframe>';
}
add_shortcode('contact_form', 'contact_form_func');


function contact_info_func($atts, $content=null){
	
	$returnHTML = '<div class="col-lg-4 mob-margin-50">
                 <div class="">
                     <h4 class="">Contact Us</h4>
                     <div class="contactus-email">
                         <p class="contact-info-main">General Email: <a class="contact-info-sub" href="mailto:info@revature.com" target="_top">info@revature.com</a></p>
                         <p class="contact-info-main">Academic Partners:<a class="contact-info-sub" href="mailto:universities@revature.com" target="_top">universities@revature.com</a></p>
                         <p class="contact-info-main">Corporate Partners:<a class="contact-info-sub" href="mailto:employers@revature.com" target="_top">employers@revature.com</a></p>
                         <p class="contact-info-main">Existing Users:<a class="contact-info-sub" href="mailto:support@revature.com" target="_top">support@revature.com</a></p>
                     </div>
                        <div class="clear"></div>
                     <div class="">
                                               <ul class="faq">
        <li class="contact-q"><img src="../wp-content/themes/revature/imgs/faq-down-arrow.svg"> Corporate Headquarters</li>
        <li class="contact-a"><p>11730 Plaza America Drive<br/>
                         2nd Floor<br/>
                         Reston, VA 20190</p>
					   <p><strong class="">P</strong> <a href="tel:703 570 8181">703 570 8181</a></p>
                       <p><strong class="">F</strong> <a href="tel:703 995 4500">703 995 4500</a></p>
					   <p><strong class=""></strong> <a href="mailto:info@revature.com">info@revature.com</a></p>
         </li>
        
                <li class="contact-q"><img src="../wp-content/themes/revature/imgs/faq-down-arrow.svg">Chennai - India</li>
         <li class="contact-a"><p>434/203 TTK Road, Alwarpet<br/>
                         Chennai 600018<br/>
                         </p>
                       <p><strong class="">P</strong> <a href="tel:+91 44 4201 6145">+91 44 4201 6145</a></p>
                       <p><strong class=""></strong> <a href="mailto:info@revature.com">info@revature.com</a></p>
         </li>
      </ul>
                     </div>
                     
                 </div>
            </div>';
	return $returnHTML;
}
add_shortcode('contact_info', 'contact_info_func');

function recruitment_old_header_func($atts, $content=null){
	$a=shortcode_atts(array(
	'corner_title'=>'Title',
	'corner_txt'=>'Text',
	'subheading'=>'Text',
	'logo_url'=>'',
	'school_img_url'=>'',
	'btn_txt_1'=>'Button',
	'btn_url_1'=>''
	), $atts);
	$returnHTML = '<div class="recurt-online-hero">
        <div class="row no-margin contact-hero-content">
            <div class="">
                <div class="recut-top-add">
                    <span class="top-icon-holder">
                        <img src="../wp-content/themes/revature/imgs/recurt-top-icon.png" />
                    </span>
                    <p class="top-recurt-cont padding-top-15">'.$a['corner_title'].'</p>
                    <h3 class="">'.$a['corner_txt'].'</h3>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 margin-top-25 mob-bottom-50">
                <h1 class="margin-bottom-15">'.$content.'</h1>
             </div>
            <div class="clear"></div>
            <div class="container margin-bottom-50">
                <div class="margin-top-50">
                    <img class="padding-LR-20 academic-logo" src="'.wp_get_attachment_url($a['logo_url']).'" />
                    <img class="padding-LR-20 academic-logo davidson" src="'.wp_get_attachment_url($a['school_img_url']).'" />
                </div>
                  <div class="margin-top-25">
				  <p class="text-center recruit-p">'.$a['subheading'].'</p>
                   <a class="white-read-btn margin-top-25" href="'.$a['btn_url_1'].'">'.$a['btn_txt_1'].'<i class="fa fa-angle-right"></i></a>
                </div>
               </div>
        </div>
 </div>';
 return $returnHTML;
}
add_shortcode('recruitment_old_header', 'recruitment_old_header_func');

function recruitment_old_white_section_func($atts, $content=null){
	$a=shortcode_atts(array(
	'title'=>'Title'
	), $atts);
	$returnHTML = '    <section class="recurt-online-today">
      <div class="mob-container-unset margin-top-50">
         <div class="row no-margin">
               <div class="col-lg-12 col-md-12 col-sm-12 no-margin no-padding">
                <h3 class="margin-bottom-15">'.$a['title'].'</h3>
                <p class="margin-bottom-15 acd-part-today-cont">'.$content.'</p>
                               
               </div>
         </div>
     </div>
</section>';
 return $returnHTML;
}
add_shortcode('recruitment_old_white_section', 'recruitment_old_white_section_func');

function recruitment_header_func($atts, $content=null){
	$a=shortcode_atts(array(
	'corner_title'=>'Title',
	'corner_txt'=>'Text',
	'subheading'=>'Text',
	'start_dt'=>'',
	'apply_btn_txt'=>'Button',
	'logo_url'=>'',
	'school_img_url'=>''
	), $atts);
	$returnHTML = '<div class="academic-landing-hero">
        <div class="row no-margin contact-hero-content">
		<div class="corner-ribbon">
			<p class="text-right"><span class="corner-header">'.$a['corner_title'].'</span><br/>'.$a['corner_txt'].'</p>
		</div>
            <div class="col-xs-12 col-sm-11 col-sm-offset-1 margin-top-50">
                <h1 class="margin-bottom-15 text-left text-gray">'.$content.'</h1>
             </div>
			 <div class="col-xs-12 col-sm-7 col-sm-offset-1 margin-top-50">
				<p class="text-left text-gray">'.$a['subheading'].'</p>
			 </div>
			 <div class="col-sm-4 hidden-xs margin-top-50">
				<img class="academic-logo-umuc" src="'.wp_get_attachment_url($a['logo_url']).'" />
			 </div>
			 <div class="hidden-xs col-sm-6 col-sm-offset-1 margin-bottom-35 text-left">
			 <p>'.$a['start_dt'].'</p>
				<span class="Orange-read-btn margin-top-25" href="#apply" id="applyBtn">'.$a['apply_btn_txt'].'<i class="fa fa-angle-right"></i></span>
			 </div>
				 <div class="col-xs-12 visible-xs-block margin-bottom-35 text-center">
				<span class="Orange-read-btn margin-top-25" href="#apply" id="applyBtnXs">'.$a['apply_btn_txt'].'<i class="fa fa-angle-right"></i></span>
			 </div>
			 <div class="hidden-xs col-sm-4 col-sm-offset-1 margin-top-50 margin-bottom-35">
				<img class="academic-logo-umuc" src="'.wp_get_attachment_url($a['school_img_url']).'" />
			 </div>
			 <div class="col-xs-12 visible-xs-block text-center">
			 	<img class="academic-logo-umuc margin-right-15" src="'.wp_get_attachment_url($a['logo_url']).'" />
				<img class="academic-logo-umuc" src="'.wp_get_attachment_url($a['school_img_url']).'" />
			 </div>
        </div>
 </div>';
 return $returnHTML;
}
add_shortcode('recruitment_header', 'recruitment_header_func');

function recruitment_header_two_school_logos_func($atts, $content=null){
	$a=shortcode_atts(array(
	'corner_title'=>'Title',
	'corner_txt'=>'Text',
	'subheading'=>'Text',
	'start_dt'=>'',
	'apply_btn_txt'=>'Button',
	'logo_url'=>'',
	'school_img_url'=>'',
	'school_img_url_1'=>''
	), $atts);
	$returnHTML = '<div class="academic-landing-hero">
        <div class="row no-margin contact-hero-content">
		<div class="corner-ribbon">
			<p class="text-right"><span class="corner-header">'.$a['corner_title'].'</span><br/>'.$a['corner_txt'].'</p>
		</div>
            <div class="col-xs-12 col-sm-11 col-sm-offset-1 margin-top-50">
                <h1 class="margin-bottom-15 text-left text-gray">'.$content.'</h1>
             </div>
			 <div class="col-xs-12 col-sm-7 col-sm-offset-1 margin-top-50">
				<p class="text-left text-gray">'.$a['subheading'].'</p>
			 </div>
			 <div class="col-sm-4 hidden-xs margin-top-50">
				<img class="academic-logo-umuc" src="'.wp_get_attachment_url($a['logo_url']).'" />
			 </div>
			 <div class="hidden-xs col-sm-6 col-sm-offset-1 margin-bottom-35 text-left">
			 <p>'.$a['start_dt'].'</p>
				<span class="Orange-read-btn margin-top-25" href="#apply" id="applyBtn">'.$a['apply_btn_txt'].'<i class="fa fa-angle-right"></i></span>
			 </div>
			 <div class="col-xs-12 visible-xs-block margin-bottom-35 text-center">
				<span class="Orange-read-btn margin-top-25" href="#apply" id="applyBtnXs">'.$a['apply_btn_txt'].'<i class="fa fa-angle-right"></i></span>
			 </div>
			 <div class="hidden-xs col-sm-4 col-sm-offset-1 margin-top-50 margin-bottom-35">
				<img class="academic-logo-cuny margin-right-15" src="'.wp_get_attachment_url($a['school_img_url']).'" />
				<img class="academic-logo-cuny" src="'.wp_get_attachment_url($a['school_img_url_1']).'" />
			 </div>
			 <div class="col-xs-12 visible-xs-block text-center">
			 	<img class="academic-logo-umuc" src="'.wp_get_attachment_url($a['logo_url']).'" />
			 </div>
			 <div class="col-xs-12 visible-xs-block text-center">
				<img class="academic-logo-cuny" src="'.wp_get_attachment_url($a['school_img_url']).'" />
				<img class="academic-logo-cuny" src="'.wp_get_attachment_url($a['school_img_url_1']).'" />
			 </div>
        </div>
 </div>';
 return $returnHTML;
}
add_shortcode('recruitment_header_two_school_logos', 'recruitment_header_two_school_logos_func');

function recruitment_header_two_side_logos_func($atts, $content=null){
	$a=shortcode_atts(array(
	'corner_title'=>'Title',
	'corner_txt'=>'Text',
	'subheading'=>'Text',
	'start_dt'=>'',
	'apply_btn_txt'=>'Button',
	'logo_url'=>'',
	'school_img_url'=>''
	), $atts);
	$returnHTML = '<div class="academic-landing-hero">
        <div class="row no-margin contact-hero-content">
		<div class="corner-ribbon">
			<p class="text-right"><span class="corner-header">'.$a['corner_title'].'</span><br/>'.$a['corner_txt'].'</p>
		</div>
            <div class="col-xs-12 col-sm-11 col-sm-offset-1 margin-top-50">
                <h1 class="margin-bottom-15 text-left text-gray">'.$content.'</h1>
             </div>
			 <div class="col-xs-12 col-sm-7 col-sm-offset-1 margin-top-50">
				<p class="text-left text-gray">'.$a['subheading'].'</p>
			 </div>
			 <div class="hidden-xs col-sm-4 col-sm-offset-1 col-lg-4 margin-bottom-35 text-left">
			 <p>'.$a['start_dt'].'</p>
				<span class="Orange-read-btn margin-top-25" href="#apply" id="applyBtn">'.$a['apply_btn_txt'].'<i class="fa fa-angle-right"></i></span>
			 </div>
				<div class="col-xs-12 visible-xs-block margin-bottom-35 text-center">
				<span class="Orange-read-btn margin-top-25" href="#apply" id="applyBtnXs">'.$a['apply_btn_txt'].'<i class="fa fa-angle-right"></i></span>
			 </div>
			 <div class="hidden-xs col-sm-7 col-lg-7 margin-top-50 margin-bottom-35">
			 <img class="academic-logo-umuc margin-right-50" src="'.wp_get_attachment_url($a['logo_url']).'" />
				<img class="academic-logo-umuc" src="'.wp_get_attachment_url($a['school_img_url']).'" />
			 </div>
			 <div class="col-xs-12 visible-xs-block text-center">
			 	<img class="academic-logo-umuc" src="'.wp_get_attachment_url($a['logo_url']).'" />
				<img class="academic-logo-umuc" src="'.wp_get_attachment_url($a['school_img_url']).'" />
			 </div>
        </div>
 </div>';
 return $returnHTML;
}
add_shortcode('recruitment_header_two_side_logos', 'recruitment_header_two_side_logos_func');

function recruitment_header_two_buttons_func($atts, $content=null){
	$a=shortcode_atts(array(
	'corner_title'=>'Title',
	'corner_txt'=>'Text',
	'subheading'=>'Text',
	'start_dt'=>'',
	'btn_txt_1'=>'Button',
	'btn_url_1'=>'',
	'apply_btn_txt'=>'Button',
	'logo_url'=>'',
	'school_img_url'=>''
	), $atts);
	$returnHTML = '<div class="academic-landing-hero">
        <div class="row no-margin contact-hero-content">
		<div class="corner-ribbon">
			<p class="text-right"><span class="corner-header">'.$a['corner_title'].'</span><br/>'.$a['corner_txt'].'</p>
		</div>
            <div class="col-xs-12 col-sm-11 col-sm-offset-1 margin-top-50">
                <h1 class="margin-bottom-15 text-left text-gray">'.$content.'</h1>
             </div>
			 <div class="col-xs-12 col-sm-7 col-sm-offset-1 margin-top-50">
				<p class="text-left text-gray">'.$a['subheading'].'</p>
			 </div>
			 <div class="col-sm-4 hidden-xs margin-top-50">
				<img class="academic-logo-usf" src="'.wp_get_attachment_url($a['logo_url']).'" />
			 </div>
			 <div class="hidden-xs col-sm-7 col-sm-offset-1 margin-bottom-35 text-left">
			 <p>'.$a['start_dt'].'</p>
				<a class="Orange-read-btn margin-top-25 margin-right-15" href="'.$a['btn_url_1'].'">'.$a['btn_txt_1'].'<i class="fa fa-angle-right"></i></a>
				<span class="Orange-read-btn margin-top-25" href="#apply" id="applyBtn">'.$a['apply_btn_txt'].'<i class="fa fa-angle-right"></i></span>
			 </div>
				 <div class="col-xs-12 visible-xs-block margin-bottom-35 text-center">
				<a class="Orange-read-btn margin-top-25" href="'.$a['btn_url_1'].'">'.$a['btn_txt_1'].'<i class="fa fa-angle-right"></i></a>
				<span class="Orange-read-btn margin-top-25" href="#apply" id="applyBtnXs">'.$a['apply_btn_txt'].'<i class="fa fa-angle-right"></i></span>
			 </div>
			 <div class="hidden-xs col-sm-4 margin-top-50 margin-bottom-35">
				<img class="academic-logo-usf" src="'.wp_get_attachment_url($a['school_img_url']).'" />
			 </div>
			 <div class="col-xs-12 visible-xs-block text-center">
			 	<img class="academic-logo-usf margin-right-15" src="'.wp_get_attachment_url($a['logo_url']).'" />
				<img class="academic-logo-usf" src="'.wp_get_attachment_url($a['school_img_url']).'" />
			 </div>
        </div>
 </div>';
 return $returnHTML;
}
add_shortcode('recruitment_header_two_buttons', 'recruitment_header_two_buttons_func');

function recruitment_two_column_func($atts, $content=null){
	$a=shortcode_atts(array(
		'img_1'=>'',
		'header_1'=>'Header Text',
		'sub_head_1'=>'Header Text',
		'content_1'=>'Text',
		'img_2'=>'',
		'sub_head_2'=>'Header Text',
		'content_2'=>'Text',
		'img_3'=>'',
		'header_3'=>'Header Text',
		'sub_head_3'=>'Header Text',
		'content_3'=>'Text',
		'img_4'=>'',
		'sub_head_4'=>'Header Text',
		'content_4'=>'Text',
	), $atts);
	$returnHTML = ' <section class="Recurit-online-bgcolor  hidden-xs">
     <div class="">
         <div class="row no-margin">
            
              <div class="col-lg-6 col-md-12 col-sm-12 overflow-hidden padding-0 mob-right height-430">
                  <div class="">
                      <img class="business-img" src="'.wp_get_attachment_url($a['img_1']).'" />
                  </div>
              </div>

                <div class="col-lg-6 col-md-12 col-sm-12 text-left tab-padding-15 padding-88 height-430">
                 <div class="">
                     <h4 class="recurit-bus-head">'.$a['header_1'].'</h4>
                     <h2 class="recurit-bus-head">'.$a['sub_head_1'].'</h2>
                      <p class="recurit-bus-cont">
                      '.$a['content_1'].'
                  </p>
                 
                 </div>
              </div>
              

             <div class="col-lg-6 col-md-12 col-sm-12 padding-0 overflow-hidden height-430">
                  <div class="">
                      <img class="business-img" src="'.wp_get_attachment_url($a['img_2']).'" />
                  </div>
              </div>
                <div class="col-lg-6 col-md-12 col-sm-12 tab-padding-15 text-left padding-88 height-430 ">
                 <div class="">
                     <h4 class="recurit-bus-head">'.$a['sub_head_2'].'</h4>
                      <div class="rev-online-p">
                    <ul class="padding-left-20">
                      '.$a['content_2'].'
                      </ul>
                      </div>
                  </div>
              </div>
         <div class="col-lg-6 col-md-12 col-sm-12 overflow-hidden padding-0 mob-right height-430">
                  <div class="">
                      <img class="business-img" src="'.wp_get_attachment_url($a['img_3']).'" />
                  </div>
              </div>

                <div class="col-lg-6 col-md-12 col-sm-12 text-left tab-padding-15 padding-88 height-430">
                 <div class="">
                     <h4 class="recurit-bus-head">'.$a['header_3'].'</h4>
                     <h2 class="recurit-bus-head">'.$a['sub_head_3'].'</h2>
                      <p class="recurit-bus-cont">
						'.$a['content_3'].'
					  </p>
                 
                 </div>
              </div>

             <div class="col-lg-6 col-md-12 col-sm-12 padding-0 overflow-hidden height-430">
                  <div class="">
                      <img class="business-img" src="'.wp_get_attachment_url($a['img_4']).'" />
                  </div>
              </div>
                <div class="col-lg-6 col-md-12 col-sm-12 text-left tab-padding-15 padding-88 height-430 ">
                 <div class="">
                     <h4 class="recurit-bus-head">'.$a['sub_head_4'].'</h4>
                      <div class="rev-online-p">
					<ul class="padding-left-20">
                      '.$a['content_4'].'
                      </ul>
                      </div>      
                  </div>
              </div>

         </div>

      </div>
 </section>
<!----------------------------- Mobile View of Recuritment business callout----------->
<section class="container hidden-lg hidden-sm hidden-md">
     
      <div class="">
	   <ul class="faq">
        <li class="q showList"><img src="../wp-content/themes/revature/imgs/faq-actdown-arrow.svg"> <h4 class="cod-active">'.$a['header_1'].'</h4></li>
        <li class="a faq-content mob-padding-5">
            <div class="row no-margin">
                <div class="col-lg-6 col-md-6 col-sm-12 overflow-hidden padding-0 mob-right height-430">
                  <div class="">
                      <img class="business-img" src="'.wp_get_attachment_url($a['img_1']).'" />
                  </div>
              </div>

                <div class="col-lg-6 col-md-6 col-sm-12 text-left padding-88 height-430 recruitment-container">
                 <div class="">
                     <h2 class="mob-bootcamp-head">'.$a['sub_head_1'].'</h2>
                      <p class="li-font-18">
'.$a['content_1'].'
                  </p>
                     <h3 class="recurit-bus-head ">'.$a['sub_head_2'].'</h3>
                      <p class="recurit-bus-cont">
                    <ul class="padding-left-20 mob-padding-5 mobile-recruit">
					'.$a['content_2'].'
                      </ul>
                  </p>
                 </div>
              </div>
            </div>
            
                        
         </li>
        
        <li class="q"><img src="../wp-content/themes/revature/imgs/faq-actdown-arrow.svg"> <h4 class="cod-active">'.$a['header_3'].'</h4></li>
        <li class="a faq-content mob-padding-5">
            
             <div class="row no-margin">
                <div class="col-lg-6 col-md-6 col-sm-12 overflow-hidden padding-0 mob-right height-430">
                  <div class="">
                      <img class="business-img" src="'.wp_get_attachment_url($a['img_3']).'" />
                  </div>
              </div>

                <div class="col-lg-6 col-md-6 col-sm-12 text-left padding-88 height-430 recruitment-container">
                 <div class="">
                     <h2 class="mob-bootcamp-head">'.$a['sub_head_3'].'</h2>
                      <p class="recurit-bus-cont">
				'.$a['content_3'].'
					  </p>
                          <h3 class="recurit-bus-head">'.$a['sub_head_4'].'</h3>
                      <p class="recurit-bus-cont">
                    <ul class="padding-left-20 mob-padding-5 mobile-recruit">
					'.$a['content_4'].'
                      </ul>
                  </p>
                 </div>
              </div>
            </div>
                        
         </li>
      </ul>
   </div>
 </section>';
 return $returnHTML;
}
add_shortcode('recruitment_two_column', 'recruitment_two_column_func');

function recruitment_form_yellow_func($atts, $content=null){
	$a=shortcode_atts(array(
		'confirm_msg_header'=>'Header',
		'form_header'=>'Header',
		'form_txt'=>'Text',
		'key'=>'',
	), $atts);
	$returnHTML = '<section class="recruit-bg-yellow" id="apply">
				<div id="confirm" style="display:none;" class="mob-container-unset tab-container">
							<h3>'.$a['confirm_msg_header'].'</h4>
			<p>'.$content.'</p>
				</div>
      <div class="mob-container-unset tab-container" id="formContainer">
         <div class="row no-margin">
               <div class="col-lg-12 col-md-12 col-sm-12 no-margin no-padding">
					<h3 class="margin-bottom-15">'.$a['form_header'].'</h3>
					<p class="margin-bottom-15 recurt-form-bg-cont">
						'.$a['form_txt'].'
					</p>
               </div>
         </div>
       <div class="container">
        <div class="row no-margin">
            <div class="col-lg-12 col-md-12 col-xs-12 padding-lr-150 mob-padding-5">

                <div class="row form-label-txts text-left">
                    <form id="schoolForm" method="post" target="iframe" action="https://app.revature.com/contactus">
					<input type="hidden" value="'.$a['key'].'" name="SendKey"/>
					<input type="hidden" name="Phone" id="Phone"/>
					<input type="hidden" name="GraduationDate" id="GraduationDate"/>
					<input type="hidden" name="Reference" id="Reference"/>
                        <div class="col-lg-6 form-group">
                            <label class="control-label" for="FirstName">First Name*</label>
                            <input class="shortfield-home form-control" type="text" name="FirstName" id="FirstName" required/>
							<span class="help-block" style="display:none;">Please enter first name.</span>
                        </div>
						<div class="col-lg-6 form-group">
                            <label class="control-label" for="LastName">Last Name*</label>
                            <input class="shortfield-home form-control" type="text" name="LastName" id="LastName" required/>
							<span class="help-block" style="display:none;">Please enter last name.</span>
                        </div>
                        <div class="col-lg-6 form-group">
                           <label class="control-label" for="Email">Email*</label>
                           <input class="shortfield-home form-control"  type="email" name="Email" id="Email" required/>
						   <span id="emailHelp" class="help-block" style="display:none;">Please enter a valid email address.</span>
                        </div>
                        <div class="col-lg-6 col-xs-12 form-group inline-no-padding">
							<label class="control-label col-xs-12" for="GraduationMonth">Graduation Date*</label>
							<div class="col-xs-6">
												<select class="shortfield-home form-control col-xs-6" id="GraduationMonth" name="GraduationMonth" required>
												<option value=""></option>
												<option value="December">Fall</option>
												<option value="May">Spring</option>
												<option value="July">Summer</option>
												</select>
												<span class="help-block" id="GraduationSemesterHelp" style="display:none;">Please select the Semester of your Graduation</span>
							</div>
							<div class="col-xs-6">
												<span class="input-group-btn" style="width:0px;"></span>
												<select class="shortfield-home form-control col-xs-6" id="GraduationYear" name="GraduationYear" required>
												<option value=""></option>
												<option value="2004">Prior to 2005</option>
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
												</select>
												<span class="help-block" id="GraduationYearHelp" style="display:none;">Please select the Year of your Graduation</span>
							</div>
                        </div>
						<div class="col-lg-12 col-xs-12">
						</div>
						<div class="col-lg-4 col-xs-12 form-group">
							<label class="control-label" for="Major">Major*</label>
							<select class="shortfield-home form-control" id="Major" name="Major" required>
								<option value=""></option>
								<option value="Accounting">Accounting</option>
								<option value="Biology">Biology</option>
								<option value="Business">Business</option>
								<option value="Chemistry">Chemistry</option>
								<option value="Communications">Communications</option>
								<option value="Computer Science">Computer Science</option>
								<option value="Economics">Economics</option>
								<option value="Engineering">Engineering</option>
								<option value="English/Literature">English/Literature</option>
								<option value="Finance">Finance</option>
								<option value="History">History</option>
								<option value="Information Technology">Information Technology</option>
								<option value="Math">Math</option>
								<option value="Physics">Physics</option>
								<option value="Political Science">Political Science</option>
								<option value="Psychology">Psychology</option>
								<option value="Sociology">Sociology</option>
								<option value="Other">Other</option>
							</select>
							<span class="help-block" style="display:none;">Please select a Major.</span>
						</div>
						<div class="col-lg-4 col-xs-12 form-group">
							<label class="control-label" for="Minor">Minor</label>
							<select class="shortfield-home form-control" id="Minor" name="Minor">
								<option value=""></option>
								<option value="Accounting">Accounting</option>
								<option value="Biology">Biology</option>
								<option value="Business">Business</option>
								<option value="Chemistry">Chemistry</option>
								<option value="Communications">Communications</option>
								<option value="Computer Science">Computer Science</option>
								<option value="Economics">Economics</option>
								<option value="Engineering">Engineering</option>
								<option value="English/Literature">English/Literature</option>
								<option value="Finance">Finance</option>
								<option value="History">History</option>
								<option value="Information Technology">Information Technology</option>
								<option value="Math">Math</option>
								<option value="Physics">Physics</option>
								<option value="Political Science">Political Science</option>
								<option value="Psychology">Psychology</option>
								<option value="Sociology">Sociology</option>
								<option value="Other">Other</option>
							</select>
						</div>
						<div class="col-lg-12 col-xs-12">
						</div>
						<div class="col-lg-8 col-xs-12 form-group inline-no-padding" id="PhoneGroup">
							<label class="control-label col-xs-12" for="AreaCode">Phone*</label>
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
						<div class="col-lg-12 col-xs-12 form-group inline-no-padding">
							<label class="control-label col-xs-12" for="ReferenceSelect">How did you hear about our program?*</label>
							<div class="col-xs-6">
							<select class="shortfield-home form-control" id="ReferenceSelect" name="ReferenceSelect" required>
								<option value=""></option>
								<option value="Social Media">Social Media</option>
								<option value="Professor">Professor</option>
								<option value="Career Services">Career Services</option>
								<option value="Online">Online</option>
								<option value="Email">Email</option>
								<option value="Other">Other</option>
							</select>
							<span class="help-block" style="display:none;">Please select how you heard about our program.</span>
							</div>
							<div class="col-xs-6" id="OtherSection">
							</div>
							
						</div>
                        <div class="col-xs-12">
							<p class="rec-req">*Required</p>
						</div>
						<div class="col-xs-12 text-center">
							<span class="white-submit-btn" id="submitBtn">
                             <input type="submit" value="SUBMIT"/><i class="fa fa-angle-right"></i>
                         </span>
						</div>
												<div class="col-lg-12 col-xs-12 text-center">
							<span class="help-block white-link"><small>Revature is committed to safeguarding your privacy. We will never sell or share your personal information. Our complete Privacy Policy is available <a href="/privacy-policy">here</a></small></span>
						</div>
                    </form>
                </div>
            </div>
             
        </div>
</div>
     </div>

</section>
<iframe id="iframe" name="iframe" style="display:none;">
			</iframe>';
 return $returnHTML;
}
add_shortcode('recruitment_form_yellow', 'recruitment_form_yellow_func');

function recruitment_form_func($atts, $content=null){
	$a=shortcode_atts(array(
		'confirm_msg_header'=>'Header',
		'form_header'=>'Header',
		'form_txt'=>'Text',
		'key'=>'',
	), $atts);
	$returnHTML = '<section class="recurt-form-bg" id="apply">
				<div id="confirm" style="display:none;" class="mob-container-unset tab-container">
							<h3>'.$a['confirm_msg_header'].'</h4>
			<p>'.$content.'</p>
				</div>
      <div class="mob-container-unset tab-container" id="formContainer">
         <div class="row no-margin">
               <div class="col-lg-12 col-md-12 col-sm-12 no-margin no-padding">
					<h3 class="margin-bottom-15">'.$a['form_header'].'</h3>
					<p class="margin-bottom-15 recurt-form-bg-cont">
						'.$a['form_txt'].'
					</p>
               </div>
         </div>
       <div class="container">
        <div class="row no-margin">
            <div class="col-lg-12 col-md-12 col-xs-12 padding-lr-150 mob-padding-5">

                <div class="row form-label-txts text-left">
                    <form id="schoolForm" method="post" target="iframe" action="https://app.revature.com/contactus">
					<input type="hidden" value="'.$a['key'].'" name="SendKey"/>
					<input type="hidden" name="Phone" id="Phone"/>
					<input type="hidden" name="GraduationDate" id="GraduationDate"/>
					<input type="hidden" name="Reference" id="Reference"/>
                        <div class="col-lg-6 form-group">
                            <label class="control-label" for="FirstName">First Name*</label>
                            <input class="shortfield-home form-control" type="text" name="FirstName" id="FirstName" required/>
							<span class="help-block" style="display:none;">Please enter first name.</span>
                        </div>
						<div class="col-lg-6 form-group">
                            <label class="control-label" for="LastName">Last Name*</label>
                            <input class="shortfield-home form-control" type="text" name="LastName" id="LastName" required/>
							<span class="help-block" style="display:none;">Please enter last name.</span>
                        </div>
                        <div class="col-lg-6 form-group">
                           <label class="control-label" for="Email">Email*</label>
                           <input class="shortfield-home form-control"  type="email" name="Email" id="Email" required/>
						   <span id="emailHelp" class="help-block" style="display:none;">Please enter a valid email address.</span>
                        </div>
                        <div class="col-lg-6 col-xs-12 form-group inline-no-padding">
							<label class="control-label col-xs-12" for="GraduationMonth">Graduation Date*</label>
							<div class="col-xs-6">
												<select class="shortfield-home form-control col-xs-6" id="GraduationMonth" name="GraduationMonth" required>
												<option value=""></option>
												<option value="December">Fall</option>
												<option value="May">Spring</option>
												<option value="July">Summer</option>
												</select>
												<span class="help-block" id="GraduationSemesterHelp" style="display:none;">Please select the Semester of your Graduation</span>
							</div>
							<div class="col-xs-6">
												<span class="input-group-btn" style="width:0px;"></span>
												<select class="shortfield-home form-control col-xs-6" id="GraduationYear" name="GraduationYear" required>
												<option value=""></option>
												<option value="2004">Prior to 2005</option>
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
												</select>
												<span class="help-block" id="GraduationYearHelp" style="display:none;">Please select the Year of your Graduation</span>
							</div>
                        </div>
						<div class="col-lg-12 col-xs-12">
						</div>
						<div class="col-lg-4 col-xs-12 form-group">
							<label class="control-label" for="Major">Major*</label>
							<select class="shortfield-home form-control" id="Major" name="Major" required>
								<option value=""></option>
								<option value="Accounting">Accounting</option>
								<option value="Biology">Biology</option>
								<option value="Business">Business</option>
								<option value="Chemistry">Chemistry</option>
								<option value="Communications">Communications</option>
								<option value="Computer Science">Computer Science</option>
								<option value="Economics">Economics</option>
								<option value="Engineering">Engineering</option>
								<option value="English/Literature">English/Literature</option>
								<option value="Finance">Finance</option>
								<option value="History">History</option>
								<option value="Information Technology">Information Technology</option>
								<option value="Math">Math</option>
								<option value="Physics">Physics</option>
								<option value="Political Science">Political Science</option>
								<option value="Psychology">Psychology</option>
								<option value="Sociology">Sociology</option>
								<option value="Other">Other</option>
							</select>
							<span class="help-block" style="display:none;">Please select a Major.</span>
						</div>
						<div class="col-lg-4 col-xs-12 form-group">
							<label class="control-label" for="Minor">Minor</label>
							<select class="shortfield-home form-control" id="Minor" name="Minor">
								<option value=""></option>
								<option value="Accounting">Accounting</option>
								<option value="Biology">Biology</option>
								<option value="Business">Business</option>
								<option value="Chemistry">Chemistry</option>
								<option value="Communications">Communications</option>
								<option value="Computer Science">Computer Science</option>
								<option value="Economics">Economics</option>
								<option value="Engineering">Engineering</option>
								<option value="English/Literature">English/Literature</option>
								<option value="Finance">Finance</option>
								<option value="History">History</option>
								<option value="Information Technology">Information Technology</option>
								<option value="Math">Math</option>
								<option value="Physics">Physics</option>
								<option value="Political Science">Political Science</option>
								<option value="Psychology">Psychology</option>
								<option value="Sociology">Sociology</option>
								<option value="Other">Other</option>
							</select>
						</div>
						<div class="col-lg-12 col-xs-12">
						</div>
						<div class="col-lg-8 col-xs-12 form-group inline-no-padding" id="PhoneGroup">
							<label class="control-label col-xs-12" for="AreaCode">Phone*</label>
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
						<div class="col-lg-12 col-xs-12 form-group inline-no-padding">
							<label class="control-label col-xs-12" for="ReferenceSelect">How did you hear about our program?*</label>
							<div class="col-xs-6">
							<select class="shortfield-home form-control" id="ReferenceSelect" name="ReferenceSelect" required>
								<option value=""></option>
								<option value="Social Media">Social Media</option>
								<option value="Professor">Professor</option>
								<option value="Career Services">Career Services</option>
								<option value="Online">Online</option>
								<option value="Email">Email</option>
								<option value="Other">Other</option>
							</select>
							<span class="help-block" style="display:none;">Please select how you heard about our program.</span>
							</div>
							<div class="col-xs-6" id="OtherSection">
							</div>
							
						</div>
                        <div class="col-xs-12">
							<p class="rec-req">*Required</p>
						</div>
						<div class="col-xs-12 text-center">
							<span class="white-submit-btn" id="submitBtn">
                             <input type="submit" value="SUBMIT"/><i class="fa fa-angle-right"></i>
                         </span>
						</div>
												<div class="col-lg-12 col-xs-12 text-center">
							<span class="help-block white-link"><small>Revature is committed to safeguarding your privacy. We will never sell or share your personal information. Our complete Privacy Policy is available <a href="/privacy-policy">here</a></small></span>
						</div>
                    </form>
                </div>
            </div>
             
        </div>
</div>
     </div>

</section>
<iframe id="iframe" name="iframe" style="display:none;">
			</iframe>';
 return $returnHTML;
}
add_shortcode('recruitment_form', 'recruitment_form_func');

function recruitment_form_no_school_func($atts, $content=null){
	$a=shortcode_atts(array(
		'confirm_msg_header'=>'Header',
		'form_header'=>'Header',
		'form_txt'=>'Text',
		'key'=>'',
	), $atts);
	$returnHTML = '<section class="recurt-form-bg" id="apply">
				<div id="confirm" style="display:none;" class="mob-container-unset tab-container">
							<h3>'.$a['confirm_msg_header'].'</h4>
			<p>'.$content.'</p>
				</div>
      <div class="mob-container-unset tab-container" id="formContainer">
         <div class="row no-margin">
               <div class="col-lg-12 col-md-12 col-sm-12 no-margin no-padding">
					<h3 class="margin-bottom-15">'.$a['form_header'].'</h3>
					<p class="margin-bottom-15 recurt-form-bg-cont">
						'.$a['form_txt'].'
					</p>
               </div>
         </div>
       <div class="container">
        <div class="row no-margin">
            <div class="col-lg-12 col-md-12 col-xs-12 padding-lr-150 mob-padding-5">

                <div class="row form-label-txts text-left">
                    <form id="schoolForm" method="post" target="iframe" action="https://app.revature.com/contactus">
					<input type="hidden" value="'.$a['key'].'" name="SendKey"/>
					<input type="hidden" name="Phone" id="Phone"/>
					<input type="hidden" name="GraduationDate" id="GraduationDate"/>
					<input type="hidden" name="Reference" id="Reference"/>
                        <div class="col-lg-6 form-group">
                            <label class="control-label" for="FirstName">First Name*</label>
                            <input class="shortfield-home form-control" type="text" name="FirstName" id="FirstName" required/>
							<span class="help-block" style="display:none;">Please enter first name.</span>
                        </div>
						<div class="col-lg-6 form-group">
                            <label class="control-label" for="LastName">Last Name*</label>
                            <input class="shortfield-home form-control" type="text" name="LastName" id="LastName" required/>
							<span class="help-block" style="display:none;">Please enter last name.</span>
                        </div>
                        <div class="col-lg-6 form-group">
                           <label class="control-label" for="Email">Email*</label>
                           <input class="shortfield-home form-control"  type="email" name="Email" id="Email" required/>
						   <span id="emailHelp" class="help-block" style="display:none;">Please enter a valid email address.</span>
                        </div>
                        <div class="col-lg-6 col-xs-12 form-group inline-no-padding">
							<label class="control-label col-xs-12" for="AreaCode">Phone*</label>
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
                        <div class="col-xs-12">
							<p class="rec-req">*Required</p>
						</div>
						<div class="col-xs-12 text-center">
							<span class="white-submit-btn" id="submitBtn">
                             <input type="submit" value="SUBMIT"/><i class="fa fa-angle-right"></i>
                         </span>
						</div>
												<div class="col-lg-12 col-xs-12 text-center">
							<span class="help-block white-link"><small>Revature is committed to safeguarding your privacy. We will never sell or share your personal information. Our complete Privacy Policy is available <a href="/privacy-policy">here</a></small></span>
						</div>
                    </form>
                </div>
            </div>
             
        </div>
</div>
     </div>

</section>
<iframe id="iframe" name="iframe" style="display:none;">
			</iframe>';
 return $returnHTML;
}
add_shortcode('recruitment_form_no_school', 'recruitment_form_no_school_func');


function recruitment_form_campus_func($atts, $content=null){
	$a=shortcode_atts(array(
		'confirm_msg_header'=>'Header',
		'confirm_msg_txt'=>'Text',
		'form_header'=>'Header',
		'form_txt'=>'Text',
		'campus'=>'Campus',
		'key'=>'',
	), $atts);
	$campusList = explode(",", $a['campus']);
	$campusHtml = array();
	$arr_length = count($campusList);
	for($i=0;$i<$arr_length;$i++){
		$campusHtml[] = '<option value="'.$campusList[$i].'">'.$campusList[$i].'</option>';
	}
	$returnHTML = '<section class="recurt-form-bg" id="apply">
				<div id="confirm" style="display:none;" class="mob-container-unset tab-container">
							<h3>'.$a['confirm_msg_header'].'</h4>
			<p>'.$a['confirm_msg_txt'].'</p>
				</div>
      <div class="mob-container-unset tab-container" id="formContainer">
         <div class="row no-margin">
               <div class="col-lg-12 col-md-12 col-sm-12 no-margin no-padding">
					<h3 class="margin-bottom-15">'.$a['form_header'].'</h3>
					<p class="margin-bottom-15 recurt-form-bg-cont">
						'.$a['form_txt'].'
					</p>
               </div>
         </div>
       <div class="container">
        <div class="row no-margin">
            <div class="col-lg-12 col-md-12 col-xs-12 padding-lr-150 mob-padding-5">

                <div class="row form-label-txts text-left">
                    <form id="schoolForm" method="post" target="iframe" action="https://app.revature.com/contactus">
					<input type="hidden" value="'.$a['key'].'" name="SendKey"/>
					<input type="hidden" name="Phone" id="Phone"/>
					<input type="hidden" name="GraduationDate" id="GraduationDate"/>
					<input type="hidden" name="Reference" id="Reference"/>
                        <div class="col-lg-6 form-group">
                            <label class="control-label" for="FirstName">First Name*</label>
                            <input class="shortfield-home form-control" type="text" name="FirstName" id="FirstName" required/>
							<span class="help-block" style="display:none;">Please enter first name.</span>
                        </div>
						<div class="col-lg-6 form-group">
                            <label class="control-label" for="LastName">Last Name*</label>
                            <input class="shortfield-home form-control" type="text" name="LastName" id="LastName" required/>
							<span class="help-block" style="display:none;">Please enter last name.</span>
                        </div>
                        <div class="col-lg-6 form-group">
                           <label class="control-label" for="Email">Email*</label>
                           <input class="shortfield-home form-control"  type="email" name="Email" id="Email" required/>
						   <span id="emailHelp" class="help-block" style="display:none;">Please enter a valid email address.</span>
                        </div>
                        <div class="col-lg-6 col-xs-12 form-group inline-no-padding">
														<label class="control-label col-xs-12" for="GraduationMonth">Graduation Date*</label>
							<div class="col-xs-6">
												<select class="shortfield-home form-control col-xs-6" id="GraduationMonth" name="GraduationMonth" required>
												<option value=""></option>
												<option value="December">Fall</option>
												<option value="May">Spring</option>
												<option value="July">Summer</option>
												</select>
												<span class="help-block" id="GraduationSemesterHelp" style="display:none;">Please select the Semester of your Graduation</span>
							</div>
							<div class="col-xs-6">
												<span class="input-group-btn" style="width:0px;"></span>
												<select class="shortfield-home form-control col-xs-6" id="GraduationYear" name="GraduationYear" required>
												<option value=""></option>
												<option value="2004">Prior to 2005</option>
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
												</select>
												<span class="help-block" id="GraduationYearHelp" style="display:none;">Please select the Year of your Graduation</span>
							</div>
                        </div>
						<div class="col-lg-12 col-xs-12">
						</div>
						<div class="col-lg-4 col-xs-12 form-group">
							<label class="control-label" for="Major">Major*</label>
							<select class="shortfield-home form-control" id="Major" name="Major" required>
								<option value=""></option>
								<option value="Accounting">Accounting</option>
								<option value="Biology">Biology</option>
								<option value="Business">Business</option>
								<option value="Chemistry">Chemistry</option>
								<option value="Communications">Communications</option>
								<option value="Computer Science">Computer Science</option>
								<option value="Economics">Economics</option>
								<option value="Engineering">Engineering</option>
								<option value="English/Literature">English/Literature</option>
								<option value="Finance">Finance</option>
								<option value="History">History</option>
								<option value="Information Technology">Information Technology</option>
								<option value="Math">Math</option>
								<option value="Physics">Physics</option>
								<option value="Political Science">Political Science</option>
								<option value="Psychology">Psychology</option>
								<option value="Sociology">Sociology</option>
								<option value="Other">Other</option>
							</select>
							<span class="help-block" style="display:none;">Please select a Major.</span>
						</div>
						<div class="col-lg-4 col-xs-12 form-group">
							<label class="control-label" for="Minor">Minor</label>
							<select class="shortfield-home form-control" id="Minor" name="Minor">
								<option value=""></option>
								<option value="Accounting">Accounting</option>
								<option value="Biology">Biology</option>
								<option value="Business">Business</option>
								<option value="Chemistry">Chemistry</option>
								<option value="Communications">Communications</option>
								<option value="Computer Science">Computer Science</option>
								<option value="Economics">Economics</option>
								<option value="Engineering">Engineering</option>
								<option value="English/Literature">English/Literature</option>
								<option value="Finance">Finance</option>
								<option value="History">History</option>
								<option value="Information Technology">Information Technology</option>
								<option value="Math">Math</option>
								<option value="Physics">Physics</option>
								<option value="Political Science">Political Science</option>
								<option value="Psychology">Psychology</option>
								<option value="Sociology">Sociology</option>
								<option value="Other">Other</option>
							</select>
						</div>
						<div class="col-lg-4 col-xs-12 form-group">
							<label class="control-label" for="Campus">Campus*</label>
							<select class="shortfield-home form-control" id="Campus" name="Campus" required>
								<option value=""></option>
								'.implode($campusHtml).'
								<option value="Other">Other</option>
							</select>
							<span class="help-block" style="display:none;">Please select a campus.</span>
						</div>
						<div class="col-lg-8 col-xs-12 form-group inline-no-padding" id="PhoneGroup">
							<label class="control-label col-xs-12" for="AreaCode">Phone*</label>
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
						<div class="col-lg-12 col-xs-12 form-group inline-no-padding">
							<label class="control-label col-xs-12" for="ReferenceSelect">How did you hear about our program?*</label>
							<div class="col-xs-6">
							<select class="shortfield-home form-control" id="ReferenceSelect" name="ReferenceSelect" required>
								<option value=""></option>
								<option value="Social Media">Social Media</option>
								<option value="Professor">Professor</option>
								<option value="Career Services">Career Services</option>
								<option value="Online">Online</option>
								<option value="Email">Email</option>
								<option value="Other">Other</option>
							</select>
							<span class="help-block" style="display:none;">Please select how you heard about our program.</span>
							</div>
							<div class="col-xs-6" id="OtherSection">
							</div>
							
						</div>
                        <div class="col-xs-12">
							<p class="rec-req">*Required</p>
						</div>
						<div class="col-xs-12 text-center">
							<span class="white-submit-btn" id="submitBtn">
                             <input type="submit" value="SUBMIT"/><i class="fa fa-angle-right"></i>
                         </span>
						</div>
												<div class="col-lg-12 col-xs-12 text-center">
							<span class="help-block white-link"><small>Revature is committed to safeguarding your privacy. We will never sell or share your personal information. Our complete Privacy Policy is available <a href="/privacy-policy">here</a></small></span>
						</div>
                    </form>
                </div>
            </div>
             
        </div>
</div>
     </div>

</section>
<iframe id="iframe" name="iframe" style="display:none;">
			</iframe>';
 return $returnHTML;
}
add_shortcode('recruitment_form_campus', 'recruitment_form_campus_func');

/* RECRUITMENT MARKETO FUNCTIONS */

function recruitment_form_marketo_func($atts, $content=null){
	$a=shortcode_atts(array(
		'form_header'=>'',
		'form_txt'=>'',
		'marketo_id'=>'',
		'university'=>'',
		'account_id'=>''
	), $atts);
	$returnHTML = '<section class="recurt-form-bg" id="apply">
      <div class="mob-container-unset tab-container" id="formContainer">
         <div class="row no-margin">
               <div class="col-lg-12 col-md-12 col-sm-12 no-margin no-padding">
					<h3 class="margin-bottom-15">'.$a['form_header'].'</h3>
					<p class="margin-bottom-15 recurt-form-bg-cont">
						'.$a['form_txt'].'
					</p>
               </div>
         </div>
       <div class="container">
        <div class="row no-margin">
            <div class="col-lg-12 col-md-12 col-xs-12 padding-lr-150 mob-padding-5">

                <div class="row form-label-txts text-left">
                    <form id="schoolForm" method="post">
						<input type="hidden" id="University" value="'.$a['university'].'"/>
						<input type="hidden" id="AccountID" value="'.$a['account_id'].'"/>
                        <div class="col-lg-6 col-xs-12 form-group">
                            <label class="control-label" for="FirstName">First Name*</label>
                            <input class="shortfield-home form-control" type="text" name="FirstName" id="FirstName" required/>
							<span class="help-block" style="display:none;">Please enter first name.</span>
                        </div>
						<div class="col-lg-6 col-xs-12 form-group">
                            <label class="control-label" for="LastName">Last Name*</label>
                            <input class="shortfield-home form-control" type="text" name="LastName" id="LastName" required/>
							<span class="help-block" style="display:none;">Please enter last name.</span>
                        </div>
                        <div class="col-lg-6 col-xs-12 form-group">
                           <label class="control-label" for="Email">Email*</label>
                           <input class="shortfield-home form-control"  type="email" name="Email" id="Email" required/>
						   <span id="emailHelp" class="help-block" style="display:none;">Please enter a valid email address.</span>
                        </div>
                        <div class="col-lg-6 col-xs-12 form-group inline-no-padding">
							<label class="control-label col-xs-12" for="GraduationMonth">Graduation Date*</label>
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
												<select class="shortfield-home form-control col-xs-6" id="GraduationYear" name="GraduationYear" required>
												<option value=""></option>
												<option value="2004">Prior to 2005</option>
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
												</select>
												<span class="help-block" id="GraduationYearHelp" style="display:none;">Please select the Year of your Graduation</span>
							</div>
                        </div>
						<div class="col-lg-12 col-xs-12">
						</div>
						<div class="col-lg-4 col-xs-12 form-group">
							<label class="control-label" for="Major">Major*</label>
							<select class="shortfield-home form-control" id="Major" name="Major" required>
								<option value=""></option>
								<option value="Accounting">Accounting</option>
								<option value="Biology">Biology</option>
								<option value="Business">Business</option>
								<option value="Chemistry">Chemistry</option>
								<option value="Communications">Communications</option>
								<option value="Computer Science">Computer Science</option>
								<option value="Economics">Economics</option>
								<option value="Engineering">Engineering</option>
								<option value="English/Literature">English/Literature</option>
								<option value="Finance">Finance</option>
								<option value="History">History</option>
								<option value="Information Technology">Information Technology</option>
								<option value="Math">Math</option>
								<option value="Physics">Physics</option>
								<option value="Political Science">Political Science</option>
								<option value="Psychology">Psychology</option>
								<option value="Sociology">Sociology</option>
								<option value="Other">Other</option>
							</select>
							<span class="help-block" style="display:none;">Please select a Major.</span>
						</div>
						<div class="col-lg-4 col-xs-12 form-group">
							<label class="control-label" for="Minor">Minor</label>
							<select class="shortfield-home form-control" id="Minor" name="Minor">
								<option value=""></option>
								<option value="Accounting">Accounting</option>
								<option value="Biology">Biology</option>
								<option value="Business">Business</option>
								<option value="Chemistry">Chemistry</option>
								<option value="Communications">Communications</option>
								<option value="Computer Science">Computer Science</option>
								<option value="Economics">Economics</option>
								<option value="Engineering">Engineering</option>
								<option value="English/Literature">English/Literature</option>
								<option value="Finance">Finance</option>
								<option value="History">History</option>
								<option value="Information Technology">Information Technology</option>
								<option value="Math">Math</option>
								<option value="Physics">Physics</option>
								<option value="Political Science">Political Science</option>
								<option value="Psychology">Psychology</option>
								<option value="Sociology">Sociology</option>
								<option value="Other">Other</option>
							</select>
						</div>
						<div class="col-lg-12 col-xs-12">
						</div>
						<div class="col-lg-8 col-xs-12 form-group inline-no-padding" id="PhoneGroup">
							<label class="control-label col-xs-12" for="AreaCode">Phone*</label>
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
						<div class="col-xs-12 col-lg-6 form-group">
						<label class="control-label">Resume</label><br>
						<input type="file" id="ResumeUpload" name="ResumeUpload" class="filestyle" data-buttonBefore="true" data-buttonName="white-submit-btn" data-icon="false">
					    <span id="fileHelp" class="help-block" style="display:none;">Please select a file to upload (pdf, docx, doc, rtf, txt).</span>
						<input type="hidden" name="FileBase64" id="FileBase64"/>
						<input type="hidden" name="FileExt" id="FileExt"/>
						</div>
                        <div class="col-xs-12">
							<p class="rec-req">*Required</p>
						</div>
						<div class="col-xs-12 text-center">
							<span class="white-submit-btn" id="submitBtn">
                             <input type="submit" value="SUBMIT"/><i class="fa fa-angle-right"></i></span>
							<img id="loading" style="display:none;" src="'.get_template_directory_uri().'/imgs/ajax-loader.gif"></img>
							<span class="help-block" style="display:none;" id="confirmMsg">There was an issue with your submission, please try again.</span>
						</div>
												<div class="col-lg-12 col-xs-12 text-center">
							<span class="help-block white-link"><small>Revature is committed to safeguarding your privacy. We will never sell or share your personal information. Our complete Privacy Policy is available <a href="/privacy-policy">here</a></small></span>
						</div>
                    </form>
                </div>
            </div>
             
        </div>
</div>
     </div>

</section>		            
<script src="//app-sj20.marketo.com/js/forms2/js/forms2.min.js"></script>
<form id="mktoForm_'.$a['marketo_id'].'" style="display:none;"></form>
<script>MktoForms2.loadForm("//app-sj20.marketo.com", "733-JWE-559", '.$a['marketo_id'].');</script>';
 return $returnHTML;
}
add_shortcode('recruitment_form_marketo', 'recruitment_form_marketo_func');

function recruitment_form_marketo_yellow_func($atts, $content=null){
	$a=shortcode_atts(array(
		'form_header'=>'',
		'form_txt'=>'',
		'marketo_id'=>'',
		'university'=>'',
		'account_id'=>''
	), $atts);
	$returnHTML = '<section class="recruit-bg-yellow" id="apply">
      <div class="mob-container-unset tab-container" id="formContainer">
         <div class="row no-margin">
               <div class="col-lg-12 col-md-12 col-sm-12 no-margin no-padding">
					<h3 class="margin-bottom-15">'.$a['form_header'].'</h3>
					<p class="margin-bottom-15 recurt-form-bg-cont">
						'.$a['form_txt'].'
					</p>
               </div>
         </div>
       <div class="container">
        <div class="row no-margin">
            <div class="col-lg-12 col-md-12 col-xs-12 padding-lr-150 mob-padding-5">

                <div class="row form-label-txts text-left">
                    <form id="schoolForm" method="post">
						<input type="hidden" id="University" value="'.$a['university'].'"/>
						<input type="hidden" id="AccountID" value="'.$a['account_id'].'"/>
                        <div class="col-lg-6 col-xs-12 form-group">
                            <label class="control-label" for="FirstName">First Name*</label>
                            <input class="shortfield-home form-control" type="text" name="FirstName" id="FirstName" required/>
							<span class="help-block" style="display:none;">Please enter first name.</span>
                        </div>
						<div class="col-lg-6 col-xs-12 form-group">
                            <label class="control-label" for="LastName">Last Name*</label>
                            <input class="shortfield-home form-control" type="text" name="LastName" id="LastName" required/>
							<span class="help-block" style="display:none;">Please enter last name.</span>
                        </div>
                        <div class="col-lg-6 col-xs-12 form-group">
                           <label class="control-label" for="Email">Email*</label>
                           <input class="shortfield-home form-control"  type="email" name="Email" id="Email" required/>
						   <span id="emailHelp" class="help-block" style="display:none;">Please enter a valid email address.</span>
                        </div>
                        <div class="col-lg-6 col-xs-12 form-group inline-no-padding">
							<label class="control-label col-xs-12" for="GraduationMonth">Graduation Date*</label>
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
												<select class="shortfield-home form-control col-xs-6" id="GraduationYear" name="GraduationYear" required>
												<option value=""></option>
												<option value="2004">Prior to 2005</option>
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
												</select>
												<span class="help-block" id="GraduationYearHelp" style="display:none;">Please select the Year of your Graduation</span>
							</div>
                        </div>
						<div class="col-lg-12 col-xs-12">
						</div>
						<div class="col-lg-4 col-xs-12 form-group">
							<label class="control-label" for="Major">Major*</label>
							<select class="shortfield-home form-control" id="Major" name="Major" required>
								<option value=""></option>
								<option value="Accounting">Accounting</option>
								<option value="Biology">Biology</option>
								<option value="Business">Business</option>
								<option value="Chemistry">Chemistry</option>
								<option value="Communications">Communications</option>
								<option value="Computer Science">Computer Science</option>
								<option value="Economics">Economics</option>
								<option value="Engineering">Engineering</option>
								<option value="English/Literature">English/Literature</option>
								<option value="Finance">Finance</option>
								<option value="History">History</option>
								<option value="Information Technology">Information Technology</option>
								<option value="Math">Math</option>
								<option value="Physics">Physics</option>
								<option value="Political Science">Political Science</option>
								<option value="Psychology">Psychology</option>
								<option value="Sociology">Sociology</option>
								<option value="Other">Other</option>
							</select>
							<span class="help-block" style="display:none;">Please select a Major.</span>
						</div>
						<div class="col-lg-4 col-xs-12 form-group">
							<label class="control-label" for="Minor">Minor</label>
							<select class="shortfield-home form-control" id="Minor" name="Minor">
								<option value=""></option>
								<option value="Accounting">Accounting</option>
								<option value="Biology">Biology</option>
								<option value="Business">Business</option>
								<option value="Chemistry">Chemistry</option>
								<option value="Communications">Communications</option>
								<option value="Computer Science">Computer Science</option>
								<option value="Economics">Economics</option>
								<option value="Engineering">Engineering</option>
								<option value="English/Literature">English/Literature</option>
								<option value="Finance">Finance</option>
								<option value="History">History</option>
								<option value="Information Technology">Information Technology</option>
								<option value="Math">Math</option>
								<option value="Physics">Physics</option>
								<option value="Political Science">Political Science</option>
								<option value="Psychology">Psychology</option>
								<option value="Sociology">Sociology</option>
								<option value="Other">Other</option>
							</select>
						</div>
						<div class="col-lg-12 col-xs-12">
						</div>
						<div class="col-lg-8 col-xs-12 form-group inline-no-padding" id="PhoneGroup">
							<label class="control-label col-xs-12" for="AreaCode">Phone*</label>
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
						<div class="col-xs-12 col-lg-6 form-group">
						<label class="control-label">Resume</label><br>
						<input type="file" id="ResumeUpload" name="ResumeUpload" class="filestyle" data-buttonBefore="true" data-buttonName="white-submit-btn" data-icon="false">
					    <span id="fileHelp" class="help-block" style="display:none;">Please select a file to upload (pdf, docx, doc, rtf, txt).</span>
						<input type="hidden" name="FileBase64" id="FileBase64"/>
						<input type="hidden" name="FileExt" id="FileExt"/>
						</div>
                        <div class="col-xs-12">
							<p class="rec-req">*Required</p>
						</div>
						<div class="col-xs-12 text-center">
							<span class="white-submit-btn" id="submitBtn">
                             <input type="submit" value="SUBMIT"/><i class="fa fa-angle-right"></i></span>
							<img id="loading" style="display:none;" src="'.get_template_directory_uri().'/imgs/ajax-loader.gif"></img>
							<span class="help-block" style="display:none;" id="confirmMsg">There was an issue with your submission, please try again.</span>
						</div>
												<div class="col-lg-12 col-xs-12 text-center">
							<span class="help-block"><small>Revature is committed to safeguarding your privacy. We will never sell or share your personal information. Our complete Privacy Policy is available <a href="/privacy-policy">here</a></small></span>
						</div>
                    </form>
                </div>
            </div>
             
        </div>
</div>
     </div>

</section>		            
<script src="//app-sj20.marketo.com/js/forms2/js/forms2.min.js"></script>
<form id="mktoForm_'.$a['marketo_id'].'" style="display:none;"></form>
<script>MktoForms2.loadForm("//app-sj20.marketo.com", "733-JWE-559", '.$a['marketo_id'].');</script>';
 return $returnHTML;
}
add_shortcode('recruitment_form_marketo_yellow', 'recruitment_form_marketo_yellow_func');

function recruitment_form_no_school_marketo_func($atts, $content=null){
	$a=shortcode_atts(array(
		'form_header'=>'',
		'form_txt'=>'',
		'marketo_id'=>'',
		'university'=>'',
		'account_id'=>''
	), $atts);
	$returnHTML = '<section class="recurt-form-bg" id="apply">
      <div class="mob-container-unset tab-container" id="formContainer">
         <div class="row no-margin">
               <div class="col-lg-12 col-md-12 col-sm-12 no-margin no-padding">
					<h3 class="margin-bottom-15">'.$a['form_header'].'</h3>
					<p class="margin-bottom-15 recurt-form-bg-cont">
						'.$a['form_txt'].'
					</p>
               </div>
         </div>
       <div class="container">
        <div class="row no-margin">
            <div class="col-lg-12 col-md-12 col-xs-12 padding-lr-150 mob-padding-5">

                <div class="row form-label-txts text-left">
                    <form id="schoolForm" method="post" >
						<input type="hidden" id="University" value="'.$a['university'].'"/>
						<input type="hidden" id="AccountID" value="'.$a['account_id'].'"/>
                        <div class="col-lg-6 col-xs-12 form-group">
                            <label class="control-label" for="FirstName">First Name*</label>
                            <input class="shortfield-home form-control" type="text" name="FirstName" id="FirstName" required/>
							<span class="help-block" style="display:none;">Please enter first name.</span>
                        </div>
						<div class="col-lg-6 col-xs-12 form-group">
                            <label class="control-label" for="LastName">Last Name*</label>
                            <input class="shortfield-home form-control" type="text" name="LastName" id="LastName" required/>
							<span class="help-block" style="display:none;">Please enter last name.</span>
                        </div>
                        <div class="col-lg-6 col-xs-12 form-group">
                           <label class="control-label" for="Email">Email*</label>
                           <input class="shortfield-home form-control"  type="email" name="Email" id="Email" required/>
						   <span id="emailHelp" class="help-block" style="display:none;">Please enter a valid email address.</span>
                        </div>
						<div class="col-lg-6 col-xs-12 form-group inline-no-padding" id="PhoneGroup">
							<label class="control-label col-xs-12" for="AreaCode">Phone*</label>
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
						<div class="col-xs-12 col-lg-6 form-group">
						<label class="control-label">Resume</label><br>
						<input type="file" id="ResumeUpload" name="ResumeUpload" class="filestyle" data-buttonBefore="true" data-buttonName="white-submit-btn" data-icon="false">
					    <span id="fileHelp" class="help-block" style="display:none;">Please select a file to upload (pdf, docx, doc, rtf, txt).</span>
						<input type="hidden" name="FileBase64" id="FileBase64"/>
						<input type="hidden" name="FileExt" id="FileExt"/>
						</div>
                        <div class="col-xs-12">
							<p class="rec-req">*Required</p>
						</div>
						<div class="col-xs-12 text-center">
							<span class="white-submit-btn" id="submitBtn">
                             <input type="submit" value="SUBMIT"/><i class="fa fa-angle-right"></i></span>
							<img id="loading" style="display:none;" src="'.get_template_directory_uri().'/imgs/ajax-loader.gif"></img>
							<span class="help-block" style="display:none;" id="confirmMsg">There was an issue with your submission, please try again.</span>
						</div>
												<div class="col-lg-12 col-xs-12 text-center">
							<span class="help-block white-link"><small>Revature is committed to safeguarding your privacy. We will never sell or share your personal information. Our complete Privacy Policy is available <a href="/privacy-policy">here</a></small></span>
						</div>
                    </form>
                </div>
            </div>
             
        </div>
</div>
     </div>

</section>
<script src="//app-sj20.marketo.com/js/forms2/js/forms2.min.js"></script>
<form id="mktoForm_'.$a['marketo_id'].'" style="display:none;"></form>
<script>MktoForms2.loadForm("//app-sj20.marketo.com", "733-JWE-559", '.$a['marketo_id'].');</script>';
 return $returnHTML;
}
add_shortcode('recruitment_form_no_school_marketo', 'recruitment_form_no_school_marketo_func');

function recruitment_form_campus_marketo_func($atts, $content=null){
	$a=shortcode_atts(array(
		'form_header'=>'',
		'form_txt'=>'',
		'campus'=>'',
		'marketo_id'=>'',
		'university'=>'',
		'account_id'=>''
	), $atts);
	$campusList = explode(",", $a['campus']);
	$campusHtml = array();
	$arr_length = count($campusList);
	for($i=0;$i<$arr_length;$i+=2){
		$j=$i+1;
		$campusHtml[] = '<option value="'.$campusList[$j].'">'.$campusList[$i].'</option>';
	}
	$returnHTML = '<section class="recurt-form-bg" id="apply">
      <div class="mob-container-unset tab-container" id="formContainer">
         <div class="row no-margin">
               <div class="col-lg-12 col-md-12 col-sm-12 no-margin no-padding">
					<h3 class="margin-bottom-15">'.$a['form_header'].'</h3>
					<p class="margin-bottom-15 recurt-form-bg-cont">
						'.$a['form_txt'].'
					</p>
               </div>
         </div>
       <div class="container">
        <div class="row no-margin">
            <div class="col-lg-12 col-md-12 col-xs-12 padding-lr-150 mob-padding-5">

                <div class="row form-label-txts text-left">
                    <form id="schoolForm" method="post" >
						<input type="hidden" id="University" value="'.$a['university'].'"/>
						<input type="hidden" id="AccountID" value="'.$a['account_id'].'"/>
                        <div class="col-lg-6 col-xs-12 form-group">
                            <label class="control-label" for="FirstName">First Name*</label>
                            <input class="shortfield-home form-control" type="text" name="FirstName" id="FirstName" required/>
							<span class="help-block" style="display:none;">Please enter first name.</span>
                        </div>
						<div class="col-lg-6 col-xs-12 form-group">
                            <label class="control-label" for="LastName">Last Name*</label>
                            <input class="shortfield-home form-control" type="text" name="LastName" id="LastName" required/>
							<span class="help-block" style="display:none;">Please enter last name.</span>
                        </div>
                        <div class="col-lg-6 col-xs-12 form-group">
                           <label class="control-label" for="Email">Email*</label>
                           <input class="shortfield-home form-control"  type="email" name="Email" id="Email" required/>
						   <span id="emailHelp" class="help-block" style="display:none;">Please enter a valid email address.</span>
                        </div>
                        <div class="col-lg-6 col-xs-12 form-group inline-no-padding">
														<label class="control-label col-xs-12" for="GraduationMonth">Graduation Date*</label>
							<div class="col-xs-6 form-group">
												<select class="shortfield-home form-control col-xs-6" id="GraduationMonth" name="GraduationMonth" required>
												<option value=""></option>
												<option value="12-01">Fall</option>
												<option value="05-01">Spring</option>
												<option value="07-01">Summer</option>
												</select>
												<span class="help-block" id="GraduationSemesterHelp" style="display:none;">Please select the Semester of your Graduation</span>
							</div>
							<div class="col-xs-6 form-group">
												<span class="input-group-btn" style="width:0px;"></span>
												<select class="shortfield-home form-control col-xs-6" id="GraduationYear" name="GraduationYear" required>
												<option value=""></option>
												<option value="2004">Prior to 2005</option>
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
												</select>
												<span class="help-block" id="GraduationYearHelp" style="display:none;">Please select the Year of your Graduation</span>
							</div>
                        </div>
						<div class="col-lg-12 col-xs-12">
						</div>
						<div class="col-lg-4 col-xs-12 form-group">
							<label class="control-label" for="Major">Major*</label>
							<select class="shortfield-home form-control" id="Major" name="Major" required>
								<option value=""></option>
								<option value="Accounting">Accounting</option>
								<option value="Biology">Biology</option>
								<option value="Business">Business</option>
								<option value="Chemistry">Chemistry</option>
								<option value="Communications">Communications</option>
								<option value="Computer Science">Computer Science</option>
								<option value="Economics">Economics</option>
								<option value="Engineering">Engineering</option>
								<option value="English/Literature">English/Literature</option>
								<option value="Finance">Finance</option>
								<option value="History">History</option>
								<option value="Information Technology">Information Technology</option>
								<option value="Math">Math</option>
								<option value="Physics">Physics</option>
								<option value="Political Science">Political Science</option>
								<option value="Psychology">Psychology</option>
								<option value="Sociology">Sociology</option>
								<option value="Other">Other</option>
							</select>
							<span class="help-block" style="display:none;">Please select a Major.</span>
						</div>
						<div class="col-lg-4 col-xs-12 form-group">
							<label class="control-label" for="Minor">Minor</label>
							<select class="shortfield-home form-control" id="Minor" name="Minor">
								<option value=""></option>
								<option value="Accounting">Accounting</option>
								<option value="Biology">Biology</option>
								<option value="Business">Business</option>
								<option value="Chemistry">Chemistry</option>
								<option value="Communications">Communications</option>
								<option value="Computer Science">Computer Science</option>
								<option value="Economics">Economics</option>
								<option value="Engineering">Engineering</option>
								<option value="English/Literature">English/Literature</option>
								<option value="Finance">Finance</option>
								<option value="History">History</option>
								<option value="Information Technology">Information Technology</option>
								<option value="Math">Math</option>
								<option value="Physics">Physics</option>
								<option value="Political Science">Political Science</option>
								<option value="Psychology">Psychology</option>
								<option value="Sociology">Sociology</option>
								<option value="Other">Other</option>
							</select>
						</div>
						<div class="col-lg-4 col-xs-12 form-group">
							<label class="control-label" for="Campus">Campus*</label>
							<select class="shortfield-home form-control" id="Campus" name="Campus" required>
								<option value=""></option>
								'.implode($campusHtml).'
								<option value="Other">Other</option>
							</select>
							<span class="help-block" style="display:none;">Please select a campus.</span>
						</div>
						<div class="col-lg-8 col-xs-12 form-group inline-no-padding" id="PhoneGroup">
							<label class="control-label col-xs-12" for="AreaCode">Phone*</label>
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
						<div class="col-xs-12 col-lg-6 form-group">
						<label class="control-label">Resume</label><br>
						<input type="file" id="ResumeUpload" name="ResumeUpload" class="filestyle" data-buttonBefore="true" data-buttonName="white-submit-btn" data-icon="false">
					    <span id="fileHelp" class="help-block" style="display:none;">Please select a file to upload (pdf, docx, doc, rtf, txt).</span>
						<input type="hidden" name="FileBase64" id="FileBase64"/>
						<input type="hidden" name="FileExt" id="FileExt"/>
						</div>
                        <div class="col-xs-12">
							<p class="rec-req">*Required</p>
						</div>
						<div class="col-xs-12 text-center">
							<span class="white-submit-btn" id="submitBtn">
                             <input type="submit" value="SUBMIT"/><i class="fa fa-angle-right"></i></span>
							<img id="loading" style="display:none;" src="'.get_template_directory_uri().'/imgs/ajax-loader.gif"></img>
							<span class="help-block" style="display:none;" id="confirmMsg">There was an issue with your submission, please try again.</span>
						</div>
												<div class="col-lg-12 col-xs-12 text-center">
							<span class="help-block white-link"><small>Revature is committed to safeguarding your privacy. We will never sell or share your personal information. Our complete Privacy Policy is available <a href="/privacy-policy">here</a></small></span>
						</div>
                    </form>
                </div>
            </div>
             
        </div>
</div>
     </div>

</section>
<script src="//app-sj20.marketo.com/js/forms2/js/forms2.min.js"></script>
<form id="mktoForm_'.$a['marketo_id'].'" style="display:none;"></form>
<script>MktoForms2.loadForm("//app-sj20.marketo.com", "733-JWE-559", '.$a['marketo_id'].');</script>';
 return $returnHTML;
}
add_shortcode('recruitment_form_campus_marketo', 'recruitment_form_campus_marketo_func');

/* END RECRUITMENT MARKETO FORMS */

/*=================RevaturePro Page==========================*/

function revaturepro_header_func($atts, $content=null){
	$a=shortcode_atts(array(
		'logo_img' => 'Logo Image',
		'header_title' => 'Default Title',
        'button_text_left' => ' text',
        'button_url_left' => 'Button URL',
		'button_text_right' => ' text',
        'button_url_right' => 'Button URL',
	), $atts);
	return
	'<div class="hero-bg-pro"><div class="hero-bg-content">
               <div class="hero-rev-logo">
               <img src="' . wp_get_attachment_url($a['logo_img']) .'"/>
            </div>
               <h1 class="hero-rev-htitle"> '. $a['header_title'] . '</h1>
               <p class="hero-rev-content">'.$content.'</p>
               <a class="white-read-btn margin-right-15" href="'.$a['button_url_left'].'">'.$a['button_text_left'].'<i class="fa fa-angle-right" aria-hidden="true"></i></a>
               <span class="white-read-btn margin-top-10" href="'.$a['button_url_right'].'" id="applyBtn">'.$a['button_text_right'].'<i class="fa fa-angle-right" aria-hidden="true"></i>
           </span>
		   </div>
		   <div class="cd-background-wrapper hidden-xs">
	<div class="cd-floating-background">
		   <img src="../wp-content/themes/revature/imgs/Revature_3-RevaturePro_02.jpg"/>

	</div></div></div>';
}
add_shortcode('revaturepro_header', 'revaturepro_header_func');

function revaturepro_sub_nav_container_func($atts, $content=null){
	return
	'<section class="revpro-sub-nav hidden-xs">
    <div class="container sticky-nav">
        <div class="">
             <nav class="rev-pro-menu" id="stickyNav">
                 <ul>
                     <li><a href="#benefits">BENEFITS</a></li>
                     <li><a href="#howItWorks">HOW IT WORKS</a></li>
                     <li><a href="#online">ONLINE</a></li>
                     <li><a href="#bootcamp">CODING BOOTCAMP</a></li>
					 <li><a href="#apply">APPLY</a></li>
                     <li class="right-border-none"><a href="#faq">FAQ</a></li>
                 </ul>
             </nav>
        </div>
    </div>
</section>';
}

add_shortcode('revaturepro_sub_nav_container','revaturepro_sub_nav_container_func');

function revaturepro_benefits_blue_header_func($atts, $content=null){
	$a=shortcode_atts(array(
		'title'=>'Title'
	), $atts);
	return '<section class="revpro-topbg" id="benefits">
      <div class="container">
         <div class="row no-margin">
               <div class="col-lg-12 col-md-12 col-sm-12">
                <h3 class="margin-bottom-25">'.$a['title'].'</h3>
                <p class="margin-bottom-25 ins-cont">'.$content.'</p>
               </div>
         </div>
     </div>
</section>';
}
add_shortcode('revaturepro_benefits_blue_header','revaturepro_benefits_blue_header_func');

function revaturepro_benefits_blue_items_func($atts, $content=null){
	$a=shortcode_atts(array(
		'icon_1'=>'',
		'title_1'=>'Title',
		'content_1'=>'Text',
		'icon_2'=>'',
		'title_2'=>'Title',
		'content_2'=>'Text',
		'icon_3'=>'',
		'title_3'=>'Title',
		'content_3'=>'Text',
		'icon_4'=>'',
		'title_4'=>'Title',
		'content_4'=>'Text',
		'icon_5'=>'',
		'title_5'=>'Title',
		'content_5'=>'Text',
		'icon_6'=>'',
		'title_6'=>'Title',
		'content_6'=>'Text',
	), $atts);
	return'<section class="revpro-center hidden-xs">
     <div class="row text-left no-margin">
         <div class="col-lg-4 col-md-4 col-sm-6 rev-pro-blog">
             <div class="">
                 <span class="rev-benefit-icon">
                     <img src="'.wp_get_attachment_url($a['icon_1']).'" />
                 </span>
                 <h3 class="rev-benefit-title">
                     <span class="rev-bebefit-number">1</span>
                    '.$a['title_1'].'
                 </h3>
                 <p class="rev-benefit-content">
                     '.$a['content_1'].'
                 </p>
             </div>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-6 rev-pro-blog-alt">
                <div class="">
                 <span class="rev-benefit-icon">
                     <img src="'.wp_get_attachment_url($a['icon_2']).'" />
                 </span>
                 <h3 class="rev-benefit-title">
                     <span class="rev-bebefit-number">2</span>
                     '.$a['title_2'].'
                 </h3>
                 <p class="rev-benefit-content">
                     '.$a['content_2'].'
                 </p>
             </div>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-6 rev-pro-blog">
             <div class="">
                 <span class="rev-benefit-icon">
                     <img src="'.wp_get_attachment_url($a['icon_3']).'" />
                 </span>
                 <h3 class="rev-benefit-title">
                     <span class="rev-bebefit-number">3</span>
                    '.$a['title_3'].'
                 </h3>
                 <p class="rev-benefit-content">
                     '.$a['content_3'].'
                 </p>
             </div>
         </div>
  <div class="col-lg-4 col-md-4 col-sm-6 rev-pro-blog-alt">
             <div class="">
                 <span class="rev-benefit-icon">
                     <img src="'.wp_get_attachment_url($a['icon_4']).'" />
                 </span>
                 <h3 class="rev-benefit-title">
                     <span class="rev-bebefit-number">4</span>
                     '.$a['title_4'].'
                 </h3>
                 <p class="rev-benefit-content">
                    '.$a['content_4'].'
                 </p>
             </div>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-6 rev-pro-blog">
                <div class="">
                 <span class="rev-benefit-icon">
                     <img src="'.wp_get_attachment_url($a['icon_5']).'" />
                 </span>
                 <h3 class="rev-benefit-title">
                     <span class="rev-bebefit-number">5</span>
                     '.$a['title_5'].'
                 </h3>
                 <p class="rev-benefit-content">
                     '.$a['content_5'].'
                 </p>
             </div>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-6 rev-pro-blog-alt">
             <div class="">
                 <span class="rev-benefit-icon">
                     <img style="width:75px; height:41px;" src="'.wp_get_attachment_url($a['icon_6']).'" />
                 </span>
                 <h3 class="rev-benefit-title">
                     <span class="rev-bebefit-number">6</span>
                     '.$a['title_6'].'
                 </h3>
                 <p class="rev-benefit-content">
					'.$a['content_6'].'
                 </p>
             </div>
         </div>
     </div>
</section>
<section class="revpro-center visible-xs-block">
     <div class="row text-left no-margin" id="revPro">
         <div class="col-lg-4 col-md-4 col-sm-12 rev-pro-blog">
                 <div class="rev-benefit-icon" style="display:none;">
                     <img src="'.wp_get_attachment_url($a['icon_1']).'" />
                 </div>
                 <h3 class="rev-benefit-title">
                     <span class="rev-bebefit-number">1</span>
                     '.$a['title_1'].'
					 <span class="arrow">					
					 <img src="../wp-content/themes/revature/imgs/faq-down-arrow.svg">
					</span>
                 </h3>
                 <p class="rev-benefit-content" style="display:none;">
					'.$a['content_1'].'
                 </p>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-12 rev-pro-blog">
               <div class="rev-benefit-icon" style="display:none;">
                     <img src="'.wp_get_attachment_url($a['icon_2']).'"/>
                 </div>
                 <h3 class="rev-benefit-title">
                     <span class="rev-bebefit-number">2</span>
                     '.$a['title_2'].'
					 					 <span class="arrow">					
					 <img src="../wp-content/themes/revature/imgs/faq-down-arrow.svg">
					</span>
                 </h3>
                 <p class="rev-benefit-content" style="display:none;">
                     '.$a['content_2'].'
                 </p>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-12 rev-pro-blog">
                 <div class="rev-benefit-icon" style="display:none;">
                     <img src="'.wp_get_attachment_url($a['icon_3']).'" />
                 </div>
                 <h3 class="rev-benefit-title">
                     <span class="rev-bebefit-number">3</span>
                   '.$a['title_3'].'
										 <span class="arrow">					
					 <img src="../wp-content/themes/revature/imgs/faq-down-arrow.svg">
					</span>
                 </h3>
                 <p class="rev-benefit-content" style="display:none;">
                     '.$a['content_3'].'
                 </p>
         </div>
  <div class="col-lg-4 col-md-4 col-sm-12 rev-pro-blog">
                 <div class="rev-benefit-icon" style="display:none;">
                     <img src="'.wp_get_attachment_url($a['icon_4']).'" />
                 </div>
                 <h3 class="rev-benefit-title">
                     <span class="rev-bebefit-number">4</span>
                     '.$a['title_4'].'
					 					 <span class="arrow">					
					 <img src="../wp-content/themes/revature/imgs/faq-down-arrow.svg">
					</span>
                 </h3>
                 <p class="rev-benefit-content" style="display:none;">
                    '.$a['content_4'].'
                 </p>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-12 rev-pro-blog">
                 <div class="rev-benefit-icon" style="display:none;">
                     <img src="'.wp_get_attachment_url($a['icon_5']).'" />
                 </div>
                 <h3 class="rev-benefit-title">
                     <span class="rev-bebefit-number">5</span>
                     '.$a['title_5'].'
					 					 <span class="arrow">					
					 <img src="../wp-content/themes/revature/imgs/faq-down-arrow.svg">
					</span>
                 </h3>
                 <p class="rev-benefit-content" style="display:none;">
                     '.$a['content_5'].'
                 </p>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-12 rev-pro-blog">
                 <div class="rev-benefit-icon" style="display:none;">
                     <img src="'.wp_get_attachment_url($a['icon_6']).'" />
                 </div>
                 <h3 class="rev-benefit-title">
                     <span class="rev-bebefit-number">6</span>
                     '.$a['title_6'].'
					 					 <span class="arrow">					
					 <img src="../wp-content/themes/revature/imgs/faq-down-arrow.svg">
					</span>
                 </h3>
                 <p class="rev-benefit-content" style="display:none;">
					'.$a['content_6'].'
                 </p>
         </div>
     </div>
</section>';
}

add_shortcode('revaturepro_benefits_blue_items','revaturepro_benefits_blue_items_func');

function revaturepro_quick_facts_func($atts, $content=null){
	$a=shortcode_atts(array(
		'title'=>'Default Title',
		'title_1'=>'Default Title',
		'content_1'=>'Default Text',
		'title_2'=>'Default Title',
		'content_2'=>'Default Text',
		'title_3'=>'Default Title',
		'content_3'=>'Default Text',
	), $atts);
	return 
	'<section class="revpro-quickfacts">
          <div class="container">
         <div class="row no-margin">
               <div class="col-lg-12 col-md-12 col-sm-12 margin-top-70">
                <h3 class="margin-bottom-35"> '.$a['title'].'</h3>
               </div>
         </div>
         </div>
    <div class="rev-pro-quick-contain">
        <div class="rev-quick-1 margin-bottom-75">
            <h2 class="">'.$a['title_1'].'</h2>
            <p>'.$a['content_1'].'</p>
        </div>
         <div class="rev-quick-1 margin-bottom-75">
            <h2 class="">'.$a['title_2'].'</h2>
            <p>'.$a['content_2'].'</p>
        </div>
         <div class="rev-quick-1 margin-bottom-75 margin-bottom-0">
            <h2 class="">'.$a['title_3'].'</h2>
            <p>'.$a['content_3'].'</p>
        </div>
    </div>
</section>';
}
add_shortcode('revaturepro_quick_facts', 'revaturepro_quick_facts_func');

function revaturepro_two_column_container_func($atts, $content=null){
	return' <section class="RevPro-bgcolor rv-pro-business-bg">
     <div class="container">
         <div class="row">
		 '.do_shortcode($content).'
         </div>
      </div>
 </section>';
}
add_shortcode('revaturepro_two_column_container','revaturepro_two_column_container_func');

function revaturepro_two_column_header_func($atts, $content=null){
		$a=shortcode_atts(array(
		'title'=>'Default Title',
	), $atts);
	return' <div class="col-lg-12 col-md-12 col-sm-12 margin-bottom-50 business-heading">
                <h3 class="margin-bottom-15">'.$a['title'].'</h3>
                <p class="margin-bottom-25 RevPro-cont">
				'.$content.'
                </p>
             </div>';
}
add_shortcode('revaturepro_two_column_header','revaturepro_two_column_header_func');

function revaturepro_two_column_img_left_func($atts, $content=null){
			$a=shortcode_atts(array(
		'img'=>'',
		'title'=>'Default Title',
		'btn_txt'=>'Button Text',
		'btn_url'=>''
	), $atts);
	return'<div class="col-lg-6 col-md-6 col-sm-12 overflow-hidden padding-0 height-320">
                  <div id="online">
                      <img class="business-img" src="'.wp_get_attachment_url($a['img']).'" />
                  </div>
              </div>
             <div class="col-lg-6 col-md-6 col-sm-12 text-left padding-50 rev-pro-bs-holder height-320">
                 <div class="coding-bootcamp">
                     <h4 class="RevPro-Online-head">'.$a['title'].'</h4>
                      <p class="RevPro-Online-content">
                      '.$content.'
                  </p>
                  <a id="revature-online-btn" href="'.$a['btn_url'].'" class="white-read-btn margin-top-25">'.$a['btn_txt'].'<i class="fa fa-angle-right"></i></a>
                 </div>
              </div>';
}
add_shortcode('revaturepro_two_column_img_left','revaturepro_two_column_img_left_func');
function revaturepro_two_column_img_right_func($atts, $content=null){
				$a=shortcode_atts(array(
		'img'=>'',
		'title'=>'Default Title',
		'btn_txt'=>'Button Text',
		'btn_url'=>''
	), $atts);
	return'<div class="col-lg-6 col-md-6 col-sm-12 overflow-hidden padding-0 mob-right mob-right-unset height-320">
                  <div id="bootcamp">
                      <img class="business-img" src="'.wp_get_attachment_url($a['img']).'" />
                  </div>
              </div>
                <div class="col-lg-6 col-md-6 col-sm-12 text-left padding-50 rev-pro-bs-holder height-320">
                 <div class="text-right coding-bootcamp">
                     <h4 class="RevPro-Bootcamp-head">'.$a['title'].'</h4>
                      <p class="RevPro-Bootcamp-content">
                      '.$content.'
                  </p>
                  <a id="revature-online-btn" href="'.$a['btn_url'].'" class="white-read-btn margin-top-25">'.$a['btn_txt'].'<i class="fa fa-angle-right"></i></a>
                 </div>
              </div>';
}
add_shortcode('revaturepro_two_column_img_right','revaturepro_two_column_img_right_func');
function revaturepro_get_it_going_func($atts, $content=null){
	$a=shortcode_atts(array(
		'title'=>'Title',
		'btn_txt_1'=>'Button Text',
		'btn_url_1'=>'',
		'btn_txt_2'=>'Button Text',
		'form_header'=>'',
		'marketo_id'=>''
	), $atts);
	return'<section class="rev-pro-bs" id="apply">
      <div class="mob-container-unset">
         <div class="row no-margin">
               <div class="col-lg-12 col-md-12 col-sm-12 no-margin no-padding">
                <h3 class="margin-bottom-15">'.$a['title'].'</h3>
                <p class="margin-bottom-15 ins-cont">'.$content.'</p>
                   <a href="'.$a['btn_url_1'].'" class="white-read-btn margin-top-25 margin-right-15" target="_blank">'.$a['btn_txt_1'].'<i class="fa fa-angle-right"></i></a>
                    <a class="white-read-btn margin-top-25 fancybox-marketo" href="#inline">'.$a['btn_txt_2'].'<i class="fa fa-angle-right"></i></a>
               </div>
         </div>
     </div>
</section>
<div id="inline" class="principle-quick-content" style="display:none;">
	<div class="col-lg-12 col-xs-12"><h4 class="marketo-form-header">'.$a['form_header'].'</h4></div>
					<div class="row form-label-txt">
						<form id="b2bform" method="post" action="https://733-JWE-559.mktorest.com/rest">
						                        <div class="col-lg-12 col-xs-12 form-group">
							<label class="control-label" for="FirstName">First Name*</label>
                            <input class="shortfield-home form-control" type="text" name="FirstName" id="FirstName" placeholder="First Name" maxlength="50" required/>
							<span id="nameHelp" class="help-block" style="display:none;">Please enter first name.</span>
                        </div>
						<div class="col-lg-12 col-xs-12 form-group">
						<label class="control-label" for="LastName">Last Name*</label>
                            <input class="shortfield-home form-control" type="text" name="LastName" id="LastName"  placeholder="Last Name" maxlength="50" required/>
							<span id="nameHelp" class="help-block" style="display:none;">Please enter last name.</span>
                        </div>
						<div class="col-lg-12 col-xs-12 form-group">
						<label class="control-label" for="Email">Email*</label>
                            <input class="shortfield-home form-control"  type="email" name="Email" placeholder="Email" id="Email" maxlength="50" required/>
							<span id="emailHelp" class="help-block" style="display:none;">Please enter a valid email address.</span>
                        </div>
						<div class="col-lg-12 col-xs-12 form-group inline-no-padding" id="PhoneGroup">
						<label class="control-label col-xs-12" for="Phone1">Phone*</label>
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
							<div class="col-lg-12 col-xs-12 form-group inline-no-padding">
							<label class="control-label col-xs-12" for="GraduationMonth">Graduation Date*</label>
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
												<select class="shortfield-home form-control col-xs-6" id="GraduationYear" name="GraduationYear" required>
												<option value=""></option>
												<option value="2004">Prior to 2005</option>
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
												</select>
												<span class="help-block" id="GraduationYearHelp" style="display:none;">Please select the Year of your Graduation</span>
							</div>
							
                        </div>
                        <div class="col-lg-12 col-xs-12 form-group">
						<label class="control-label" for="WorkAuthorization">Work Authorization*</label>
                              <select class="shortfield-home form-control" name="WorkAuthorization" id="WorkAuthorization" required>
								<option value=""></option>
                                <option value="U.S. Citizen">U.S. Citizen</option>
								<option value="Green Card">Green Card</options>
								<option value="OPT">OPT</options>
								<option value="Other Visa">Other Visa</options>
                            </select>
							<span class="help-block" style="display:none;">Please select an option.</span>
                        </div>
						<div class="col-xs-12 form-group">
						<label class="control-label">Resume<span id="resume_star">*</span></label><br>
						<input type="file" id="ResumeUpload" name="ResumeUpload" class="filestyle" data-buttonBefore="true" data-buttonName="Orange-read-btn" data-icon="false">
					    <span id="fileHelp" class="help-block" style="display:none;">Please select a file to upload (pdf, docx, doc, rtf, txt).</span>
						<input type="hidden" name="FileBase64" id="FileBase64"/>
						<input type="hidden" name="FileExt" id="FileExt"/>
						</div>
                        <div class="col-lg-12 col-xs-12 text-center">
							<span class="orange-submit-btn" id="submitBtn"><input type="submit" value="SUBMIT"/><i class="fa fa-angle-right"></i></span>
							<img id="loading" style="display:none;" src="'.get_template_directory_uri().'/imgs/ajax-loader.gif"></img>
							<span class="help-block" style="display:none;" id="confirmMsg">There was an issue with your submission, please try again.</span>
                        </div>
						<div class="col-lg-12 col-xs-12 text-center">
							<span class="help-block"><small>Revature is committed to safeguarding your privacy. We will never sell or share your personal information. Our complete Privacy Policy is available <a href="/privacy-policy">here</a></small></span>
						</div>
                    </form>
                </div>
        </div>
		            <script src="//app-sj20.marketo.com/js/forms2/js/forms2.min.js"></script>
<form id="mktoForm_'.$a['marketo_id'].'" style="display:none;"></form>
<script>MktoForms2.loadForm("//app-sj20.marketo.com", "733-JWE-559", '.$a['marketo_id'].');</script>';
}
add_shortcode('revaturepro_get_it_going','revaturepro_get_it_going_func');

function revaturepro_get_it_going_one_func($atts, $content=null){
	$a=shortcode_atts(array(
		'title'=>'Title',
		'btn_txt_1'=>'Button Text',
		'btn_url_1'=>''
	), $atts);
	return'<section class="rev-pro-bs" id="apply">
      <div class="mob-container-unset">
         <div class="row no-margin">
               <div class="col-lg-12 col-md-12 col-sm-12 no-margin no-padding">
                <h3 class="margin-bottom-15">'.$a['title'].'</h3>
                <p class="margin-bottom-15 ins-cont">'.$content.'</p>
                   <a href="'.$a['btn_url_1'].'" class="white-read-btn margin-top-25 margin-right-15" target="_blank">'.$a['btn_txt_1'].'<i class="fa fa-angle-right"></i></a>
               </div>
         </div>
     </div>
</section>';
}
add_shortcode('revaturepro_get_it_going_one','revaturepro_get_it_going_one_func');

function revaturepro_faq_container_func($atts, $content=null){
		$a=shortcode_atts(array(
		'title'=>''
	), $atts);
	return' <section class="container" id="faq">
     <div class="margin-top-25">
     <h3 class="faq-head-txt">'.$a['title'].'</h3>
     </div>
     <div class="clear"></div>
      <div class="">
		   <ul class="faq">
        '.do_shortcode($content).'
			</ul>
	 </div>
 </section>';
}
add_shortcode('revaturepro_faq_container','revaturepro_faq_container_func');

function revaturepro_faq_marketo_container_func($atts, $content=null){
		$a=shortcode_atts(array(
		'title'=>'Title',
		'sub_title'=>'Title',
		'btn_txt'=>'Button Text',
		'marketo_code'=>''
	), $atts);
$htmlMarketo = str_replace('``', '"', $a['marketo_code']);
	return' <section class="container" id="faq">
     <div class="margin-top-25">
     <h3 class="faq-head-txt">'.$a['title'].'</h3>
     </div>
     <div class="clear"></div>
      <div class="">
		   <ul class="faq">
        '.do_shortcode($content).'
			</ul>
	 </div>
     <div class="faq-contact-contain">
         <h4 class="faq-contain-h3">'.$a['sub_title'].'</h4>
         <a href="#inline" class="Orange-read-btn margin-top-25 fancybox-marketo">'.$a['btn_txt'].'<i class="fa fa-angle-right"></i></a>
     </div>
 </section>
 			<div id="inline" class="principle-quick-content" style="display:none;">
			'.$htmlMarketo.'
        </div>';
}
add_shortcode('revaturepro_faq_marketo_container','revaturepro_faq_marketo_container_func');

function revaturepro_faq_item_func($atts, $content=null){
			$a=shortcode_atts(array(
		'title'=>'Title'
	), $atts);
	return'<li class="q showList"><img src="../wp-content/themes/revature/imgs/faq-actdown-arrow.svg"> <h4 class="cod-active">'.$a['title'].'</h4></li>
        <li class="a faq-content"><p>
		'.$content.'
		</p>          
         </li>';
}
add_shortcode('revaturepro_faq_item','revaturepro_faq_item_func');

function revaturepro_two_column_callout_func($atts, $content=null){
			$a=shortcode_atts(array(
		'title'=>'Title',
		'btn_txt'=>'Button Text',
		'btn_url'=>''
	), $atts);
	return'<section class="">
    <div class="row no-margin">
        <div class="col-lg-12 col-md-12 col-sm-12 no-padding-revaturepro">
            <div class="rev-pro-acd-ins">
                <div class="row margin-top-100">
                    <div class="col-lg-12 col-md-12 col-sm-12 margin-bottom-25 text-center">
                        <h4>'.$a['title'].'</h4>
                        <p class="">'.$content.'</p>
                        <span class="white-blank-btn "><a href="'.$a['btn_url'].'">'.$a['btn_txt'].'<i class="fa fa-chevron-circle-right"></i></a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>';
}
add_shortcode('revaturepro_two_column_callout','revaturepro_two_column_callout_func');

function corporate_header_func($atts, $content=null){
	$a=shortcode_atts(array(
		'title'=>'Title',
		'btn_txt'=>'Button Text',
		'btn_url'=>''
	), $atts);
	return'	<div class="corporate-hero">
	<div class="container">
		<div class="row">
			<div class="col-sm-7 col-sm-offset-4 col-xs-12 text-center">
				<h1>'.$a['title'].'</h1>
				<p>'.$content.'</p>
				<a class="white-yellow-btn corp fancybox-marketo" href="#inline">'.$a['btn_txt'].'<i class="fa fa-angle-right"></i></a></span>
			</div>
		</div>
	</div>
	</div>';
}
add_shortcode('corporate_header', 'corporate_header_func');

function corporate_sub_nav_func ($atts, $content=null){
	return'	<section class="revpro-sub-nav affix-top hidden-xs ">
		<div class="container corp-sticky-nav">
			
			<div class="">
    <nav class="navbar rev-pro-menu blog">
  
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav text-center" id="subnavigation-scroll">
         
                         <li><a href="#ourModel">OUR MODEL</a></li>
						 <li><a href="#benefit">BENEFITS</a></li>
						 <li><a href="#ourSuccess">OUR SUCCESS</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav> </div>
		</div>
	</section>';
}
add_shortcode('corporate_sub_nav', 'corporate_sub_nav_func');

function corporate_horizontal_steps_func ($atts, $content=null){
	$a=shortcode_atts(array(
		'title'=>'Title',
		'img_1'=>'',
		'img_2'=>'',
		'img_3'=>'',
		'img_4'=>'',
		'title_1'=>'Title',
		'txt_1'=>'Text',
		'title_2'=>'Title',
		'txt_2'=>'Text',
		'title_3'=>'Title',
		'txt_3'=>'Text',
		'title_4'=>'Title',
		'txt_4'=>'Text'
	), $atts);
	return'	<div class="horizontal-steps" id="ourModel">
		<div class="container">
			<div class="row text-center">
				<div class="col-sm-10 col-sm-offset-1">
					<h2>
						'.$a['title'].'
					</h2>
					<span class="RevPro-cont">
						'.$content.'
					</span>
				</div>
			</div>
			<div class="row margin-top-25">
				<div class="col-sm-12 hidden-xs">
					<img class="center-img img-responsive" src="../wp-content/themes/revature/imgs/horizontal_steps_4.png" />
				</div>
			</div>
			<div class="row text-center">
				<div class="col-sm-3">
					<img class="center-img visible-xs-block margin-top-50" src="'.wp_get_attachment_url($a['img_1']).'" />
					<h3 class="steps-header">
						'.$a['title_1'].'
					</h3>
					<p>
						'.$a['txt_1'].'
					<p>
				</div>
				<div class="col-sm-3">
				<img class="center-img visible-xs-block margin-top-50" src="'.wp_get_attachment_url($a['img_2']).'" />
					<h3 class="steps-header">
						'.$a['title_2'].'
					</h3>
					<p>
						'.$a['txt_2'].'
					<p>
				</div>
				<div class="col-sm-3">
				<img class="center-img visible-xs-block margin-top-50" src="'.wp_get_attachment_url($a['img_3']).'" />
					<h3 class="steps-header">
						'.$a['title_3'].'
					</h3>
					<p>
						'.$a['txt_3'].'
					<p>
				</div>
				<div class="col-sm-3">
				<img class="center-img visible-xs-block margin-top-50" src="'.wp_get_attachment_url($a['img_4']).'" />
					<h3 class="steps-header">
						'.$a['title_4'].'
					</h3>
					<p>
						'.$a['txt_4'].'
					<p>
				</div>
			</div>
		</div>
	</div>';
}
add_shortcode('corporate_horizontal_steps', 'corporate_horizontal_steps_func');

function corporate_benefits_orange_header_func($atts, $content=null){
	$a=shortcode_atts(array(
		'title'=>'Title'
	), $atts);
	return '<section class="corp-benefits-header" id="benefit">
      <div class="container">
         <div class="row no-margin">
               <div class="col-lg-12 col-md-12 col-sm-12">
                <h3 class="margin-bottom-25">'.$a['title'].'</h3>
               </div>
         </div>
     </div>
</section>';
}
add_shortcode('corporate_benefits_orange_header','corporate_benefits_orange_header_func');

function corporate_benefits_orange_items_func($atts, $content=null){
	$a=shortcode_atts(array(
		'icon_1'=>'',
		'title_1'=>'Title',
		'content_1'=>'Text',
		'icon_2'=>'',
		'title_2'=>'Title',
		'content_2'=>'Text',
		'icon_3'=>'',
		'title_3'=>'Title',
		'content_3'=>'Text',
		'icon_4'=>'',
		'title_4'=>'Title',
		'content_4'=>'Text',
		'icon_5'=>'',
		'title_5'=>'Title',
		'content_5'=>'Text',
		'icon_6'=>'',
		'title_6'=>'Title',
		'content_6'=>'Text',
	), $atts);
	return'<section class="corp-benefits-content hidden-xs">
     <div class="row text-left no-margin">
         <div class="col-lg-4 col-md-4 col-sm-6 corp-benefits-box">
             <div class="">
                 <span class="rev-benefit-icon">
                     <img src="'.wp_get_attachment_url($a['icon_1']).'" />
                 </span>
                 <h3 class="rev-benefit-title">
                     <span class="rev-bebefit-number">1</span>
                    '.$a['title_1'].'
                 </h3>
                 <p class="rev-benefit-content">
                     '.$a['content_1'].'
                 </p>
             </div>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-6 corp-benefits-alt">
                <div class="">
                 <span class="rev-benefit-icon">
                     <img src="'.wp_get_attachment_url($a['icon_2']).'" />
                 </span>
                 <h3 class="rev-benefit-title">
                     <span class="rev-bebefit-number">2</span>
                     '.$a['title_2'].'
                 </h3>
                 <p class="rev-benefit-content">
                     '.$a['content_2'].'
                 </p>
             </div>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-6 corp-benefits-box">
             <div class="">
                 <span class="rev-benefit-icon">
                     <img src="'.wp_get_attachment_url($a['icon_3']).'" />
                 </span>
                 <h3 class="rev-benefit-title">
                     <span class="rev-bebefit-number">3</span>
                    '.$a['title_3'].'
                 </h3>
                 <p class="rev-benefit-content">
                     '.$a['content_3'].'
                 </p>
             </div>
         </div>
  <div class="col-lg-4 col-md-4 col-sm-6 corp-benefits-alt">
             <div class="">
                 <span class="rev-benefit-icon">
                     <img src="'.wp_get_attachment_url($a['icon_4']).'" />
                 </span>
                 <h3 class="rev-benefit-title">
                     <span class="rev-bebefit-number">4</span>
                     '.$a['title_4'].'
                 </h3>
                 <p class="rev-benefit-content">
                    '.$a['content_4'].'
                 </p>
             </div>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-6 corp-benefits-box">
                <div class="">
                 <span class="rev-benefit-icon">
                     <img src="'.wp_get_attachment_url($a['icon_5']).'" />
                 </span>
                 <h3 class="rev-benefit-title">
                     <span class="rev-bebefit-number">5</span>
                     '.$a['title_5'].'
                 </h3>
                 <p class="rev-benefit-content">
                     '.$a['content_5'].'
                 </p>
             </div>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-6 corp-benefits-alt">
             <div class="">
                 <span class="rev-benefit-icon">
                     <img src="'.wp_get_attachment_url($a['icon_6']).'" />
                 </span>
                 <h3 class="rev-benefit-title">
                     <span class="rev-bebefit-number">6</span>
                     '.$a['title_6'].'
                 </h3>
                 <p class="rev-benefit-content">
					'.$a['content_6'].'
                 </p>
             </div>
         </div>
     </div>
</section>
<section class="revpro-center visible-xs-block">
     <div class="row text-left no-margin" id="revPro">
         <div class="col-lg-4 col-md-4 col-sm-12 corp-benefits-box">
                 <div class="rev-benefit-icon" style="display:none;">
                     <img src="'.wp_get_attachment_url($a['icon_1']).'" />
                 </div>
                 <h3 class="rev-benefit-title">
                     <span class="rev-bebefit-number">1</span>
                     '.$a['title_1'].'
					 <span class="arrow">					
					 <img src="../wp-content/themes/revature/imgs/faq-down-arrow.svg">
					</span>
                 </h3>
                 <p class="rev-benefit-content" style="display:none;">
					'.$a['content_1'].'
                 </p>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-12 corp-benefits-box">
               <div class="rev-benefit-icon" style="display:none;">
                     <img src="'.wp_get_attachment_url($a['icon_2']).'"/>
                 </div>
                 <h3 class="rev-benefit-title">
                     <span class="rev-bebefit-number">2</span>
                     '.$a['title_2'].'
					 					 <span class="arrow">					
					 <img src="../wp-content/themes/revature/imgs/faq-down-arrow.svg">
					</span>
                 </h3>
                 <p class="rev-benefit-content" style="display:none;">
                     '.$a['content_2'].'
                 </p>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-12 corp-benefits-box">
                 <div class="rev-benefit-icon" style="display:none;">
                     <img src="'.wp_get_attachment_url($a['icon_3']).'" />
                 </div>
                 <h3 class="rev-benefit-title">
                     <span class="rev-bebefit-number">3</span>
                   '.$a['title_3'].'
										 <span class="arrow">					
					 <img src="../wp-content/themes/revature/imgs/faq-down-arrow.svg">
					</span>
                 </h3>
                 <p class="rev-benefit-content" style="display:none;">
                     '.$a['content_3'].'
                 </p>
         </div>
  <div class="col-lg-4 col-md-4 col-sm-12 corp-benefits-box">
                 <div class="rev-benefit-icon" style="display:none;">
                     <img src="'.wp_get_attachment_url($a['icon_4']).'" />
                 </div>
                 <h3 class="rev-benefit-title">
                     <span class="rev-bebefit-number">4</span>
                     '.$a['title_4'].'
					 					 <span class="arrow">					
					 <img src="../wp-content/themes/revature/imgs/faq-down-arrow.svg">
					</span>
                 </h3>
                 <p class="rev-benefit-content" style="display:none;">
                    '.$a['content_4'].'
                 </p>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-12 corp-benefits-box">
                 <div class="rev-benefit-icon" style="display:none;">
                     <img src="'.wp_get_attachment_url($a['icon_5']).'" />
                 </div>
                 <h3 class="rev-benefit-title">
                     <span class="rev-bebefit-number">5</span>
                     '.$a['title_5'].'
					 					 <span class="arrow">					
					 <img src="../wp-content/themes/revature/imgs/faq-down-arrow.svg">
					</span>
                 </h3>
                 <p class="rev-benefit-content" style="display:none;">
                     '.$a['content_5'].'
                 </p>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-12 corp-benefits-box">
                 <div class="rev-benefit-icon" style="display:none;">
                     <img src="'.wp_get_attachment_url($a['icon_6']).'" />
                 </div>
                 <h3 class="rev-benefit-title">
                     <span class="rev-bebefit-number">6</span>
                     '.$a['title_6'].'
					 					 <span class="arrow">					
					 <img src="../wp-content/themes/revature/imgs/faq-down-arrow.svg">
					</span>
                 </h3>
                 <p class="rev-benefit-content" style="display:none;">
					'.$a['content_6'].'
                 </p>
         </div>
     </div>
</section>';
}

add_shortcode('corporate_benefits_orange_items','corporate_benefits_orange_items_func');

function corporate_quick_facts_func($atts, $content=null){
	$a=shortcode_atts(array(
		'title'=>'Title',
		'header_1'=>'Header',
		'content_1'=>'Content',
		'header_2'=>'Header',
		'content_2'=>'Content',
		'header_3'=>'Header',
		'content_3'=>'Content',
	), $atts);
	
	$returnHTML = '<div class="corp-results" id="corp-results">
	<div class="container">
		<div class="row">
			<h2>
				'.$a['title'].'
			</h2>
		</div>
		<div class="row margin-top-50 text-left corp-quick-facts">
			<div class="col-sm-6 col-sm-offset-6">
				<h2>
					'.$a['header_1'].'
				</h2>
				<p>
					'.$a['content_1'].'
				</p>
			</div>
			<div class="col-sm-6 col-sm-offset-6 margin-top-25">
				<h2>
					'.$a['header_2'].'
				</h2>
				<p>
					'.$a['content_2'].'
				</p>
			</div>
			<div class="col-sm-6 col-sm-offset-6 margin-top-25">
				<h2>
					'.$a['header_3'].'
				</h2>
				<p>
					'.$a['content_3'].'
				</p>
			</div>
		</div>
	</div>
</div>';
 
 return $returnHTML;
}
add_shortcode('corporate_quick_facts', 'corporate_quick_facts_func');

function corporate_quote_func($atts, $content=null){
	$a=shortcode_atts(array(
		'title'=>'Title',
		'btn_url'=>'',
		'btn_txt'=>'Text',
		'quote'=>'Quote'
	), $atts);
	
	$returnHTML = '<div class="corp-quote">
	<div class="container">
		<div class="row">
			<div class="col-sm-7 col-xs-12">
				<h2>
					'.$a['title'].'
				</h2>
				<p>
					'.$content.'
				</p>
				<a href="'.$a['btn_url'].'" class="white-read-btn margin-top-10">'.$a['btn_txt'].'<i class="fa fa-angle-right"></i></a>
			</div>
			<div class="col-sm-1 col-xs-12 vertical-line-container">
				<div class="vertical-line hidden-xs"></div>
				<hr class="visible-xs-block">
				<!-- <div class="vertical-line"></div> -->
			</div>
			
			<div class="col-sm-4 col-xs-12">
				<h3>
					'.$a['quote'].'
				</h3>
			</div>
		</div>
	</div>
</div>';
 
 return $returnHTML;
}
add_shortcode('corporate_quote', 'corporate_quote_func');

function corporate_pipeline_func($atts, $content=null){
	$a=shortcode_atts(array(
		'title'=>'Title',
		'btn_txt'=>'Button Text',
		'btn_url'=>''
	), $atts);
	return'<div class="corp-pipeline">
	<div class="container">
		<div class="row text-center">
			<div class="col-sm-8 col-sm-offset-2">
				<h2>
					'.$a['title'].'
				</h2>
				<p>
				'.$content.'
				</p>
				<a href="'.$a['btn_url'].'" class="Orange-read-btn margin-top-25">'.$a['btn_txt'].'<i class="fa fa-angle-right"></i></a>
			</div>
		</div>
	</div>
</div>';
}
add_shortcode('corporate_pipeline', 'corporate_pipeline_func');

function corporate_listing_func($atts, $content=null){
	$a=shortcode_atts(array(
		'title'=>'Title',
		'txt'=>'Sub Header Text'
	), $atts);
	$items = explode(",", $content);
	$itemsDesktop = array_chunk($items, ceil(count($items)/3));
	$desktopString0 = implode('', $itemsDesktop[0]);
	$desktopString1 = implode('', $itemsDesktop[1]);
	$desktopString2 = implode('', $itemsDesktop[2]);
	$itemsMobile = array_chunk($items, ceil(count($items)/2));
	return'<div class="corp-success-parallax" id="ourSuccess">
	<div class="corp-success-parallax-content text-center">
			<h2 class="margin-top-25">'.$a['title'].'</h2>
			<h3>'.$a['txt'].'</h3>
			<div class="hidden-xs hidden-sm">
			<div class="corp-success-column-left">
			<p>
			'.$desktopString0.'
			</p>
			</div>
			<div class="corp-success-column-center">
			<p>
			'.$desktopString1.'
</p>
			</div>
			<div class="corp-success-column-right">
			<p>
'.$desktopString2.'
</p>
			</div>
	</div>
	<div class="visible-xs-block visible-sm-block">
	<div class="corp-success-column-left">
	<p>
	'.implode('<br/>', $itemsMobile[0]).'
</p>
	</div>
	<div class="corp-success-column-right">
	<p>
	'.implode('<br/>', $itemsMobile[1]).'
</p>
	</div>
	</div>
</div>
</div>';
}
add_shortcode('corporate_listing', 'corporate_listing_func');

function cuny_faq_header_func($atts, $content=null){
	$a=shortcode_atts(array(
	), $atts);
	return '<div class="quickcont-bg" style="height:auto;">
	<div class="faq-back"><a href="/cuny" class="white-read-btn"><i class="fa fa-angle-left"></i>REVATURE@CUNY</a></div>
	<h2>
	FAQ
	</h2>

	</div>';

}
add_shortcode('cuny_faq_header', 'cuny_faq_header_func');

function thank_you_header_func($atts, $content=null){
	$a=shortcode_atts(array(
	), $atts);
	return '<div class="quickcont-bg" style="height:auto;">
	<div class="faq-back"><a href="/corporate-partners-plugin-test" class="white-read-btn"><i class="fa fa-angle-left"></i>BACK TO REVATURE</a></div>
	<h2>
	Thank You
	</h2>
	<p class="margin-bottom-15 acd-part-today-cont">'. $content .'</p>
	</div>';

}
add_shortcode('thank_you_header', 'thank_you_header_func');

function cuny_faq_bottom_func($atts, $content=null){
	$a=shortcode_atts(array(
	), $atts);
	return '<section class="cuny-faq" style="text-align:center;">
	<a href="/cuny-faq"><h3><i class="fa fa-angle-left" aria-hidden="true"></i>FAQ</h3></a>
</section>';

}
add_shortcode('cuny_faq_bottom', 'cuny_faq_bottom_func');



/*================================================vc_map() functions=======================================*/
/*=================vc_map() allows for shortcodes to be mapped to Visual Composer to be used as Visual Composer ELements==========================*/

add_action('vc_before_init', 'shortcode_integrationWithVC');

function shortcode_integrationWithVC(){
	vc_map(array(
		"name" => __("WitNY Apply Now Form", "revature"),
		"base" => "witny_form",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"params" => array(
			array(
				"type"=>"textarea_html",
				"heading"=>__("Form (RFI) - Sub Header", "revature"),
				"param_name"=>"content",
				"description"=>__("Text below Form (RFI) - Header", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Form (RFI) - Title", "revature"),
				"param_name"=>"title",
				"description"=>__("Title Header", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Marketo Form ID", "revature"),
				"param_name"=>"marketo_id",
				"description"=>__("Marketo Form ID", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Button Text", "revature"),
				"param_name"=>"btn_txt",
				"description"=>__("Text for Button", "revature")
			)
		)
	));
	vc_map(array(
		"name" => __("Universities - Apply Now Banner", "revature"),
		"base" => "universities_apply",
		"content_element" => true,
		"show_settings_on_create"=>true,
		"category" => __( "Revature Shortcodes", "revature"),
		"params" => array(
			array(
				"type" => "textarea_html",
				"heading" => __("Header Text", "revature"),
				"param_name" => "content",
				"description" => __("Text for the Header", "revature")
			),
			array(
				"type" => "textfield",
				"heading" => __("Button Text", "revature"),
				"param_name" => "btn_txt",
				"description" => __("Button Text", "revature")
			)
		)
	));
		vc_map(array(
			"name"=>__("Universities - Inquire Form", "revature"),
			"base"=>"universities_form_banner",
			"content_element"=>true,
			"category"=>__("Revature Shortcodes", "revature"),
			"show_settings_on_create"=>true,
			"params"=>array(
				array(
					"type"=>"textfield",
					"heading"=>__("Title", "revature"),
					"param_name"=>"title",
					"description"=>__("Title", "revature")
				),
				array(
					"type"=>"textarea_html",
					"heading"=>__("Text for Paragraph", "revature"),
					"param_name"=>"content",
					"description"=>__("Text for Paragraph", "revature")
				),
				array(
					"type"=>"textfield",
					"heading"=>__("Button Text", "revature"),
					"param_name"=>"btn_txt",
					"description"=>__("Button Text", "revature")
				),
				array(
					"type"=>"textfield",
					"heading"=>__("Marketo ID", "revature"),
					"param_name"=>"marketo_id",
					"description"=>__("ID for Marketo Form", "revature")
				),
				array(
					"type"=>"textfield",
					"heading"=>__("Form Header", "revature"),
					"param_name"=>"form_header",
					"description"=>__("Form Header", "revature")
				)
			),
		));
			vc_map(array(
		"name" => __("CUNY - FAQ Header", "revature"),
		"base" => "cuny_faq_header",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"params" => array(
		)
	));
				vc_map(array(
		"name" => __("Thank You - Header", "revature"),
		"base" => "thank_you_header",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"params" => array(
			array(
				"type"=>"textarea_html",
				"heading"=>__("Sub Heading", "revature"),
				"param_name"=>"content",
				"description"=>__("Sub Heading", "revature")
			)
		)
	));
	
			vc_map(array(
		"name" => __("CUNY - FAQ Link", "revature"),
		"base" => "cuny_faq_bottom",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"params" => array(
		)
	));
	
	/*================================RevaturePRO Sign Up Form======================*/
		vc_map(array(
		"name" => __("RevaturePRO Sign Up Form", "revature"),
		"base" => "revpro_signup",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"params" => array(
			array(
				"type"=>"textfield",
				"heading"=>__("Form (RFI) - Header", "revature"),
				"param_name"=>"form_header",
				"description"=>__("Header for RFI", "revature")
			),
			array(
				"type"=>"textarea_html",
				"heading"=>__("Form (RFI) - Sub Header", "revature"),
				"param_name"=>"content",
				"description"=>__("Text below Form (RFI) - Header", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Marketo Form ID", "revature"),
				"param_name"=>"marketo_id",
				"description"=>__("Marketo Form ID", "revature")
			)
		)
	));
	
	vc_map(array(
		"name" => __("RevaturePRO Sign Up Form [India]", "revature"),
		"base" => "revpro_signup_india",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"params" => array(
			array(
				"type"=>"textfield",
				"heading"=>__("Form (RFI) - Header", "revature"),
				"param_name"=>"form_header",
				"description"=>__("Header for RFI", "revature")
			),
			array(
				"type"=>"textarea_html",
				"heading"=>__("Form (RFI) - Sub Header", "revature"),
				"param_name"=>"content",
				"description"=>__("Text below Form (RFI) - Header", "revature")
			)
		)
	));
	/*================================END RevaturePRO Sign Up Form======================*/
	
	/*================================================Corporate Partners page==============================================*/
	
		vc_map(array(
		"name" => __("Corporate Partners - Company Listing", "revature"),
		"base" => "corporate_listing",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"params" => array(
			array(
				"type"=>"textfield",
				"heading"=>__("Header", "revature"),
				"param_name"=>"title",
				"description"=>__("Header Text", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Sub Heading Text", "revature"),
				"param_name"=>"txt",
				"description"=>__("Sub Heading Text", "revature")
			),
			array(
				"type"=>"textarea_html",
				"heading"=>__("List of Companies", "revature"),
				"param_name"=>"content",
				"description"=>__("Please list all companies separated by a comma (no spaces please)", "revature")
			)
		)
	));
	vc_map(array(
		"name" => __("Corporate Partners - Quote", "revature"),
		"base" => "corporate_quote",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"params" => array(
			array(
				"type"=>"textfield",
				"heading"=>__("Header", "revature"),
				"param_name"=>"title",
				"description"=>__("Header Text", "revature")
			),
			array(
				"type"=>"textarea_html",
				"heading"=>__("Sub Header", "revature"),
				"param_name"=>"content",
				"description"=>__("Sub Header", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Button Text", "revature"),
				"param_name"=>"btn_txt",
				"description"=>__("Button Text", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Button URL", "revature"),
				"param_name"=>"btn_url",
				"description"=>__("Button URL", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Quote", "revature"),
				"param_name"=>"quote",
				"description"=>__("Quote", "revature")
			)
		)
	));
	

	vc_map(array(
		"name" => __("Corporate Partners - Quick Facts", "revature"),
		"base" => "corporate_quick_facts",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"params" => array(
			array(
				"type"=>"textfield",
				"heading"=>__("Header", "revature"),
				"param_name"=>"title",
				"description"=>__("Header Text", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Quick Fact 1", "revature"),
				"param_name"=>"header_1",
				"description"=>__("Quick Fact 1", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Quick Fact 1 - Text", "revature"),
				"param_name"=>"content_1",
				"description"=>__("Quick Fact 1 - Text", "revature")
			),
						array(
				"type"=>"textfield",
				"heading"=>__("Quick Fact 2", "revature"),
				"param_name"=>"header_2",
				"description"=>__("Quick Fact 2", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Quick Fact 2 - Text", "revature"),
				"param_name"=>"content_2",
				"description"=>__("Quick Fact 2 - Text", "revature")
			),
						array(
				"type"=>"textfield",
				"heading"=>__("Quick Fact 3", "revature"),
				"param_name"=>"header_3",
				"description"=>__("Quick Fact 3", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Quick Fact 3 - Text", "revature"),
				"param_name"=>"content_3",
				"description"=>__("Quick Fact 3 - Text", "revature")
			)
		)
	));

	vc_map(array(
		"name" => __("Corporate Partners - Benefits: Orange Header", "revature"),
		"base" => "corporate_benefits_orange_header",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"params" => array(
			array(
				"type"=>"textfield",
				"heading"=>__("Header", "revature"),
				"param_name"=>"title",
				"description"=>__("Header Text", "revature")
			)
		)
	));
	vc_map(array(
		"name" => __("Corporate Partners - Benefits: Orange Items", "revature"),
		"base" => "corporate_benefits_orange_items",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"params" => array(
			array(
				"type"=>"attach_image",
				"heading"=>__("Icon 1", "revature"),
				"param_name"=>"icon_1",
				"description"=>__("Icon - 1", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Header 1", "revature"),
				"param_name"=>"title_1",
				"description"=>__("Header - 1", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Text 1", "revature"),
				"param_name"=>"content_1",
				"description"=>__("Text - 1", "revature")
			),
						array(
				"type"=>"attach_image",
				"heading"=>__("Icon 2", "revature"),
				"param_name"=>"icon_2",
				"description"=>__("Icon - 2", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Header 2", "revature"),
				"param_name"=>"title_2",
				"description"=>__("Header - 2", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Text 2", "revature"),
				"param_name"=>"content_2",
				"description"=>__("Text - 2", "revature")
			),
						array(
				"type"=>"attach_image",
				"heading"=>__("Icon 3", "revature"),
				"param_name"=>"icon_3",
				"description"=>__("Icon - 3", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Header 3", "revature"),
				"param_name"=>"title_3",
				"description"=>__("Header - 3", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Text 3", "revature"),
				"param_name"=>"content_3",
				"description"=>__("Text - 3", "revature")
			),
									array(
				"type"=>"attach_image",
				"heading"=>__("Icon 4", "revature"),
				"param_name"=>"icon_4",
				"description"=>__("Icon - 4", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Header 4", "revature"),
				"param_name"=>"title_4",
				"description"=>__("Header - 4", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Text 4", "revature"),
				"param_name"=>"content_4",
				"description"=>__("Text - 4", "revature")
			),
									array(
				"type"=>"attach_image",
				"heading"=>__("Icon 5", "revature"),
				"param_name"=>"icon_5",
				"description"=>__("Icon - 5", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Header 5", "revature"),
				"param_name"=>"title_5",
				"description"=>__("Header - 5", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Text 5", "revature"),
				"param_name"=>"content_5",
				"description"=>__("Text - 5", "revature")
			),
									array(
				"type"=>"attach_image",
				"heading"=>__("Icon 6", "revature"),
				"param_name"=>"icon_6",
				"description"=>__("Icon - 6", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Header 6", "revature"),
				"param_name"=>"title_6",
				"description"=>__("Header - 6", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Text 6", "revature"),
				"param_name"=>"content_6",
				"description"=>__("Text - 6", "revature")
			),
		)
	));
	vc_map(array(
		"name" => __("Corporate Partners - Horizontal Steps", "revature"),
		"base" => "corporate_horizontal_steps",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"params" => array(
			array(
				"type"=>"textfield",
				"heading"=>__("Header", "revature"),
				"param_name"=>"title",
				"description"=>__("Header", "revature")
			),
			array(
				"type"=>"textarea_html",
				"heading"=>__("Sub Header", "revature"),
				"param_name"=>"content",
				"description"=>__("Sub Header", "revature")
			),
			array(
				"type"=>"attach_image",
				"heading"=>__("Image - 1", "revature"),
				"param_name"=>"img_1",
				"description"=>__("Image - 1", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Title 1", "revature"),
				"param_name"=>"title_1",
				"description"=>__("Title 1", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Text 1", "revature"),
				"param_name"=>"txt_1",
				"description"=>__("Text 1", "revature")
			),
						array(
				"type"=>"attach_image",
				"heading"=>__("Image - 2", "revature"),
				"param_name"=>"img_2",
				"description"=>__("Image - 2", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Title 2", "revature"),
				"param_name"=>"title_2",
				"description"=>__("Title 2", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Text 2", "revature"),
				"param_name"=>"txt_2",
				"description"=>__("Text 2", "revature")
			),
						array(
				"type"=>"attach_image",
				"heading"=>__("Image - 3", "revature"),
				"param_name"=>"img_3",
				"description"=>__("Image - 3", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Title 3", "revature"),
				"param_name"=>"title_3",
				"description"=>__("Title 3", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Text 3", "revature"),
				"param_name"=>"txt_3",
				"description"=>__("Text 3", "revature")
			),
						array(
				"type"=>"attach_image",
				"heading"=>__("Image - 4", "revature"),
				"param_name"=>"img_4",
				"description"=>__("Image - 4", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Title 4", "revature"),
				"param_name"=>"title_4",
				"description"=>__("Title 4", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Text 4", "revature"),
				"param_name"=>"txt_4",
				"description"=>__("Text 4", "revature")
			)
		)
	));
		vc_map(array(
		"name" => __("Corporate Partners - Sub Nav", "revature"),
		"base" => "corporate_sub_nav",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
	));
	vc_map(array(
		"name" => __("Corporate Partners - Header", "revature"),
		"base" => "corporate_header",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"params" => array(
			array(
				"type"=>"textfield",
				"heading"=>__("Title", "revature"),
				"param_name"=>"title",
				"description"=>__("Title", "revature")
			),
			array(
				"type"=>"textarea_html",
				"heading"=>__("Content", "revature"),
				"param_name"=>"content",
				"description"=>__("Content", "revature")
			),
						array(
				"type"=>"textfield",
				"heading"=>__("Button Text", "revature"),
				"param_name"=>"btn_txt",
				"description"=>__("Button Text", "revature")
			),
						array(
				"type"=>"textfield",
				"heading"=>__("Button URL", "revature"),
				"param_name"=>"btn_url",
				"description"=>__("Button URL", "revature")
			)
		)
	));
		vc_map(array(
		"name" => __("Corporate Partners - Pipeline Section", "revature"),
		"base" => "corporate_pipeline",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"params" => array(
			array(
				"type"=>"textfield",
				"heading"=>__("Title", "revature"),
				"param_name"=>"title",
				"description"=>__("Title", "revature")
			),
			array(
				"type"=>"textarea_html",
				"heading"=>__("Content", "revature"),
				"param_name"=>"content",
				"description"=>__("Content", "revature")
			),
						array(
				"type"=>"textfield",
				"heading"=>__("Button Text", "revature"),
				"param_name"=>"btn_txt",
				"description"=>__("Button Text", "revature")
			),
						array(
				"type"=>"textfield",
				"heading"=>__("Button URL", "revature"),
				"param_name"=>"btn_url",
				"description"=>__("Button URL", "revature")
			)
		)
	));
	/*================================================RevaturePro page==============================================*/
		vc_map(array(
		"name" => __("RevaturePro - 2 Column Bottom Callout", "revature"),
		"base" => "revaturepro_two_column_callout",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"params" => array(
			array(
				"type"=>"textfield",
				"heading"=>__("Title", "revature"),
				"param_name"=>"title",
				"description"=>__("Title", "revature")
			),
			array(
				"type"=>"textarea_html",
				"heading"=>__("Content", "revature"),
				"param_name"=>"content",
				"description"=>__("Content", "revature")
			),
						array(
				"type"=>"textfield",
				"heading"=>__("Button Text", "revature"),
				"param_name"=>"btn_txt",
				"description"=>__("Button Text", "revature")
			),
						array(
				"type"=>"textfield",
				"heading"=>__("Button URL", "revature"),
				"param_name"=>"btn_url",
				"description"=>__("Button URL", "revature")
			)
		)
	));
	vc_map(array(		
		"name" => __("Housing - Header Banner", "revature"),		
		"base" => "housing_header_hero",		
		"content_element" => true,		
		"show_settings_on_create"=>true,		
		"category" => __( "Revature Shortcodes", "revature"),		
		"params" => array(		
			array(		
				"type"=>"textfield",		
				"heading"=>__("Header Title", "revature"),		
				"param_name"=>"title",		
				"description"=>__("Header Title", "revature")		
			),		
					
		)		
	));
			vc_map(array(
		"name" => __("Housing - Container", "revature"),
		"base" => "housing_container",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"as_parent"=>array("only"=>"housing_header, housing_row"),
		"is_container"=>true,
		"params" => array(
		)
	));
		vc_map(array(
		"name" => __("Housing - Header", "revature"),
		"base" => "housing_header",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"as_child"=>array("only"=>"housing_container"),
		"params" => array(
			array(
				"type"=>"textfield",
				"heading"=>__("Header", "revature"),
				"param_name"=>"header",
				"description"=>__("Header", "revature")
			),
			array(
				"type"=>"textarea_html",
				"heading"=>__("Subheader", "revature"),
				"param_name"=>"content",
				"description"=>__("Subheader", "revature")
			)
		)
	));
			vc_map(array(
		"name" => __("Housing - Image", "revature"),
		"base" => "housing_row",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"as_child"=>array("only"=>"housing_container"),
		"params" => array(
			array(
				"type"=>"attach_image",
				"heading"=>__("Image", "revature"),
				"param_name"=>"img",
				"description"=>__("Image", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Caption", "revature"),
				"param_name"=>"caption",
				"description"=>__("Caption when user hovers over image", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Link URL", "revature"),
				"param_name"=>"url",
				"description"=>__("Link URL", "revature")
			)
		)
	));
	vc_map(array(
		"name" => __("RevaturePro - FAQ: Item", "revature"),
		"base" => "revaturepro_faq_item",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"as_child"=>array("only"=>"revaturepro_faq_container, revature_faq_item"),
		"params" => array(
			array(
				"type"=>"textfield",
				"heading"=>__("Title", "revature"),
				"param_name"=>"title",
				"description"=>__("Title", "revature")
			),
			array(
				"type"=>"textarea_html",
				"heading"=>__("Content", "revature"),
				"param_name"=>"content",
				"description"=>__("Content", "revature")
			)
		)
	));
			vc_map(array(
		"name" => __("RevaturePro - FAQ with Marketo: Container", "revature"),
		"base" => "revaturepro_faq_marketo_container",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"as_parent"=>array("only"=>"revaturepro_faq_item"),
		"is_container"=>true,
		"params" => array(
			array(
				"type"=>"textfield",
				"heading"=>__("Title", "revature"),
				"param_name"=>"title",
				"description"=>__("Title", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Sub Title", "revature"),
				"param_name"=>"sub_title",
				"description"=>__("Sub Title", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Button Text", "revature"),
				"param_name"=>"btn_txt",
				"description"=>__("Button Text", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Marketo Code Snippet", "revature"),
				"param_name"=>"marketo_code",
				"description"=>__("Marketo Code Snippet including script tag", "revature")
			)
		)
	));
				vc_map(array(
		"name" => __("RevaturePro - FAQ: Container", "revature"),
		"base" => "revaturepro_faq_container",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"as_parent"=>array("only"=>"revaturepro_faq_item"),
		"is_container"=>true,
		"params" => array(
			array(
				"type"=>"textfield",
				"heading"=>__("Title", "revature"),
				"param_name"=>"title",
				"description"=>__("Title", "revature")
			),
		)
	));
	
		vc_map(array(
		"name" => __("RevaturePro - Get IT Going: Blue (2 Buttons)", "revature"),
		"base" => "revaturepro_get_it_going",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"params" => array(
			array(
				"type"=>"textfield",
				"heading"=>__("Title", "revature"),
				"param_name"=>"title",
				"description"=>__("Title", "revature")
			),
			array(
				"type"=>"textarea_html",
				"heading"=>__("Sub Heading", "revature"),
				"param_name"=>"content",
				"description"=>__("Sub Heading", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Button Text", "revature"),
				"param_name"=>"btn_txt_1",
				"description"=>__("Button Text", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Button URL", "revature"),
				"param_name"=>"btn_url_1",
				"description"=>__("Relative URL", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Button Text", "revature"),
				"param_name"=>"btn_txt_2",
				"description"=>__("Button Text", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Form Header", "revature"),
				"param_name"=>"form_header",
				"description"=>__("Header above Form", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Marketo ID", "revature"),
				"param_name"=>"marketo_id",
				"description"=>__("ID for Marketo Form", "revature")
			)
		)
	));
	vc_map(array(
		"name" => __("Corporate Partner - Schedule Demo Form ", "revature"),
		"base" => "corporate_partner_schedule_form",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"params" => array(
			
			array(
				"type"=>"textarea_html",
				"heading"=>__("Sub Heading", "revature"),
				"param_name"=>"content",
				"description"=>__("Sub Heading", "revature")
			),
		
			array(
				"type"=>"textfield",
				"heading"=>__("Button Text", "revature"),
				"param_name"=>"btn_txt_2",
				"description"=>__("Button Text", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Form Header", "revature"),
				"param_name"=>"form_header",
				"description"=>__("Header above Form", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Marketo ID", "revature"),
				"param_name"=>"marketo_id",
				"description"=>__("ID for Marketo Form", "revature")
			)
		)
	));
			vc_map(array(
		"name" => __("RevaturePro - Get IT Going: Blue (1 Button)", "revature"),
		"base" => "revaturepro_get_it_going_one",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"params" => array(
			array(
				"type"=>"textfield",
				"heading"=>__("Title", "revature"),
				"param_name"=>"title",
				"description"=>__("Title", "revature")
			),
			array(
				"type"=>"textarea_html",
				"heading"=>__("Sub Heading", "revature"),
				"param_name"=>"content",
				"description"=>__("Sub Heading", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Button Text", "revature"),
				"param_name"=>"btn_txt_1",
				"description"=>__("Button Text", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Button URL", "revature"),
				"param_name"=>"btn_url_1",
				"description"=>__("Relative URL", "revature")
			)
		)
	));
	vc_map(array(
		"name" => __("RevaturePro - 2 Column: Image Right", "revature"),
		"base" => "revaturepro_two_column_img_right",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"as_child"=>array("only"=>"revaturepro_two_column_container"),
		"params" => array(
			array(
				"type"=>"attach_image",
				"heading"=>__("Image", "revature"),
				"param_name"=>"img",
				"description"=>__("Select Image", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Title", "revature"),
				"param_name"=>"title",
				"description"=>__("Title", "revature")
			),
			array(
				"type"=>"textarea_html",
				"heading"=>__("Text", "revature"),
				"param_name"=>"content",
				"description"=>__("Text", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Button Text", "revature"),
				"param_name"=>"btn_txt",
				"description"=>__("Button Text", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Button URL", "revature"),
				"param_name"=>"btn_url",
				"description"=>__("URL Destination", "revature")
			)
		)
	));
		vc_map(array(
		"name" => __("RevaturePro - 2 Column: Image Left", "revature"),
		"base" => "revaturepro_two_column_img_left",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"as_child"=>array("only"=>"revaturepro_two_column_container"),
		"params" => array(
			array(
				"type"=>"attach_image",
				"heading"=>__("Image", "revature"),
				"param_name"=>"img",
				"description"=>__("Select Image", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Title", "revature"),
				"param_name"=>"title",
				"description"=>__("Title", "revature")
			),
			array(
				"type"=>"textarea_html",
				"heading"=>__("Text", "revature"),
				"param_name"=>"content",
				"description"=>__("Text", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Button Text", "revature"),
				"param_name"=>"btn_txt",
				"description"=>__("Button Text", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Button URL", "revature"),
				"param_name"=>"btn_url",
				"description"=>__("URL Destination", "revature")
			)
		)
	));
	vc_map(array(
		"name" => __("RevaturePro - 2 Column: Header", "revature"),
		"base" => "revaturepro_two_column_header",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"as_child"=>array("only"=>"revaturepro_two_column_container"),
		"params" => array(
			array(
				"type"=>"textfield",
				"heading"=>__("Title", "revature"),
				"param_name"=>"title",
				"description"=>__("Title", "revature")
			),
			array(
				"type"=>"textarea_html",
				"heading"=>__("Sub Heading", "revature"),
				"param_name"=>"content",
				"description"=>__("Sub Heading", "revature")
			)
		)
	));
				vc_map(array(
		"name" => __("Recruitment - Sub Header", "revature"),
		"base" => "recruitment_subhead",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"params" => array(
			array(
				"type"=>"textfield",
				"heading"=>__("Title", "revature"),
				"param_name"=>"title",
				"description"=>__("Title", "revature")
			),
			array(
				"type"=>"textarea_html",
				"heading"=>__("Sub Heading", "revature"),
				"param_name"=>"content",
				"description"=>__("Sub Heading", "revature")
			)
		)
	));
	
					vc_map(array(
		"name" => __("Recruitment - Sub Header (Grey)", "revature"),
		"base" => "recruitment_subhead_grey",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"params" => array(
			array(
				"type"=>"textfield",
				"heading"=>__("Title", "revature"),
				"param_name"=>"title",
				"description"=>__("Title", "revature")
			),
			array(
				"type"=>"textarea_html",
				"heading"=>__("Sub Heading", "revature"),
				"param_name"=>"content",
				"description"=>__("Sub Heading", "revature")
			)
		)
	));
		
vc_map(array(
		"name" => __("RevaturePro - 2 Column: Container", "revature"),
		"base" => "revaturepro_two_column_container",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => false,
		"as_parent"=>array("only"=>"revaturepro_two_column_header, revaturepro_two_column_img_left, revaturepro_two_column_img_right"),
		"is_container"=>true
	));
	vc_map(array(
		"name" => __("RevaturePro - Quick Facts", "revature"),
		"base" => "revaturepro_quick_facts",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"params" => array(
			array(
				"type"=>"textfield",
				"heading"=>__("Header", "revature"),
				"param_name"=>"title",
				"description"=>__("Header Text", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Quick Fact 1", "revature"),
				"param_name"=>"title_1",
				"description"=>__("Quick Fact 1", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Quick Fact 1 - Text", "revature"),
				"param_name"=>"content_1",
				"description"=>__("Quick Fact 1 - Text", "revature")
			),
						array(
				"type"=>"textfield",
				"heading"=>__("Quick Fact 2", "revature"),
				"param_name"=>"title_2",
				"description"=>__("Quick Fact 2", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Quick Fact 2 - Text", "revature"),
				"param_name"=>"content_2",
				"description"=>__("Quick Fact 2 - Text", "revature")
			),
						array(
				"type"=>"textfield",
				"heading"=>__("Quick Fact 3", "revature"),
				"param_name"=>"title_3",
				"description"=>__("Quick Fact 3", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Quick Fact 3 - Text", "revature"),
				"param_name"=>"content_3",
				"description"=>__("Quick Fact 3 - Text", "revature")
			)
		)
	));
	vc_map(array(
		"name" => __("RevaturePro - Benefits: Blue Header", "revature"),
		"base" => "revaturepro_benefits_blue_header",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"params" => array(
			array(
				"type"=>"textfield",
				"heading"=>__("Header", "revature"),
				"param_name"=>"title",
				"description"=>__("Header Text", "revature")
			),
			array(
				"type"=>"textarea_html",
				"heading"=>__("Sub Header", "revature"),
				"param_name"=>"content",
				"description"=>__("Sub Header Text", "revature")
			)
		)
	));
	vc_map(array(
		"name" => __("RevaturePro - Benefits: Blue Items", "revature"),
		"base" => "revaturepro_benefits_blue_items",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"params" => array(
			array(
				"type"=>"attach_image",
				"heading"=>__("Icon 1", "revature"),
				"param_name"=>"icon_1",
				"description"=>__("Icon - 1", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Header 1", "revature"),
				"param_name"=>"title_1",
				"description"=>__("Header - 1", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Text 1", "revature"),
				"param_name"=>"content_1",
				"description"=>__("Text - 1", "revature")
			),
						array(
				"type"=>"attach_image",
				"heading"=>__("Icon 2", "revature"),
				"param_name"=>"icon_2",
				"description"=>__("Icon - 2", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Header 2", "revature"),
				"param_name"=>"title_2",
				"description"=>__("Header - 2", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Text 2", "revature"),
				"param_name"=>"content_2",
				"description"=>__("Text - 2", "revature")
			),
						array(
				"type"=>"attach_image",
				"heading"=>__("Icon 3", "revature"),
				"param_name"=>"icon_3",
				"description"=>__("Icon - 3", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Header 3", "revature"),
				"param_name"=>"title_3",
				"description"=>__("Header - 3", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Text 3", "revature"),
				"param_name"=>"content_3",
				"description"=>__("Text - 3", "revature")
			),
									array(
				"type"=>"attach_image",
				"heading"=>__("Icon 4", "revature"),
				"param_name"=>"icon_4",
				"description"=>__("Icon - 4", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Header 4", "revature"),
				"param_name"=>"title_4",
				"description"=>__("Header - 4", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Text 4", "revature"),
				"param_name"=>"content_4",
				"description"=>__("Text - 4", "revature")
			),
									array(
				"type"=>"attach_image",
				"heading"=>__("Icon 5", "revature"),
				"param_name"=>"icon_5",
				"description"=>__("Icon - 5", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Header 5", "revature"),
				"param_name"=>"title_5",
				"description"=>__("Header - 5", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Text 5", "revature"),
				"param_name"=>"content_5",
				"description"=>__("Text - 5", "revature")
			),
									array(
				"type"=>"attach_image",
				"heading"=>__("Icon 6", "revature"),
				"param_name"=>"icon_6",
				"description"=>__("Icon - 6", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Header 6", "revature"),
				"param_name"=>"title_6",
				"description"=>__("Header - 6", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Text 6", "revature"),
				"param_name"=>"content_6",
				"description"=>__("Text - 6", "revature")
			),
		)
	));
	vc_map(array(
		"name" => __("RevaturePro - Sub Navigation Container", "revature"),
		"base" => "revaturepro_sub_nav_container",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => false,
	));
	vc_map(array(
		"name" => __("RevaturePro - Header", "revature"),
		"base" => "revaturepro_header",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"params" => array(
			array(
				"type"=>"attach_image",
				"heading"=>__("Logo Image", "revature"),
				"param_name"=>"logo_img",
				"description"=>__("Select Logo Image", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Header", "revature"),
				"param_name"=>"header_title",
				"description"=>__("Header Text", "revature")
			),
			array(
				"type"=>"textarea_html",
				"heading"=>__("Sub Header", "revature"),
				"param_name"=>"content",
				"description"=>__("Sub Header Text", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Button Text", "revature"),
				"param_name"=>"button_text_left",
				"description"=>__("Left Button Text", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Button URL", "revature"),
				"param_name"=>"button_url_left",
				"description"=>__("Left Button URL - Use Relative URL (example: ../revaturepro)", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Button Text", "revature"),
				"param_name"=>"button_text_right",
				"description"=>__("Right Button Text", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Button URL", "revature"),
				"param_name"=>"button_url_right",
				"description"=>__("Right Button URL - Use Relative URL (example: ../revaturepro)", "revature")
			)
		)
	));
	/*================================================Recruitment RFI Pages==============================================*/
	
		vc_map(array(
		"name" => __("Recruitment RFI - Old White Background Text Section", "revature"),
		"base" => "recruitment_old_white_section",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"params" => array(
			array(
				"type"=>"textfield",
				"heading"=>__("Header/Title", "revature"),
				"param_name"=>"title",
				"description"=>__("Header/Title", "revature")
			),
			array(
				"type"=>"textarea_html",
				"heading"=>__("Sub Header", "revature"),
				"param_name"=>"content",
				"description"=>__("Sub Header", "revature")
			)
		)
	));
	
		/*        RECRUITMENT RFI MARKETO            */
	
			vc_map(array(
		"name" => __("Recruitment RFI - RFI Form with Campus [Marketo]", "revature"),
		"base" => "recruitment_form_campus_marketo",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"params" => array(
			array(
				"type"=>"textfield",
				"heading"=>__("University Key", "revature"),
				"param_name"=>"university",
				"description"=>__("University Key for Form [i.e: FSU, GMU, ASU]", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("University Account ID", "revature"),
				"param_name"=>"account_id",
				"description"=>__("Enter the SalesForce Account ID for the Parent University")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Form (RFI) - Header", "revature"),
				"param_name"=>"form_header",
				"description"=>__("Header for RFI", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Form (RFI) - Sub Header", "revature"),
				"param_name"=>"form_txt",
				"description"=>__("Text below Form (RFI) - Header", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Campus Listing & Account IDs", "revature"),
				"param_name"=>"campus",
				"description"=>__("Enter all campus locations and their Account IDs in SalesForce for the school separated by commas and no spaces [i.e: Queens College,001i000001y31va,CUNY,001i000001QHboz]")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Marketo Form ID", "revature"),
				"param_name"=>"marketo_id",
				"description"=>__("Marketo Form ID", "revature")
			)
		)
	));
			vc_map(array(
		"name" => __("Recruitment RFI - RFI Form [Marketo]", "revature"),
		"base" => "recruitment_form_marketo",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"params" => array(
			array(
				"type"=>"textfield",
				"heading"=>__("University Key", "revature"),
				"param_name"=>"university",
				"description"=>__("University Key for Form [i.e: FSU, GMU, ASU]", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("University Account ID", "revature"),
				"param_name"=>"account_id",
				"description"=>__("Enter the SalesForce Account ID for the Parent University")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Form (RFI) - Header", "revature"),
				"param_name"=>"form_header",
				"description"=>__("Header for RFI", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Form (RFI) - Sub Header", "revature"),
				"param_name"=>"form_txt",
				"description"=>__("Text below Form (RFI) - Header", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Marketo Form ID", "revature"),
				"param_name"=>"marketo_id",
				"description"=>__("Marketo Form ID", "revature")
			)
		)
	));
	
	vc_map(array(
		"name" => __("Recruitment RFI - RFI Form No School [Marketo]", "revature"),
		"base" => "recruitment_form_no_school_marketo",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"params" => array(
			array(
				"type"=>"textfield",
				"heading"=>__("University Key", "revature"),
				"param_name"=>"university",
				"description"=>__("University Key for Form [i.e: FSU, GMU, ASU]", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("University Account ID", "revature"),
				"param_name"=>"account_id",
				"description"=>__("Enter the SalesForce Account ID for the Parent University")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Form (RFI) - Header", "revature"),
				"param_name"=>"form_header",
				"description"=>__("Header for RFI", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Form (RFI) - Sub Header", "revature"),
				"param_name"=>"form_txt",
				"description"=>__("Text below Form (RFI) - Header", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Marketo Form ID", "revature"),
				"param_name"=>"marketo_id",
				"description"=>__("Marketo Form ID", "revature")
			)
		)
	));
	
	vc_map(array(
		"name" => __("Recruitment RFI - RFI Form Yellow [Marketo]", "revature"),
		"base" => "recruitment_form_marketo_yellow",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"params" => array(
			array(
				"type"=>"textfield",
				"heading"=>__("University Key", "revature"),
				"param_name"=>"university",
				"description"=>__("University Key for Form [i.e: FSU, GMU, ASU]", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("University Account ID", "revature"),
				"param_name"=>"account_id",
				"description"=>__("Enter the SalesForce Account ID for the Parent University")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Form (RFI) - Header", "revature"),
				"param_name"=>"form_header",
				"description"=>__("Header for RFI", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Form (RFI) - Sub Header", "revature"),
				"param_name"=>"form_txt",
				"description"=>__("Text below Form (RFI) - Header", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Marketo Form ID", "revature"),
				"param_name"=>"marketo_id",
				"description"=>__("Marketo Form ID", "revature")
			)
		)
	));
			vc_map(array(
		"name" => __("Recruitment RFI - Old Header", "revature"),
		"base" => "recruitment_old_header",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"params" => array(
			array(
				"type"=>"textfield",
				"heading"=>__("Oranger Banner Title", "revature"),
				"param_name"=>"corner_title",
				"description"=>__("Corner Title", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Orange Banner Text", "revature"),
				"param_name"=>"corner_txt",
				"description"=>__("Corner - Text Below Title", "revature")
			),
			array(
				"type"=>"textarea_html",
				"heading"=>__("Title", "revature"),
				"param_name"=>"content",
				"description"=>__("Title", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Subheading Text", "revature"),
				"param_name"=>"subheading",
				"description"=>__("Text below Heading", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Button Text", "revature"),
				"param_name"=>"btn_txt_1",
				"description"=>__("Button Text", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Button URL (Relative URL)", "revature"),
				"param_name"=>"btn_url_1",
				"description"=>__("Button URL (Relative URL)", "revature")
			),
			array(
				"type"=>"attach_image",
				"heading"=>__("Logo URL", "revature"),
				"param_name"=>"logo_url",
				"description"=>__("Select the Logo Image", "revature")
			),
			array(
				"type"=>"attach_image",
				"heading"=>__("School Image URL", "revature"),
				"param_name"=>"school_img_url",
				"description"=>__("Select the Logo to Represent the School", "revature")
			)
		)
	));
	
		vc_map(array(
		"name" => __("Recruitment RFI - 2 Column Section", "revature"),
		"base" => "recruitment_two_column",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"params" => array(
			array(
				"type"=>"attach_image",
				"heading"=>__("Right Image", "revature"),
				"param_name"=>"img_1",
				"description"=>__("Right Side Image", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("1st Header", "revature"),
				"param_name"=>"header_1",
				"description"=>__("1st Header (including 1st Section Header of Mobile)", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Sub Heading", "revature"),
				"param_name"=>"sub_head_1",
				"description"=>__("Sub Heading - Left Side", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Sub Heading Text", "revature"),
				"param_name"=>"content_1",
				"description"=>__("Text below Heading", "revature")
			),
			array(
				"type"=>"attach_image",
				"heading"=>__("Left Image", "revature"),
				"param_name"=>"img_2",
				"description"=>__("Right Side Image", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Sub Heading", "revature"),
				"param_name"=>"sub_head_2",
				"description"=>__("Sub Heading - Right Side", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Sub Heading Text", "revature"),
				"param_name"=>"content_2",
				"description"=>__("Text below Heading", "revature")
			),
			array(
				"type"=>"attach_image",
				"heading"=>__("Right Image", "revature"),
				"param_name"=>"img_3",
				"description"=>__("Right Side Image", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("1st Header", "revature"),
				"param_name"=>"header_3",
				"description"=>__("2nd Header (including 2nd Section Header of Mobile)", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Sub Heading", "revature"),
				"param_name"=>"sub_head_3",
				"description"=>__("Sub Heading - Left Side", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Sub Heading Text", "revature"),
				"param_name"=>"content_3",
				"description"=>__("Text below Heading", "revature")
			),
			array(
				"type"=>"attach_image",
				"heading"=>__("Left Image", "revature"),
				"param_name"=>"img_4",
				"description"=>__("Left Side Image", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Sub Heading", "revature"),
				"param_name"=>"sub_head_4",
				"description"=>__("Sub Heading - Right Side", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Sub Heading Text", "revature"),
				"param_name"=>"content_4",
				"description"=>__("Text below Heading", "revature")
			)
		)
	));

	
	/*            END RECRUITMENT RFI MARKETO FORMS       */
	
	vc_map(array(
		"name" => __("Recruitment RFI - RFI Form", "revature"),
		"base" => "recruitment_form",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"params" => array(
			array(
				"type"=>"textfield",
				"heading"=>__("Confirmation Message - Header", "revature"),
				"param_name"=>"confirm_msg_header",
				"description"=>__("Header for Confirmation Message after Form Submission", "revature")
			),
			array(
				"type"=>"textarea_html",
				"heading"=>__("Confirmation Massage - Sub Header", "revature"),
				"param_name"=>"content",
				"description"=>__("Sub Header below Confirmation Message Header", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Form (RFI) - Header", "revature"),
				"param_name"=>"form_header",
				"description"=>__("Header for RFI", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Form (RFI) - Sub Header", "revature"),
				"param_name"=>"form_txt",
				"description"=>__("Text below Form (RFI) - Header", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Form: Send Key", "revature"),
				"param_name"=>"key",
				"description"=>__("Send Key Value (contact development team if it's a new school)", "revature")
			)
		)
	));
	
		vc_map(array(
		"name" => __("Recruitment RFI - RFI Form (Yellow)", "revature"),
		"base" => "recruitment_form_yellow",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"params" => array(
			array(
				"type"=>"textfield",
				"heading"=>__("Confirmation Message - Header", "revature"),
				"param_name"=>"confirm_msg_header",
				"description"=>__("Header for Confirmation Message after Form Submission", "revature")
			),
			array(
				"type"=>"textarea_html",
				"heading"=>__("Confirmation Massage - Sub Header", "revature"),
				"param_name"=>"content",
				"description"=>__("Sub Header below Confirmation Message Header", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Form (RFI) - Header", "revature"),
				"param_name"=>"form_header",
				"description"=>__("Header for RFI", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Form (RFI) - Sub Header", "revature"),
				"param_name"=>"form_txt",
				"description"=>__("Text below Form (RFI) - Header", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Form: Send Key", "revature"),
				"param_name"=>"key",
				"description"=>__("Send Key Value (contact development team if it's a new school)", "revature")
			)
		)
	));
		vc_map(array(
		"name" => __("Recruitment RFI - RFI Form (No School Information)", "revature"),
		"base" => "recruitment_form_no_school",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"params" => array(
			array(
				"type"=>"textfield",
				"heading"=>__("Confirmation Message - Header", "revature"),
				"param_name"=>"confirm_msg_header",
				"description"=>__("Header for Confirmation Message after Form Submission", "revature")
			),
			array(
				"type"=>"textarea_html",
				"heading"=>__("Confirmation Massage - Sub Header", "revature"),
				"param_name"=>"content",
				"description"=>__("Sub Header below Confirmation Message Header", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Form (RFI) - Header", "revature"),
				"param_name"=>"form_header",
				"description"=>__("Header for RFI", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Form (RFI) - Sub Header", "revature"),
				"param_name"=>"form_txt",
				"description"=>__("Text below Form (RFI) - Header", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Form: Send Key", "revature"),
				"param_name"=>"key",
				"description"=>__("Send Key Value (contact development team if it's a new school)", "revature")
			)
		)
	));
		vc_map(array(
		"name" => __("Recruitment RFI - RFI Form with Campus", "revature"),
		"base" => "recruitment_form_campus",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"params" => array(
			array(
				"type"=>"textfield",
				"heading"=>__("Confirmation Message - Header", "revature"),
				"param_name"=>"confirm_msg_header",
				"description"=>__("Header for Confirmation Message after Form Submission", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Confirmation Massage - Sub Header", "revature"),
				"param_name"=>"confirm_msg_txt",
				"description"=>__("Sub Header below Confirmation Message Header", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Form (RFI) - Header", "revature"),
				"param_name"=>"form_header",
				"description"=>__("Header for RFI", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Form (RFI) - Sub Header", "revature"),
				"param_name"=>"form_txt",
				"description"=>__("Text below Form (RFI) - Header", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Campus Listing (Must be exactly the same as SalesForce Account)", "revature"),
				"param_name"=>"campus",
				"description"=>__("Enter all campus location for the school separated by commas (Must be exactly the same as SalesForce Account)")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Form: Send Key", "revature"),
				"param_name"=>"key",
				"description"=>__("Send Key Value (contact development team if it's a new school)", "revature")
			)
		)
	));


	vc_map(array(
		"name" => __("Recruitment RFI - Header", "revature"),
		"base" => "recruitment_header",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"params" => array(
			array(
				"type"=>"textfield",
				"heading"=>__("Corner Title", "revature"),
				"param_name"=>"corner_title",
				"description"=>__("Corner Title", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Corner Text", "revature"),
				"param_name"=>"corner_txt",
				"description"=>__("Corner - Text Below Title", "revature")
			),
			array(
				"type"=>"textarea_html",
				"heading"=>__("Title", "revature"),
				"param_name"=>"content",
				"description"=>__("Title", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Subheading Text", "revature"),
				"param_name"=>"subheading",
				"description"=>__("Text below Heading", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Start Date", "revature"),
				"param_name"=>"start_dt",
				"description"=>__("Start Date for Bootcamp", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Button Text for RFI Redirect", "revature"),
				"param_name"=>"apply_btn_txt",
				"description"=>__("Text for Button that redirects to RFI Form", "revature")
			),
			array(
				"type"=>"attach_image",
				"heading"=>__("Logo URL", "revature"),
				"param_name"=>"logo_url",
				"description"=>__("Select the Logo Image", "revature")
			),
			array(
				"type"=>"attach_image",
				"heading"=>__("School Image URL", "revature"),
				"param_name"=>"school_img_url",
				"description"=>__("Select the Logo to Represent the School", "revature")
			)
		)
	));
		vc_map(array(
		"name" => __("Recruitment RFI - Header (Two School Logos)", "revature"),
		"base" => "recruitment_header_two_school_logos",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"params" => array(
			array(
				"type"=>"textfield",
				"heading"=>__("Corner Title", "revature"),
				"param_name"=>"corner_title",
				"description"=>__("Corner Title", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Corner Text", "revature"),
				"param_name"=>"corner_txt",
				"description"=>__("Corner - Text Below Title", "revature")
			),
			array(
				"type"=>"textarea_html",
				"heading"=>__("Title", "revature"),
				"param_name"=>"content",
				"description"=>__("Title", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Subheading Text", "revature"),
				"param_name"=>"subheading",
				"description"=>__("Text below Heading", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Start Date", "revature"),
				"param_name"=>"start_dt",
				"description"=>__("Start Date for Bootcamp", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Button Text for RFI Redirect", "revature"),
				"param_name"=>"apply_btn_txt",
				"description"=>__("Text for Button that redirects to RFI Form", "revature")
			),
			array(
				"type"=>"attach_image",
				"heading"=>__("Logo URL", "revature"),
				"param_name"=>"logo_url",
				"description"=>__("Select the Logo Image", "revature")
			),
			array(
				"type"=>"attach_image",
				"heading"=>__("School Image URL", "revature"),
				"param_name"=>"school_img_url",
				"description"=>__("Select the Logo to Represent the School", "revature")
			),
			array(
				"type"=>"attach_image",
				"heading"=>__("School Image URL", "revature"),
				"param_name"=>"school_img_url_1",
				"description"=>__("Select the Logo to Represent the School", "revature")
			)
		)
	));
		vc_map(array(
		"name" => __("Recruitment RFI - Header (Side-by-Side Logos)", "revature"),
		"base" => "recruitment_header_two_side_logos",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"params" => array(
			array(
				"type"=>"textfield",
				"heading"=>__("Corner Title", "revature"),
				"param_name"=>"corner_title",
				"description"=>__("Corner Title", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Corner Text", "revature"),
				"param_name"=>"corner_txt",
				"description"=>__("Corner - Text Below Title", "revature")
			),
			array(
				"type"=>"textarea_html",
				"heading"=>__("Title", "revature"),
				"param_name"=>"content",
				"description"=>__("Title", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Subheading Text", "revature"),
				"param_name"=>"subheading",
				"description"=>__("Text below Heading", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Start Date", "revature"),
				"param_name"=>"start_dt",
				"description"=>__("Start Date for Bootcamp", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Button Text for RFI Redirect", "revature"),
				"param_name"=>"apply_btn_txt",
				"description"=>__("Text for Button that redirects to RFI Form", "revature")
			),
			array(
				"type"=>"attach_image",
				"heading"=>__("Logo URL", "revature"),
				"param_name"=>"logo_url",
				"description"=>__("Select the Logo Image", "revature")
			),
			array(
				"type"=>"attach_image",
				"heading"=>__("School Image URL", "revature"),
				"param_name"=>"school_img_url",
				"description"=>__("Select the Logo to Represent the School", "revature")
			)
		)
	));
		vc_map(array(
		"name" => __("Recruitment RFI - Header (Two Buttons[Online & Apply Bootcamp])", "revature"),
		"base" => "recruitment_header_two_buttons",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"params" => array(
			array(
				"type"=>"textfield",
				"heading"=>__("Corner Title", "revature"),
				"param_name"=>"corner_title",
				"description"=>__("Corner Title", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Corner Text", "revature"),
				"param_name"=>"corner_txt",
				"description"=>__("Corner - Text Below Title", "revature")
			),
			array(
				"type"=>"textarea_html",
				"heading"=>__("Title", "revature"),
				"param_name"=>"content",
				"description"=>__("Title", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Subheading Text", "revature"),
				"param_name"=>"subheading",
				"description"=>__("Text below Heading", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Start Date", "revature"),
				"param_name"=>"start_dt",
				"description"=>__("Start Date for Bootcamp", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Button Text for RFI Redirect", "revature"),
				"param_name"=>"apply_btn_txt",
				"description"=>__("Text for Button that redirects to RFI Form", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Left Button Text", "revature"),
				"param_name"=>"btn_txt_1",
				"description"=>__("Text for Button", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Left Destination URL", "revature"),
				"param_name"=>"btn_url_1",
				"description"=>__($relURLMessage, "revature")
			),
			array(
				"type"=>"attach_image",
				"heading"=>__("Logo URL", "revature"),
				"param_name"=>"logo_url",
				"description"=>__("Select the Logo Image", "revature")
			),
			array(
				"type"=>"attach_image",
				"heading"=>__("School Image URL", "revature"),
				"param_name"=>"school_img_url",
				"description"=>__("Select the Logo to Represent the School", "revature")
			)
		)
	));
	/*============================================Start Landing vc_map==============================================*/
	vc_map(array(

		"name"=>__("Revature - Request Landing Header", "revature"),

		"base"=>"request_landing_header",

		"content_element"=>true,

		"category"=>__("Revature Shortcodes", "revature"),

		"show_settings_on_create"=>true,

		"params"=>array(

			array(

				"type"=>"attach_image",

				"heading"=>__("background Source URL", "revature"),

				"param_name"=>"backgroung_src",

				"description"=>__("demo_header URL", "revature")

			),

			array(

				"type" => "textfield",

				"heading" => __("Header Text", "revature"),

				"param_name" => "header",

				"description" => __("Text for Header", "revature")

			),
						array(

				"type" => "textfield",

				"heading" => __("Sub Header Text", "revature"),

				"param_name" => "sub_header",

				"description" => __("Text for Sub Header", "revature")

			)

		)

	));
		vc_map(array(

		"name"=>__("Revature - Request Landing Header (Text Right)", "revature"),

		"base"=>"request_landing_header_text_right",

		"content_element"=>true,

		"category"=>__("Revature Shortcodes", "revature"),

		"show_settings_on_create"=>true,

		"params"=>array(

			array(

				"type"=>"attach_image",

				"heading"=>__("background Source URL", "revature"),

				"param_name"=>"backgroung_src",

				"description"=>__("demo_header URL", "revature")

			),

			array(

				"type" => "textarea_html",

				"heading" => __("Header Text", "revature"),

				"param_name" => "content",

				"description" => __("Text for Header", "revature")

			)

		)

	));
	vc_map(array(
		"name" => __("Revature - Landing Page Text section", "revature"),
		"base" => "request_left_landing_info",
		"as_child" => array('only'=>'request_landing_container'),
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"params" => array(
			array(
				"type"=>"textarea_html",
				"heading"=>__("Text Content", "revature"),
				"param_name"=>"content",
				"description"=>__("Text Content Left of Form", "revature")
			)
		)
	));
	vc_map(array(
		"name" => __("Revature - Landing Page Form section", "revature"),
		"base" => "request_right_landing_form",
		"as_child" => array('only'=>'request_landing_container'),
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"params"=>array(
			array(
				"type"=>"textfield",
				"heading"=>__("Title", "revature"),
				"param_name"=>"form_title",
				"description"=>__("Title Above Form", "revature")
			)
		)
	));
	
		vc_map(array(
		"name" => __("Revature - Landing Page Form with University & Optional Resume Upload", "revature"),
		"base" => "request_right_landing_form_university",
		"as_child" => array('only'=>'request_landing_container'),
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"params"=>array(
			array(
				"type"=>"textfield",
				"heading"=>__("Title", "revature"),
				"param_name"=>"form_title",
				"description"=>__("Title Above Form", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Marketo ID", "revature"),
				"param_name"=>"marketo_id",
				"description"=>__("Marketo Form ID", "revature")
			)
		)
	));
		vc_map(array(
		"name" => __("Revature - Landing Page Form (Recruitment)", "revature"),
		"base" => "request_right_landing_form_recruitment",
		"as_child" => array('only'=>'request_landing_container'),
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"params"=>array(
			array(
				"type"=>"textfield",
				"heading"=>__("Title", "revature"),
				"param_name"=>"form_title",
				"description"=>__("Title Above Form", "revature")
			)
		)
	));
	
	vc_map(array(
		"name" => __("Revature - Landing Page Orange Bar", "revature"),
		"base" => "request_orange_bar",
		
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature")
	))
	;
	vc_map(array(
		"name" => __("Revature - Landing Page Grey Icons", "revature"),
		"base" => "request_form_icon",
		
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"params" => array(
			array(
				"type"=>"attach_image",
				"heading"=>__("First Image", "revature"),
				"param_name"=>"img_1",
				"description"=>__("First Image", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("First Icon Title", "revature"),
				"param_name"=>"title_1",
				"description"=>__("Title for First Icon", "revature")
			),
			array(
				"type" => "textarea",
				"heading" => __("First Icon Content 1", "revature"),
				"param_name" => "first_content_1",
				"description" => __("Text for First Icon", "revature")
			),
			array(
				"type"=>"attach_image",
				"heading"=>__("Second Image", "revature"),
				"param_name"=>"img_2",
				"description"=>__("Second Image", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Second Icon Title", "revature"),
				"param_name"=>"title_2",
				"description"=>__("Title for Second Icon", "revature")
			),
			array(
				"type" => "textarea",
				"heading" => __("Second Icon Content 1", "revature"),
				"param_name" => "second_content_1",
				"description" => __("Text for Second Icon", "revature")
			),
			array(
				"type"=>"attach_image",
				"heading"=>__("Third Image", "revature"),
				"param_name"=>"img_3",
				"description"=>__("Third Image", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Third Icon Title", "revature"),
				"param_name"=>"title_3",
				"description"=>__("Title for Third Icon", "revature")
			),
			array(
				"type" => "textarea",
				"heading" => __("Third Icon Content 1", "revature"),
				"param_name" => "third_content_1",
				"description" => __("Text for Third Icon", "revature")
			),
			
			
		)
	));
	vc_map(array(		
		"name" => __("Request Landing Page - Body Container", "revature"),		
		"base" => "request_landing_container",		
		"as_parent" => array('only' => 'request_left_landing_info, request_right_landing_form, request_right_landing_form_recruitment, request_right_landing_form_university'),		
		"content_element" => true,		
		"category" => __( "Revature Shortcodes", "revature"),		
		"show_settings_on_create" => false,		
		"is_container" => true		
	));
	/*============================================End Landing vc_map==============================================*/
	/*================================================Contact Us==============================================*/
	vc_map(array(
		"name" => __("Contact Us - Info", "revature"),
		"base" => "contact_info",
		"as_child" => array('only'=>'contact_container'),
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
	));
	vc_map(array(
		"name" => __("Contact Us - Form", "revature"),
		"base" => "contact_form",
		"as_child" => array('only'=>'contact_container'),
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
	));
			vc_map(array(
		"name" => __("Contact Us - Marketo Form", "revature"),
		"base" => "contact_marketo_form",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"as_child" => array('only'=>'contact_container'),
		"params" => array(
			array(
				"type"=>"textfield",
				"heading"=>__("Header", "revature"),
				"param_name"=>"title",
				"description"=>__("Header Text", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Marketo Form Code", "revature"),
				"param_name"=>"content",
				"description"=>__("Marketo Form Code", "revature")
			)
		)
	));
	
	vc_map(array(
		"name" => __("Contact Us - Body Container", "revature"),
		"base" => "contact_container",
		"as_parent" => array('only' => 'contact_form, contact_info, contact_marketo_form'),
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => false,
		"is_container" => true
	));
	vc_map(array(
		"name" => __("Contact Us - Header", "revature"),
		"base" => "contact_header",
		"content_element" => true,
		"show_settings_on_create"=>true,
		"category" => __( "Revature Shortcodes", "revature"),
		"params" => array(
			array(
				"type"=>"textfield",
				"heading"=>__("Header Title", "revature"),
				"param_name"=>"title",
				"description"=>__("Header Title", "revature")
			),
			array(
				"type" => "textarea_html",
				"heading" => __("Text", "revature"),
				"param_name" => "content",
				"description" => __("Text for Left Hand Side", "revature")
			)
		)
	));
	/*================================================RevaturePro Online==============================================*/
	vc_map(array(
		"name" => __("RevaturePro Online - Bottom 2 Column Callout", "revature"),
		"base" => "online_bottom_two_column",
		"content_element" => true,
		"show_settings_on_create"=>true,
		"category" => __( "Revature Shortcodes", "revature"),
		"params" => array(
			array(
				"type"=>"textfield",
				"heading"=>__("Left Title", "revature"),
				"param_name"=>"left_title",
				"description"=>__("Left Side Title", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Left Description", "revature"),
				"param_name"=>"left_content",
				"description"=>__("Left Side Description", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Left Button Text", "revature"),
				"param_name"=>"left_btn_txt",
				"description"=>__("Text for Button", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Left Destination URL", "revature"),
				"param_name"=>"left_btn_url",
				"description"=>__($relURLMessage, "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Right Title", "revature"),
				"param_name"=>"right_title",
				"description"=>__("Right Side Title", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Right Description", "revature"),
				"param_name"=>"right_content",
				"description"=>__("Right Side Description", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Right Button Text", "revature"),
				"param_name"=>"right_btn_txt",
				"description"=>__("Text for Button", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Right Destination URL", "revature"),
				"param_name"=>"right_btn_url",
				"description"=>__($relURLMessage, "revature")
			)
		)
	));
	vc_map(array(
		"name" => __("RevaturePro Online - Sign Up", "revature"),
		"base" => "online_sign_up",
		"content_element" => true,
		"show_settings_on_create"=>true,
		"category" => __( "Revature Shortcodes", "revature"),
		"params" => array(
			array(
				"type"=>"textfield",
				"heading"=>__("Header Title", "revature"),
				"param_name"=>"title",
				"description"=>__("Header Title", "revature")
			),
			array(
				"type"=>"textarea_html",
				"heading"=>__("Description", "revature"),
				"param_name"=>"content",
				"description"=>__("Description", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Button Text", "revature"),
				"param_name"=>"btn_txt",
				"description"=>__("Text for Button", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Destination URL", "revature"),
				"param_name"=>"btn_url",
				"description"=>__($relURLMessage, "revature")
			)
		)
	));

	vc_map(array(
		"name" => __("RevaturePro Online - Quick Facts", "revature"),
		"base" => "online_quick_facts",
		"content_element" => true,
		"show_settings_on_create"=>true,
		"category" => __( "Revature Shortcodes", "revature"),
		"params" => array(
			array(
				"type"=>"textfield",
				"heading"=>__("Header Title", "revature"),
				"param_name"=>"title",
				"description"=>__("Header Title", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Quick Fact 1", "revature"),
				"param_name"=>"header_1",
				"description"=>__("Quick Fact 1", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Quick Fact 1 - Description", "revature"),
				"param_name"=>"content_1",
				"description"=>__("Description for Quick Fact 1", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Quick Fact 2", "revature"),
				"param_name"=>"header_2",
				"description"=>__("Quick Fact 2", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Quick Fact 2 - Description", "revature"),
				"param_name"=>"content_2",
				"description"=>__("Description for Quick Fact 2", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Quick Fact 3", "revature"),
				"param_name"=>"header_3",
				"description"=>__("Quick Fact 3", "revature")
			),
			array(
				"type"=>"textarea",
				"heading"=>__("Quick Fact 3 - Description", "revature"),
				"param_name"=>"content_3",
				"description"=>__("Description for Quick Fact 3", "revature")
			),
		)
	));
			vc_map(array(
		"name" => __("Academic Partners - Orange Banner", "revature"),
		"base" => "academic_banner",
		"content_element" => true,
		"show_settings_on_create"=>true,
		"category" => __( "Revature Shortcodes", "revature"),
		"params" => array(
			array(
				"type" => "textarea_html",
				"heading" => __("Header Text", "revature"),
				"param_name" => "content",
				"description" => __("Text for the Header", "revature")
			),
			array(
				"type" => "textfield",
				"heading" => __("Button URL", "revature"),
				"param_name" => "btn_url",
				"description" => __($relURLMessage, "revature")
			),
			array(
				"type" => "textfield",
				"heading" => __("Button Text", "revature"),
				"param_name" => "btn_txt",
				"description" => __("Button Text", "revature")
			)
		)
	));
	vc_map(array(
		"name" => __("RevaturePro Online - 2 Column Text & Image", "revature"),
		"base" => "online_two_column_txt_img",
		"content_element" => true,
		"show_settings_on_create"=>true,
		"category" => __( "Revature Shortcodes", "revature"),
		"params" => array(
			array(
				"type"=>"textfield",
				"heading"=>__("Header Title", "revature"),
				"param_name"=>"title",
				"description"=>__("Header Title", "revature")
			),
			array(
				"type" => "textarea_html",
				"heading" => __("Text", "revature"),
				"param_name" => "content",
				"description" => __("Text for Left Hand Side", "revature")
			),
			array(
				"type" => "attach_image",
				"heading" => __("Image URL", "revature"),
				"param_name" => "img_url",
				"description" => __("Select an image to display on the right", "revature")
			)
		)
	));
	vc_map(array(
		"name" => __("RevaturePro Online - Log In Banner", "revature"),
		"base" => "online_log_in_banner",
		"content_element" => true,
		"show_settings_on_create"=>true,
		"category" => __( "Revature Shortcodes", "revature"),
		"params" => array(
			array(
				"type" => "textarea_html",
				"heading" => __("Header Text", "revature"),
				"param_name" => "content",
				"description" => __("Text for the Header", "revature")
			),
			array(
				"type" => "textfield",
				"heading" => __("Button URL", "revature"),
				"param_name" => "btn_url",
				"description" => __($relURLMessage, "revature")
			),
			array(
				"type" => "textfield",
				"heading" => __("Button Text", "revature"),
				"param_name" => "btn_txt",
				"description" => __("Button Text", "revature")
			)
		)
	));
		vc_map(array(
		"name" => __("Bootcamp - Banner", "revature"),
		"base" => "bootcamp_banner",
		"content_element" => true,
		"show_settings_on_create"=>true,
		"category" => __( "Revature Shortcodes", "revature"),
		"params" => array(
			array(
				"type" => "textfield",
				"heading" => __("Header Title", "revature"),
				"param_name" => "title",
				"description" => __("Title for the Header", "revature")
			),
			array(
				"type" => "textfield",
				"heading" => __("Button Text", "revature"),
				"param_name" => "btn_txt",
				"description" => __("Text for Button", "revature")
			),
			array(
				"type" => "textfield",
				"heading" => __("Form Header", "revature"),
				"param_name" => "form_header",
				"description" => __("Title for the Form", "revature")
			),
			array(
				"type" => "textfield",
				"heading" => __("Marketo ID", "revature"),
				"param_name" => "marketo_id",
				"description" => __("ID for Marketo Form", "revature")
			)
		)
	));
	vc_map(array(
		"name" => __("RevaturePro Online - Header", "revature"),
		"base" => "online_header",
		"content_element" => true,
		"show_settings_on_create"=>true,
		"category" => __( "Revature Shortcodes", "revature"),
		"params" => array(
			array(
				"type" => "textfield",
				"heading" => __("Header Title", "revature"),
				"param_name" => "title",
				"description" => __("Title for the Header", "revature")
			),
			array(
				"type" => "textarea_html",
				"heading" => __("Header Text", "revature"),
				"param_name" => "content",
				"description" => __("Text for the Header", "revature")
			),
			array(
				"type" => "attach_image",
				"heading" => __("Image URL", "revature"),
				"param_name" => "logo_img",
				"description" => __("Select an image to display below the button", "revature")
			),
			array(
				"type" => "textfield",
				"heading" => __("Button URL", "revature"),
				"param_name" => "btn_url",
				"description" => __($relURLMessage, "revature")
			),
			array(
				"type" => "textfield",
				"heading" => __("Button Text", "revature"),
				"param_name" => "btn_txt",
				"description" => __("Button Text", "revature")
			)
		)
	));

	/*-----------------------------------vc_map() functions - Home Page--------------------------------------------*/

	vc_map(array(

		"name"=>__("Home - Video Header", "revature"),

		"base"=>"home_video_header",

		"content_element"=>true,

		"category"=>__("Revature Shortcodes", "revature"),

		"show_settings_on_create"=>true,

		"params"=>array(

			array(

				"type"=>"attach_image",

				"heading"=>__("Video Source URL", "revature"),

				"param_name"=>"video_src",

				"description"=>__("Video URL", "revature")

			),

			array(

				"type" => "textarea_html",

				"heading" => __("Header Text", "revature"),

				"param_name" => "content",

				"description" => __("Text for Header", "revature")

			)

		)

	));

	vc_map(array(

		"name"=>__("Home - What We Do", "revature"),

		"base"=>"home_what_we_do",

		"content_element"=>true,

		"category"=>__("Revature Shortcodes", "revature"),

		"show_settings_on_create"=>true,

		"params"=>array(

			array(

				"type"=>"textfield",

				"heading"=>__("Header Title", "revature"),

				"param_name"=>"title",

				"description"=>__("Title for Header", "revature")

			),

			array(

				"type" => "textarea_html",

				"heading" => __("Header Text", "revature"),

				"param_name" => "content",

				"description" => __("Text for Header", "revature")

			),
			array(

				"type" => "textfield",

				"heading" => __("Button Text", "revature"),

				"param_name" => "button_text",

				"description" => __("Text for the Button", "revature")

			),

			array(

				"type" => "textfield",

				"heading" => __("Button URL", "revature"),

				"param_name" => "button_url",

				"description" => __("Enter the destination URL for the button", "revature")

			)

		)

	));

		
				vc_map(array(

		"name"=>__("Bootcamp - Apply Now Marketo Form", "revature"),

		"base"=>"bootcamp_apply_now_marketo",

		"content_element"=>true,

		"category"=>__("Revature Shortcodes", "revature"),

		"show_settings_on_create"=>true,

		"params"=>array(

			array(

				"type" => "textfield",

				"heading" => __("Header Text", "revature"),

				"param_name" => "title",

				"description" => __("Text for Header", "revature")

			),
			
						array(

				"type" => "textfield",

				"heading" => __("Sub Header Text", "revature"),

				"param_name" => "sub_title",

				"description" => __("Text for Sub Header", "revature")

			),

			array(

				"type"=>"textfield",

				"heading"=>__("Button Text", "revature"),

				"param_name"=>"btn_txt",

				"description"=>__("Title for Button", "revature")

			),
			
			array(

				"type"=>"textfield",

				"heading"=>__("Marketo ID", "revature"),

				"param_name"=>"marketo_id",

				"description"=>__("Marketo Form ID", "revature")

			),
			
						array(

				"type"=>"textfield",

				"heading"=>__("Form Header", "revature"),

				"param_name"=>"form_header",

				"description"=>__("Header for Marketo Form", "revature")

			)

		)

	));
	
		vc_map(array(

		"name"=>__("Marketo Form Header", "revature"),

		"base"=>"marketo_form_header",

		"content_element"=>true,

		"category"=>__("Revature Shortcodes", "revature"),

		"show_settings_on_create"=>true,

		"params"=>array(

			array(

				"type" => "textarea_html",

				"heading" => __("Header Text", "revature"),

				"param_name" => "content",

				"description" => __("Text for Header", "revature")

			),

			array(

				"type"=>"textfield",

				"heading"=>__("Button Text", "revature"),

				"param_name"=>"btn_txt",

				"description"=>__("Title for Button", "revature")

			),
			
						array(

				"type"=>"textfield",

				"heading"=>__("Form Header", "revature"),

				"param_name"=>"form_header",

				"description"=>__("Header for Marketo Form", "revature")

			)

		)

	));
	
	vc_map(array(

		"name"=>__("Home - Contact Us", "revature"),

		"base"=>"home_contact_us",

		"content_element"=>true,

		"category"=>__("Revature Shortcodes", "revature"),

		"show_settings_on_create"=>true,

		"params"=>array(

			array(

				"type" => "textarea_html",

				"heading" => __("Header Text", "revature"),

				"param_name" => "content",

				"description" => __("Text for Header", "revature")

			),

			array(

				"type"=>"textfield",

				"heading"=>__("Button Text", "revature"),

				"param_name"=>"btn_txt",

				"description"=>__("Title for Button", "revature")

			),

			array(

				"type"=>"textfield",

				"heading"=>__("Button URL", "revature"),

				"param_name"=>"btn_url",

				"description"=>__("URL for Button", "revature")

			)

		)

	));
	vc_map(array(

		"name" => __("Home Advanced Faster Section", "revature"),

		"base" => "home_advanced_faster_header",

		"content_element" => true,

		"show_settings_on_create"=>true,

		"category" => __( "Revature Shortcodes", "revature"),

		"params" => array(

			array(

				"type" => "textfield",

				"heading" => __("Header Title", "revature"),

				"param_name" => "title",

				"description" => __("Title for the Header", "revature")

			),

			array(

				"type" => "textarea_html",

				"heading" => __("Header Text", "revature"),

				"param_name" => "content",

				"description" => __("Text for the Header", "revature")

			),

			

		)

	));

	vc_map(array(

		"name" => __("Home Image & Text - Container", "revature"),

		"base" => "home_img_txt_container",

		"as_parent" => array('only' => 'home_img_txt_header, home_img_left_text_right, home_text_left_img_right'),

		"content_element" => true,

		"category" => __( "Revature Shortcodes", "revature"),

		"show_settings_on_create" => false,

		"is_container" => true

	));

	vc_map(array(

		"name" => __("Home Image & Text - Header", "revature"),

		"base" => "home_img_txt_header",

		"content_element" => true,

		"as_child" => array('only' => 'home_img_txt_container'),

		"show_settings_on_create"=>true,

		"category" => __( "Revature Shortcodes", "revature"),

		"params" => array(

			array(

				"type" => "textfield",

				"heading" => __("Header Title", "revature"),

				"param_name" => "title",

				"description" => __("Title for the Header", "revature")

			),

			array(

				"type" => "textarea_html",

				"heading" => __("Header Text", "revature"),

				"param_name" => "content",

				"description" => __("Text for the Header", "revature")

			),

			array(

				"type" => "attach_image",

				"heading" => __("Image URL", "revature"),

				"param_name" => "logo_img",

				"description" => __("Select an image to display below the button", "revature")

			),

			array(

				"type" => "textfield",

				"heading" => __("Button Text", "revature"),

				"param_name" => "button_text",

				"description" => __("Text for the Button", "revature")

			),

			array(

				"type" => "textfield",

				"heading" => __("Button URL", "revature"),

				"param_name" => "button_url",

				"description" => __("Enter the destination URL for the button", "revature")

			)

		)

	));

	vc_map(array(

		"name" => __("Image Left, Text Right - Header", "revature"),

		"base" => "home_img_left_text_right",

		"content_element" => true,

		"as_child" => array('only' => 'home_img_txt_container'),

		"show_settings_on_create"=>true,

		"category" => __( "Revature Shortcodes", "revature"),

		"params" => array(

			array(

				"type" => "textfield",

				"heading" => __("Header Title", "revature"),

				"param_name" => "title_img_left",

				"description" => __("Title for the Header", "revature")

			),

			array(

				"type" => "textarea_html",

				"heading" => __("Header Text", "revature"),

				"param_name" => "content",

				"description" => __("Text for the Header", "revature")

			),

			array(

				"type" => "attach_image",

				"heading" => __("Image URL", "revature"),

				"param_name" => "logo_img_img_left",

				"description" => __("Select an image to display below the button", "revature")

			),

			array(

				"type" => "textfield",

				"heading" => __("Button Text", "revature"),

				"param_name" => "button_text_img_left",

				"description" => __("Text for the Button", "revature")

			),

			array(

				"type" => "textfield",

				"heading" => __("Button URL", "revature"),

				"param_name" => "button_url_img_left",

				"description" => __("Enter the destination URL for the button", "revature")

			)

		)

	));

	vc_map(array(

		"name" => __("Text Left, Image Right - Header", "revature"),

		"base" => "home_text_left_img_right",

		"content_element" => true,

		"as_child" => array('only' => 'home_img_txt_container'),

		"show_settings_on_create"=>true,

		"category" => __( "Revature Shortcodes", "revature"),

		"params" => array(

			array(

				"type" => "textfield",

				"heading" => __("Header Title", "revature"),

				"param_name" => "title_left",

				"description" => __("Title for the Header", "revature")

			),

			array(

				"type" => "textarea_html",

				"heading" => __("Header Text", "revature"),

				"param_name" => "content",

				"description" => __("Text for the Header", "revature")

			),

			array(

				"type" => "attach_image",

				"heading" => __("Image URL", "revature"),

				"param_name" => "img_right",

				"description" => __("Select an image to display below the button", "revature")

			),

			array(

				"type" => "textfield",

				"heading" => __("Button Text", "revature"),

				"param_name" => "button_text",

				"description" => __("Text for the Button", "revature")

			),

			array(

				"type" => "textfield",

				"heading" => __("Button URL", "revature"),

				"param_name" => "button_url",

				"description" => __("Enter the destination URL for the button", "revature")

			)

		)

	));

	vc_map(array(

		"name" => __("Testimonial - 7", "revature"),

		"base" => "home_testimonial",

		"content_element" => true,

		"show_settings_on_create"=>true,

		"category" => __( "Revature Shortcodes", "revature"),

		"params" => array(

			array(

				"type" => "textfield",

				"heading" => __("Header Title", "revature"),

				"param_name" => "title",

				"description" => __("Title for the Header", "revature")

			),

			array(

				"type" => "textarea",

				"heading" => __("Testimonial Text", "revature"),

				"param_name" => "content_1",

				"description" => __("Text for Testimonial", "revature")

			),

			array(

				"type" => "textfield",

				"heading" => __("Name", "revature"),

				"param_name" => "name_1",

				"description" => __("Name", "revature")

			),

			array(

				"type" => "textfield",

				"heading" => __("School/Client", "revature"),

				"param_name" => "school_1",

				"description" => __("School and/or Client", "revature")

			),

			array(

				"type" => "textarea",

				"heading" => __("Testimonial Text", "revature"),

				"param_name" => "content_2",

				"description" => __("Text for Testimonial", "revature")

			),

			array(

				"type" => "textfield",

				"heading" => __("Name", "revature"),

				"param_name" => "name_2",

				"description" => __("Name", "revature")

			),

			array(

				"type" => "textfield",

				"heading" => __("School/Client", "revature"),

				"param_name" => "school_2",

				"description" => __("School and/or Client", "revature")

			),

			array(

				"type" => "textarea",

				"heading" => __("Testimonial Text", "revature"),

				"param_name" => "content_3",

				"description" => __("Text for Testimonial", "revature")

			),

			array(

				"type" => "textfield",

				"heading" => __("Name", "revature"),

				"param_name" => "name_3",

				"description" => __("Name", "revature")

			),

			array(

				"type" => "textfield",

				"heading" => __("School/Client", "revature"),

				"param_name" => "school_3",

				"description" => __("School and/or Client", "revature")

			),

			array(

				"type" => "textarea",

				"heading" => __("Testimonial Text", "revature"),

				"param_name" => "content_4",

				"description" => __("Text for Testimonial", "revature")

			),

			array(

				"type" => "textfield",

				"heading" => __("Name", "revature"),

				"param_name" => "name_4",

				"description" => __("Name", "revature")

			),

			array(

				"type" => "textfield",

				"heading" => __("School/Client", "revature"),

				"param_name" => "school_4",

				"description" => __("School and/or Client", "revature")

			),

			array(

				"type" => "textarea",

				"heading" => __("Testimonial Text", "revature"),

				"param_name" => "content_5",

				"description" => __("Text for Testimonial", "revature")

			),

			array(

				"type" => "textfield",

				"heading" => __("Name", "revature"),

				"param_name" => "name_5",

				"description" => __("Name", "revature")

			),

			array(

				"type" => "textfield",

				"heading" => __("School/Client", "revature"),

				"param_name" => "school_5",

				"description" => __("School and/or Client", "revature")

			),

			array(

				"type" => "textarea",

				"heading" => __("Testimonial Text", "revature"),

				"param_name" => "content_6",

				"description" => __("Text for Testimonial", "revature")

			),

			array(

				"type" => "textfield",

				"heading" => __("Name", "revature"),

				"param_name" => "name_6",

				"description" => __("Name", "revature")

			),

			array(

				"type" => "textfield",

				"heading" => __("School/Client", "revature"),

				"param_name" => "school_6",

				"description" => __("School and/or Client", "revature")

			),

			array(

				"type" => "textarea",

				"heading" => __("Testimonial Text", "revature"),

				"param_name" => "content_7",

				"description" => __("Text for Testimonial", "revature")

			),

			array(

				"type" => "textfield",

				"heading" => __("Name", "revature"),

				"param_name" => "name_7",

				"description" => __("Name", "revature")

			),

			array(

				"type" => "textfield",

				"heading" => __("School/Client", "revature"),

				"param_name" => "school_7",

				"description" => __("School and/or Client", "revature")

			)

		)

	));
		/*  start   vc_map of  join our team  */
	
		
		vc_map(array(
		"name" => __("Hire Talent - Video Header", "revature"),
		"base" => "video_header",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"params" => array(
			array(
				"type"=>"attach_image",
				"heading"=>__("Background Image", "revature"),
				"param_name"=>"background_img",
				"description"=>__("Select Background Image", "revature")
			),
			array(
				"type"=>"attach_image",
				"heading"=>__("Thumbnail", "revature"),
				"param_name"=>"logo_img",
				"description"=>__("Select Logo Image", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Header", "revature"),
				"param_name"=>"header_title",
				"description"=>__("Header Text", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Header video", "revature"),
				"param_name"=>"header_video",
				"description"=>__("Header Video URL", "revature")
			),
			array(
				"type"=>"textarea_html",
				"heading"=>__("Sub Header", "revature"),
				"param_name"=>"content",
				"description"=>__("Sub Header Text", "revature")
			),
			
			array(
				"type"=>"textfield",
				"heading"=>__("Button Text", "revature"),
				"param_name"=>"button_text_right",
				"description"=>__("Right Button Text", "revature")
			),
			
		)
	));
vc_map(array(
		"name" => __("Join our Team - Header", "revature"),
		"base" => "join_our_team_header",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"params" => array(
			array(
				"type"=>"attach_image",
				"heading"=>__("Thumbnail", "revature"),
				"param_name"=>"logo_img",
				"description"=>__("Select Logo Image", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Header", "revature"),
				"param_name"=>"header_title",
				"description"=>__("Header Text", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Header video", "revature"),
				"param_name"=>"header_video",
				"description"=>__("Header Video URL", "revature")
			),
			array(
				"type"=>"textarea_html",
				"heading"=>__("Sub Header", "revature"),
				"param_name"=>"content",
				"description"=>__("Sub Header Text", "revature")
			),
			
			array(
				"type"=>"textfield",
				"heading"=>__("Button Text", "revature"),
				"param_name"=>"button_text_right",
				"description"=>__("Right Button Text", "revature")
			),
			
		)
	));
	vc_map(array(

		"name"=>__("Join Our Team - Sub Nav Bar", "revature"),

		"base"=>"join_our_team_sub_nav",

		"content_element"=>true,

		"category"=>__("Revature Shortcodes", "revature"),

		"show_settings_on_create"=>true,

		"params"=>array(

			array(

				"type"=>"textfield",

				"heading"=>__("Link Text", "revature"),

				"param_name"=>"link_txt",

				"description"=>__("Text", "revature")

			),
			
			
			array(

				"type"=>"textfield",

				"heading"=>__("Link URL", "revature"),

				"param_name"=>"link_url",

				"description"=>__("URL", "revature")

			)

		)

	));
	
	/*  End   vc_map of  join our team  */
	vc_map(array(

		"name"=>__("RevaturePro - Header", "revature"),

		"base"=>"pro_header",

		"content_element"=>true,

		"category"=>__("Revature Shortcodes", "revature"),

		"show_settings_on_create"=>true,

		"params"=>array(

			array(

				"type" => "attach_image",

				"heading" => __("Logo Image", "revature"),

				"param_name" => "logo_img",

				"description" => __("Image for Header", "revature")

			),

			array(

				"type"=>"textfield",

				"heading"=>__("Title", "revature"),

				"param_name"=>"title",

				"description"=>__("Title", "revature")

			),

			array(

				"type"=>"textarea_html",

				"heading"=>__("Content", "revature"),

				"param_name"=>"content",

				"description"=>__("Content", "revature")

			),
			
			array(

				"type"=>"textfield",

				"heading"=>__("Button Name 1", "revature"),

				"param_name"=>"btn_txt_1",

				"description"=>__("Button Name", "revature")

			),
			
			array(

				"type"=>"textfield",

				"heading"=>__("Button URL 1", "revature"),

				"param_name"=>"btn_url_1",

				"description"=>__("Button URL 2", "revature")

			),
			
			
			array(

				"type"=>"textfield",

				"heading"=>__("Button Name 2", "revature"),

				"param_name"=>"btn_txt_2",

				"description"=>__("Button Name", "revature")

			),
			
			
			array(

				"type"=>"textfield",

				"heading"=>__("Button URL 2", "revature"),

				"param_name"=>"btn_url_2",

				"description"=>__("Button URL 2", "revature")

			),
			
			array(

				"type" => "attach_image",

				"heading" => __("Banner Image", "revature"),

				"param_name" => "banner_img",

				"description" => __("Banner Image", "revature")

			)

		)

	));
	
	
	
	vc_map(array(

		"name"=>__("RevaturePro - Sub Nav Bar", "revature"),

		"base"=>"pro_sub_nav",

		"content_element"=>true,

		"category"=>__("Revature Shortcodes", "revature"),

		"show_settings_on_create"=>true,

		"params"=>array(

			array(

				"type"=>"textfield",

				"heading"=>__("Link Text", "revature"),

				"param_name"=>"link_txt",

				"description"=>__("Text", "revature")

			),
			
			
			array(

				"type"=>"textfield",

				"heading"=>__("Link URL", "revature"),

				"param_name"=>"link_url",

				"description"=>__("URL", "revature")

			)

		)

	));
	

	if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {

		class WPBakeryShortCode_Home_Img_Txt_Container extends WPBakeryShortCodesContainer {

		}
		
		class WPBakeryShortCode_Pro_Sub_Nav_Container_Func extends WPBakeryShortCodesContainer {


		}
		class WPBakeryShortCode_Contact_Container extends WPBakeryShortCodesContainer{
			
		}
		class WPBakeryShortCode_Revaturepro_Two_Column_container extends WPBakeryShortCodesContainer{
			
		}
		class WPBakeryShortCode_Revaturepro_Faq_Container extends WPBakeryShortCodesContainer{
			
		}
		class WPBakeryShortCode_Request_landing_container extends WPBakeryShortCodesContainer{
			
		}
		class WPBakeryShortCode_Academic_University_Container extends WPBakeryShortCodesContainer{
			
		}
	}

	if ( class_exists( 'WPBakeryShortCode' ) ) {

		class WPBakeryShortCode_Home_Img_Txt_Header extends WPBakeryShortCode {

			

		}

		class WPBakeryShortCode_Home_Img_Left_Text_Right extends WPBakeryShortCode {

		}

		

		class WPBakeryShortCode_Home_What_We_Do extends WPBakeryShortCode{

			

		}

		class WPBakeryShortCode_Home_Video_Header extends WPBakeryShortCode{

			

		}

		class WPBakeryShortCode_Home_Text_Left_Img_Right extends WPBakeryShortCode{

			

		}

		class WPBakeryShortCode_Home_Testimonial extends WPBakeryShortCode{

			

		}

		class WPBakeryShortCode_Home_Contact_Us extends WPBakeryShortCode{

			

		}
		class WPBakeryShortCode_Online_Header extends WPBakeryShortCode{
			
		}
		
		class WPBakeryShortCode_Online_Log_In_Banner extends WPBakeryShortCode{
			
		}
		class WPBakeryShortCode_Corporate_Partner_Schedule_Form extends WPBakeryShortCode{
			
		}
		class WPBakeryShortCode_Online_Two_Column_Txt_Img extends WPBakeryShortCode{
			
		}
		class WPBakeryShortCode_Online_Quick_Facts extends WPBakeryShortCode{
			
		}
		class WPBakeryShortCode_Online_Sign_Up extends WPBakeryShortCode{
			
		}
		class WPBakeryShortCode_Online_Bottom_Two_Column extends WPBakeryShortCode{
			
		}
		class WPBakeryShortCode_Contact_Header extends WPBakeryShortCode{
			
		}
		class WPBakeryShortCode_Contact_Form extends WPBakeryShortCode{
			
		}
		class WPBakeryShortCode_Contact_Info extends WPBakeryShortCode{
			
		}
		class WPBakeryShortCode_Recruitment_Header extends WPBakeryShortCode{
			
		}
		class WPBakeryShortCode_Recruitment_Two_Column extends WPBakeryShortCode{
			
		}
		class WPBakeryShortCode_Revaturepro_Header extends WPBakeryShortCode{
			
		}
		class WPBakeryShortCode_Revaturepro_Sub_Nav_Container extends WPBakeryShortCode{
			
		}
		class WPBakeryShortCode_Revaturepro_Benefits_Blue_Header extends WPBakeryShortCode{
			
		}
		class WPBakeryShortCode_Revaturepro_Benefits_Blue_Items extends WPBakeryShortCode{
			
		}
		class WPBakeryShortCode_Revaturepro_Quick_Facts extends WPBakeryShortCode{
			
		}
		class WPBakeryShortCode_Revaturepro_Two_Column_Header extends WPBakeryShortCode{
			
		}
		class WPBakeryShortCode_Revaturepro_Two_Column_Img_Left extends WPBakeryShortCode{
			
		}
		class WPBakeryShortCode_Revaturepro_Two_Column_Img_Right extends WPBakeryShortCode{
			
		}
		class WPBakeryShortCode_Revaturepro_Get_It_Going extends WPBakeryShortCode{
			
			
		}
		class WPBakeryShortCode_Revaturepro_Faq_Item extends WPBakeryShortCode{
			
		}
		class WPBakeryShortCode_Revaturepro_Two_Column_Callout extends WPBakeryShortCode{
			
		}
		class WPBakeryShortCode_corporate_header extends WPBakeryShortCode{
			
		}
		class WPBakeryShortCode_corporate_sub_nav extends WPBakeryShortCode{
			
		}
		class WPBakeryShortCode_corporate_horizontal_steps extends WPBakeryShortCode{
			
		}
		class WPBakeryShortCode_corporate_benefits_orange_items extends WPBakeryShortCode{
			
		}
		class WPBakeryShortCode_corporate_benefits_orange_header extends WPBakeryShortCode{
			
		}
		class WPBakeryShortCode_Housing_Header extends WPBakeryShortCode{
			}
		class WPBakeryShortCode_corporate_quick_facts extends WPBakeryShortCode{
			
		}
		class WPBakeryShortCode_corporate_quote extends WPBakeryShortCode{
			
		}
		class WPBakeryShortCode_corporate_pipeline extends WPBakeryShortCode{
			
		}
		class WPBakeryShortCode_recruitment_form extends WPBakeryShortCode{
			
		}
		class WPBakeryShortCode_Academic_University_Left_Side_Area extends WPBakeryShortCode{
			
		}
		
		class WPBakeryShortCode_Academic_University_Right_Side_Form_And_Section extends WPBakeryShortCode{
			
		}
	}

}?>
<?php 
$Path=$_SERVER['REQUEST_URI'];
$page=substr($Path,1,-1);


if($page=='online'  || $page=='coding-bootcamp') 
{
	?>
<!--home page custom JS-->
<script>
window.onload = function(){  
   document.getElementById("menu-item-234").className = "active";  
  }
 

</script>
<?php
}

 ?>