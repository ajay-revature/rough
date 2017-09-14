<?php

/* RevPro Oline Template Starts Here */

/* Top Hero Section On Revature Pro Page Admin Feature Starts Here */

add_action( 'admin_init', 'admin_revpro_online_function' );
function admin_revpro_online_function($params, $content = null) {
   
   vc_map( array(
      "name" => __( "RevPro Online Top Banner", "my-text-domain" ),
	  "base" => "admin_revpro_online",
      "class" => "",
      "category" => __( "Revature Shortcodes", "my-text-domain"),
      "params" => array(
         array(
            "type" => "attach_image",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Select Top Banner Image", "my-text-domain" ),
            "param_name" => "revaturepro_hero_bannerimage",
            "description" => __( "Choose Banner Image.", "my-text-domain" )
         ),
		 
		  array(
            "type" => "attach_image",
            "class" => "",
            "heading" => __( "Select Revature Logo", "my-text-domain" ),
            "param_name" => "revaturepro_tophero_logo",
            "description" => __( "Choose Logo", "my-text-domain" )
         )
		 ,
        
		 array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Title", "my-text-domain" ),
            "param_name" => "revaturepro_tophero_heading",
            "description" => __( "Enter  Title", "my-text-domain" )
         )
		 ,
         
		  array(
            "type" => "textarea",
            "class" => "",
            "heading" => __( "Description", "my-text-domain" ),
            "param_name" => "revaturepro_tophero_description",
            "description" => __( "Enter Description", "my-text-domain" )
         )
		 ,
         
		  array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "1st Button Name", "my-text-domain" ),
            "param_name" => "revaturepro_tophero_button1_name",
            "description" => __( "Enter Button Name", "my-text-domain" )
         )
		 ,
         
		  array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "1st Button URL", "my-text-domain" ),
            "param_name" => "revaturepro_tophero_button1_url",
            "description" => __( "Enter URL", "my-text-domain" )
         )
		 ,
         
		  array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "2nd Button Name", "my-text-domain" ),
            "param_name" => "revaturepro_tophero_button2_name",
            "description" => __( "Enter Button Name", "my-text-domain" )
         )
		 ,
         
		  array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "2nd Button URL", "my-text-domain" ),
            "param_name" => "revaturepro_tophero_button2_url",
            "description" => __( "Enter URL", "my-text-domain" )
         )
		 
		 
      )
   ) );
}


/* Top Hero Section On Revature Pro Page Admin Feature Ends Here */

/* Top Hero Section On Revature Pro Page Front end Feature Starts Here */

add_shortcode( 'admin_revpro_online', 'UI_revpro_online_top_bannner' );
function UI_revpro_online_top_bannner( $atts ) {
   	
	$k = shortcode_atts( array(
       'revaturepro_hero_bannerimage' => '',
       'revaturepro_tophero_logo' => '',
	   'revaturepro_tophero_heading' => '',
	   'revaturepro_tophero_description' => '',
	   'revaturepro_tophero_button1_name' => '',
	   'revaturepro_tophero_button1_url' => '',
	   'revaturepro_tophero_button2_name' => '',
	   'revaturepro_tophero_button2_url' => '',
   ), $atts );
  	
	
        $img = wp_get_attachment_image_src($k["revaturepro_hero_bannerimage"], "full");

        $imgSrc = $img[0];
		
		$img1 = wp_get_attachment_image_src($k["revaturepro_tophero_logo"], "full");

        $imgSrc1 = $img1[0];
	
	
	$returnHTML = "<div class='rev-online-hero' style='background:url({$imgSrc});background-size: cover;'>
        <div class='row no-margin contact-hero-content'>
            <div class='col-lg-12 col-md-12 col-sm-12 margin-top-100 margin-bottom-25 mob-bottom-50'>
                <h1 class='margin-bottom-15'>{$k[revaturepro_tophero_heading]}</h1>
                <p class=''>{$k[revaturepro_tophero_description]}</p>
            </div>
            <div class='container margin-bottom-50'>
                <div class='margin-top-50'>
                    <img src='{$imgSrc1}' />
                </div>

                <a href='{$k[revaturepro_tophero_button1_url]}' target='_blank' class='white-read-btn margin-top-25'>{$k[revaturepro_tophero_button1_name]}<i class='fa fa-angle-right'></i></a>              
            </div>
        </div>
 </div>";
	
   
   return $returnHTML ;
}


/* Top Hero Section On Revature Pro Page Front end Feature Ends Here */


/* Top Hero Section On Revature Pro Page Template Starts Here */

?>