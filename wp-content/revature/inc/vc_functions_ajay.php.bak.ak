<?php


/*--------------------------------------------------------------------Start New  Home Page Shortcodes & vc_map() functions -------------------------------------*/


/*------------------------------------------------------------------------------- Header hero banner section-------------------------------------------------- */

function about_section_hero_header($atts, $content=null){
	$a=shortcode_atts(array(
		'title1'=>'First Title'
	), $atts);
	return
	'<div class="home-section-hero">
        <div class="row no-margin home-hero-content">
            <div class="col-lg-12 col-md-12 col-sm-12 margin-top-50 margin-bottom-50">
                <h1>'.$a['title1'].'</h1>
                <p class="">
				'.$content.'
				</p>
            </div>
		</div>

 </div>';
}
add_shortcode('about_section_hero_header', 'about_section_hero_header');

/*-------------------------------------------------------------------- Home - Principle and work Section -------------------------------------------------------------------*/

function principle_and_work_section($atts, $content=null){
	$a=shortcode_atts(array(
	   'main_title'=>'Default Title',
	   'main_content'=>'Default Title',
		'title_1'=>'Default Title',
		'content_1'=>'Default Text',
		'title_2'=>'Default Title',
		'content_2'=>'Default Text',
		'title_3'=>'Default Title',
		'content_3'=>'Default Text',
	), $atts);
	return
	'<section class="principle-pro-quick" id="mission">
          <div class="container">
         <div class="row no-margin">
               <div class="col-lg-12 col-md-12 col-sm-12 principle-quick-1 margin-top-70">
                <h3 class=" margin-bottom-35">'.$a['main_title'].'</h3>
				<p class="principle-quick-content-sub">'.$a['main_content'].'</p>
               </div>
         </div>
         </div>
    <div class="principle-pro-quick-contain">
        <div class="principle-quick-1 margin-bottom-25">
            <h2 class="">'.$a['title_1'].'</h2>
            <p class="principle-quick-content">'.$a['content_1'].'</p>
        </div>
         <div class="principle-quick-1 margin-bottom-25">
            <h2 class="">'.$a['title_2'].'</h2>
            <p class="principle-quick-content">'.$a['content_2'].'</p>
        </div>
         <div class="principle-quick-1 margin-bottom-0">
            <h2 class="">'.$a['title_3'].'</h2>
            <p class="principle-quick-content">'.$a['content_3'].'</p>
        </div>
    </div>
</section>';
}
add_shortcode('principle_and_work_section', 'principle_and_work_section');

/* --------------------------------------------------------------------------Home- ----------Our Leadership Section-------------------------------------------------------------------------- */

