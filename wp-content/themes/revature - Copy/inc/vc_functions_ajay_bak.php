<?php

/*--------------------------------------------------------------------Start Code Page  functions -------------------------------------*/

function training_curriculum_container_func($atts, $content=null){
    $a=shortcode_atts(array(
    ), $atts);
    return
    '<section class="training_curriculum_section_background"><div class="container no-padding">
         <div class="row">
         <div class="col-lg-8 col-md-8 col-sm-8 no-padding"> 
         '.do_shortcode($content).'
         </div>
         
      </div></section>';
}
add_shortcode('training_curriculum_container', 'training_curriculum_container_func');
function training_curriculum_function($atts, $content=null){
$a=shortcode_atts(array(
'background_img'=>'Background image',
'header_title' => 'Header Title',
'sub_title' => 'Sub Title',
'button_text' => 'Button Text',
'button_url' => 'Button URL',
'logo_img'   => 'logo_img',
), $atts);
$returnHTML = '<style>
            .training_curriculum_section:after {
            background-image:url("'.wp_get_attachment_url($a['background_img']).'");
               }
              </style>
<section>
<div class="container no-padding">
<div class="row">
<div class="col-lg-8 col-md-8 col-sm-8 training_curriculum_section">
<div class="col-sm-7 col-lg-7 col-md-7">
<h3 class="curriculum-title">'. $a['header_title'] .'</h3>
<h5 class="curriculum-subtitle">'. $a['sub_title'] .'</h5>    
</div>
<div class="col-sm-3 col-lg-3 col-md-3 curriculum_sample no-padding">
<a href="'.$a['button_url'].'" class="white-read-btn button_setting">'.$a['button_text'].'<i class="fa fa-angle-right"></i></a>
</div>
<div class="col-sm-1 col-lg-1 col-md-1">
<img src="'.wp_get_attachment_url($a['logo_img']).'" />
</div>
</div>
</div>
</div>        
</section>';
     return $returnHTML;
}
add_shortcode('training_curriculum_header','training_curriculum_function');
function training_curriculum_spotlight_func($atts, $content=null){
    $a=shortcode_atts(array(
        'image'=>'Image',
        'color'=>'Background color',
        'header'=>'Header',
        'sub_header'=>'Sub Header',
    ), $atts);
    $returnHTML = '
              <section>
              <div class="col-lg-6 col-md-6 col-sm-6 no-padding">    
                <div> 
                <img style="display: initial !important;" class="img-responsive" src="'.wp_get_attachment_url($a['image']).'"> 
                <div class="spotlight_position">
                <div class="training_curriculum_spotlight_section" style="background-color:'.$a['color'].'">      
                <h3 class="spotlight_header">'. $a['header'] .'</h3>
                <p class="spotlight_subheader">'. $a['sub_header'] .'</p> 
                </div>                
               </div>
               </section>';
               return $returnHTML;
}
add_shortcode('training_curriculum_spotlight', 'training_curriculum_spotlight_func'); 
function training_locations_function($atts, $content=null){

$a=shortcode_atts(array(
            'background_img'=>'Background image',
            'title'=>'Title',     
            'sub_title'=>'Sub Title',  
            'location_img1' => 'Location Img1',
            'location_id1' => 'Location id1',
            'dc_img1'=>'DC Img1',
            'dc_img2'=>'DC Img2',
            'dc_img3'=>'DC Img3',
            'dc_img4'=>'DC Img4',
            'dc_img5'=>'DC Img5',
            'location_img2' => 'Location Img2',
            'location_id2' => 'Location id2',
            'fl_img1'=>'FL Img1',
            'fl_img2'=>'FL Img2',
            'fl_img3'=>'FL Img3',
            'fl_img4'=>'FL Img4',
            'fl_img5'=>'FL Img5',
            'location_img3' => 'Location Img3',
            'location_id3' => 'Location id3',
            'nyc_img1'=>'NYC Img1',
            'nyc_img2'=>'NYC Img2',
            'nyc_img3'=>'NYC Img3',
            'nyc_img4'=>'NYC Img4',
            'nyc_img5'=>'NYC Img5',
), $atts);
$returnHTML = '<style>
            .training_locations_section:after {
            background-image:url("'.wp_get_attachment_url($a['background_img']).'");
               }
              </style>
</div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 training_locations_section">   
            <div class="training_header">
               <span>'. $a['title'] . '</span>
               </div>
               <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4">
               <a class="fancybox"  id="inline" href="#'.$a[location_id1].'"><img  class="img-responsive" src="'. wp_get_attachment_url($a['location_img1']) .'" draggable="false"></a>
               </div>           
              <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4">
               <a class="fancybox " id="inline"   href="#'.$a[location_id2].'"><img  class="img-responsive" src="'. wp_get_attachment_url($a['location_img2']) .'" draggable="false"></a>
               </div>
               <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4">
               <a class="fancybox" id="inline" href="#'.$a[location_id3].'"><img  class="img-responsive" src="'. wp_get_attachment_url($a['location_img3']) .'" draggable="false"></a>
               </div>
               <div class="training_subtitle">
               <span>'. $a['sub_title'] .'</span>   
               </div>                
</div><div style="display:none"><style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: auto!important;
      min-width:auto !important;
      margin: auto;
  }
  .carousel-inner > .item > img {
    position: initial;
   
       text-align:center;
    min-width: 100%;
    height: auto;
}
.carousel-indicators {
   
    bottom: 165px !important;
   
}
  </style>
   
  
<div id="'.$a[location_id1].'">
  
  <div id="myCarousel"  class="carousel slide" data-ride="carousel" data-wrap="true">
   
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
       <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>
   
    <div class="carousel-inner">
      <div class="item active">                     
        <img class="img-responsive" src="' . wp_get_attachment_url($a['dc_img1']) .'"  height="390" width="350">
      </div>
      <div class="item">
        <img class="img-responsive" src="' . wp_get_attachment_url($a['dc_img2']) .'"  height="390" width="350" >
      </div>
    
    <div class="item">
        <img class="img-responsive" src="' . wp_get_attachment_url($a['dc_img3']) .'"  height="390" width="350" >
      </div>
      
      <div class="item">
        <img class="img-responsive" src="' . wp_get_attachment_url($a['dc_img4']) .'"  height="390" width="350" >
      </div>
      
      <div class="item">
        <img class="img-responsive" src="' . wp_get_attachment_url($a['dc_img5']) .'"  height="390" width="350" >
      </div>
  
    </div>
    
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
 
</div>
</div>
<div id="'.$a[location_id2].'">  
 
  <div id="myCarousel1" class="carousel slide" data-ride="carousel">
   
    <ol class="carousel-indicators">
      <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel1" data-slide-to="1"></li>
      <li data-target="#myCarousel1" data-slide-to="2"></li>
      <li data-target="#myCarousel1" data-slide-to="3"></li>
      <li data-target="#myCarousel1" data-slide-to="4"></li>
    </ol>
   
    <div class="carousel-inner">
      <div class="item active">
        <img class="img-responsive" src="' . wp_get_attachment_url($a['fl_img1']) .'"  height="390" width="350" >
      </div>
      <div class="item">
         <img class="img-responsive" src="' . wp_get_attachment_url($a['fl_img2']) .'"  height="390" width="350" >
      </div>
    
    <div class="item">
       <img class="img-responsive" src="' . wp_get_attachment_url($a['fl_img3']) .'"  height="390" width="350" >
      </div>
      
      <div class="item">
       <img class="img-responsive" src="' . wp_get_attachment_url($a['fl_img4']) .'"  height="390" width="350" >
      </div>
      
      <div class="item">
         <img class="img-responsive" src="' . wp_get_attachment_url($a['fl_img5']) .'"  height="390" width="350" >
      </div>
  
    </div>
    
    <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel1" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  
</div>
</div>
<div id="'.$a[location_id3].'">
  
  <div id="myCarousel2" class="carousel slide" data-ride="carousel">
   
    <ol class="carousel-indicators">
      <li data-target="#myCarouse2" data-slide-to="0" class="active"></li>
      <li data-target="#myCarouse2" data-slide-to="1"></li>
      <li data-target="#myCarouse2" data-slide-to="2"></li>
      <li data-target="#myCarouse2" data-slide-to="3"></li>
      <li data-target="#myCarouse2" data-slide-to="4"></li>
    </ol>
   
    <div class="carousel-inner">
      <div class="item active">
         <img class="img-responsive" src="' . wp_get_attachment_url($a['nyc_img1']) .'"  height="390" width="350" >
      </div>
      <div class="item">
         <img class="img-responsive" src="' . wp_get_attachment_url($a['nyc_img2']) .'"  height="390" width="350" >
      </div>
    
    <div class="item">
         <img class="img-responsive" src="' . wp_get_attachment_url($a['nyc_img3']) .'"  height="390" width="350" >
      </div>
      
      <div class="item">
       <img class="img-responsive" src="' . wp_get_attachment_url($a['nyc_img4']) .'"  height="390" width="350" >
      </div>
      
      <div class="item">
        <img class="img-responsive" src="' . wp_get_attachment_url($a['nyc_img5']) .'"  height="390" width="350" >
      </div>
  
    </div>
    
    <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel2" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
';
     return $returnHTML;
}
add_shortcode('training_locations','training_locations_function');
function training_social_media_section_func($atts, $content=null){
    $a=shortcode_atts(array(
        'image'=>'Image',
        'color'=>'Background color',
        'header'=>'Header',
            ), $atts);
    $returnHTML = '<div class="col-lg-4 col-md-4 col-sm-4 no-padding ">    
                <div> 
                <img  class="img-responsive social_media_image_position" src="'.wp_get_attachment_url($a['image']).'"> 
                <div class="social_media_position">
                <div class="training_social_media_section" style="background-color:'.$a['color'].'">      
                <h3 style="text-align: center;" class="spotlight_header">'. $a['header'] .'</h3>       
                </div>';
               return $returnHTML;
}
add_shortcode('training_social_media_section', 'training_social_media_section_func'); 

function training_process_code_life_container_func($atts, $content=null){
    $a=shortcode_atts(array(
    ), $atts);
    return
    '
     <section class="training_process_section_background"><div class="container no-padding">
         <div class="row">
          
         '.do_shortcode($content).'
        
         </div>
      </div>
	  </section>';
}
add_shortcode('training_process_code_life_container', 'training_process_code_life_container_func');

