<?php
/**
 * Template Name: Contact Us
 */

get_header(); ?>
<script src="https://use.typekit.net/ccw5rko.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>


<div class="contactus-hero">
        <div class="row no-margin contact-hero-content">
            <div class="col-lg-12 col-md-12 col-sm-12 margin-top-50">
                <h2 class="margin-bottom-15">Contact Us</h2>
                <p class="">We welcome the opportunity to discuss how Revature can advance people and technologies for you. Please fill out the fields of the form below and we'll be in touch with you right away.</p>
            </div>
        </div>
    </div>

<section class="contactus-form-bg padding-top-100" style="background:#fab62b !important;">
    
    <div class="container">
        <div class="row">
		<div class="col-lg-8 padding-LR-50 margin-bottom-50" style="display:none;" id="confirm">
			<h4>
				Thank you for your interest in Revature. We will contact you shortly regarding your inquiry.
			</h4>
		</div>
            <div class="col-lg-8 padding-LR-50" id="contactFormContainer">
                <div class="">
                    <h4 id="contactFormTitle">Contact Information</h4>
                </div>
                <div class="row form-label-txt">
                    <form id="contactForm" method="post" target="confirmFrame" action="https://qa2.revature.com/contactus">

                        <div class="col-lg-12 form-group">
                            <label class="control-label" for="Name">Name*</label>
                            <input class="shortfield-home form-control" type="text" name="Name" id="Name" maxlength="50" required/>
							<span id="nameHelp" class="help-block" style="display:none;">Please enter first and last name.</span>
                        </div>
                        <div class="col-lg-6 form-group">
                           <label class="control-label" for="Email">Email*</label>
                           <input class="shortfield-home form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" type="email" name="Email" id="Email" maxlength="50" required/>
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
						 <!-- <a id="contactSubmit" class="white-submit-btn" type="submit">SUBMIT<i class="fa fa-angle-right"></i></a> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
			<iframe id="confirmFrame" name="confirmFrame" style="display:none;">
			</iframe>
             <div class="col-lg-4 mob-margin-50">
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
        <li class="contact-q"><img src="http://revature.rengarajuperumal.com/wp-content/themes/revature/imgs/faq-down-arrow.svg"> Corporate Headquarters</li>
        <li class="contact-a"><p>11730 Plaza America Drive<br/>
                         Suite 205<br/>
                         Reston, VA 20190</p>
					   <p><strong class="">P</strong> <a href="tel:703 570 8181">703 570 8181</a></p>
                       <p><strong class="">F</strong> <a href="tel:703 995 4500">703 995 4500</a></p>
					   <p><strong class="">M</strong> <a href="mailto:info@revature.com">info@revature.com</a></p>
         </li>
        
        <li class="contact-q"><img src="http://revature.rengarajuperumal.com/wp-content/themes/revature/imgs/faq-down-arrow.svg">West Coast</li>
         <li class="contact-a"><p>25350 Magic Mountain Parkway<br/>
                         Valencia, CA 91355</p>
					   <p><strong class="">P</strong> <a href="tel:703 570 8181">703 570 8181</a></p>
                       <p><strong class="">F</strong> <a href="tel:703 995 4500">703 995 4500</a></p>
					   <p><strong class="">M</strong> <a href="mailto:info@revature.com">info@revature.com</a></p>
         </li>
                <li class="contact-q"><img src="http://revature.rengarajuperumal.com/wp-content/themes/revature/imgs/faq-down-arrow.svg">Chennai - India</li>
         <li class="contact-a"><p>434/203 TTK Road, Alwarpet<br/>
                         Chennai 600018<br/>
                         </p>
                       <p><strong class="">P</strong> <a href="tel:+91 44 4201 6145">+91 44 4201 6145</a></p>
                       <p><strong class="">M</strong> <a href="mailto:info@revature.com">info@revature.com</a></p>
         </li>
                       <li class="contact-q"><img src="http://revature.rengarajuperumal.com/wp-content/themes/revature/imgs/faq-down-arrow.svg">Bangalore - India</li>
         <li class="contact-a"><p>6/A, Bannerghatta Main Rd<br/>
                         3rd Phase, J P Nagar<br/>
                         Bengaluru, Karnataka 560076</p>
         </li>
      </ul>
                     </div>
                     
                 </div>
            </div>
        </div>
    </div>
    
</section>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/contact.js"></script>
<?php
get_footer();