function about_leadership_func($atts, $content=null){
	$a=shortcode_atts(array(
		'main_title'=>'Main Title',
	  'main_content'=>'Default Title',
		'person_img_1' => 'Image URL',
		'person_title_1'=>'Main Title',
		'person_desig_1'=>'Designation',
		'person_desc_1'=>'Description',
		'person_img_2' => 'Image URL',
		'person_title_2'=>'Main Title',
		'person_desig_2'=>'Designation',
		'person_desc_2'=>'Description',
		'person_img_3' => 'Image URL',
		'person_title_3'=>'Main Title',
		'person_desig_3'=>'Designation',
		'person_desc_3'=>'Description',
		'person_img_4' => 'Image URL',
		'person_title_4'=>'Main Title',
		'person_desig_4'=>'Designation',
		'person_desc_4'=>'Description',
		'person_img_5' => 'Image URL',
		'person_title_5'=>'Main Title',
		'person_desig_5'=>'Designation',
		'person_desc_5'=>'Description',
		
		
	), $atts);
	return
	'<section class="leadership-bgcolor" id="leadership">
<div class="container no-padding">

        <div class="row margin-zero-mobile">

            <div class="col-lg-12 col-md-12 col-xs-12 margin-top-70">
                <h2 class="margin-bottom-35">'.$a['main_title'].'</h2>
				<p class="leadership-cont  margin-bottom-35">'.$a['main_content'].'</p>
            </div>

            <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6  thumb">
                <div class="thumb-leftalign">
                    <img class="img-responsive" src="'.wp_get_attachment_image_src($a['person_img_1'], 'full')[0]  .'" alt="">
                </div>
				<div class="thumb-content"><h2>'.$a['person_title_1'].'</h2><img src="'.get_template_directory_uri().'/imgs/linkendin.png"><p>'.$a['person_desig_1'].'</p><p class="thumb-viewbio margin-bottom-35"><a class="fancybox" href="#inline1">View bio</a></p></div>
            </div>
             <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6 thumb">
                <div class="thumb-leftalign">
                    <img class="img-responsive" src="'.wp_get_attachment_image_src($a['person_img_2'], 'full')[0]  .'" alt="">
               </div>
				<div class="thumb-content"><h2>'.$a['person_title_2'].'</h2><img src="'.get_template_directory_uri().'/imgs/linkendin.png"><p>'.$a['person_desig_2'].'</p><p class="thumb-viewbio margin-bottom-35"><a class="fancybox" href="#inline2">View bio</a></p></div>
            </div>
             <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6 thumb">
                <div class="thumb-leftalign">
                    <img class="img-responsive" src="'.wp_get_attachment_image_src($a['person_img_3'], 'full')[0]  .'" alt="">
               </div>
				<div class="thumb-content"><h2>'.$a['person_title_3'].'</h2><img src="'.get_template_directory_uri().'/imgs/linkendin.png"><p>'.$a['person_desig_3'].'</p><p class="thumb-viewbio margin-bottom-35"><a class="fancybox" href="#inline3">View bio</a></p></div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6 thumb">
                <div class="thumb-leftalign">
                    <img class="img-responsive" src="'.wp_get_attachment_image_src($a['person_img_4'], 'full')[0]  .'" alt="">
                </div>
				<div class="thumb-content"><h2>'.$a['person_title_4'].'</h2><img src="'.get_template_directory_uri().'/imgs/linkendin.png"><p>'.$a['person_desig_4'].'</p><p class="thumb-viewbio margin-bottom-35"><a class="fancybox" href="#inline4">View bio</a></p></div>
            </div>
             <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6 thumb">
                <div class="thumb-leftalign">
                    <img class="img-responsive" src="'.wp_get_attachment_image_src($a['person_img_5'], 'full')[0]  .'" alt="">
                </div>
				<div class="thumb-content"><h2>'.$a['person_title_5'].'</h2><img src="'.get_template_directory_uri().'/imgs/linkendin.png"><p>'.$a['person_desig_5'].'</p><p class="thumb-viewbio margin-bottom-35"><a class="fancybox" href="#inline5">View bio</a></p></div>
            </div>
            
        </div>
		</div></section> <div id="inline1" class="principle-quick-content" style="display:none;">
		 
		<div class="img_left_side"><img class="img-responsive img-left" src="'.wp_get_attachment_image_src($a['person_img_1'], 'full')[0]  .'" alt=""></div>
       <div class="img_left_side"> <h2 class="leadership-desc-header">'.$a['person_title_1'].'</h2><img class="img-responsive leadership-img-desc" src="'.get_template_directory_uri().'/imgs/linkendin.png">
       <p class="leadership-desc-subhead">'.$a['person_desig_1'].'</p>       
	   <p class="leadership-desc-content">'.$a['person_desc_1'].'</p></div>
        </div>
		
        <div id="inline2"  class="principle-quick-content" style="display:none;">
			<div class="img_left_side"><img class="img-responsive img-left" src="'.wp_get_attachment_image_src($a['person_img_2'], 'full')[0]  .'" alt=""></div>
       <div class="img_left_side"> <h2 class="leadership-desc-header">'.$a['person_title_2'].'</h2><img class="img-responsive leadership-img-desc" src="'.get_template_directory_uri().'/imgs/linkendin.png">
       <p class="leadership-desc-subhead">'.$a['person_desig_2'].'</p>       
	   <p class="leadership-desc-content">'.$a['person_desc_2'].'</p></div>
        </div>
        <div id="inline3"  class="principle-quick-content"  style="display:none;">  
 
     	<div class="img_left_side"><img class="img-responsive img-left" src="'.wp_get_attachment_image_src($a['person_img_3'], 'full')[0]  .'" alt=""></div>
       <div class="img_left_side"> <h2 class="leadership-desc-header">'.$a['person_title_3'].'</h2><img class="img-responsive leadership-img-desc" src="'.get_template_directory_uri().'/imgs/linkendin.png">
       <p class="leadership-desc-subhead">'.$a['person_desig_3'].'</p>       
	   <p class="leadership-desc-content">'.$a['person_desc_3'].'</p></div>
        </div>  
		 <div id="inline4"  class="principle-quick-content" style="display:none;">
		 
			<div class="img_left_side"><img class="img-responsive img-left" src="'.wp_get_attachment_image_src($a['person_img_4'], 'full')[0]  .'" alt=""></div>
       <div class="img_left_side"> <h2 class="leadership-desc-header">'.$a['person_title_4'].'</h2><img class="img-responsive leadership-img-desc" src="'.get_template_directory_uri().'/imgs/linkendin.png">
       <p class="leadership-desc-subhead">'.$a['person_desig_4'].'</p>       
	   <p class="leadership-desc-content">'.$a['person_desc_4'].'</p></div>
        </div>
        <div id="inline5"  class="principle-quick-content"  style="display:none;">  
 
 	<div class="img_left_side"><img class="img-responsive img-left" src="'.wp_get_attachment_image_src($a['person_img_5'], 'full')[0]  .'" alt=""></div>
       <div class="img_left_side"> <h2 class="leadership-desc-header">'.$a['person_title_5'].'</h2><img class="img-responsive leadership-img-desc" src="'.get_template_directory_uri().'/imgs/linkendin.png">
       <p class="leadership-desc-subhead">'.$a['person_desig_5'].'</p>       
	   <p class="leadership-desc-content">'.$a['person_desc_5'].'</p></div>
        </div>';
}
add_shortcode('about_leadership_func', 'about_leadership_func');

