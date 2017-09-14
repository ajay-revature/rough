<?php	/**
	 * The below functions specify several shortcodes that are used on the Bootcamp and Academic Partners pages
	 */
	 
	function bootcamp_header_func($atts, $content=null){
		//Grab the passed-in attributes
		$a = shortcode_atts(array(
			'title' => 'Default Title',
			'content' => 'Content',
			'img_logo' => 'Image URL'
		), $atts);

		return '<div class="rev-bootcamp-hero">
					<div class="row no-margin contact-hero-content">
						<div class="col-lg-12 col-md-12 col-sm-12 margin-top-100 margin-bottom-25">
							<h1 class="margin-bottom-15">'.$a['title'].'</h1>
							<p class="">
							 '.$content.'
							</p>
						</div>
						<div class="container margin-bottom-50">
							<div class="margin-top-50">
								<img src="'.wp_get_attachment_url($a['img_logo']).'" />
							</div>
						</div>
					</div>
				</div>';
	}
	add_shortcode('bootcamp_header', 'bootcamp_header_func');

	function bootcamp_image_right_func ($atts, $content=null){
		$a = shortcode_atts(array(
			'title' => 'Default Title',
			'logo_img' => 'Image URL',
		), $atts);
		return '<section class="rev-online">
			<div class="row no-margin">
				<div class="col-lg-6 col-md-6 col-sm-12 no-padding">
					<div class="padding-50 rev-online">
						<h2 class="rev-online-head">
						' . $a['title']. '<h2/> <br/> ' . $content . '
						</div>
				</div>
				 <div class="col-lg-6 col-md-6 col-sm-12 overflow-hidden hidden-xs hidden-sm no-padding rev-online">
						 <img class="" src="'. $a['logo_img']. '" />
				</div>
		</div>
	</section>';
	}
	add_shortcode('bootcamp_image_right', 'bootcamp_image_right_func');
	function bootcamp_quick_facts_func ($atts, $content=null){
		$a = shortcode_atts(array(
			'title_1' => 'First Title',
			'content_1' => 'First Content',
			'title_2' => 'Second Title',
			'content_2' => 'Second Content',
			'title_3' => 'Third Title',
			'content_3' => 'Third Content',
			'title_4' => 'Fourth Title',
			'content_4' => 'Fourth Content',
		), $atts);
		return '<section class="rev-boot-quickfacts">
				  <div class="container margin-bottom-50 rev-boot-no-margin">
				 <div class="row no-margin">
					   <div class="col-lg-12 col-md-12 col-sm-12 margin-top-70 rev-boot-container">
						<h3 class="margin-bottom-35 bootcamp-fat-h3">
						' . $a['title_1']. ' </h3>
						<p class="rev-boot-quick-p">' .$a['content_1']. '</p>
					 </div>
		 </div>
		 </div>
	<div class="rev-boot-quick-contain">
		<div class="rev-boot-1 margin-bottom-50 mob-bottom-50">
				<h2 class="">' . $a['title_2']. '</h2>
				<p> ' .$a['content_2'].'</p>
		</div>
		 <div class="rev-boot-1 margin-bottom-50 mob-bottom-50">
				<h2 class="">'. $a['title_3'].'</h2>
				<p>' .$a['content_3'].'</p>
			</div>
			 <div class="rev-boot-1 margin-bottom-50 mob-bottom-50">
				<h2 class="">' .$a['title_4']. '</h2>
				<p>'.$a['content_4'].'</p>
			</div>
		</div>
	</section>';
	}
	add_shortcode('bootcamp_quick_facts', 'bootcamp_quick_facts_func');
	function bootcamp_advance_func($atts, $content=null){
        $a = shortcode_atts(array(
            'title' => 'Title',
            'button_text' => 'Button Text',
            'button_url' => 'Button URL',
        ), $atts);
        return '<section>
				<div class="row no-margin">
					<div class="col-lg-12 col-md-12 col-sm-12 no-padding-revaturepro">
						<div class="quickcont-bg">							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<h2 class="margin-bottom-35">'. $a['title'].'</h2>
									<a class="white-read-btn" href="'. $a['button_url'].'">'. $a['button_text'].'<i class="fa fa-angle-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				</section>';
    }	add_shortcode('bootcamp_advance', 'bootcamp_advance_func');
    function bootcamp_bottom_two_column_func ($atts, $content=null){
        $a = shortcode_atts(array(
            'title_1' => 'First Title',
            'content_1' => 'First Content',
            'link_text_1' => 'First Link Text',
            'link_url_1' => 'First Link URL',
            'title_2' => 'Second Title',
            'content_2' => 'Second Content',
            'link_text_2' => 'Second Link Text',
            'link_url_2' => 'Second Link URL'
        ), $atts);
        return '<section class="">
					<div class="row no-margin">
						<div class="col-lg-6 col-md-6 col-sm-12 no-padding-revaturepro">
							<div class="rev-boot-ob">
								<div class="row margin-top-100">
									<div class="col-lg-12 col-md-12 col-sm-12 margin-bottom-25 text-left">
										<h4 class="">'. $a['title_1'].'</h4>
										<p class="">'. $a['content_1'].'</p>	
										<span class="white-blank-btn ">
											<a href="'. $a['link_url_1'].'">'. $a['link_text_1'].'<i class="fa fa-chevron-circle-right"></i></a>
										</span>
									</div>
								</div>	
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 no-padding-revaturepro">
							<div class="rev-online-call">
								<div class="row margin-top-100">
									<div class="col-lg-12 col-md-12 col-sm-12 margin-bottom-25 text-left">
										<h4 class="">'. $a['title_2']. '</h4>'.
                                        '<p class="">'. $a['content_2'].'</p>
										<span class="white-blank-btn"><a href="'. $a['link_url_2'].'">'. $a['link_text_2'].'<i class="fa fa-chevron-circle-right"></i></a></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>';
    }
	add_shortcode('bootcamp_bottom_two_column', 'bootcamp_bottom_two_column_func');
	function bootcamp_six_steps_func ($atts, $content=null){
		$a = shortcode_atts(array(
			'id'=>'',
			'title_1' => 'First Title',
			'content_1' => 'First Content',
			'title_2' => 'Second Title',
			'content_2' => 'Second Content',
			'img_2' => 'Second Image URL',
			'title_3' => 'Third Title',
			'content_3' => 'Third Content',
			'img_3' => 'third Image URL',
			'title_4' => 'Fourth Title',
			'content_4' => 'Fourth Content',
			'img_4' => 'Fourth Image URL',
			'title_5' => 'Fifth Title',
			'content_5' => 'Fifth Content',
			'img_5' => 'Fifth Image URL',
			'title_6' => 'Sixth Title',
			'content_6' => 'Sixth Content',
			'img_6' => 'Sixth Image URL',
			'title_7' => 'Seventh Title',
			'content_7' => 'Seventh Content',
			'img_7' => 'Seventh Image URL'
		), $atts);
		return '<section class="hwd-bg" id="'.$a['id'].'">
				<div class="row wwd-content">
						<div class="col-lg-12 col-md-12 col-sm-12">
								<h2 class="margin-bottom-35 text-center">'. $a['title_1'].'</h2>
								<p>'. $a['content_1'].'</p>
						</div>
				</div>
				<div class="hwd-steps bootcamp-steps">
					<div class="col-lg-6 col-md-6 col-sm-6 icon-holder-left">
						<span class=""><img src="'.wp_get_attachment_url($a['img_2']).'"/></span>
					</div>
					 <div class="col-lg-6 col-md-6 col-sm-6 icon-content-right">
						<h3 class="">'. $a['title_2'].'</h3>
						<span>'. $a['content_2'].'  </span>
					</div>
					<div class="clear"></div>
					<div class="col-lg-6 col-md-6 col-sm-6 icon-holder-right mob-right">
						<span class=""><img src="'.wp_get_attachment_url($a['img_3']).'"/></span>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 icon-content-left mob-right">
						<h3 class="">'. $a['title_3'].'</h3>
						<span>'. $a['content_3'].'</span>
					</div>
					<div class="clear"></div>
					<div class="col-lg-6 col-md-6 col-sm-6 icon-holder-left">
						<span class=""><img src="'.wp_get_attachment_url($a['img_4']).'"/></span>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 icon-content-right">
						<h3 class="">'. $a['title_4'].'</h3>
						<span>'. $a['content_4'].'</span>
					</div>
					<div class="clear"></div>
					<div class="col-lg-6 col-md-6 col-sm-6 icon-holder-right mob-right">
						<span class=""><img src="'.wp_get_attachment_url($a['img_5']).'"/></span>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 icon-content-left mob-right">
						<h3 class="">'. $a['title_5'].'</h3>
						<span>'. $a['content_5'].'</span>
					</div>
					<div class="clear"></div>
					<div class="col-lg-6 col-md-6 col-sm-6 icon-holder-left">
						<span class=""><img src="'.wp_get_attachment_url($a['img_6']).'" /></span>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 icon-content-right">
						<h3 class="">'. $a['title_6'].'</h3>
						<span>'. $a['content_6'].'</span>
					</div>
					<div class="clear"></div>
					<div class="col-lg-6 col-md-6 col-sm-6 icon-holder-right mob-right">
						<span class=""><img src="'.wp_get_attachment_url($a['img_7']).'" /></span>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 icon-content-left mob-right">
					   <h3 class="">'. $a['title_7'].'</h3>
						<span>'. $a['content_7'].'</span>
					</div>
				</div>
		</section>';
	}
	add_shortcode('bootcamp_six_steps', 'bootcamp_six_steps_func');
	
	function bootcamp_apply_form_func ($atts, $content=null){
		$a = shortcode_atts(array(
			'confirm_title' => 'Thank You',
			'confirm_content' => 'Thank you for your interest in the RevaturePro program. We\'ll be in touch with you soon.',
			'title' => 'Title',
			'form_content' => 'Content',
		), $atts);
		
		return '<section class="rev-online-today" id="apply">
					<div id="confirm" style="display:none;" class="mob-container-unset margin-top-150">
						<h3>'.$a['confirm_title'].'</h3>
						<p>'.$a['confirm_content'].'</p>
					</div>
					<div class="mob-container-unset" id="bootcampFormContainer">
						<div class="row no-margin">
							<div class="col-lg-12 col-md-12 col-sm-12 no-margin no-padding">
								<h3 class="margin-bottom-15">'.$a['title'].'</h3>
								<p class="margin-bottom-15 acd-part-today-cont">'.$a['form_content'].'</p>
							   <div class="row width-900">
							   <form id="bootcampForm" method="post" target="iframe" action="https://app.revature.com/contactus">
							   <input type="hidden" name="SendKey" value="RevaturePro Bootcamp Interest">
								   <div class="col-lg-6 text-left form-group">
									   <label class="control-label" for="Name">Full Name*</label>
										<input class="shortfield-home form-control" type="text" name="Name" id="Name" required="">
										<span id="nameHelp" class="help-block" style="display:none;">Please provide your name.</span>
								   </div>
								   <div class="col-lg-6 text-left form-group">
									   <label class="control-label" for="Email">Email*</label>
									   <input class="shortfield-home form-control" type="email" name="Email" id="Email" required="">
									   <span id="emailHelp" class="help-block" style="display:none;">Please provide a valid email address.</span>
								   </div>
								  <span class="orange-submit-btn margin-top-25" id="bootcampSubmit">
										 <input type="submit" value="SUBMIT" style="color: rgb(255, 255, 255);"><i class="fa fa-angle-right" aria-hidden="true"></i>
									 </span>
							   </form>
								</div>
						  </div>
					 </div>
				 </div>
			</section>
			<iframe id="iframe" name="iframe" style="display:none;">
			</iframe>';
	}
	add_shortcode('bootcamp_apply_form', 'bootcamp_apply_form_func');
	function academicpartners_advance_func($atts, $content=null){
        $a = shortcode_atts(array(
            'title' => 'Title',
            'button_text' => 'Link Text',
            'button_url' => 'Link URL'
    
        ), $atts);
        return ' <section>
            <div class="row no-margin">
                <div class="col-lg-12 col-md-12 col-sm-12 no-padding-revaturepro">
                    <div class="quickcont-bg">
                       <div class="row">
                          <div class="col-lg-12 col-md-12 col-sm-12">
                        <h2 class="margin-bottom-35">'. $a['title'].'</h2>
                         <a href="'. $a['button_url'].'" class="white-read-btn">'. $a['button_text'].'<i class="fa fa-angle-right"></i></a>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </section>';
    }	add_shortcode('academicpartners_advance', 'academicpartners_advance_func');
    function academicpartners_for_business_func($atts, $content=null){
        $a = shortcode_atts(array(
            'title' => 'Title',
            'button_text' => 'Link Text',
            'button_url' => 'Link URL'
        ), $atts);
        return '  <section class="acd-part-today">
          <div class="mob-container-unset">
             <div class="row no-margin">
                   <div class="col-lg-12 col-md-12 col-sm-12 no-margin no-padding">
                    <h3 class="margin-bottom-15">'. $a['title'].'</h3>
                    <p class="margin-bottom-15 acd-part-today-cont">'. $content .'</p>
                                       <a href="'. $a['button_url'].'" class="white-read-btn margin-top-25 margin-right-15">'. $a['button_text'].'<i class="fa fa-angle-right"></i></a>
                                       
                                   </div>
                             </div>
                         </div>
                    </section>';
    }	add_shortcode('academicpartners_for_business', 'academicpartners_for_business_func');    
    function academicpartners_for_students_func($atts, $content=null){
        $a = shortcode_atts(array(
            'title' => 'Title',
            'link_text' => 'Link Text',
            'link_url' => 'Link URL'
        ), $atts);
        return '<section class="">
            <div class="row no-margin">
                <div class="col-lg-12 col-md-12 col-sm-12 no-padding-revaturepro">
                    <div class="rev-pro-acd-ins">
                        <div class="row margin-top-50">
                            <div class="col-lg-12 col-md-12 col-sm-12 margin-bottom-25 text-center">
                                <h4 class="">'. $a['title'].'</h4>
                                <p class="">'. $content .'</p>
                                <span class="white-blank-btn "><a href="'. $a['link_url'].'">'. $a['link_text'].'<i class="fa fa-chevron-circle-right"></i></a></span>
                            </div>

                        </div>
                    </div>
                </div></div>
                </section>';
    }
	add_shortcode('academicpartners_for_students', 'academicpartners_for_students_func');
	function academicpartners_five_steps_func($atts, $content=null){
        $a = shortcode_atts(array(
            'main_title' => 'Default Title',
			'main_content' => 'Content',
            'title_1' => 'First Title',
            'img_1' => 'First Image',
            'content_1' => 'First Content',
            'title_2' => 'Second Title',
            'img_2' => 'Second Image',
            'content_2' => 'Second Content',
            'title_3' => 'Third Title',
            'img_3' => 'Third Image',
            'content_3' => 'Third Content',
            'title_4' => 'Fourth Title',
            'img_4' => 'Fourth Image',
            'content_4' => 'Fourth Content',
            'title_5' => 'Fifth Title',
            'img_5' => 'Fifth Image',
            'content_5' => 'Fifth Content'
            ), $atts);
        return '<section class="hwd-bg" id="hwd-bg">
					<div class="row wwd-content">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<h2 class="margin-bottom-35 text-center">'. $a['main_title'].'</h2>
								<p>'. $a['main_content'] .'</p>
                        </div>
					</div>
					<div class="acd-par-steps"> 
						<div class="col-lg-6 col-md-6 col-sm-6 icon-holder-left">
							<span class=""><img src="'.wp_get_attachment_url($a['img_1']).'" /></span>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 icon-content-right">
							<h3 class="">'. $a['title_1'].'</h3>
							<span>'. $a['content_1'].'</span>
						</div>
						<div class="clear"></div>
						<div class="col-lg-6 col-md-6 col-sm-6 icon-holder-right mob-right">
							<span class=""><img src="'.wp_get_attachment_url($a['img_2']).'" /></span>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 icon-content-left mob-right">
							<h3 class="">'. $a['title_2'].'</h3>
							<span>'. $a['content_2'].'</span>
						</div>
						<div class="clear"></div>
						<div class="col-lg-6 col-md-6 col-sm-6 icon-holder-left">
							<span class=""><img src="'.wp_get_attachment_url($a['img_3']).'" /></span>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 icon-content-right">
							<h3 class="">'. $a['title_3'].'</h3>
							<span>'. $a['content_3'].'</span>
						</div>
						<div class="clear"></div>
						<div class="col-lg-6 col-md-6 col-sm-6 icon-holder-right mob-right">
							<span class=""><img src="'.wp_get_attachment_url($a['img_4']).'" /></span>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 icon-content-left mob-right">
							<h3 class="">'. $a['title_4'].'</h3>
							<span>'. $a['content_4'].'</span>
						</div>
						<div class="clear"></div>
						<div class="col-lg-6 col-md-6 col-sm-6 icon-holder-left">
							<span class=""><img src="'.wp_get_attachment_url($a['img_5']).'" /></span>
						</div>						
						<div class="col-lg-6 col-md-6 col-sm-6 icon-content-right margin-top-40">
							<h3 class="">'. $a['title_5'].'</h3>
							<span>'. $a['content_5'].'</span>
						</div>
						<div class="clear"></div>
					</div>
				</section>';
    }
	add_shortcode('academicpartners_five_steps', 'academicpartners_five_steps_func');
	
			function academicpartners_four_steps_func($atts, $content=null){
        $a = shortcode_atts(array(
            'main_title' => 'Default Title',
			'main_content' => 'Content',
            'title_1' => 'First Title',
            'img_1' => 'First Image',
            'content_1' => 'First Content',
            'title_2' => 'Second Title',
            'img_2' => 'Second Image',
            'content_2' => 'Second Content',
            'title_3' => 'Third Title',
            'img_3' => 'Third Image',
            'content_3' => 'Third Content',
            'title_4' => 'Fourth Title',
            'img_4' => 'Fourth Image',
            'content_4' => 'Fourth Content'
            ), $atts);
        return '<section class="hwd-bg" id="hwd-bg">
					<div class="row wwd-content">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<h2 class="margin-bottom-35 text-center">'. $a['main_title'].'</h2>
								<p>'. $a['main_content'] .'</p>
                        </div>
					</div>
					<div class="acd-four"> 
						<div class="col-lg-6 col-md-6 col-sm-6 icon-holder-left">
							<span class=""><img src="'.wp_get_attachment_url($a['img_1']).'" /></span>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 icon-content-right">
							<h3 class="">'. $a['title_1'].'</h3>
							<span>'. $a['content_1'].'</span>
						</div>
						<div class="clear"></div>
						<div class="col-lg-6 col-md-6 col-sm-6 icon-holder-right mob-right">
							<span class=""><img src="'.wp_get_attachment_url($a['img_2']).'" /></span>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 icon-content-left mob-right">
							<h3 class="">'. $a['title_2'].'</h3>
							<span>'. $a['content_2'].'</span>
						</div>
						<div class="clear"></div>
						<div class="col-lg-6 col-md-6 col-sm-6 icon-holder-left">
							<span class=""><img src="'.wp_get_attachment_url($a['img_3']).'" /></span>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 icon-content-right">
							<h3 class="">'. $a['title_3'].'</h3>
							<span>'. $a['content_3'].'</span>
						</div>
						<div class="clear"></div>
						<div class="col-lg-6 col-md-6 col-sm-6 icon-holder-right mob-right">
							<span class=""><img src="'.wp_get_attachment_url($a['img_4']).'" /></span>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 icon-content-left mob-right">
							<h3 class="">'. $a['title_4'].'</h3>
							<span>'. $a['content_4'].'</span>
						</div>
						<div class="clear"></div>
					</div>
				</section>';
    }
	add_shortcode('academicpartners_four_steps', 'academicpartners_four_steps_func');
	
    function academicpartners_header_func($atts, $content=null){
        $a = shortcode_atts(array(
            'title' => 'Title'
        ), $atts);
        return '<div class="acd-par-hero">
                <div class="row no-margin contact-hero-content">
                    <div class="col-lg-12 col-md-12 col-sm-12 margin-top-50 margin-bottom-50">
                        <h1>'. $a['title'].'</h1>
                        <p class="">'. $content .'</p>
					</div>
				</div>';
    }	add_shortcode('academicpartners_header', 'academicpartners_header_func');
	
    function academicpartners_quickfacts_func($atts, $content=null){
        $a = shortcode_atts(array(
            'title_1' => 'First Title',
            'content_1' => 'First Content',
            'title_2' => 'Two Title',
            'content_2' => 'Two Content',
            'title_3' => 'Three Title',
            'content_3' => 'Three Content',
            'title_4' => 'Four Title',
            'content_4' => 'Four Content'
        ), $atts);
        return '<section class="acd-quickfacts">
                  <div class="container margin-bottom-50">
                 <div class="row no-margin">
                       <div class="col-lg-12 col-md-12 col-sm-12 margin-top-70">
                        <h3>'. $a['title_1'].'</h3>
                        <p class="acd-quick-p">'. $a['content_1'].'</p>
                       </div>
                 </div>
                 </div>
            <div class="acd-par-quick-contain">
                <div class="rev-quick-1 margin-bottom-50">
                    <h3 class="">'. $a['title_2'].'</h2>
                    <p>'. $a['content_2'].'</p>
                </div>
                 <div class="rev-quick-1 margin-bottom-50">
                    <h3 class="">'. $a['title_3'].'</h2>
                    <p>'. $a['content_3'].'</p>
                </div>
                 <div class="rev-quick-1 margin-bottom-50 ">
                    <h3 class="">'. $a['title_4'].'</h2>
                    <p>'. $a['content_4'].'</p>
                </div>
            </div>
        </section>';
    }	add_shortcode('academicpartners_quickfacts', 'academicpartners_quickfacts_func');
		//Hook into the rest of the Visual Composer Plugin
	add_action('vc_before_init', 'shortcode_integrationWithVC_Aron');

	function shortcode_integrationWithVC_Aron(){
		/*================================================RevaturePro Bootstrap Page==============================================*/		vc_map(array(
			"name"=>__("RevaturePro Bootcamp - Header", "revature"),
			"base"=>"bootcamp_header",
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
					"type"=>"attach_image",
					"heading"=>__("Logo URL", "revature"),
					"param_name"=>"img_logo",
					"description"=>__("URL for Logo", "revature")
				)
			)
		));
		vc_map(array(
			"name"=>__("RevaturePro Bootcamp - Quick Facts", "revature"),
			"base"=>"bootcamp_quick_facts",
			"content_element"=>true,
			"category"=>__("Revature Shortcodes", "revature"),
			"show_settings_on_create"=>true,
			"params"=>array(
				array(
					"type"=>"textfield",
					"heading"=>__("Title 1", "revature"),
					"param_name"=>"title_1",
					"description"=>__("Title 1", "revature")
				),
				array(
					"type"=>"textarea",
					"heading"=>__("Quick Fact 1", "revature"),
					"param_name"=>"content_1",
					"description"=>__("Quick Fact 1", "revature")
				),
				array(
					"type"=>"textfield",
					"heading"=>__("Quick Fact 2", "revature"),
					"param_name"=>"title_2",
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
					"param_name"=>"title_3",
					"description"=>__("Quick Fact 3", "revature")
				),
				array(
					"type"=>"textarea",
					"heading"=>__("Quick Fact 3 - Description", "revature"),
					"param_name"=>"content_3",
					"description"=>__("Description for Quick Fact 3", "revature")
				),
				
				array(
					"type"=>"textfield",
					"heading"=>__("Quick Fact 4", "revature"),
					"param_name"=>"title_4",
					"description"=>__("Quick Fact 4", "revature")
				),
				array(
					"type"=>"textarea",
					"heading"=>__("Quick Fact 4 - Description", "revature"),
					"param_name"=>"content_4",
					"description"=>__("Description for Quick Fact 4", "revature")
				),
			)
		));
		vc_map(array(
			"name"=>__("RevaturePro Bootcamp - How It Works.", "revature"),
			"base"=>"bootcamp_six_steps",
			"content_element"=>true,
			"category"=>__("Revature Shortcodes", "revature"),
			"show_settings_on_create"=>true,
			"params"=>array(
				array(
					"type"=>"textfield",
					"heading"=>__("ID", "revature"),
					"param_name"=>"id",
					"description"=>__("ID of HTML Element", "revature")
				),
				array(
					"type"=>"textfield",
					"heading"=>__("Title 1", "revature"),
					"param_name"=>"title_1",
					"description"=>__("Title 1", "revature")
				),
				array(
					"type"=>"textarea",
					"heading"=>__("Content 1", "revature"),
					"param_name"=>"content_1",
					"description"=>__("Content 1", "revature")
				),
				array(
					"type"=>"textfield",
					"heading"=>__("Quick Fact 2", "revature"),
					"param_name"=>"title_2",
					"description"=>__("Quick Fact 2", "revature")
				),
				array(
					"type"=>"textarea",
					"heading"=>__("Quick Fact 2 - Description", "revature"),
					"param_name"=>"content_2",
					"description"=>__("Description for Quick Fact 2", "revature")
				),
				array(
					"type"=>"attach_image",
					"heading"=>__("Image 2 URL", "revature"),
					"param_name"=>"img_2",
					"description"=>__("URL for Image 2", "revature")
				),
				array(
					"type"=>"textfield",
					"heading"=>__("Quick Fact 3", "revature"),
					"param_name"=>"title_3",
					"description"=>__("Quick Fact 3", "revature")
				),
				array(
					"type"=>"textarea",
					"heading"=>__("Quick Fact 3 - Description", "revature"),
					"param_name"=>"content_3",
					"description"=>__("Description for Quick Fact 3", "revature")
				),
				array(
					"type"=>"attach_image",
					"heading"=>__("Image 3 URL", "revature"),
					"param_name"=>"img_3",
					"description"=>__("URL for Image 3", "revature")
				),
				array(
					"type"=>"textfield",
					"heading"=>__("Quick Fact 4", "revature"),
					"param_name"=>"title_4",
					"description"=>__("Quick Fact 4", "revature")
				),
				array(
					"type"=>"textarea",
					"heading"=>__("Quick Fact 4 - Description", "revature"),
					"param_name"=>"content_4",
					"description"=>__("Description for Quick Fact 4", "revature")
				),
				array(
					"type"=>"attach_image",
					"heading"=>__("Image 4 URL", "revature"),
					"param_name"=>"img_4",
					"description"=>__("URL for Image 4", "revature")
				),
				array(
					"type"=>"textfield",
					"heading"=>__("Quick Fact 5", "revature"),
					"param_name"=>"title_5",
					"description"=>__("Quick Fact 5", "revature")
				),
				array(
					"type"=>"textarea",
					"heading"=>__("Quick Fact 5 - Description", "revature"),
					"param_name"=>"content_5",
					"description"=>__("Description for Quick Fact 5", "revature")
				),
				array(
					"type"=>"attach_image",
					"heading"=>__("Image 5 URL", "revature"),
					"param_name"=>"img_5",
					"description"=>__("URL for Image 5", "revature")
				),
				array(
					"type"=>"textfield",
					"heading"=>__("Quick Fact 6", "revature"),
					"param_name"=>"title_6",
					"description"=>__("Quick Fact 6", "revature")
				),
				array(
					"type"=>"textarea",
					"heading"=>__("Quick Fact 6 - Description", "revature"),
					"param_name"=>"content_6",
					"description"=>__("Description for Quick Fact 6", "revature")
				),
				array(
					"type"=>"attach_image",
					"heading"=>__("Image 6 URL", "revature"),
					"param_name"=>"img_6",
					"description"=>__("URL for Image 6", "revature")
				),
				array(
					"type"=>"textfield",
					"heading"=>__("Quick Fact 7", "revature"),
					"param_name"=>"title_7",
					"description"=>__("Quick Fact 7", "revature")
				),
				array(
					"type"=>"textarea",
					"heading"=>__("Quick Fact 7 - Description", "revature"),
					"param_name"=>"content_7",
					"description"=>__("Description for Quick Fact 7", "revature")
				),
				array(
					"type"=>"attach_image",
					"heading"=>__("Image 7 URL", "revature"),
					"param_name"=>"img_7",
					"description"=>__("URL for Image 7", "revature")
				),
			)
		));
		vc_map(array(
			"name"=>__("RevaturePro Bootcamp - SignUp Form.", "revature"),
			"base"=>"bootcamp_apply_form",
			"content_element"=>true,
			"category"=>__("Revature Shortcodes", "revature"),
			"show_settings_on_create"=>true,
			"params"=>array(
				array(
					"type"=>"textfield",
					"heading"=>__("Thank You Title", "revature"),
					"param_name"=>"confirm_title",
					"description"=>__("Thank You Title", "revature")
				),
				array(
					"type"=>"textarea",
					"heading"=>__("Thank You Content", "revature"),
					"param_name"=>"confirm_content",
					"description"=>__("Thank You Content", "revature")
				),
				array(
					"type"=>"textfield",
					"heading"=>__("Form Title", "revature"),
					"param_name"=>"title",
					"description"=>__("Form Title", "revature")
				),
				array(
					"type"=>"textarea",
					"heading"=>__("Form Text", "revature"),
					"param_name"=>"form_content",
					"description"=>__("Form Text", "revature")
				),
			),
			
		));
		vc_map(array(
			"name"=>__("RevaturePro Bootcamp - 2 Column Text Over Image.", "revature"),
			"base"=>"bootcamp_bottom_two_column",
			"content_element"=>true,
			"category"=>__("Revature Shortcodes", "revature"),
			"show_settings_on_create"=>true,
			"params"=>array(
				array(
					"type"=>"textfield",
					"heading"=>__("Title 1", "revature"),
					"param_name"=>"title_1",
					"description"=>__("Title 1", "revature")
				),
				array(
					"type"=>"textarea",
					"heading"=>__("Content 1", "revature"),
					"param_name"=>"content_1",
					"description"=>__("Content 1", "revature")
				),
				array(
					"type"=>"textfield",
					"heading"=>__("Link Text 1", "revature"),
					"param_name"=>"link_text_1",
					"description"=>__("Link Text 1", "revature")
				),
				array(
					"type"=>"textfield",
					"heading"=>__("URL 1", "revature"),
					"param_name"=>"link_url_1",
					"description"=>__("URL 1", "revature")
				),
				array(
					"type"=>"textfield",
					"heading"=>__("Title 2", "revature"),
					"param_name"=>"title_2",
					"description"=>__("Title 2", "revature")
				),
				array(
					"type"=>"textarea",
					"heading"=>__("Content 2", "revature"),
					"param_name"=>"content_2",
					"description"=>__("Content 2", "revature")
				),
				array(
					"type"=>"textfield",
					"heading"=>__("Link Text 2", "revature"),
					"param_name"=>"link_text_2",
					"description"=>__("Link Text 2", "revature")
				),
				array(
					"type"=>"textfield",
					"heading"=>__("URL 2", "revature"),
					"param_name"=>"link_url_2",
					"description"=>__("URL 2", "revature")
				),
			
			),
		));
		vc_map(array(
			"name"=>__("RevaturePro Bootcamp - Advance.", "revature"),
			"base"=>"bootcamp_advance",
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
					"type"=>"textfield",
					"heading"=>__("Button Text", "revature"),
					"param_name"=>"button_text",
					"description"=>__("Button Text", "revature")
				),
				array(
					"type"=>"textfield",
					"heading"=>__("URL", "revature"),
					"param_name"=>"button_url",
					"description"=>__("URL", "revature")
				),
			),
		));
		
		/*================================================RevaturePro Bootstrap Page==============================================*/
		vc_map(array(
			"name"=>__("Academic Partnerships - Header", "revature"),
			"base"=>"academicpartners_header",
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
				)
			)
		));
		vc_map(array(
			"name"=>__("Academic Partnerships - How It Works (5 steps).", "revature"),
			"base"=>"academicpartners_five_steps",
			"content_element"=>true,
			"category"=>__("Revature Shortcodes", "revature"),
			"show_settings_on_create"=>true,
			"params"=>array(
				array(
					"type"=>"textfield",
					"heading"=>__("Main Title", "revature"),
					"param_name"=>"main_title",
					"description"=>__("Main Title", "revature")
				),
				array(
					"type"=>"textarea",
					"heading"=>__("Main Content", "revature"),
					"param_name"=>"main_content",
					"description"=>__("Main Content", "revature")
				),
				array(
					"type"=>"textfield",
					"heading"=>__("Title 1", "revature"),
					"param_name"=>"title_1",
					"description"=>__("Title 1", "revature")
				),
				array(
					"type"=>"textarea",
					"heading"=>__("Content 1", "revature"),
					"param_name"=>"content_1",
					"description"=>__("Content 1", "revature")
				),
				array(
					"type"=>"attach_image",
					"heading"=>__("Image 1 URL", "revature"),
					"param_name"=>"img_1",
					"description"=>__("URL for Image 1", "revature")
				),
				array(
					"type"=>"textfield",
					"heading"=>__("Quick Fact 2", "revature"),
					"param_name"=>"title_2",
					"description"=>__("Quick Fact 2", "revature")
				),
				array(
					"type"=>"textarea",
					"heading"=>__("Quick Fact 2 - Description", "revature"),
					"param_name"=>"content_2",
					"description"=>__("Description for Quick Fact 2", "revature")
				),
				array(
					"type"=>"attach_image",
					"heading"=>__("Image 2 URL", "revature"),
					"param_name"=>"img_2",
					"description"=>__("URL for Image 2", "revature")
				),
				array(
					"type"=>"textfield",
					"heading"=>__("Quick Fact 3", "revature"),
					"param_name"=>"title_3",
					"description"=>__("Quick Fact 3", "revature")
				),
				array(
					"type"=>"textarea",
					"heading"=>__("Quick Fact 3 - Description", "revature"),
					"param_name"=>"content_3",
					"description"=>__("Description for Quick Fact 3", "revature")
				),
				array(
					"type"=>"attach_image",
					"heading"=>__("Image 3 URL", "revature"),
					"param_name"=>"img_3",
					"description"=>__("URL for Image 3", "revature")
				),
				array(
					"type"=>"textfield",
					"heading"=>__("Quick Fact 4", "revature"),
					"param_name"=>"title_4",
					"description"=>__("Quick Fact 4", "revature")
				),
				array(
					"type"=>"textarea",
					"heading"=>__("Quick Fact 4 - Description", "revature"),
					"param_name"=>"content_4",
					"description"=>__("Description for Quick Fact 4", "revature")
				),
				array(
					"type"=>"attach_image",
					"heading"=>__("Image 4 URL", "revature"),
					"param_name"=>"img_4",
					"description"=>__("URL for Image 4", "revature")
				),
				array(
					"type"=>"textfield",
					"heading"=>__("Quick Fact 5", "revature"),
					"param_name"=>"title_5",
					"description"=>__("Quick Fact 5", "revature")
				),
				array(
					"type"=>"textarea",
					"heading"=>__("Quick Fact 5 - Description", "revature"),
					"param_name"=>"content_5",
					"description"=>__("Description for Quick Fact 5", "revature")
				),
				array(
					"type"=>"attach_image",
					"heading"=>__("Image 5 URL", "revature"),
					"param_name"=>"img_5",
					"description"=>__("URL for Image 5", "revature")
				),
			)
		));
				vc_map(array(
			"name"=>__("Academic Partnerships - How It Works (4 steps).", "revature"),
			"base"=>"academicpartners_four_steps",
			"content_element"=>true,
			"category"=>__("Revature Shortcodes", "revature"),
			"show_settings_on_create"=>true,
			"params"=>array(
				array(
					"type"=>"textfield",
					"heading"=>__("Main Title", "revature"),
					"param_name"=>"main_title",
					"description"=>__("Main Title", "revature")
				),
				array(
					"type"=>"textarea",
					"heading"=>__("Main Content", "revature"),
					"param_name"=>"main_content",
					"description"=>__("Main Content", "revature")
				),
				array(
					"type"=>"textfield",
					"heading"=>__("Title 1", "revature"),
					"param_name"=>"title_1",
					"description"=>__("Title 1", "revature")
				),
				array(
					"type"=>"textarea",
					"heading"=>__("Content 1", "revature"),
					"param_name"=>"content_1",
					"description"=>__("Content 1", "revature")
				),
				array(
					"type"=>"attach_image",
					"heading"=>__("Image 1 URL", "revature"),
					"param_name"=>"img_1",
					"description"=>__("URL for Image 1", "revature")
				),
				array(
					"type"=>"textfield",
					"heading"=>__("Quick Fact 2", "revature"),
					"param_name"=>"title_2",
					"description"=>__("Quick Fact 2", "revature")
				),
				array(
					"type"=>"textarea",
					"heading"=>__("Quick Fact 2 - Description", "revature"),
					"param_name"=>"content_2",
					"description"=>__("Description for Quick Fact 2", "revature")
				),
				array(
					"type"=>"attach_image",
					"heading"=>__("Image 2 URL", "revature"),
					"param_name"=>"img_2",
					"description"=>__("URL for Image 2", "revature")
				),
				array(
					"type"=>"textfield",
					"heading"=>__("Quick Fact 3", "revature"),
					"param_name"=>"title_3",
					"description"=>__("Quick Fact 3", "revature")
				),
				array(
					"type"=>"textarea",
					"heading"=>__("Quick Fact 3 - Description", "revature"),
					"param_name"=>"content_3",
					"description"=>__("Description for Quick Fact 3", "revature")
				),
				array(
					"type"=>"attach_image",
					"heading"=>__("Image 3 URL", "revature"),
					"param_name"=>"img_3",
					"description"=>__("URL for Image 3", "revature")
				),
				array(
					"type"=>"textfield",
					"heading"=>__("Quick Fact 4", "revature"),
					"param_name"=>"title_4",
					"description"=>__("Quick Fact 4", "revature")
				),
				array(
					"type"=>"textarea",
					"heading"=>__("Quick Fact 4 - Description", "revature"),
					"param_name"=>"content_4",
					"description"=>__("Description for Quick Fact 4", "revature")
				),
				array(
					"type"=>"attach_image",
					"heading"=>__("Image 4 URL", "revature"),
					"param_name"=>"img_4",
					"description"=>__("URL for Image 4", "revature")
				)
			)
		));
		vc_map(array(
			"name"=>__("Academic Partnerships - Quick Facts", "revature"),
			"base"=>"academicpartners_quickfacts",
			"content_element"=>true,
			"category"=>__("Revature Shortcodes", "revature"),
			"show_settings_on_create"=>true,
			"params"=>array(
				array(
					"type"=>"textfield",
					"heading"=>__("Title 1", "revature"),
					"param_name"=>"title_1",
					"description"=>__("Title 1", "revature")
				),
				array(
					"type"=>"textarea",
					"heading"=>__("Quick Fact 1", "revature"),
					"param_name"=>"content_1",
					"description"=>__("Quick Fact 1", "revature")
				),
				array(
					"type"=>"textfield",
					"heading"=>__("Quick Fact 2", "revature"),
					"param_name"=>"title_2",
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
					"param_name"=>"title_3",
					"description"=>__("Quick Fact 3", "revature")
				),
				array(
					"type"=>"textarea",
					"heading"=>__("Quick Fact 3 - Description", "revature"),
					"param_name"=>"content_3",
					"description"=>__("Description for Quick Fact 3", "revature")
				),
				
				array(
					"type"=>"textfield",
					"heading"=>__("Quick Fact 4", "revature"),
					"param_name"=>"title_4",
					"description"=>__("Quick Fact 4", "revature")
				),
				array(
					"type"=>"textarea",
					"heading"=>__("Quick Fact 4 - Description", "revature"),
					"param_name"=>"content_4",
					"description"=>__("Description for Quick Fact 4", "revature")
				),
			)
		));
		vc_map(array(
			"name"=>__("Academic Partnerships - For Students", "revature"),
			"base"=>"academicpartners_for_students",
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
					"heading"=>__("Link Text", "revature"),
					"param_name"=>"link_text",
					"description"=>__("Link Text", "revature")
				),
				array(
					"type"=>"textfield",
					"heading"=>__("URL", "revature"),
					"param_name"=>"link_url",
					"description"=>__("URL", "revature")
				),
			),
		));
		vc_map(array(
			"name"=>__("Academic Partnerships - For Business", "revature"),
			"base"=>"academicpartners_for_business",
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
					"param_name"=>"button_text",
					"description"=>__("Button Text", "revature")
				),
				array(
					"type"=>"textfield",
					"heading"=>__("URL", "revature"),
					"param_name"=>"button_url",
					"description"=>__("URL", "revature")
				),
			),
		));
		
		if ( class_exists( 'WPBakeryShortCode' ) ) {
			
			/* ============================== Bootcamp Classes =============================================*/			class WPBakeryShortCode_Bootcamp_Header extends WPBakeryShortCode {}
			class WPBakeryShortCode_Bootcamp_Image_Right extends WPBakeryShortCode{}
			class WPBakeryShortCode_Bootcamp_Quick_Facts extends WPBakeryShortCode {}
			class WPBakeryShortCode_Bootcamp_Advance extends WPBakeryShortCode {}
			class WPBakeryShortCode_Bootcamp_Plain_Testimonial extends WPBakeryShortCode {}
			class WPBakeryShortCode_Bootcamp_Six_Steps extends WPBakeryShortCode {}			class WPBakeryShortCode_Bootcamp_Apply_Form extends WPBakeryShortCode {}
			class WPBakeryShortCode_Bootcamp_Bottom_Two_Column extends WPBakeryShortCode{}
			
			/* ============================== Academic Partners Classes ====================================*/
			class WPBakeryShortCode_Academicpartners_Header extends WPBakeryShortCode {}
			class WPBakeryShortCode_Academicpartners_Five_Steps extends WPBakeryShortCode {}
			class WPBakeryShortCode_Academicpartners_Quickfacts extends WPBakeryShortCode {}
			class WPBakeryShortCode_Academicpartners_For_Students extends WPBakeryShortCode {}
			class WPBakeryShortCode_Academicpartners_For_Business extends WPBakeryShortCode {}
			
		}
	}