function revature_curriculum_training_process_function($atts, $content=null){
$a=shortcode_atts(array(
            'background_img'=>'Background image',
            'title'=>'Title',
            'sub_title'=>'Sub Title',  
            'logo_img_1' => 'Logo Img1',
            'logo_title_1' => 'Logo Title1',
            'logo_subtitle_1' => 'Logo SubTitle_1',
            'logo_img_2' => 'Logo Img2',
            'logo_title_2' => 'Logo Title2',
            'logo_subtitle_2' => 'Logo SubTitle_2',
            'logo_img_3' => 'Logo Img3',
            'logo_title_3' => 'Logo Title3',
            'logo_subtitle_3' => 'Logo SubTitle_3',
            'logo_img_4' => 'Logo Img4',
            'logo_title_4' => 'Logo Title4',
            'logo_subtitle_4' => 'Logo SubTitle_4',
            'logo_img_5' => 'Logo Img5',
            'logo_title_5' => 'Logo Title5',
            'logo_subtitle_5' => 'Logo SubTitle_5',
            'logo_img_6' => 'Logo Img6',
            'logo_title_6' => 'Logo Title6',
            'logo_subtitle_6' => 'Logo SubTitle_6',
), $atts);
$returnHTML = '
<div class="col-lg-8 col-md-8 col-sm-8 no-padding"><section class="hwd-bgg"> 
            <div class="training-steps">
            <div class="col-lg-6 col-md-6 col-sm-6 software_enigeer_section">
            <span class="become_software">'.$a['title'].'</span>
            <p>'.$a['sub_title'].'</p>
            </div>
                <div class="col-lg-6 col-md-8 col-sm-11  col-xs-12 position_round_text_section_first align-right-section">
                <div class="col-lg-2 col-md-2 col-sm-2  col-xs-12 no-padding">
                    <span class="no-padding">
                        <img class="img-responsive" src="' . wp_get_attachment_url($a['logo_img_1']) .'" />
                    </span>
                    </div>
                   <div class="col-lg-10 col-md-10 col-sm-10  col-xs-12 no-padding">
                    <h3 class="round_section_text_size">'.$a[logo_title_1].'</h3>
                    <span>'.$a[logo_subtitle_1].'</span>
                </div>
                </div>
                
                <div class="clear"></div>
                                  <div style="float:right;"class="col-lg-6 col-md-6 col-sm-11 col-xs-12 align-right-section position_round_text_section_second">
                                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 no-padding">
                    <span class="no-padding">
                        <img class="img-responsive" src="' . wp_get_attachment_url($a['logo_img_2']) .'" />
                    </span>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-7 col-xs-12 no-padding">
                    <h3 class="round_section_text_size">'.$a[logo_title_2].'</h3>
                    <span>'.$a[logo_subtitle_2].'</span>
                </div>
                     </div>
                <div class="clear"></div>
                
                                  <div style="float:right;"class="col-lg-6 col-md-6 col-sm-8 col-xs-12 align-right-section position_round_text_section_third ">
                                  <div class="col-lg-2 col-md-2 col-sm-2 no-padding">
                    <span class="">
                        <img class="img-responsive" src="' . wp_get_attachment_url($a['logo_img_3']) .'" />
                    </span>
                    </div>
                    
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-12 no-padding">
                    <h3 class="no-padding">'.$a[logo_title_3].'</h3>
                    <span>'.$a[logo_subtitle_3].'</span>
                </div>
                </div>
                 
                <div class="clear"></div>
                <div style="float:right;"class="col-lg-6 col-md-6 col-sm-8 col-xs-12 position_round_text_section_fourth align-right-section">
                   
                    <div class="col-lg-2 col-md-2 col-sm-2 no-padding">
                     <span class="">
                        <img class="img-responsive" src="' . wp_get_attachment_url($a['logo_img_4']) .'" />
                    </span>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-12 no-padding">
                    <h3 class="round_section_text_size">'.$a[logo_title_4].'</h3>
                    <span>'.$a[logo_subtitle_4].'</span>
                </div>
                </div>
                
                <div class="col-lg-6 col-md-6 col-sm-11 col-xs-12 position_round_text_section_fifth align-right-section">
                    
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 no-padding">
                    <span class="">
                        <img class="img-responsive" src="' . wp_get_attachment_url($a['logo_img_5']) .'" />
                    </span>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-7 col-xs-12 no-padding">
                    <h3 class="round_section_text_size">'.$a[logo_title_5].'</h3>
                    <span>'.$a[logo_subtitle_5].'</span>
                </div>
                </div>
                  <div class="clear"></div>
                  <div class="col-lg-6 col-md-6 col-sm-11  col-xs-12 align-right-section position_round_text_section_sixth">
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 no-padding">
                    <span class="no-padding">
                        <img class="img-responsive" src="' . wp_get_attachment_url($a['logo_img_6']) .'" />
                    </span>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-12 no-padding">
                    <h3 class="round_section_text_size">'.$a[logo_title_6].'</h3>
                    <span>'.$a[logo_subtitle_6].'</span>
                </div>
                </div>
            </div>
    </section>
	<section class="mobile_hwd-bgg" id="howItWorks">
        
            <div class="hwd-steps_mobile">
			<div class="col-xs-12 ">
			<p class="mobile_become_software">'.$a['title'].'</p>
			<p class="mobile_subtitle_software">'.$a['sub_title'].'</p>
			</div>
                <div class="col-xs-12">
				<div style="text-align:center;" class="col-xs-12 no-padding">
                    <span class="no-padding">
                        <img style="display: initial !important;" class="img-responsive" src="' . wp_get_attachment_url($a['logo_img_1']) .'" />
                    </span>
					</div>
                   <div class="col-xs-12 no-padding mobile_round_section_span">
					<h3 class="mobile_round_section_text_size">'.$a[logo_title_1].'</h3>
                    <span>'.$a[logo_subtitle_1].'</span>
                </div>
				</div>
                

                <div class="clear"></div>
                                  <div class="col-xs-12">
								  <div style="text-align:center;" class="col-xs-12 no-padding">
                    <span class="no-padding">
                        <img style="display: initial !important;" class="img-responsive" src="' . wp_get_attachment_url($a['logo_img_2']) .'" />
                    </span>
					</div>
                    <div class="col-xs-12 no-padding mobile_round_section_span">
					<h3 class="mobile_round_section_text_size">'.$a[logo_title_2].'</h3>
                    <span>'.$a[logo_subtitle_2].'</span>
                </div>
                     </div>

                <div class="clear"></div>
				
                                  <div class="col-xs-12 ">
								  <div style="text-align:center;" class="col-xs-12 no-padding">
                    <span class="">
                        <img style="display: initial !important;" class="img-responsive" src="' . wp_get_attachment_url($a['logo_img_3']) .'"/>
                    </span>
					</div>
                    
					<div class="col-xs-12 no-padding mobile_round_section_span">
					<h3 class="mobile_round_section_text_size no-padding">'.$a[logo_title_3].'</h3>
                    <span>'.$a[logo_subtitle_3].'</span>
                </div>
				</div>
                 
                <div class="clear"></div>
				<div class="col-xs-12">
                   
					<div style="text-align:center;" class="col-xs-12 no-padding">
                     <span class="no-padding">
                        <img  style="display: initial !important;" class="img-responsive"  src="' . wp_get_attachment_url($a['logo_img_4']) .'" />
                    </span>
					</div>
					<div class="col-xs-12 no-padding mobile_round_section_span">
					<h3 class="mobile_round_section_text_size">'.$a[logo_title_4].'</h3>
                    <span>'.$a[logo_subtitle_4].'</span>
                </div>
				</div>
				
				<div class="col-xs-12">
                    
					<div style="text-align:center;" class="col-xs-12 no-padding">
                    <span class="">
                        <img style="display: initial !important;" class="img-responsive" src="' . wp_get_attachment_url($a['logo_img_5']) .'" />
                    </span>
					</div>
					<div class="col-xs-12 no-padding mobile_round_section_span">
					<h3 class="mobile_round_section_text_size">'.$a[logo_title_5].'</h3>
                    <span>'.$a[logo_subtitle_5].'</span>
                </div>
				</div>
				  <div class="clear"></div>
                  <div class="col-xs-12">
				  <div style="text-align:center;" class="col-xs-12 no-padding">
                    <span class="no-padding">
                        <img style="display: initial !important;" class="img-responsive" src="' . wp_get_attachment_url($a['logo_img_6']) .'" />
                    </span>
					</div>
					<div class="col-xs-12 no-padding mobile_round_section_span">
					<h3 class="mobile_round_section_text_size">'.$a[logo_title_6].'</h3>
                    <span>'.$a[logo_subtitle_6].'</span>
                </div>
				</div>
              </div>
    </section>
	
	</div>';
     return $returnHTML;
}
add_shortcode('revature_curriculum_training_process','revature_curriculum_training_process_function');

function code_life_orange_section_function($atts, $content=null){
$a=shortcode_atts(array(
'background_img'=>'Background image',
'header_title' => 'Header Title',
'thumbnail_img' => 'thumbnail img',
'video_thumbnail_url' => 'video thumbnail url',
'sub_title' => 'Sub Title',
), $atts);
$returnHTML = '<style>
            .code_life_section:after {
            background-image:url("'.wp_get_attachment_url($a['background_img']).'");
               }
              </style>
<div class="col-lg-4 col-md-4 col-sm-4 code_life_section">  
            <div class = "code_life_orange_header_section_header">
               <h3>'. $a['header_title'] . '</h3>
               </div>
               <div class="fancybox_thumbnail_img">
               <a class="fancybox fancybox.iframe" href="'.$a['video_thumbnail_url'].'"><img style="display: initial !important;" class="img-responsive" src="'. wp_get_attachment_url($a['thumbnail_img']) .'" draggable="false"></a>
               </div>
               <div class="code_life_orange_header_section_subheader">
               <h5>'. $a['sub_title'] .'</h5>   
               </div></div>';
     return $returnHTML;
}
add_shortcode('code_life_orange_header_section','code_life_orange_section_function');


function code_life_faq_function($atts, $content=null){
$a=shortcode_atts(array(
'background_img'=>'Background image',
'title' => 'Title',
'sub_title' => 'Sub Title',
), $atts);
$returnHTML = '<style>
            .code_life_faq_section:after {
            background-image:url("'.wp_get_attachment_url($a['background_img']).'");
               }
              </style>
<div class="col-lg-4 col-md-4 col-sm-4 code_life_faq_section">  
       <div>
            <div class = "code_life_faq_section_header">
               <h3>'.$a[title].'</h3>
               <p>'.$a[sub_title].'</p>
               </div>              
              <form action="http://localhost/rough/wp-content/themes/revature/inc/index.php/" method="post" target="_blank">
  <div class="form-group">
 
   <input type="text" class="shortfield-home form-control height_search" placeholder="Enter your question" name="search" id="search">
  </div>
  <div style="text-align:left;margin-top:17px;" class="col-lg-12 col-xs-12 form-group"> <span class="grey-submit-btn" id="submitBtn"><input type="submit"  value="SEARCH" style="color: rgb(255, 255, 255);"><i class="fa fa-angle-right" aria-hidden="true"></i></span></div>
</form>
</div>               
</div>
';
     return $returnHTML;
}
add_shortcode('code_life_faq','code_life_faq_function');