/*---------------------------------------------------------------------------- Revature - Home Join Revature and Move Ahead ------------------------------------------------------------------*/

function about_join_revature($atts, $content=null){
	$a=shortcode_atts(array(
		'title'=>'Default Title',
		'button_text' => 'Button Text',
		'button_url' => 'Button URL'
	), $atts);
	return 
	'<section class="career-home-bg" id="careers">

<div class="row career-home-bg-content">

<div class="col-lg-12 col-md-12 col-sm-12"><h2 class="margin-bottom-35">'.$a['title'].'</h2>

<p class="margin-bottom-35">'.$content.'</p>

<p><a href="'.$a['button_url'].'" class="Orange-read-btn">'.$a['button_text'].' <i class="fa fa-angle-right" aria-hidden="true"></i></a></p>
</div>
</div></section>';
}
add_shortcode('about_join_revature', 'about_join_revature');

/*------------------------------------------------------------------------------------ Revature - Home student and business section ------------------------------------------------------------------*/

function about_student_and_business($atts, $content=null){
	$a=shortcode_atts(array(
		
		
		'left_title'=>'Left Title',
		'left_content'=>'Left Content',
		'left_btn_url' => 'Button URL',
		'left_btn_txt' => 'Button Text',
		
		'right_title'=>'Right Title',
		'right_content' => 'Right Content',
		'right_btn_url' => 'Button URL',
		'right_btn_txt' => 'Button Text',
	), $atts);
	return 
	'<section class="">
    <div class="row no-margin">
        <div class="col-lg-6 col-md-6 col-sm-12 no-padding-revaturepro">
            <div class="rev-pro-student">
                <div class="row margin-top-100">
                    <div class="col-lg-12 col-md-12 col-sm-12 margin-bottom-25 text-left">
                        <h4>'.$a['left_title'].'</h4>
                        <p class="">'.$a['left_content'].'</p>
                        <span class="white-blank-btn "><a href="'.$a['left_btn_url'].'">'.$a['left_btn_txt'].'<i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a></span>
                    </div>
               
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 no-padding">
            <div class="rev-pro-business-call-home">
               <div class="row margin-top-100">
                  <div class="col-lg-12 col-md-12 col-sm-12 margin-bottom-25 text-left">
                <h4 class="">'.$a['right_title'].'</h4>
                <p class="">'.$a['right_content'].'</p>
                 <span class="white-blank-btn"><a href="'.$a['right_btn_url'].'">'.$a['right_btn_txt'].'<i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a></span>
                    </div>
               </div>
              
            </div>
           
        </div> 
    </div>
</section>';
}
add_shortcode('about_student_and_business', 'about_student_and_business');

function about_sub_nav_func($atts, $content=null){
	return 
	'<section class="revpro-sub-nav hidden-xs">
    <div class="container sticky-nav-home">
        <div class="">
             <nav class="rev-pro-menu" id="stickyNav">
                 <ul>
                     <li><a href="#mission">MISSION</a></li>
                     <li><a href="#leadership">LEADERSHIP</a></li>
                     <li><a href="#careers">CAREERS</a></li>
                    
                 </ul>
             </nav>
        </div>
    </div>
</section>';
}
add_shortcode('about_sub_nav', 'about_sub_nav_func');

