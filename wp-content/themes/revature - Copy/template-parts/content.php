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
	
	
	</style>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>	
<?php
					   $getURL = $_SERVER['REQUEST_URI'];
					   $SlugChunks = explode("/", $getURL);	
                   				   
					  
				?>

    <?php
	
	if($SlugChunks[2]!=""){
	?>
<section class="blog-search-bg">
           <form id="" method="get" target="" action="<?php echo esc_url( home_url( '/' ) ); ?>">

                <div class="container">

                   <div class="row">

                  <div class="col-lg-12 col-md-12 col-xs-12">

                    <input class="form-control blog-search-field" placeholder="Search" type="text" name="s" id="search"/>
                    <input type="hidden" value="post" name="post_type" />
							<span id="" class="blog-search-icon"><button class="btn-style-none"><i class="fa fa-search" aria-hidden="true"></i></button></span>

                   </div>

                  </div>

                </div>

            </form>
 </section>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-2.1.1.js"></script> 
	<script>
	$(document).ready(function() {
	$('#menu-item-1385').addClass('active')
	});
	</script>
	

    <section  id='main-subnav-blog' class="revpro-sub-nav">
    
        <div class="container blog-sticky-nav">
    
            <div class="">
    
                 <nav class="rev-pro-menu blogs">
    			<?php
					   $getURL = $_SERVER['REQUEST_URI'];
					   $SlugChunks = explode("/", $getURL);	
                   				   
					  
				?>
                
                     <ul id='insight-subnav' class="text-center">
                       <li><a href="<?php echo get_site_url(); ?>/insights/" <?php if($SlugChunks[2]=="") { echo "class=rev-pro-active";} ?> >ALL</a></li>
					   <?php 
					    $args = array(
			'hide_empty'=>0,
                          'orderby' => 'id'                    
	                      );
                      $categories = get_categories($args);
                      foreach ($categories as $cat) {
                           if($cat->cat_name!='Uncategorized'){
						   $category_link = get_category_link($cat->cat_ID);
						   
						   if($SlugChunks[2]==$cat->slug){
							$actcls = "rev-pro-active";   
						   }else{
							   $actcls = "";   
						   }
						   
                         ?>
                         	<li><a  id="link_id" data-usage="<?php echo $cat->cat_ID;?>" href="<?php echo esc_url( $category_link ); ?>" class="<?php echo $actcls; ?>"><?php  echo strtoupper($cat->name); ?></a></li>
                         <?php
                        }
}
                    ?>
                     </ul>
                 </nav>
            </div>
        </div>
    </section>
       
    <section class="blog-category-thought padding-75">
    <div class="mob-container-unset">

         <div class="row no-margin">

               <div class="col-lg-12 col-md-12 col-sm-12 no-margin no-padding">
				<?php
					$category = $wp_query->get_queried_object();
					$cat_name = $category->name;
					$cat_id = $category->cat_ID;
					$cat_description = $category->description;
					?>
                
                <h3 class="margin-bottom-15"><?php echo $cat_name; ?></h3>

        </div>

         </div>

     </div>
    </section>         
				
<script type="text/javascript">
 $(document).ready(function(){
 var page='<?php echo $cat_id;?>';
 var limit = 5;
 var start = 0;
 var action = 'inactive';
 function load_country_data(limit, start,page)
 {
  $.ajax({
            url: '<?php echo get_stylesheet_directory_uri(); ?>/page-templates/blogsearch.php',
            method:"POST",
            data:{limit:limit, start:start,page:page},
            cache:false,
   success:function(data)
   {
    $('#load_data').append(data);
    if(0==data)
    {
     $('#load_data_message').html("<button type='button' style='opacity:0.4; display:none;' class='btn btn-info'disabled>No Data Found</button>");
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
  load_country_data(limit, start,page);
 }
 $(window).scroll(function(){
  if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive')
  {
   action = 'active';
   start = start + limit;
   setTimeout(function(){
    load_country_data(limit, start,page);
   }, 1000);
  }
 });
 
});

</script>	
	<div id="load_data"></div>
   <div id="load_data_message"></div>
                                   

             
    <?php
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
            url: '<?php echo get_stylesheet_directory_uri(); ?>/page-templates/blogsearch.php',
            method:"POST",
            data:{limit:limit, start:start},
            cache:false,
   success:function(data)
   {
	  
    $('#load_data').append(data);
    if(0==data)
    {
     $('#load_data_message').html("<button type='button' style='opacity:0.4;display:none;' class='btn btn-info'disabled>No Data Found</button>");
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
    load_country_data(limit,start);
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

<section class="quickcont-bg">

	<div class="row no-margin">

		<div class="col-lg-12 col-md-12 col-sm-12 no-padding">

			<div>

               <div class="row">

                  <div class="col-lg-12 col-md-12 col-sm-12">

                <h2 class="margin-bottom-35">Ready to Advance?</h2>

                 <a href="../../contact-us" class="white-read-btn">CONTACT US<i class="fa fa-angle-right" aria-hidden="true"></i></a>

                    </div>

               </div>

            </div>

		</div>

	</div>

</section>