/*--------------------------------------------------------------------End Code Page  functions -------------------------------------*/


/*--------------------------------------------------------------------Start University Page  functions -------------------------------------*/

/*-------  Custom Header  ---*/

function academic_univer_custom_header_func ($atts, $content=null){
		$a = shortcode_atts(array(
			
			'company_logo' => 'Company Logo',
			'content' => 'content',
			'university_logo' => 'University Logo',
		), $atts);
		
return'<section style="height: auto !important;" class="university-custom-header" id="apply">
		<div class="row no-margin">
		     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			     <div class="col-lg-7 col-md-7 col-sm-7 no-margin no-padding">
				    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 company_logo_image">
      <img class="img-responsive" style="float:left;"src="'. wp_get_attachment_image_src($a['company_logo'], 'full')[0] .'" />
            </div>
	
	<div class="col-lg-12 col-md-12 col-sm-12">
    
						<p class="university-custom-header_para"><strong>'.$content.'</strong></p>
						</div>
						</div>
						<div class="col-lg-4 col-lg-offset-1 col-md-5 col-md-offset-0 col-sm-4 col-sm-offset-1">
						<div>
      <img class="img-responsive" src="'. wp_get_attachment_image_src($a['university_logo'], "full")[0] .'" />
    </div>
						</div>
						
					</div>
					
						
						
					 </div>
				 </div>
			</section>';
				
	}
	add_shortcode('academic_univer_custom_header', 'academic_univer_custom_header_func');

	
	/*-------  University Thumbnail Section  ---*/
	
function university_thumbnail_section_func($atts, $content=null){
$a=shortcode_atts(array(
            'background_img'=>'Background image',
            'header_title' => 'Header Title',
            'logo_img' => 'Video Thumbnail', 
            'header_video' => 'Video url',  
    ), $atts);
    return
    '<style>
        .video_header_section1:after{
        background-image:url("'.wp_get_attachment_url($a['background_img']).'");
        }
        </style>
    <section class="video_header_section1">
    <div class="row">
	<div class="col-md-1 col-sm-1 col-xs-1"></div>
      <div class="col-md-7 col-sm-6 col-xs-10">
              <div>
               <h4 class="title_header">'.$a['header_title'].'</h4>
                <a class="fancybox fancybox.iframe" href="'.$a['header_video'].'"><img style="display: initial !important;" class="img-responsive" src="'. wp_get_attachment_url($a['logo_img']) .'"  draggable="false"></a>
           </div>
           </div>    
           </section>';
return $return;
}
add_shortcode('university_thumbnail_section', 'university_thumbnail_section_func');


	/*-------  University Content Container ---*/
	
	
function academic_university_container_func($atts, $content=null){
    $a=shortcode_atts(array(
        'title'=>'Title' ,
        'content'=>'Content',
		'not_ready_title'=>'Title' ,
		'not_ready_content'=>'Content' ,
		'link_url'=>'Link Url',
		'link_txt'=>'Link Text',
        'background_img'=>'Background image',        
    ), $atts);
    $returnHTML = '<section class="career-articals" id="benefits">
      <div class="container no-margin">
         <div class="row no-margin">
		 
		 '.do_shortcode($content).'
		 
		  </div>
	 			
</div></section>';
		 
	 return $returnHTML;
    }
	 add_shortcode('academic_university_container', 'academic_university_container_func');
	 
	 /*-------  Academic University Right Side ---*/
	 
	 
