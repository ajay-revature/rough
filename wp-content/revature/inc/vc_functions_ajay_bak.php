<?php


/*--------------------------------------------------------------------Start About Page Shortcodes & vc_map() functions -------------------------------------*/


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



/* ----------------------------------------------------------------------------Talent and technology and image section ---------------------------------------------*/


function about_advance_and_tech_func($atts, $content=null){
	$a=shortcode_atts(array(
		'main_title'=>'Main Title',
		'main_content'=>'Default Title',
		'left_img_1' => 'Image URL',
		'right_title_1'=>'Right Title',
		'right_content_1'=>'Right Content',
		'right_img_2' => 'Image URL',
		'left_title_2'=>'Left Title',
		'left_content_2'=>'Left Title',
		'left_img_3' => 'Image URL',
		'right_title_3'=>'Right Title',
		'right_content_3'=>'Right Content',
		
		
	), $atts);
	return
	'<section class="RevPro-bgcolor">
     <div class="container no-padding">
         <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 margin-bottom-100">
                <h2 class="margin-bottom-25">'.$a['main_title'].'</h2>
                <p class="margin-bottom-25 RevPro-cont">'.$a['main_content'].'
                </p>
                
               </div>
              <div class="col-lg-6 col-md-6 col-sm-12 overflow-hidden height-320 no-padding">
                  <div class="">
                      <img class="business-img left" src="'. wp_get_attachment_image_src($a['left_img_1'], 'full')[0] .'">
                  </div>
              </div>
             <div class="col-lg-6 col-md-6 col-sm-12 text-left padding-70 height-320">
                 <div class="RevPro-Bootcamp-container right">
                     <h4 class="RevPro-Online-head">'.$a['right_title_1'].'</h4>
                      <p class="RevPro-Online-content">
                     '.$a['right_content_1'].'
                  </p>
				
			   </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 overflow-hidden mob-right height-320 no-padding">
                  <div class="">
                      <img class="business-img right" src="'. wp_get_attachment_image_src($a['right_img_2'], 'full')[0] .'">
                  </div>
              </div>

                <div class="col-lg-6 col-md-6 col-sm-12 text-left padding-70 height-320">
                 <div class="text-right RevPro-Bootcamp-container left">
                     <h4 class="RevPro-Bootcamp-head">'.$a['left_title_2'].'</h4>
                      <p class="RevPro-Bootcamp-content">
                      '.$a['left_content_2'].'
                  </p>
				
                 </div>
              </div>
              

             <div class="col-lg-6 col-md-6 col-sm-12 overflow-hidden height-320 no-padding">
                  <div class="">
                      <img class="business-img left" src="'.wp_get_attachment_image_src($a['left_img_3'], 'full')[0]  .'">
                  </div>
              </div>
                <div class="col-lg-6 col-md-6 col-sm-12 text-left padding-70 height-320">
                 <div class="RevPro-Bootcamp-container right">
                     <h4 class="RevPro-Online-head">'.$a['right_title_3'].'</h4>
                      <p class="RevPro-Online-content">
                    '.$a['right_content_3'].'
                  </p>
              
                 </div>
              </div>
         </div>

      </div>
 </section>';
}
add_shortcode('about_advance_and_tech_func', 'about_advance_and_tech_func');



/*-------------------------------------------------------------------- About Section- Principle and work Section -------------------------------------------------------------------*/

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

/* --------------------------------------------------------------------------About Section---Our Leadership Section-------------------------------------------------------------------------- */
/*..........................................................................Start...........................*/
function about_leadership_container_func($atts, $content=null){
		$a=shortcode_atts(array(
		'main_title'=>'Main Title',
	    'main_content'=>'Default Title',
	), $atts);
	return' <section class="leadership-bgcolor" id="leadership">
<div class="container no-padding">

        <div class="row margin-zero-mobile">

            <div class="col-lg-12 col-md-12 col-xs-12 margin-top-70">
                <h2 class="margin-bottom-35">'.$a['main_title'].'</h2>
				<p class="leadership-cont  margin-bottom-35">'.$a['main_content'].'</p>
            </div>
		  
        '.do_shortcode($content).'
		
	 </div></div>
     
 </section>';
}
add_shortcode('about_leadership_container','about_leadership_container_func');

