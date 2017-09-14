<?php

/**
 * Template Name: Career
*/

get_header(); ?>
<style type="text/css">
	
	#load_data_message
	{
	text-align:center;
    padding: 12px;
	}
	
	#load_data_message button
	{
	background: #f26925;
	outline: 0;
	font-family: 'futura-pt';
    font-size: 14px;
    padding: 10px 25px;
	}
	#load_data_messagee
	{
	text-align:center;
	padding: 12px;
	}
	
	#load_data_messagee button
	{
	background: #f26925;
	outline: 0;
	font-family: 'futura-pt';
    font-size: 14px;
    padding: 10px 25px;
	}
	
	#load_data_messageee{
	text-align:center;
	    padding: 12px;
	}
	
	#load_data_messageee button
	{
	background: #f26925;
	outline: 0;
	font-family: 'futura-pt';
    font-size: 14px;
    padding: 10px 25px;
	border-radius: 28px;
	}
	
	#load_data_messageeeee{
	text-align:center;
	    padding: 12px;
	}
	
	#load_data_messageeeee button
	{
	background: #f26925;
	outline: 0;
	font-family: 'futura-pt';
    font-size: 14px;
    padding: 10px 25px;
	border-radius: 28px;
	}
	
	#load_data_messagees
	{
	text-align:center;
	    padding: 12px;
	}
	
	#load_data_messagees button
	{
	background: #f26925;
	outline: 0;
	font-family: 'futura-pt';
    font-size: 14px;
    padding: 10px 25px;
	border-radius: 28px;
	}
	
	#load_data_messageeeo{
	text-align:center;
	    padding: 12px;
	}
	
	#load_data_messageeeo button
	{
	background: #f26925;
	outline: 0;
	font-family: 'futura-pt';
    font-size: 14px;
    padding: 10px 25px;
	border-radius: 28px;	
	}
	
	</style>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	
	
	<?php
	$prefix = "";
//Loadmore configuarion
$resultsPerPage=5;
	?>
 <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-2.1.1.js"></script> 
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/filter-career.js"></script>

<div class="careers_hero">
	        <div class="row no-margin contact-hero-content">
            <div class="col-lg-12 col-md-12 col-sm-12 margin-top-50 margin-bottom-50">
                <h1>Careers at Revature</h1>
                <p class="">
When you're on the leading edge of talent development and business technologies, things happen fast. See some of Revature's latest thinking that's helping to drive the industry forward.				</p>
            </div>
		</div>
		</div>
		<?php	
			if(function_exists('career_search_filter')){
				career_search_filter($postid);
       
			}
	