function academic_university_right_side_form_and_section_func($atts, $content=null){
    $a=shortcode_atts(array(
        'title'=>'Title' ,
        'content'=>'Content',
		'not_ready_title'=>'Title' ,
		'not_ready_content'=>'Content' ,
		'link_url'=>'Link Url',
		'link_txt'=>'Link Text',
        'background_img'=>'Background image',       
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
    $returnHTML = ' 
	<style>
            .not_ready_background:after {
            background-image:url("'.wp_get_attachment_url($a['background_img']).'");
               }
                     </style>
         
                 <div class="col-lg-4 col-sm-4  col-lg-offset-1 col-md-offset-1 col-md-4 col-xs-12 blog-bottom-border position_moved_top">
                  <div style="float:left;" id="requestFormContainer">         
                <div class="col-xs-12">
                    <h4 id="requestFormTitle">Quick Apply</h4>
                </div>
                <div class="row form-label-txt">
                    <form id="requestForm" method="post">
						<input type="hidden" id="University" value="'.$a['university'].'"/>
						<input type="hidden" id="AccountID" value="'.$a['account_id'].'"/>
                        <div class="col-lg-12 col-xs-12 form-group">
                            <label class="control-label" for="FirstName">First Name*</label>
                            <input class="shortfield-home form-control" type="text" name="FirstName" id="FirstName" required/>
							<span class="help-block" style="display:none;">Please enter first name.</span>                        </div>
						<div class="col-lg-12 col-xs-12 form-group">
                            <label class="control-label" for="LastName">Last Name*</label>
                            <input class="shortfield-home form-control" type="text" name="LastName" id="LastName" required/>
							<span class="help-block" style="display:none;">Please enter last name.</span>
                        </div>
						<div class="col-lg-12 col-xs-12 form-group">
                           <label class="control-label" for="Email">Email*</label>
                           <input class="shortfield-home form-control"  type="email" name="Email" id="Email" required/>
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
							<span class="help-block" style="display:none;">Please select a Major.</span>                        </div>
                        <div class="col-lg-12 col-xs-12 form-group">
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
						<div class="col-xs-12 form-group">
							<label class="control-label" for="Campus">Campus*</label>
							<select class="shortfield-home form-control" id="Campus" name="Campus" required>
								<option value=""></option>
								'.implode($campusHtml).'
								<option value="Other">Other</option>
							</select>
							<span class="help-block" style="display:none;">Please select a campus.</span>
						</div>
						<div class="col-xs-12 form-group">
							<label class="control-label">Resume<span id="resume_star">*</span></label><br>
							<input type="file" id="ResumeUpload" name="ResumeUpload" class="filestyle" data-buttonBefore="true" data-buttonName="white-submit-btn" data-icon="false">
							<span id="fileHelp" class="help-block" style="display:none;">Please select a file to upload (pdf, docx, doc, rtf, txt).</span>
							<input type="hidden" name="FileBase64" id="FileBase64"/>
							<input type="hidden" name="FileExt" id="FileExt"/>
						</div>
                        <div style="margin-top: 10px;" class="col-lg-12 col-xs-12 text-center">
							<span class="white-submit-btn" id="submitBtn"><input type="submit" value="SUBMIT"/><i class="fa fa-angle-right"></i></span>
							<img id="loading" style="display:none;" src="'.get_template_directory_uri().'/imgs/ajax-loader.gif"></img>
							<span class="help-block" style="display:none;" id="confirmMsg">There was an issue with your submission, please try again.</span>
                        </div>
                    </form>
					
                </div>
				
                        <script src="//app-sj20.marketo.com/js/forms2/js/forms2.min.js"></script>
<form id="mktoForm_1139" style="display:none;"></form>
<script>MktoForms2.loadForm("//app-sj20.marketo.com", "733-JWE-559", 1139);</script>
 </div>
<div class="row not_ready_margin">
 
 <div class="col-xs-12 not_ready_background" style="padding: 40px;" >
                   <div class="no_ready_title"> <h3>'.$a['not_ready_title'].' </h3></div>
					<p style="color:#fff;padding:13px;text-align:center" class="margin-bottom-25  career-paragraph">'.$a['not_ready_content'].'</p>
					<a href="'.$a['link_url'].'" class="white-read-btn">'.$a['link_txt'].'<i class="fa fa-angle-right" aria-hidden="true"></i></a>
</div>
                
				</div>
               </div> ';
		
    
return $returnHTML;
}
add_shortcode('academic_university_right_side_form_and_section','academic_university_right_side_form_and_section_func');


/*-------  Academic University Right side form without campus ---*/
 
 function academic_university_right_side_form_without_campus_section_func($atts, $content=null){
    $a=shortcode_atts(array(
        'title'=>'Title' ,
        'content'=>'Content',
        'not_ready_title'=>'Title' ,
        'not_ready_content'=>'Content' ,
        'link_url'=>'Link Url',
        'link_txt'=>'Link Text',
        'background_img'=>'Background image',       
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
    $returnHTML = ' 
    <style>
            .not_ready_background:after {
            background-image:url("'.wp_get_attachment_url($a['background_img']).'");
               }
                     </style>
         
                 <div class="col-lg-4 col-sm-4  col-lg-offset-1 col-md-offset-1 col-md-4 col-xs-12 blog-bottom-border position_moved_top">
                  <div style="float:left;" id="requestFormContainer">         
                <div class="col-xs-12">
                    <h4 id="requestFormTitle">Quick Apply</h4>
                </div>
                <div class="row form-label-txt">
                    <form id="requestForm" method="post">
                        <input type="hidden" id="University" value="'.$a['university'].'"/>
                        <input type="hidden" id="AccountID" value="'.$a['account_id'].'"/>
                        <div class="col-lg-12 col-xs-12 form-group">
                            <label class="control-label" for="FirstName">First Name*</label>
                            <input class="shortfield-home form-control" type="text" name="FirstName" id="FirstName" required/>
                            <span class="help-block" style="display:none;">Please enter first name.</span>                        </div>
                        <div class="col-lg-12 col-xs-12 form-group">
                            <label class="control-label" for="LastName">Last Name*</label>
                            <input class="shortfield-home form-control" type="text" name="LastName" id="LastName" required/>
                            <span class="help-block" style="display:none;">Please enter last name.</span>
                        </div>
                        <div class="col-lg-12 col-xs-12 form-group">
                           <label class="control-label" for="Email">Email*</label>
                           <input class="shortfield-home form-control"  type="email" name="Email" id="Email" required/>
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
                            <span class="help-block" style="display:none;">Please select a Major.</span>                        </div>
                        <div class="col-lg-12 col-xs-12 form-group">
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
                        
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Resume<span id="resume_star">*</span></label><br>
                            <input type="file" id="ResumeUpload" name="ResumeUpload" class="filestyle" data-buttonBefore="true" data-buttonName="white-submit-btn" data-icon="false">
                            <span id="fileHelp" class="help-block" style="display:none;">Please select a file to upload (pdf, docx, doc, rtf, txt).</span>
                            <input type="hidden" name="FileBase64" id="FileBase64"/>
                            <input type="hidden" name="FileExt" id="FileExt"/>
                        </div>
                        <div style="margin-top: 10px;" class="col-lg-12 col-xs-12 text-center">
                            <span class="white-submit-btn" id="submitBtn"><input type="submit" value="SUBMIT"/><i class="fa fa-angle-right"></i></span>
                            <img id="loading" style="display:none;" src="'.get_template_directory_uri().'/imgs/ajax-loader.gif"></img>
                            <span class="help-block" style="display:none;" id="confirmMsg">There was an issue with your submission, please try again.</span>
                        </div>
                    </form>
                    
                </div>
                
                        <script src="//app-sj20.marketo.com/js/forms2/js/forms2.min.js"></script>
<form id="mktoForm_1139" style="display:none;"></form>
<script>MktoForms2.loadForm("//app-sj20.marketo.com", "733-JWE-559", 1139);</script>
 </div>
<div class="row not_ready_margin">
 
 <div class="col-xs-12 not_ready_background" style="padding: 40px;" >
                   <div class="no_ready_title"> <h3>'.$a['not_ready_title'].' </h3></div>
                    <p style="color:#fff;padding:13px;text-align:center" class="margin-bottom-25  career-paragraph">'.$a['not_ready_content'].'</p>
                    <a href="'.$a['link_url'].'" class="white-read-btn">'.$a['link_txt'].'<i class="fa fa-angle-right" aria-hidden="true"></i></a>
</div>
                
                </div>
               </div> ';
        
    
return $returnHTML;
}
add_shortcode('academic_university_right_side_form_without_campus_section','academic_university_right_side_form_without_campus_section_func');
 /*-------  Academic University Left Side ---*/
 
function academic_university_left_side_area_func($atts, $content=null){
    
        $a=shortcode_atts(array(
        'title'=>'Title' ,
        'content'=>'Content',
		       
    ), $atts);
    $returnHTML = '
	
	<div class="col-lg-8 col-md-8 col-sm-8  col-xs-12  blog-bottom-border academic-text-section">
                <h3 class="margin-bottom-25" id="left_jobTitle">'.$a['title'].'</h3>                                  
                <p class="margin-bottom-25  career-paragraph">'.$content.'</p>
				</div>
                  
               ';
		 
	 return $returnHTML;
    }
	 
 add_shortcode('academic_university_left_side_area', 'academic_university_left_side_area_func');
 
 
  /*-------  Academic University News Feed  ---*/
  
 function news_feed_func($atts, $content=null){
        $a=shortcode_atts(array(
            'title'=>'Title',
            'sub_title'=>'Sub Title',
            'background_img'=>'Background image',
            'logo_img1'=>'logo1',
            'logo_img2'=>'logo2',
            'logo_img3'=>'logo3',
            'link_txt1'=>'Link Text1',
			'url1'=>'',
            'link_txt2'=>'Link Text2',
			'url2'=>'',
            'link_txt3'=>'Link Text3',
			'url3'=>'',
        ), $atts);
        
        $returnHTML = '<style>
            .newsfeed_background:after {
            background-image:url("'.wp_get_attachment_url($a['background_img']).'");
               }
                     </style>
       <section class="newsfeed_background">
         <div class="row">
            <div class="news_feed">
          
            <div>
                <h2 style="text-align:center;">'.$a['title'].'</h2>    
            </div>
            <div>
                <p class="newsfeed_subtitle">'.$a['sub_title'].'</p>    
           </div>
            <div class="col-sm-12 col-md-12 col-lg-12">
          <div class="col-sm-4 col-md-4 col-xs-12">
            <div style="text-align: center;
"><img style="display: initial !important;max-height: 34px;" class="img-responsive"  src="'. wp_get_attachment_url($a['logo_img1']) .'"  draggable="false">
            <div class="newsfeed_read_article"><a style="color:#f26925 ;" target="_blank" href="'.$a['url1'].'"><span>'. $a['link_txt1'] .'</span></a> </div>
          </div></div>
          <div class="col-sm-4 col-md-4 col-xs-12">
          <div style="text-align: center;
"><img style="display: initial !important;max-height: 34px;" class="img-responsive" src="'. wp_get_attachment_url($a['logo_img2']) .'"  draggable="false">
            <div class="newsfeed_read_article"><a style="color:#f26925 ;" target="_blank" href="'.$a['url2'].'"><span>'. $a['link_txt2'] .'</span></a>   </div>  
          </div></div>
          <div class="col-sm-4 col-md-4 col-xs-12">
           <div style="text-align: center;
"><img style="display: initial !important;max-height: 34px;" class="img-responsive" src="'. wp_get_attachment_url($a['logo_img3']) .'"  draggable="false">
            <div class="newsfeed_read_article"><a style="color:#f26925 ;" target="_blank" href="'.$a['url3'].'"><span>'. $a['link_txt3'] .'</span></a>  </div>
          </div> </div>
         </div>
        </div>
</div>
 </section>';
     
     return $returnHTML;
    }
    add_shortcode('news_feed', 'news_feed_func');


/*--------------------------------------------------------------------End University Page  functions -------------------------------------*/
/*--------------------------------------------------------------------Start Witny Page  functions -------------------------------------*/

/*---start witny landing header -*/

function witny_landing_header_func($atts, $content=null){
        $a=shortcode_atts(array(
            'title'=>'Title',
            'sub_title'=>'Sub Title',
            'background_img'=>'Background image',
            'btn_txt'=>'',
			'background_img_mobile'=>''
        ), $atts);
        
        $returnHTML = '<style>
        .witny-par-hero:after{
        background-image:url("'.wp_get_attachment_url($a['background_img']).'");
        }
		@media only screen and (max-width: 768px){
             .witny-par-hero:after{
             background-image:url("'.wp_get_attachment_url($a['background_img_mobile']).'");
             }
        }
        </style>
        <div class="witny-par-hero">
        <div class="row no-margin contact-hero-content">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
            <h1>'.$a['title'].'</h1>
                </div>
                </div>
                </div>
                 <div class="row mrg_50">
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                 <span class="witny_sub_heading">'.$a['sub_title'].'</span>
                 </div>
                 <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                  <a href="#inline" class="orange-submit-btn fancybox-marketo">'.$a['btn_txt'].'<i class="fa fa-angle-right"></i></a>
                
            </div>
        </div></div>
 </div>';
     
     return $returnHTML;
    }
    add_shortcode('witny_landing_header', 'witny_landing_header_func');
	

/*---End witny landing header  -*/
/*---Start witny Pie Chart Section -*/


function witny_piechart_func($atts, $content=null){
        $a=shortcode_atts(array(         
            'left_img_1'=>'Enter Image',
            'left_img_2'=>'Enter Image',
            'right_img_1'=>'Enter Image',
            'right_img_2'=>'Enter Image'  
        ), $atts);
        
        $returnHTML = '<div class="container witny_mrg_top_50">
<div class="row">
    <div class="col-sm-6 witny_border-right">
    <p style="padding-top: 5px;" class="witny_social-and-form-header witny_heading">
    Although<span class="orange-bold">74%</span>of young girls express interest in Computer Science or STEM fields,             
   </p>
    <div class="col-md-12 col-sm-12 col-xs-12 witny_pd_14">
      <div class="col-md-4 col-sm-4 col-xs-4">
      <img class="img-responsive" src="'.wp_get_attachment_url($a['left_img_1']).'">
       </div>
       <div class="col-md-8  col-sm-8 col-xs-8">
      <p class="witny_social-and-form-header">
      only<span class="orange-bold">18%</span>of computer science undergraduate degrees are held by women
   </p>
      </div>
      </div>
      <div class="col-md-12 col-sm-12 col-xs-12 witny_pd_14">
        <div class="col-md-4 col-sm-4 col-xs-4">
        <img class="img-responsive" src="'.wp_get_attachment_url($a['left_img_2']).'">
       </div>
       <div class="col-md-8  col-sm-8 col-xs-8">
       <p class="witny_social-and-form-header">
        and only<span class="orange-bold">26%</span>of computing jobs are held by women.*
   </p>
      </div>
    </div>
    </div>
    
   <div class="col-sm-6">
    
    <p style="padding-top: 5px;" class="witny_social-and-form-header witny_heading">
      <span class="blue-bold">1.4M</span>new jobs will be open in computer science by 2020, yet,    
   </p>
    <div class="col-md-12 col-sm-12 col-xs-12 witny_pd_14">
      <div class="col-md-4 col-sm-4 col-xs-4">
      <img class="img-responsive" src="'.wp_get_attachment_url($a['right_img_1']).'">  
      </div> 
       <div class="col-md-8  col-sm-8 col-xs-8">
     <p class="witny_social-and-form-header">
       we will only have enough qualified graduates to fill<span class="blue-bold">29%</span>of them
   </p>
        </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 witny_pd_14">
          <div class="col-md-4 col-sm-4 col-xs-4">
      <img class="img-responsive" src="'.wp_get_attachment_url($a['right_img_2']).'">  
       </div>
       <div class="col-md-8  col-sm-8 col-xs-8">
     <p class="witny_social-and-form-header">
      and<span class="blue-bold">less than 3%</span>are projected to be filled by women.*
    </p>
      </div>      
   </div>
    <div class="col-md-12 col-sm-12">
    <p style="float:right;">* stats from GirlsWhoCode</p>
    </div>
    </div>
</div>';
     
     return $returnHTML;
    }
    add_shortcode('witny_piechart', 'witny_piechart_func');
 
 
/*---End witny Pie Chart Section -*/
/*---Start witny Blue Banner Section -*/

function witny_blue_banner_func($atts, $content=null){
    $a=shortcode_atts(array(
        'title'=>'Title' ,
        'content'=>'Content',
        'background_img'=>'Background image',        
    ), $atts);
    return '<style>
        .witny-part-today:after{
        background-image:url("'.wp_get_attachment_url($a['background_img']).'");
        }
        </style>
         <section class="witny-part-today">
      <div class="mob-container-unset">
         <div class="row no-margin">
               <div class="col-lg-12 col-md-12 col-sm-12 no-margin no-padding">
                <h3 class="margin-bottom-15">'.$a['title'].'</h3>
                <p class="margin-bottom-15 witny-part-today-cont">
                     '.$content.' </p>
               </div>
         </div>
     </div>
</section>';
return $return;
}
add_shortcode('witny_blue_banner','witny_blue_banner_func');

/*-- End witny Blue Banner Section ---*/
/*--------------------------------------------------------------------Start About Page Shortcodes & vc_map() functions -------------------------------------*/
function login_and_signup_header_hero_func($atts, $content=null){
	$a=shortcode_atts(array(
		'title'=>'Title',
		'background_img'=>'Background image',
        'hero_logo' => 'Logo',
	), $atts);
	
	$returnHTML = "<style>
  .hero-bg-login-and-signup-pro::after {
    content: '';
    background-image:url('".wp_get_attachment_url($a['background_img'])."');
    position: absolute;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
    z-index: -1;
    background-repeat: no-repeat;
    background-size: cover;
}
    </style><div class='hero-bg-login-and-signup-pro'>
<div class='hero-bg-login-and-signup-pro-content margin-top-50 margin-bottom-50'>

<h1 class='hero-bg-login-and-signup-pro-htitle'>".$a['title']."</h1>
<div class='hero-bg-login-and-signup-pro-logo'>
<img src='". wp_get_attachment_url($a["hero_logo"]) ."'>
</div>
</div>

</div>";
 
 return $returnHTML;
}
add_shortcode('login_and_signup_header_hero', 'login_and_signup_header_hero_func');


function Revature_student_reviews_video_module_header_func($atts, $content=null){
    $a=shortcode_atts(array(
        'background_img'=>'Background image',
        'video_thumbnail' => 'Video Thumbnail',
        'reviewer_video' => 'Video url', 
        'reviewer_title' => 'Default Title',
        'link_txt'=>'Link Text',        
    ), $atts);
    return
    "<style>
.Revature_student_reviews_header_section:after {
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
    <section class='Revature_student_reviews_header_section'>
    <div class='row'>
     <div class='col-sm-1 col-md-1 col-lg-1'>
   </div>
   <div class='col-sm-4 col-md-4 col-lg-4'>
         <div class='Revature_student_reviews_content'>             
                   <h1 class='hero-rev-htitle mobile_relative_position'>". $a['reviewer_title'] ."</h1>
                   <p class='hero-rev-content mobile_padding_content'>".$content."</p>
                   <a class='fancybox fancybox.iframe'  href='".$a['reviewer_video']."'><span class='Revature_student_reviews_content_sub'>". $a['link_txt'] ."</span></a> 
          </div>
   </div>
  
           <div class='col-sm-7 col-md-7 col-lg-7' style='padding-top: 12px;'>
              <div>
               <a class='fancybox fancybox.iframe' href='".$a['reviewer_video']."'><img class='img-responsive' src='". wp_get_attachment_url($a["video_thumbnail"]) ."'  draggable='false'></a>
          </div>
           </div>
    </div>
           </section>";
}
add_shortcode('Revature_student_reviews_video_module_header', 'Revature_student_reviews_video_module_header_func');
/*-------- Revature:Common Slider Container and Section ------*/
function revature_slider_video_container_func($atts, $content=null){
		$a=shortcode_atts(array(
		'color'=>'color picker',
		'main_title'=>'Main Title',
	    'main_content'=>'Default Title',
		'img'=>'',
	), $atts);
	return" <style>	
.revature-video-slider-section:after {
    content: '';
	background-image:url('".wp_get_attachment_url($a['img'])."');
    position: absolute;
    top: 0;
    left: 0;
    width:100%;
    height: 100%;
    z-index: -1;
    background-repeat: no-repeat;
    background-size: cover;
}
.compose-mode .vc_element, .view-mode .vc_element {
    display: block !important;
    position: relative;
	z-index:999 !important;
}
div.vc_controls-out-tl
{
	position: absolute !important;
    top: 23px !important;
}
	</style>
	<div class='revature-video-slider-section'>
		<div class='container'>
         <div class='row no-margin'> 
		 <div class='col-lg-12 col-md-12 col-sm-12'>
                <h3 class='margin-bottom-25'><font style='color:". $a['color'] ."!important;'>".$a['main_title']."</font></h3>					
                <p class='margin-bottom-25 revature-slider-video-content-sub'><font style='color:". $a['color'] ."!important;'>".$a['main_content']."</font></p>
          			</div>	
         </div>
        <div class='row no-margin'>   
          <div class='col-lg-12 col-md-12 col-sm-12'>		
              <section style='margin:0px!important;'>
        <div class='flexslider carousel'>
          <ul class='slides'>		  
        ".do_shortcode($content)."
	 </ul></div></div></div></div></div>
     
 </section>";
}
add_shortcode('revature_slider_video_container','revature_slider_video_container_func');

function revature_slider_video_section_func($atts, $content=null){
	
	
	$a=shortcode_atts(array(
		'color'=>'color picker',
		'video_1' => 'Video URL',
		'thumbnail_image1' => 'Image URL',
		'caption_1' => 'Caption Text',
		'video_2' => 'Video URL',
		'thumbnail_image2' => 'Image URL',
		'caption_2' => 'Caption Text',
		'video_3' => 'Video URL',
		'caption_3' => 'Caption Text',
		'thumbnail_image3' => 'Image URL',
		'video_4' => 'Video URL',
		'caption_4' => 'Caption Text',
		'thumbnail_image4' => 'Image URL',
	),$atts);
		
	
$returnHTML="
            <li>
  	    	   <a class='fancybox fancybox.iframe' href='".$a['video_1']."'><img src='". wp_get_attachment_image_src($a['thumbnail_image1'], 'full')[0] ."' /></a>
  	    		  <a class='fancybox fancybox.iframe' href='".$a['video_1']."'><p class='flex-caption'><font style='color:". $a['color'] ."!important;'>".$a['caption_1']."</font></p></a>
				</li>
  	    		<li>
  	    	   <a class='fancybox fancybox.iframe' href='".$a['video_2']."'><img src='". wp_get_attachment_image_src($a['thumbnail_image2'], 'full')[0] ."' /></a>
  	    		 <a class='fancybox fancybox.iframe' href='".$a['video_2']."'><p class='flex-caption'><font style='color:". $a['color'] ."!important;'>".$a['caption_2']."</font></p></a>
				</li>
  	    		<li>
  	    	    <a class='fancybox fancybox.iframe' href='".$a['video_3']."'><img src='". wp_get_attachment_image_src($a['thumbnail_image3'], 'full')[0] ."' /></a>
  	    		<a class='fancybox fancybox.iframe' href='".$a['video_3']."'><p class='flex-caption'><font style='color:". $a['color'] ."!important;'>".$a['caption_3']."</font></p></a>
				</li>
  	    		<li>
  	    	    <a class='fancybox fancybox.iframe' href='".$a['video_4']."'><img src='". wp_get_attachment_image_src($a['thumbnail_image4'], 'full')[0] ."' /></a>
  	    		 <a class='fancybox fancybox.iframe' href='".$a['video_4']."'><p class='flex-caption'><font style='color:". $a['color'] ."!important;'>".$a['caption_4']."</font></p></a>
				</li>";
										
		return $returnHTML;		

 }
  
add_shortcode('revature_slider_section','revature_slider_video_section_func');
/*--------END Revature: Common Slider Container and Section  ---*/
/*---------------------------------------------------------------------------- Start About Thank You Page


------------------------------------------------------------------*/
function thankyou_header_hero_func($atts, $content=null){
	$a=shortcode_atts(array(
		'title'=>'Title',
	), $atts);
	
	$returnHTML = '<div class="quickcont-bg" style="height:auto;">
		<h2>'.$a['title'].'</h2> 
 </div>
        ';
 
 return $returnHTML;
}
add_shortcode('thankyou_header_hero', 'thankyou_header_hero_func');
function thankyou_body_section_func($atts, $content=null){
			$a=shortcode_atts(array(
		'title'=>'Title',
		'btn_txt'=>'Button Text',
		'btn_url'=>''
	), $atts);
	return'<div style="text-align: center !importnat;">
<div class="mktoContent">
<div id="lpeCDiv_2211" class="lpeCElement Thank_you_We_will_contact_you_shortly_regarding_your_interest">
<p class="margin-top-50"style="text-align: center; "><span style="font-family: arial, helvetica, sans-serif; font-size: 18pt;">'.$content.'</span></p>
</div>
</div>
<p style="text-align: center;"><a class="error-read-btn margin-top-25 margin-right-15" href="/insight">'.$a['btn_url'].'</a></p>
<div id="mktHeader" class="mktEditable" style="text-align: center; padding-top: 35px;"><strong>FOLLOW US</strong></div>
<div class="margin-bottom-50" style="text-align: center !important;padding-top: 15px;"><div class="social">
  <a class="fa fa-facebook" title="" target="_blank" href="https://www.facebook.com/revature/"></a>
  <a class="fa fa-twitter" title="" target="_blank" href="https://twitter.com/wearerevature"></a>
   <a class="fa fa-linkedin" title="" target="_blank" href="https://www.linkedin.com/company-beta/10510386/"></a>
  
</div></div></div>';
}
add_shortcode('thankyou_body_section','thankyou_body_section_func');

/*---------------------------------------------------------------------------- End About Thank You Page

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
/*---------------Thankyou Section---------------*/
vc_map(array(
		"name" => __("Thankyou - Header Banner", "revature"),
		"base" => "thankyou_header_hero",
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
		"name" => __("Thankyou - Body Section", "revature"),
		"base" => "thankyou_body_section",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"params" => array(
			
			array(
				"type"=>"textarea_html",
				"heading"=>__("Content", "revature"),
				"param_name"=>"content",
				"description"=>__("Content", "revature")
			),
			
						array(
				"type"=>"textfield",
				"heading"=>__("Button URL", "revature"),
				"param_name"=>"btn_url",
				"description"=>__("Button URL", "revature")
			)
		)
	));
	/*---------------Thankyou Section---------------*/
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
	
	/* Revature- Video container and slider Section */
	vc_map(array(
		"name" => __("Revature - Video slider Section", "revature"),
		"base" => "revature_slider_section",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"as_child"=>array("only"=>"revature_slider_video_container"),
		"params" => array(
		array(
            "type" => "colorpicker",
            "heading" => __( "Color Picker for whole Section", "revature" ),
            "param_name" => "color",
            
           "description" => __( "Choose text color for all","revature" )
         ),
		   array(
				"type"=>"attach_image",
				"heading"=>__("First:Thumbnail image for Slider"),
				"param_name"=>"thumbnail_image1",
				"description"=>__("Thumbnail image", "revature")
			),
			array(
				"type" => "textfield",
				"heading" => __("First Video URL", "revature"),
				"param_name" => "video_1",
				"description" => __("Enter the Video URL ", "revature")
			),
			
			array(
				"type"=>"textfield",
				"heading"=>__("First Header Title", "revature"),
				"param_name"=>"caption_1",
				"description"=>__("Caption Title for Header", "revature")
			),
			
			array(
				"type"=>"attach_image",
				"heading"=>__("Second:Thumbnail image for Slider"),
				"param_name"=>"thumbnail_image2",
				"description"=>__("Thumbnail image", "revature")
			),
			array(
				"type" => "textfield",
				"heading" => __("Second Video URL", "revature"),
				"param_name" => "video_2",
				"description" => __("Enter the Video URL ", "revature")
			),
			
			array(
				"type"=>"textfield",
				"heading"=>__("Second Header Title", "revature"),
				"param_name"=>"caption_2",
				"description"=>__("Caption Title for Header", "revature")
			),
			array(
				"type"=>"attach_image",
				"heading"=>__("Third:Thumbnail image for Slider", "revature"),
				"param_name"=>"thumbnail_image3",
				"description"=>__("Thumbnail image", "revature")
			),
			
			array(
				"type" => "textfield",
				"heading" => __("Third Video URL", "revature"),
				"param_name" => "video_3",
				"description" => __("Enter the Video URL ", "revature")
			),
			
			array(
				"type"=>"textfield",
				"heading"=>__("Header Title", "revature"),
				"param_name"=>"caption_3",
				"description"=>__("Caption Title for Header", "revature")
			),
			array(
				"type"=>"attach_image",
				"heading"=>__("Fourth:Thumbnail image for Slider", "revature"),
				"param_name"=>"thumbnail_image4",
				"description"=>__("Thumbnail image", "revature")
			),
			array(
				"type" => "textfield",
				"heading" => __("Video URL", "revature"),
				"param_name" => "video_4",
				"description" => __("Enter the Video URL ", "revature")
			),
			
			array(
				"type"=>"textfield",
				"heading"=>__("Header Title", "revature"),
				"param_name"=>"caption_4",
				"description"=>__("Caption Title for Header", "revature")
			),
		)
	));
	vc_map(array(
		"name" => __("Revature - Video slider Container", "revature"),
		"base" => "revature_slider_video_container",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"as_parent"=>array("only"=>"revature_slider_section"),
		"is_container"=>true,
		"params" => array(
		 array(
				"type"=>"attach_image",
				"heading"=>__("Image", "revature"),
				"param_name"=>"img",
				"description"=>__("Image", "revature")
			),
			array(
            "type" => "colorpicker",
            "heading" => __( "Color Picker for whole Container", "revature" ),
            "param_name" => "color",
            
           "description" => __( "Choose text color for all","revature" )
         ),
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
	
			
	
vc_map(array(
		"name"=>__("Revature- Login and Signup Header", "revature"),
		"base"=>"login_and_signup_header_hero",
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
				"type"=>"attach_image",
				"heading"=>__("Background Image"),
				"param_name"=>"background_img",
				"description"=>__("Thumbnail image", "revature")
			),
			array(
				"type"=>"attach_image",
				"heading"=>__("Logo Image"),
				"param_name"=>"hero_logo",
				"description"=>__("Thumbnail image", "revature")
			),
			
			
		)
	));

	
	vc_map(array(
		"name" => __("Revature: Student Reviews Video Section", "revature"),
		"base" => "Revature_student_reviews_video_module_header",
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => true,
		"params" => array(
		
		array(
				"type"=>"attach_image",
				"heading"=>__("Thumbnail", "revature"),
				"param_name"=>"background_img",
				"description"=>__("Select Background Image", "revature")
			),
			
			array(
				"type"=>"attach_image",
				"heading"=>__("Upload Reviewer Thumbnail", "revature"),
				"param_name"=>"video_thumbnail",
				"description"=>__("Upload Reviewer Thumbnail", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Header", "revature"),
				"param_name"=>"reviewer_title",
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
				"heading"=>__("Reviewer video", "revature"),
				"param_name"=>"reviewer_video",
				"description"=>__("Header Video URL", "revature")
			),
			array(
				"type"=>"textfield",
				"heading"=>__("Link Text", "revature"),
				"param_name"=>"link_txt",
				"description"=>__("Link Text", "revature")
			),
			
		)
	));
	
	/* vc_map of Witny Landing Header */
	
	vc_map(array(       
        "name" => __("Witny Landing Header", "revature"),      
        "base" => "witny_landing_header",        
        "content_element" => true,     
        "show_settings_on_create"=>true,       
        "category" => __( "Revature Shortcodes", "revature"),      
        "params" => array(     
            array(      
                "type"=>"textfield",     
                "heading"=>__("Header", "revature"),       
                "param_name"=>"title",       
                "description"=>__("Header", "revature")        
            ),
            array(      
                "type"=>"textfield",     
                "heading"=>__("Sub Header", "revature"),       
                "param_name"=>"sub_title",       
                "description"=>__("Sub Header", "revature")        
            ),  
            array(
                "type"=>"attach_image",
                "heading"=>__("Background Image", "revature"),
                "param_name"=>"background_img",
                "description"=>__("Select Background Image", "revature")
            ),
			
			array(
                "type"=>"attach_image",
                "heading"=>__("Background Image for Mobile", "revature"),
                "param_name"=>"background_img_mobile",
                "description"=>__("Select Background Image for Mobile", "revature")
            ),
            array(
                "type"=>"textfield",
                "heading"=>__("Button Text", "revature"),
                "param_name"=>"btn_txt",
                "description"=>__("Title for Button", "revature")
            )
        )       
    ));
	
	/*  vc_map of Witny Pie Chart  */
		
	vc_map(array(        
        "name" => __("Revature: Witny Pie Chart", "revature"),        
        "base" => "witny_piechart",        
        "content_element" => true,        
        "show_settings_on_create"=>true,        
        "category" => __( "Revature Shortcodes", "revature"),        
        "params" => array(        
            array(        
                "type"=>"textfield",        
                "heading"=>__("Left Header", "revature"),        
                "param_name"=>"title1",        
                "description"=>__("Left Header", "revature")        
            ),
            array(        
                "type"=>"textfield",        
                "heading"=>__("Right Header", "revature"),        
                "param_name"=>"title2",        
                "description"=>__("Right Header", "revature")        
            ),
            array(
                "type"=>"attach_image",
                "heading"=>__("Left Image 1", "revature"),
                "param_name"=>"left_img_1",
            ),
            array(
                "type"=>"textfield",
                "heading"=>__("Left Content 1", "revature"),
                "param_name"=>"left_content_1",
                "description"=>__("Left Content 1", "revature")
            ),    
            
            array(
                "type"=>"attach_image",
                "heading"=>__("Left Image 2", "revature"),
                "param_name"=>"left_img_2",
            ),
            array(
                "type"=>"textfield",
                "heading"=>__("Left Content 2", "revature"),
                "param_name"=>"left_content_2",
                "description"=>__("Left Content 2", "revature")
            ),    
            array(
                "type"=>"attach_image",
                "heading"=>__("Right Image 1", "revature"),
                "param_name"=>"right_img_1",
            ),
            array(
                "type"=>"textfield",
                "heading"=>__("Right Content 1", "revature"),
                "param_name"=>"right_content_1",
                "description"=>__("Right Content 1", "revature")
            ),    
            array(
                "type"=>"attach_image",
                "heading"=>__("Right Image 2", "revature"),
                "param_name"=>"right_img_2",
            ),
                   array(
                "type"=>"textfield",
                "heading"=>__("Right Content 2", "revature"),
                "param_name"=>"right_content_2",
                "description"=>__("Right Content 2", "revature")
            ),    
        )        
    ));	
	
	/* vc_map of Witny Blue Banner  */
	
	vc_map(array(
        "name" => __("Witny: Blue Banner", "revature"),
        "base" => "witny_blue_banner",
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
            ),
            array(
                "type"=>"attach_image",
                "heading"=>__("Background Image", "revature"),
                "param_name"=>"background_img",
                "description"=>__("Select Background Image", "revature")
            ),
        )
    ));
	
	/* vc_map of University Page  */
	
	
vc_map(array(
			"name"=>__("Revature:Academic University -Custom Logos Header).", "revature"),
			"base"=>"academic_univer_custom_header",
			"content_element"=>true,
			"category"=>__("Revature Shortcodes", "revature"),
			"show_settings_on_create"=>true,
			"params"=>array(
				
				array(
					"type"=>"attach_image",
					"heading"=>__("Company Logo", "revature"),
					"param_name"=>"company_logo",
					"description"=>__("Company Logo", "revature")
				),
				
				array(
					"type"=>"textarea_html",
					"heading"=>__("Content", "revature"),
					"param_name"=>"content",
					"description"=>__("Content", "revature")
				),
				array(
					"type"=>"attach_image",
					"heading"=>__("University Logo", "revature"),
					"param_name"=>"university_logo",
					"description"=>__("University Logo", "revature")
				),
			),
			
		));
		
	vc_map(array(
        "name" => __("University: Thumbnail Section", "revature"),
        "base" => "university_thumbnail_section",
        "content_element" => true,
        "category" => __( "Revature Shortcodes", "revature"),
        "show_settings_on_create" => true,
        "params" => array(
            array(
                "type"=>"attach_image",
                "heading"=>__("Thumbnail", "revature"),
                "param_name"=>"logo_img",
                "description"=>__("Select Thumbnail", "revature")
            ),
            array(
                "type"=>"textfield",
                "heading"=>__("Header", "revature"),
                "param_name"=>"header_title",
                "description"=>__("Header Text", "revature")
            ),
            array(
                "type"=>"textfield",
                "heading"=>__("Fancybox Video URL", "revature"),
                "param_name"=>"header_video",
                "description"=>__("Fancybox Video URL", "revature")
            ),
            array(
                "type"=>"attach_image",
                "heading"=>__("Background Image", "revature"),
                "param_name"=>"background_img",
                "description"=>__("Select Background Image", "revature")
            ),
        )
    ));
	
	vc_map(array(
		"name" => __("Academic university - Body Container", "revature"),
		"base" => "academic_university_container",
		"as_parent" => array('only' => ' academic_university_left_side_area,academic_university_right_side_form_and_section,academic_university_right_side_form_without_campus_section'),
		"content_element" => true,
		"category" => __( "Revature Shortcodes", "revature"),
		"show_settings_on_create" => false,
		"is_container" => true,
		"js_view" => 'VcColumnView'
	));
	vc_map(array(
        "name" => __("Academic University : Left Side Area", "revature"),
        "base" => "academic_university_left_side_area",
		"as_child" => array('only'=>'academic_university_container'),
        "content_element" => true,
        "category" => __( "Revature Shortcodes", "revature"),
        "show_settings_on_create" => true,
        "params" => array(
        
            array(
                "type"=>"textfield",
                "heading"=>__("Left Side Header", "revature"),
                "param_name"=>"title",
                "description"=>__("Left Header Text", "revature")
            ),
			array(
                "type"=>"textarea_html",
                "heading"=>__("Left Side Content", "revature"),
                "param_name"=>"content",
                "description"=>__("Left Content Text", "revature")
            ),
					)
    ));
			
	vc_map(array(
        "name" => __("Academic University : Right Side Form Without Campus Field", "revature"),
        "base" => "academic_university_right_side_form_without_campus_section",
        "as_child" => array('only'=>'academic_university_container'),
        "content_element" => true,
        "category" => __( "Revature Shortcodes", "revature"),
        "show_settings_on_create" => true,
        "params" => array(
            array(
                "type"=>"attach_image",
                "heading"=>__("Not Ready Section- Background Image", "revature"),
                "param_name"=>"background_img",
                "description"=>__("Select Background Image", "revature")
            ),
            array(
                "type"=>"textfield",
                "heading"=>__("Not Ready Section-Header", "revature"),
                "param_name"=>"not_ready_title",
                "description"=>__("Header Text", "revature")
            ),
            array(
                "type"=>"textfield",
                "heading"=>__("Not Ready Section-Content", "revature"),
                "param_name"=>"not_ready_content",
                "description"=>__("Content Text", "revature")
            ),
            array(
                "type"=>"textfield",
                "heading"=>__("Button Link", "revature"),
                "param_name"=>"link_txt",
                "description"=>__("Link for Button", "revature")
            ),
            array(
                "type"=>"textfield",
                "heading"=>__("Button URL", "revature"),
                "param_name"=>"link_url",
                "description"=>__("URL for Button", "revature")
            ),
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
                "heading"=>__("Marketo Form ID", "revature"),
                "param_name"=>"marketo_id",
                "description"=>__("Marketo Form ID", "revature")
            )
        )
    ));
	vc_map(array(
        "name" => __("Academic University : Right Side Area", "revature"),
        "base" => "academic_university_right_side_form_and_section",
		"as_child" => array('only'=>'academic_university_container'),
        "content_element" => true,
        "category" => __( "Revature Shortcodes", "revature"),
        "show_settings_on_create" => true,
        "params" => array(
			array(
                "type"=>"attach_image",
                "heading"=>__("Not Ready Section- Background Image", "revature"),
                "param_name"=>"background_img",
                "description"=>__("Select Background Image", "revature")
            ),
			array(
                "type"=>"textfield",
                "heading"=>__("Not Ready Section-Header", "revature"),
                "param_name"=>"not_ready_title",
                "description"=>__("Header Text", "revature")
            ),
			array(
                "type"=>"textfield",
                "heading"=>__("Not Ready Section-Content", "revature"),
                "param_name"=>"not_ready_content",
                "description"=>__("Content Text", "revature")
            ),
			array(
                "type"=>"textfield",
                "heading"=>__("Button Link", "revature"),
                "param_name"=>"link_txt",
                "description"=>__("Link for Button", "revature")
            ),
			array(
                "type"=>"textfield",
                "heading"=>__("Button URL", "revature"),
                "param_name"=>"link_url",
                "description"=>__("URL for Button", "revature")
            ),
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
       
        "name" => __("University: News Feed Section", "revature"),
        "base" => "news_feed",
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
                "type"=>"textfield",
                "heading"=>__("Header", "revature"),
                "param_name"=>"title",
                "description"=>__("Header Text", "revature")
            ),
            array(        
                "type"=>"textfield",        
                "heading"=>__("Sub Header", "revature"),        
                "param_name"=>"sub_title",        
                "description"=>__("Sub Header", "revature")        
            ),    
          
            array(
                "type"=>"attach_image",
                "heading"=>__("Logo 1", "revature"),
                "param_name"=>"logo_img1",
                "description"=>__("Select Logo Image", "revature")
            ),
            array(
                "type"=>"attach_image",
                "heading"=>__("Logo 2", "revature"),
                "param_name"=>"logo_img2",
                "description"=>__("Select Logo Image", "revature")
            ),
            array(
                "type"=>"attach_image",
                "heading"=>__("Logo 3", "revature"),
                "param_name"=>"logo_img3",
                "description"=>__("Select Logo Image", "revature")
            ),
             array(
                "type"=>"textfield",
                "heading"=>__("Link Text 1", "revature"),
                "param_name"=>"link_txt1",
                "description"=>__("Link Text 1", "revature")
            ),
			array(
                "type"=>"textfield",
                "heading"=>__("Link URL 1", "revature"),
                "param_name"=>"url1",
                "description"=>__("Link URL 1", "revature")
            ),
             array(
                "type"=>"textfield",
                "heading"=>__("Link Text 2", "revature"),
                "param_name"=>"link_txt2",
                "description"=>__("Link Text 2", "revature")
            ),
			array(
                "type"=>"textfield",
                "heading"=>__("Link URL 2", "revature"),
                "param_name"=>"url2",
                "description"=>__("Link URL 2", "revature")
            ),
             array(
                "type"=>"textfield",
                "heading"=>__("Link Text 3", "revature"),
                "param_name"=>"link_txt3",
                "description"=>__("Link Text 3", "revature")
            ),
			array(
                "type"=>"textfield",
                "heading"=>__("Link URL 3", "revature"),
                "param_name"=>"url3",
                "description"=>__("Link URL 3", "revature")
            ),
        )
    ));
	vc_map(array(
        "name" => __("Training Code Life - Container", "revature"),
        "base" => "training_process_code_life_container",
        "content_element" => true,
        "category" => __( "Revature Shortcodes", "revature"),
        "as_parent"=>array("only"=>"revature_curriculum_training_process,  code_life_orange_header_section, code_life_faq"),
        "is_container"=>true,
        "params" => array(
        )
    ));	
	
	vc_map(array(
"name" => __("Revature - Training Curriculum Process", "revature"),
"base" => "revature_curriculum_training_process",
"content_element" => true,
"category" => __( "Revature Shortcodes", "revature"),
"as_child"=>array("only"=>"training_process_code_life_container"),
"show_settings_on_create" => true,
"params" => array(

array(
"type"=>"textfield",
"heading"=>__("Training Process: Title", "revature"),
"param_name"=>"title",
"description"=>__("Training Process: Title", "revature")
),
array(
"type"=>"textfield",
"heading"=>__("Training Process: Sub Title", "revature"),
"param_name"=>"sub_title",
"description"=>__("Training Process: Sub Title", "revature")
),
array(
"type"=>"attach_image",
"heading"=>__("Training Process: Icon Image1", "revature"),
"param_name"=>"logo_img_1",
"description"=>__("Training Process: Icon Image1", "revature")
),
array(
"type"=>"textfield",
"heading"=>__("Training Process: Icon Title1", "revature"),
"param_name"=>"logo_title_1",
"description"=>__("Training Process: Icon Title1", "revature")
),
array(
"type"=>"textfield",
"heading"=>__("Training Process: Icon Sub Title1", "revature"),
"param_name"=>"logo_subtitle_1",
"description"=>__("Training Process: Icon Sub Title1", "revature")
),
array(
"type"=>"attach_image",
"heading"=>__("Training Process: Icon Image2", "revature"),
"param_name"=>"logo_img_2",
"description"=>__("Training Process: Icon Image2", "revature")
),
array(
"type"=>"textfield",
"heading"=>__("Training Process: Logo Title2", "revature"),
"param_name"=>"logo_title_2",
"description"=>__("Training Process: Icon Title2", "revature")
),
array(
"type"=>"textfield",
"heading"=>__("Training Process: Icon Sub Title2", "revature"),
"param_name"=>"logo_subtitle_2",
"description"=>__("Training Process: Icon Sub Title2", "revature")
),
array(
"type"=>"attach_image",
"heading"=>__("Training Process: Icon Image3", "revature"),
"param_name"=>"logo_img_3",
"description"=>__("Training Process: Icon Image3", "revature")
),
array(
"type"=>"textfield",
"heading"=>__("Training Process: Logo Title3", "revature"),
"param_name"=>"logo_title_3",
"description"=>__("Training Process: Icon Title3", "revature")
),
array(
"type"=>"textfield",
"heading"=>__("Training Process: Icon Sub Title3", "revature"),
"param_name"=>"logo_subtitle_3",
"description"=>__("Training Process: Icon Sub Title3", "revature")
),
array(
"type"=>"attach_image",
"heading"=>__("Training Process: Icon Image4", "revature"),
"param_name"=>"logo_img_4",
"description"=>__("Training Process: Icon Image4", "revature")
),
array(
"type"=>"textfield",
"heading"=>__("Training Process: Icon Title4", "revature"),
"param_name"=>"logo_title_4",
"description"=>__("Training Process: Icon Title4", "revature")
),
array(
"type"=>"textfield",
"heading"=>__("Training Process: Icon Sub Title4", "revature"),
"param_name"=>"logo_subtitle_4",
"description"=>__("Training Process: Icon Sub Title4", "revature")
),
array(
"type"=>"attach_image",
"heading"=>__("Training Process: Icon Image5", "revature"),
"param_name"=>"logo_img_5",
"description"=>__("Training Process: Icon Image5", "revature")
),
array(
"type"=>"textfield",
"heading"=>__("Training Process: Icon Title5", "revature"),
"param_name"=>"logo_title_5",
"description"=>__("Training Process: Icon Title5", "revature")
),
array(
"type"=>"textfield",
"heading"=>__("Training Process: Icon Sub Title5", "revature"),
"param_name"=>"logo_subtitle_5",
"description"=>__("Training Process: Icon Sub Title5", "revature")
),
array(
"type"=>"attach_image",
"heading"=>__("Training Process: Icon Image6", "revature"),
"param_name"=>"logo_img_6",
"description"=>__("Training Process: Icon Image6", "revature")
),
array(
"type"=>"textfield",
"heading"=>__("Training Process: Icon Title6", "revature"),
"param_name"=>"logo_title_6",
"description"=>__("Training Process: Icon Title6", "revature")
),
array(
"type"=>"textfield",
"heading"=>__("Training Process: Icon Sub Title6", "revature"),
"param_name"=>"logo_subtitle_6",
"description"=>__("Training Process: Icon Sub Title6", "revature")
),
)
));
	
vc_map(array(
"name" => __("Code Life - Orange Video Section", "revature"),
"base" => "code_life_orange_header_section",
"content_element" => true,
"category" => __( "Revature Shortcodes", "revature"),
"as_child"=>array("only"=>"training_process_code_life_container"),
"show_settings_on_create" => true,
"params" => array(
array(
"type"=>"attach_image",
"heading"=>__("Code Life: Background Image", "revature"),
"param_name"=>"background_img",
"description"=>__("Code Life: Background Image", "revature")
),
array(
"type"=>"textfield",
"heading"=>__("Code Life: Header", "revature"),
"param_name"=>"header_title",
"description"=>__("Code Life: Header Text", "revature")
),
array(
"type"=>"attach_image",
"heading"=>__("Code Life: Thumbnail Image", "revature"),
"param_name"=>"thumbnail_img",
"description"=>__("Code Life: Select Thumbnail Image", "revature")
),
array(
"type"=>"textfield",
"heading"=>__("Code Life: Thumbnail Video URL", "revature"),
"param_name"=>"video_thumbnail_url",
"description"=>__("Code Life: Thumbnail Video URL", "revature")
),
array(
"type"=>"textfield",
"heading"=>__("Code Life: Sub Header", "revature"),
"param_name"=>"sub_title",
"description"=>__("Code Life: Sub Header Text", "revature")
)
)
));
vc_map(array(
"name" => __("Revature - Code Life FAQ section", "revature"),
"base" => "code_life_faq",
"content_element" => true,
"category" => __( "Revature Shortcodes", "revature"),
"as_child"=>array("only"=>"training_process_code_life_container"),
"show_settings_on_create" => true,
"params" => array(
array(
    "type"=>"attach_image",
    "heading"=>__("Background Image", "revature"),
    "param_name"=>"background_img",
    "description"=>__("Background Image", "revature")
),
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
)
));



	/*  End   vc_map of  join our team  */
	vc_map(array(
        "name" => __("Training Curriculum Spotlight - Container", "revature"),
        "base" => "training_curriculum_container",
        "content_element" => true,
        "category" => __( "Revature Shortcodes", "revature"),
        "as_parent"=>array("only"=>"training_curriculum_header, training_curriculum_spotlight, training_locations, training_social_media_section"),
        "is_container"=>true,
        "params" => array(
        )
    ));
    
    vc_map(array(
"name" => __("Revature Sample - Training Curriculum", "revature"),
"base" => "training_curriculum_header",
"content_element" => true,
"category" => __( "Revature Shortcodes", "revature"),
"show_settings_on_create" => true,
"as_child"=>array("only"=>"training_curriculum_container"),
"params" => array(
array(
    "type"=>"attach_image",
    "heading"=>__("Background Image", "revature"),
    "param_name"=>"background_img",
    "description"=>__("Background Image", "revature")
),
array(
    "type"=>"textfield",
    "heading"=>__("Header", "revature"),
    "param_name"=>"header_title",
    "description"=>__("Header Text", "revature")
),
array(
    "type"=>"textfield",
    "heading"=>__("Sub Header", "revature"),
    "param_name"=>"sub_title",
    "description"=>__("Sub Header Text", "revature")
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
    ),
    array(
    "type" => "attach_image",
    "heading" => __("Image URL", "revature"),
    "param_name" => "logo_img",
    "description" => __("Select an image to display next to the button", "revature")
    ),
)
));
    
    vc_map(array(
        "name" => __("Training Curriculum Spotlight - Section", "revature"),
        "base" => "training_curriculum_spotlight",
        "content_element" => true,
        "category" => __( "Revature Shortcodes", "revature"),
        "show_settings_on_create" => true,
        "as_child"=>array("only"=>"training_curriculum_container"),
        "params" => array(
        array(
                "type"=>"attach_image",
                "heading"=>__("Training Spotlight Image", "revature"),
                "param_name"=>"image",
                "description"=>__("Training Spotlight Image", "revature")
            ),  
                array(
                "type"=>"textfield",
                "heading"=>__("Training Spotlight: Background Color", "revature"),
                "param_name"=>"color",
                "description"=>__("Training Spotlight: Background Color", "revature")
            ),
            array(
                "type"=>"textfield",
                "heading"=>__("Training Spotlight Header", "revature"),
                "param_name"=>"header",
                "description"=>__("Training Spotlight Header", "revature")
            ),
            array(
                "type"=>"textfield",
                "heading"=>__("Training Spotlight Subheader", "revature"),
                "param_name"=>"sub_header",
                "description"=>__("Training Spotlight Subheader", "revature")
            )
        )
    ));
    
vc_map(array(
"name" => __("Blue - Training Locations Section", "revature"),
"base" => "training_locations",
"content_element" => true,
"category" => __( "Revature Shortcodes", "revature"),
"as_child"=>array("only"=>"training_curriculum_container"),
"show_settings_on_create" => true,
"params" => array(
array(
"type"=>"attach_image",
"heading"=>__("Blue Locations: Background Image", "revature"),
"param_name"=>"background_img",
"description"=>__("Blue Locations: Background Image", "revature")
),
array(
"type"=>"attach_image",
"heading"=>__("Blue Locations: Location Icon 1", "revature"),
"param_name"=>"location_img1",
"description"=>__("Blue Locations: Location Icon 1", "revature")
),
array(
"type"=>"textfield",
"heading"=>__("Blue Locations: Id", "revature"),
"param_name"=>"location_id1",
"description"=>__("Blue Locations: Id", "revature")
),
array(
"type"=>"attach_image",
"heading"=>__("Blue Locations: DC Slider Image1", "revature"),
"param_name"=>"dc_img1",
"description"=>__("Blue Locations: DC Slider Image1", "revature")
),
array(
"type"=>"attach_image",
"heading"=>__("Blue Locations: DC Slider Image2", "revature"),
"param_name"=>"dc_img2",
"description"=>__("Blue Locations: DC Slider Image2", "revature")
),
array(
"type"=>"attach_image",
"heading"=>__("Blue Locations: DC Slider Image3", "revature"),
"param_name"=>"dc_img3",
"description"=>__("Blue Locations: DC Slider Image3", "revature")
),
array(
"type"=>"attach_image",
"heading"=>__("Blue Locations: DC Slider Image4", "revature"),
"param_name"=>"dc_img4",
"description"=>__("Blue Locations: DC Slider Image4", "revature")
),
array(
"type"=>"attach_image",
"heading"=>__("Blue Locations: DC Slider Image5", "revature"),
"param_name"=>"dc_img5",
"description"=>__("Blue Locations: DC Slider Image5", "revature")
),
array(
"type"=>"attach_image",
"heading"=>__("Blue Locations: Location Icon 2", "revature"),
"param_name"=>"location_img2",
"description"=>__("Blue Locations: Location Icon 2", "revature")
),
array(
"type"=>"textfield",
"heading"=>__("Blue Locations: Id", "revature"),
"param_name"=>"location_id2",
"description"=>__("Blue Locations: Id", "revature")
),
array(
"type"=>"attach_image",
"heading"=>__("Blue Locations: FL Slider Image1", "revature"),
"param_name"=>"fl_img1",
"description"=>__("Blue Locations: FL Slider Image1", "revature")
),
array(
"type"=>"attach_image",
"heading"=>__("Blue Locations: FL Slider Image2", "revature"),
"param_name"=>"fl_img2",
"description"=>__("Blue Locations: FL Slider Image2", "revature")
),
array(
"type"=>"attach_image",
"heading"=>__("Blue Locations: FL Slider Image3", "revature"),
"param_name"=>"fl_img3",
"description"=>__("Blue Locations: FL Slider Image3", "revature")
),
array(
"type"=>"attach_image",
"heading"=>__("Blue Locations: FL Slider Image4", "revature"),
"param_name"=>"fl_img4",
"description"=>__("Blue Locations: FL Slider Image4", "revature")
),
array(
"type"=>"attach_image",
"heading"=>__("Blue Locations: FL Slider Image5", "revature"),
"param_name"=>"fl_img5",
"description"=>__("Blue Locations: FL Slider Image5", "revature")
),
array(
"type"=>"attach_image",
"heading"=>__("Blue Locations: Location Icon 3", "revature"),
"param_name"=>"location_img3",
"description"=>__("Blue Locations: Location Icon 3", "revature")
),
array(
"type"=>"textfield",
"heading"=>__("Blue Locations: Id", "revature"),
"param_name"=>"location_id3",
"description"=>__("Blue Locations: Id", "revature")
),
array(
"type"=>"attach_image",
"heading"=>__("Blue Locations: NYC Slider Image1", "revature"),
"param_name"=>"nyc_img1",
"description"=>__("Blue Locations: NYC Slider Image1", "revature")
),
array(
"type"=>"attach_image",
"heading"=>__("Blue Locations: NYC Slider Image2", "revature"),
"param_name"=>"nyc_img2",
"description"=>__("Blue Locations: NYC Slider Image2", "revature")
),
array(
"type"=>"attach_image",
"heading"=>__("Blue Locations: NYC Slider Image3", "revature"),
"param_name"=>"nyc_img3",
"description"=>__("Blue Locations: NYC Slider Image3", "revature")
),
array(
"type"=>"attach_image",
"heading"=>__("Blue Locations: NYC Slider Image4", "revature"),
"param_name"=>"nyc_img4",
"description"=>__("Blue Locations: NYC Slider Image4", "revature")
),
array(
"type"=>"attach_image",
"heading"=>__("Blue Locations: NYC Slider Image5", "revature"),
"param_name"=>"nyc_img5",
"description"=>__("Blue Locations: NYC Slider Image5", "revature")
),
array(
"type"=>"textfield",
"heading"=>__("Blue Locations: Sub Title", "revature"),
"param_name"=>"sub_title",
"description"=>__("Blue Locations: Sub Title", "revature")
)
)
));
    vc_map(array(
        "name" => __("Training Social Media - Section", "revature"),
        "base" => "training_social_media_section",
        "content_element" => true,
        "category" => __( "Revature Shortcodes", "revature"),
        "show_settings_on_create" => true,
        "as_child"=>array("only"=>"training_curriculum_container"),
        "params" => array(
        array(
                "type"=>"attach_image",
                "heading"=>__("Training Social   Image", "revature"),
                "param_name"=>"image",
                "description"=>__("Training Social Image", "revature")
            ),  
                array(
                "type"=>"textfield",
                "heading"=>__("Training Social: Background Color", "revature"),
                "param_name"=>"color",
                "description"=>__("Training Social: Background Color", "revature")
            ),
            array(
                "type"=>"textfield",
                "heading"=>__("Training Social Header", "revature"),
                "param_name"=>"header",
                "description"=>__("Training Social Header", "revature")
            ),
            
        )
    ));
		
	if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
		
		class WPBakeryShortCode_Training_Curriculum_Container extends WPBakeryShortCodesContainer{
			
		}
		class WPBakeryShortCode_Training_Process_Code_Life_Container extends WPBakeryShortCodesContainer{
			
		}
		class WPBakeryShortCode_Revature_Slider_Video_Container_Func extends WPBakeryShortCodesContainer{
			
		}
		
    
}
if ( class_exists( 'WPBakeryShortCode' ) ) {
    
	   class WPBakeryShortCode_Training_Curriculum_Header extends WPBakeryShortCode{
			
		}
		class WPBakeryShortCode_Training_Curriculum_Spotlight extends WPBakeryShortCode{
			
		}
		class WPBakeryShortCode_Training_Locations extends WPBakeryShortCode{
			
		}
		class WPBakeryShortCode_Training_Social_Media_Section extends WPBakeryShortCode{
			
		}
		class WPBakeryShortCode_Revature_Curriculum_Training_Process extends WPBakeryShortCode{
			
		}
		class WPBakeryShortCode_Code_Life_Orange_Header_Section extends WPBakeryShortCode{
			
		}
		class WPBakeryShortCode_Revature_Slider_Video_Section_Func extends WPBakeryShortCode{
			
		}
		
}
	/*  End   vc_map of  Revature- Video container and slider Section  */
	
	/*-----------------------------------End vc_map() functions --------------------------------------------*/
	
}