function about_leadership_inner_member_func($atts, $content=null){
			$a=shortcode_atts(array(
	    'person_id' => 'Person Id',
		'person_img' =>'Image URL',
		'person_linkedin_url' => 'Person Linkendin Url',
		'person_title'=>'Main Title',
		'person_desig'=>'Designation',
		'person_desc'=>'Description',
	), $atts);
	return'<div class="col-lg-4 col-md-4 col-xs-12 col-sm-6  thumb">
                <div class="thumb-leftalign">
                    <img class="about-img-responsive" src="'.wp_get_attachment_image_src($a['person_img'], 'full')[0]  .'" alt="">
                </div>
				<div class="thumb-content"><h2>'.$a['person_title'].'</h2><a href="'.$a['person_linkedin_url'].'" target="_blank"><img src="'.get_template_directory_uri().'/imgs/linkendin.png"></a><p>'.$a['person_desig'].'</p><p class="thumb-viewbio margin-bottom-35"><a class="fancybox" href="#inline'.$a['person_id'].'">View bio</a></p></div>
            </div>
			<div id="inline'.$a['person_id'].'" class="principle-quick-content" style="display:none;">
		 
		    <div class="img_left_side"><img class="about-img-responsive img-left" src="'.wp_get_attachment_image_src($a['person_img'], 'full')[0]  .'" alt=""></div>
            <div class="img_left_side"> <h2 class="leadership-desc-header">'.$a['person_title'].'</h2><a href="'.$a['person_linkedin_url'].'" target="_blank"><img class="about-img-responsive leadership-img-desc" src="'.get_template_directory_uri().'/imgs/linkendin.png"></a>
       <p class="leadership-desc-subhead">'.$a['person_desig'].'</p>       
	   <p class="leadership-desc-content">'.$a['person_desc'].'</p></div>
        </div>
			';
}
add_shortcode('about_leadership_inner_team_member','about_leadership_inner_member_func');

/*..........................................................................END...........................*/

/*---------------------------------------------------------------------------- About Section- Join Revature and Move Ahead ------------------------------------------------------------------*/

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

/*------------------------------------------------------------------------------------ About Section-- student and business section ------------------------------------------------------------------*/

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
	'<section id="main-subnav-blog" class="revpro-sub-nav">
    
        <div class="container about-sticky-nav">
    
            <div class="">
    
                 <nav class="rev-pro-menu blogs">
    			                
                     <ul id="subnavigation-scroll" class="text-center">
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

/*---------------------------------------------------------------------------------------------------------------End  About Page Shortcodes & vc_map() functions -------------------------------------*/


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

/* ----------------------------------------------------------------------------Talent and technology and image section ---------------------------------------------*/

	vc_map(array(
		
		"name"=>__("About - Advance and Tech(images and text)", "revature"),
		"base"=>"about_advance_and_tech_func",
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
				"heading" => __("1. Header Text", "revature"),
				"param_name" => "main_content",
				"description" => __("Text for Header", "revature")
			),
			
			array(
				"type"=>"attach_image",
				"heading"=>__("Left image", "revature"),
				"param_name"=>"left_img_1",
				"description"=>__("Left image", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Right Title", "revature"),
				"param_name"=>"right_title_1",
				"description"=>__("Title for Header", "revature")
			),
			
			array(
				"type" => "textarea",
				"heading" => __("Right Text", "revature"),
				"param_name" => "right_content_1",
				"description" => __("Text for Header", "revature")
			),
			array(
				"type"=>"attach_image",
				"heading"=>__("Right image", "revature"),
				"param_name"=>"right_img_2",
				"description"=>__("Right image", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Left Title", "revature"),
				"param_name"=>"left_title_2",
				"description"=>__("Title for Header", "revature")
			),
			
			array(
				"type" => "textarea",
				"heading" => __("Left Text", "revature"),
				"param_name" => "left_content_2",
				"description" => __("Text for Header", "revature")
			),
			array(
				"type"=>"attach_image",
				"heading"=>__("Left image", "revature"),
				"param_name"=>"left_img_3",
				"description"=>__("Left image", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Right Title", "revature"),
				"param_name"=>"right_title_3",
				"description"=>__("Title for Header", "revature")
			),
			
			array(
				"type" => "textarea",
				"heading" => __("Right Text", "revature"),
				"param_name" => "right_content_3",
				"description" => __("Text for Header", "revature")
			),
		)
	));	

/*---------------Leadership Section---------------*/
vc_map(array(
		"name" => __("About - Leadership Team Section", "revature"),
		"base" => "about_leadership_inner_team_member",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"as_child"=>array("only"=>"about_leadership_container"),
		"params" => array(
			array(
				"type"=>"textfield",
				"heading"=>__("Person ID", "revature"),
				"param_name"=>"person_id",
				"description"=>__("Person Id(Unique)", "revature")
			),
			array(
				"type"=>"attach_image",
				"heading"=>__("Person image", "revature"),
				"param_name"=>"person_img",
				"description"=>__("Person image", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Person Name", "revature"),
				"param_name"=>"person_title",
				"description"=>__("Title for Header", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Person Designation", "revature"),
				"param_name"=>"person_desig",
				"description"=>__("Designation for Header", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Linkendin Url", "revature"),
				"param_name"=>"person_linkedin_url",
				"description"=>__("Person Linkedin Url)", "revature")
			),
			array(
				"type" => "textarea",
				"heading" => __("Person Description", "revature"),
				"param_name" => "person_desc",
				"description" => __("Description for Header", "revature")
			),
		)
	));
		vc_map(array(
		"name" => __("About - Leadership Team Section Container", "revature"),
		"base" => "about_leadership_container",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"as_parent"=>array("only"=>"about_leadership_inner_team_member"),
		"is_container"=>true,
		"params" => array(
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


	/*-----------------------------------vc_map() functions - About Page--------------------------------------------*/


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