?>
  <?php
 
 if (isset($_GET["submit"])) {
	 
   $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
?>


<?php

 $s=$_GET['Location'];
 $jobs_country= explode("/",$s);
 $s1= $jobs_country[0];
 $jobs_country[1];
 $sS=$_GET['Department'];
 
 if($s1!="" &&  $sS!="")
 {
	 
	 ?>
<script type="text/javascript">

$(document).ready(function(){
var s1='<?php echo  $s1;?>';
var sS='<?php echo  $sS;?>';

 var limit = 5;
 var start = 0;
 
 var action = 'inactive';
 function load_country_dataas(limit, start,s1,sS)
 {
	
  $.ajax({
     url: '<?php echo get_stylesheet_directory_uri(); ?>/page-templates/loadmoresearch.php',
   method:"POST",
   data:{limit:limit, start:start ,s1: s1,sS: sS},
   cache:false,
   success:function(data)
   {
	
    $('#load_dataaa').append(data);

   if(0==data)
    {
     $('#load_data_messageee').html("<button type='button' style='opacity:0.4' class='btn btn-info' disabled'>No Data Found</button>");
     action = 'active';
    }
    else
    {
     $('#load_data_messageee').html("<button type='button' class='btn btn-warning'><b>Please Wait....</b></button>");
     action = "inactive";
    }
   }
  });
 }

 if(action == 'inactive')
 {
  action = 'active';
  load_country_dataas(limit, start,s1,sS);
 }
 $(window).scroll(function(){
  if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive')
  {
   action = 'active';
   start = start + limit;
   setTimeout(function(){
    load_country_dataas(limit, start,s1,sS);
   }, 1000);
  }
 });
 
});
</script>   
<div id="load_dataaa"></div>
   <div id="load_data_messageee"></div>
<?php
 }
 
 else if($s1!="" && $sS =="")
{
  ?>
<script type="text/javascript">


$(document).ready(function(){
var s1='<?php echo  $s1;?>';

 var limit = 5;
 var start = 0;
 
 var action = 'inactive';
 function load_country_data(limit, start,s1,sS)
 {
	
  $.ajax({
     url: '<?php echo get_stylesheet_directory_uri(); ?>/page-templates/loadmoresearch.php',
   method:"POST",
   data:{limit:limit, start:start ,s1: s1},
   cache:false,
   success:function(data)
   {
	
    $('#load_dataaaa').append(data);
   if(0==data)
    {
   
    $('#load_data_messageeeo').html("<button type='button' style='opacity:0.4' class='btn btn-info'disabled>No Data Found</button>");
     action = 'active';
    }
    else
    {
     $('#load_data_messageeeo').html("<button type='button' class='btn btn-warning'><b>Please Wait....</b></button>");
     action = "inactive";
    }
   }
  });
 }

 if(action == 'inactive')
 {
  action = 'active';
  load_country_data(limit, start,s1);
 }
 $(window).scroll(function(){
  if($(window).scrollTop() + $(window).height() > $("#load_dataaaa").height() && action == 'inactive')
  {
   action = 'active';
   start = start + limit;
   setTimeout(function(){
    load_country_data(limit, start,s1);
   }, 1000);
  }
 });
 
});
</script>   
<div id="load_dataaaa"></div>
   <div id="load_data_messageeeo"></div>
<?php

}
else if($s1=="" && $sS !=""){
	?>
	<script type="text/javascript">


$(document).ready(function(){

var sS='<?php echo  $sS;?>';
 var limit = 5;
 var start = 0;
 
 var action = 'inactive';
 function load_country_data(limit, start,sS)
 {
	
  $.ajax({
     url: '<?php echo get_stylesheet_directory_uri(); ?>/page-templates/loadmoresearch.php',
   method:"POST",
   data:{limit:limit, start:start ,sS: sS},
   cache:false,
   success:function(data)
   {
	 
    $('#load_dataa').append(data);
    if(0==data)
    {
		$('#load_data_messagees').html("<button type='button' style='opacity:0.4' class='btn btn-info'disabled>No Data Found</button>");
         action = 'active';
    }
    else
    {
     $('#load_data_messagees').html("<button type='button' class='btn btn-warning'><b>Please Wait....</b></button>");
     action = "inactive";
    }
   }
  });
 }

 if(action == 'inactive')
 {
  action = 'active';
  load_country_data(limit, start,sS);
 }
 $(window).scroll(function(){
  if($(window).scrollTop() + $(window).height() > $("#load_dataa").height() && action == 'inactive')
  {
   action = 'active';
   start = start + limit;
   setTimeout(function(){
    load_country_data(limit, start,sS);
   }, 1000);
  }
 });
 
});
</script>   
<div id="load_dataa"></div>
   <div id="load_data_messagees"></div><?php

}
else
{
	echo "<p style='padding:12px 0px 12px 0px;font-size:14px;'><b><center>No selection occur.Please Select  atleast one drop down.</center> </p></span>";
}
    // The Query
//echo"<pre>";
///	var_dump($the_query);
//echo"</pre>";
$the_query = new WP_Query( $args );

if ($the_query->have_posts() ) {
	//var_dump($the_query->have_posts());
       
	while($the_query->have_posts()) : 
		//var_dump($the_query->the_post());
	   $the_query->the_post();	
	
	?>
	 	
	  <section class="blog-articals" id="benefits">

      <div class="container">

         <div class="row no-margin">

  
   <div class="col-lg-12 col-md-12 col-sm-12 blog-bottom-border">

 <h3 class="margin-bottom-25"><?php echo $post->post_title; ?></h3>
 <?php  $jobs_department     = get_post_meta($post->ID, "jobs_department", true )? get_post_meta($post->ID, "jobs_department", true ): "Not Mentioned";?>
 <?php   $jobs_country       = get_post_meta($post->ID, "jobs_country", true )? get_post_meta($post->ID, "jobs_country", true ): "Not Mentioned"; ?>
 <?php   $jobs_work_location = get_post_meta($post->ID, "jobs_work_location", true)? get_post_meta($post->ID, "jobs_work_location", true ): "Not Mentioned";?>
                 <div class=""><b><?php echo $jobs_department; ?></b><span class="">|</span><b><?php echo $jobs_country; ?>,<?php echo $jobs_work_location ?></b></div>

              <?php if(($post->post_content)!="")
				{
					?>
				  <div class="blog-post-single">
				 <p class="career-paragraph">
			         <?php  echo get_the_excerpt();	?>
					  </p>
					 </div>
                
				<?php
				     }
				  else
				   {
				   ?>
				<p>We are looking for a passionate <?php echo $post->post_title; ?> to join our team. Don't miss this exciting opportunity!&nbsp; Start the Ultimate Tech Career with a job as an <?php echo $post->post_title; ?> at Revature, where you will learn the latest technologies and work at some of the most respected organizations in <?php echo $jobs_work_location; ?>, <?php echo $jobs_country; ?> </p>
<?php 
				   }
				?>
                   <a href="<?php echo  get_permalink($post->ID) ?>" class="orange-invert-btn margin-top-25 margin-bottom-25">READ MORE<i class="fa fa-angle-right" aria-hidden="true"></i></a>

               </div>

   </div> <!-- end blog posts -->	
											
    	
  </div>
  </div>
  </section>
												
		 <?php endwhile; ?>		
	  </div>
	  </div>
	  
	  <?php if (function_exists("pagination")) {
		 
		pagination($the_query->max_num_pages);
	} ?>
  </section>
       <?php 
    }
  }
else
{
?>	
<script type="text/javascript">


$(document).ready(function(){

 var limit = 5;
 var start = 0;
 var action = 'inactive';
 function load_country_data(limit, start)
 {
  $.ajax({
     url: '<?php echo get_stylesheet_directory_uri(); ?>/page-templates/loadmoresearch.php',
   method:"POST",
   data:{limit:limit, start:start},
   cache:false,
   success:function(data)
   {
    $('#load_data').append(data);
	
    if(0==data)
    {
     $('#load_data_message').html("<button type='button' style='opacity:0.4' class='btn btn-info'disabled>No Data Found</button>");
     action = 'active';
    }
    else
    {
     $('#load_data_message').html("<button type='button' class='btn btn-warning'><b>Please Wait....</b></button>");
     action = "inactive";
    }
   }
  });
 }

 if(action == 'inactive')
 {
  action = 'active';
  load_country_data(limit, start);
 }
 $(window).scroll(function(){
  if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive')
  {
   action = 'active';
   start = start + limit;
   setTimeout(function(){
    load_country_data(limit, start);
   }, 1000);
  }
 });
 
});
</script>	
	<div id="load_data"></div>
   <div id="load_data_message"></div>
 
 <?php 
 }
	?>

  
<?php if (function_exists("pagination")) {
    pagination($custom_query->max_num_pages);
} ?>

		<?php get_footer(); ?>