/* function home_join_revature($atts, $content=null){
	$a=shortcode_atts(array(
		'title'=>'Default Title',
		'button_text' => 'Button Text',
		'button_url' => 'Button URL'
	), $atts);
	return 
	'<section class="career-home-bg" id="careers">

<div class="row career-home-bg-content">

<div class="col-lg-12 col-md-12 col-sm-12"><h2 class="margin-bottom-35">'.$a['title'].'</h2>

<p class="margin-bottom-35">'.$content.'</p>

<p><a href="'.$a['button_url'].'" class="Orange-read-btn">'.$a['button_text'].' <i class="fa fa-angle-right" aria-hidden="true"></i></a></p>
</div>
</div></section>';
}
add_shortcode('home_join_revature', 'home_join_revature'); */

/*---------------------------------------------------------------------------------------------------------------End  New  Home Page Shortcodes & vc_map() functions -------------------------------------*/


/*-----------------------End  Home Page Shortcodes & vc_map() functions -------------------------------------*/






/*-----------------------Start  REVATUREPRO Shortcodes & vc_map() functions -------------------------------------*/

/*-----------------------End  REVATUREPRO Shortcodes & vc_map() functions -------------------------------------*/

add_action('vc_before_init', 'shortcode_integrationWithVC_Ajay');
function shortcode_integrationWithVC_Ajay(){

		/*-----------------------------------vc_map() functions - New Home Page--------------------------------------------*/
	vc_map(array(
		"name"=>__("About - Sub Navigation Bar", "revature"),
		"base"=>"about_sub_nav",
		"content_element"=>true,
		"category"=>__("Revature Shortcodes", "revature"),
		"show_settings_on_create"=>false
	));	
	vc_map(array(
		"name"=>__("About - Hero Header", "revature"),
		"base"=>"about_section_hero_header",
		"content_element"=>true,
		"category"=>__("Revature Shortcodes", "revature"),
		"show_settings_on_create"=>true,
		"params"=>array(
			array(
				"type"=>"textfield",
				"heading"=>__("Header Title", "revature"),
				"param_name"=>"title1",
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

/*---------------Leadership Section---------------*/
vc_map(array(
		
		"name"=>__("About - Leadership Team Section)", "revature"),
		"base"=>"about_leadership_func",
		"content_element"=>true,
		"category"=>__("Revature Shortcodes", "revature"),
		"show_settings_on_create"=>true,
		"params"=>array(
			array(
				"type"=>"textfield",
				"heading"=>__("Header Title", "revature"),
				"param_name"=>"main_title",
				"description"=>__("Title for Header", "revature")
			),
			
			array(
				"type" => "textarea",
				"heading" => __("Header Text", "revature"),
				"param_name" => "main_content",
				"description" => __("Text for Header", "revature")
			),
			
			array(
				"type"=>"attach_image",
				"heading"=>__("Person image", "revature"),
				"param_name"=>"person_img_1",
				"description"=>__("Person image", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Person Name", "revature"),
				"param_name"=>"person_title_1",
				"description"=>__("Title for Header", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Person Designation", "revature"),
				"param_name"=>"person_desig_1",
				"description"=>__("Designation for Header", "revature")
			),
			
			array(
				"type" => "textarea",
				"heading" => __("Person Description", "revature"),
				"param_name" => "person_desc_1",
				"description" => __("Description for Header", "revature")
			),
			array(
				"type"=>"attach_image",
				"heading"=>__("Person image", "revature"),
				"param_name"=>"person_img_2",
				"description"=>__("Person image", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Person Name", "revature"),
				"param_name"=>"person_title_2",
				"description"=>__("Title for Header", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Person Designation", "revature"),
				"param_name"=>"person_desig_2",
				"description"=>__("Designation for Header", "revature")
			),
			
			array(
				"type" => "textarea",
				"heading" => __("Person Description", "revature"),
				"param_name" => "person_desc_2",
				"description" => __("Description for Header", "revature")
			),
			array(
				"type"=>"attach_image",
				"heading"=>__("Person image", "revature"),
				"param_name"=>"person_img_3",
				"description"=>__("Person image", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Person Name", "revature"),
				"param_name"=>"person_title_3",
				"description"=>__("Title for Header", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Person Designation", "revature"),
				"param_name"=>"person_desig_3",
				"description"=>__("Designation for Header", "revature")
			),
			
			array(
				"type" => "textarea",
				"heading" => __("Person Description", "revature"),
				"param_name" => "person_desc_3",
				"description" => __("Description for Header", "revature")
			),
			array(
				"type"=>"attach_image",
				"heading"=>__("Person image", "revature"),
				"param_name"=>"person_img_4",
				"description"=>__("Person image", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Person Name", "revature"),
				"param_name"=>"person_title_4",
				"description"=>__("Title for Header", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Person Designation", "revature"),
				"param_name"=>"person_desig_4",
				"description"=>__("Designation for Header", "revature")
			),
			
			array(
				"type" => "textarea",
				"heading" => __("Person Description", "revature"),
				"param_name" => "person_desc_4",
				"description" => __("Description for Header", "revature")
			),
			array(
				"type"=>"attach_image",
				"heading"=>__("Person image", "revature"),
				"param_name"=>"person_img_5",
				"description"=>__("Person image", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Person Name", "revature"),
				"param_name"=>"person_title_5",
				"description"=>__("Title for Header", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Person Designation", "revature"),
				"param_name"=>"person_desig_5",
				"description"=>__("Designation for Header", "revature")
			),
			
			array(
				"type" => "textarea",
				"heading" => __("Person Description", "revature"),
				"param_name" => "person_desc_5",
				"description" => __("Description for Header", "revature")
			),
		
			
			
		)
	));	
		/* ---Home student and business section ----- */
		
	vc_map(array(
		"name"=>__("About- Student and Business Section", "revature"),
		"base"=>"about_student_and_business",
		"content_element"=>true,
		"category"=>__("Revature Shortcodes", "revature"),
		"show_settings_on_create"=>true,
		"params"=>array(
		
			array(
				"type"=>"textfield",
				"heading"=>__("Header Title", "revature"),
				"param_name"=>"left_title",
				"description"=>__("Title for Header", "revature")
			),
			array(
				"type" => "textarea",
				"heading" => __("Header Text", "revature"),
				"param_name" => "left_content",
				"description" => __("Text for Header", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Button URL", "revature"),
				"param_name"=>"left_btn_url",
				"description"=>__("URL for Button", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Button Text", "revature"),
				"param_name"=>"left_btn_txt",
				"description"=>__("Text for Button", "revature")
			),
			
			array(
				"type"=>"textfield",
				"heading"=>__("Right Title", "revature"),
				"param_name"=>"right_title",
				"description"=>__("Title for Header", "revature")
			),
			
			array(
				"type" => "textarea",
				"heading" => __("Right Text", "revature"),
				"param_name" => "right_content",
				"description" => __("Text for Header", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Button URL", "revature"),
				"param_name"=>"right_btn_url",
				"description"=>__("URL for Button", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Button Text", "revature"),
				"param_name"=>"right_btn_txt",
				"description"=>__("Text for Button", "revature")
			)
		)
	));	


	/*-----------------------------------vc_map() functions - Home Page--------------------------------------------*/


	/* HOME - Principle and Work Section */
	
	vc_map(array(
		"name"=>__("About -Principle and Work", "revature"),
		"base"=>"principle_and_work_section",
		"content_element"=>true,
		"category"=>__("Revature Shortcodes", "revature"),
		"show_settings_on_create"=>true,
		"params"=>array(
			array(
				"type"=>"textfield",
				"heading"=>__("Header Main Title", "revature"),
				"param_name"=>"main_title",
				"description"=>__("Title for Header", "revature")
			),
			array(
				"type" => "textarea",
				"heading" => __("Facts  Text 1", "revature"),
				"param_name" => "main_content",
				"description" => __("Text for Header", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Mission Title 1", "revature"),
				"param_name"=>"title_1",
				"description"=>__("Title for Header", "revature")
			),
			array(
				"type" => "textarea",
				"heading" => __("Mission  Text 1", "revature"),
				"param_name" => "content_1",
				"description" => __("Text for Header", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Vision Title 2", "revature"),
				"param_name"=>"title_2",
				"description"=>__("Title for Header", "revature")
			),
			array(
				"type" => "textarea",
				"heading" => __("Vision  Text 2", "revature"),
				"param_name" => "content_2",
				"description" => __("Text for Header", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Values Title 3", "revature"),
				"param_name"=>"title_3",
				"description"=>__("Title for Header", "revature")
			),
			array(
				"type" => "textarea",
				"heading" => __("Values  Text 3", "revature"),
				"param_name" => "content_3",
				"description" => __("Text for Header", "revature")
			)
		)
	));
	
	/* Move Ahead Faster */
	vc_map(array(
		"name"=>__("About-Join Revature and Move Ahead", "revature"),
		"base"=>"about_join_revature",
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
	/*-----------------------------------End vc_map() functions - Home Page--------------------------------------------*/
	
}

