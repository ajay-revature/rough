
var revHtmlEnrichmentArray = [
	
	{findElementSelector: '.vc-pre-post-divs-rev-pro-blog', postText: ' </div></section>', preText: '<section class="revpro-center hidden-xs rev-pro-blog-desktop-section"><div class="row text-left no-margin">'},
	
	//{findElementSelector: '.UI_home_revpro_section_function', postText: ' </div></div></section>', preText: '<section class="RevPro-bgcolor"><div class="container no-padding"><div class="row">'},
	
	{findElementSelector: '.vc-pre-post-divs-leftimgrightxtvs_home', postText: '</div></div></section>', preText: '<section class="RevPro-bgcolor"><div class="container no-padding"><div class="row">'},
	
	{findElementSelector: '.vc-pre-post-divs-leftimgrightxtvs_inner', postText: '</div></div></section>', preText: '<section class="RevPro-bgcolor rv-pro-business-bg"><div class="container"><div class="row">'},
	
	{findElementSelector: '.vc-testimonial-item', postText: getPostTextOfTestimonials(), preText: getPreTextOfTestimonials()},
	
	{findElementSelector: '.vc-pre-post-divs-sticky', postText: ' </ul></nav></div></div></section>', preText: '<section class="revpro-sub-nav hidden-xs"><div class="container sticky-nav"><div class=""><nav class="rev-pro-menu" id="stickyNav"><ul>'},
	{findElementSelector: '.vc-pre-post-divs-get-hired', postText: '</section>', preText: '<section class="revpro-quickfacts">'},
	
	{findElementSelector: '.vc-pre-post-divs-faq-title', postText: '</section>', preText: '<section class="container" id="faq">'},
	{findElementSelector: '.vc-pre-post-divs-faq-qans', postText: '</ul></div>', preText: '<div class=""><ul class="faq">'},
	
	{findElementSelector: '.rev-quick-1', groupOnlyOfSameSelector: true, postText: '</div>', preText: '<div class="rev-pro-quick-contain">'}
	
];

function getPostTextOfTestimonials() {
	var html = [];
	html.push('</div>');
	html.push('<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">');
	html.push('<span class="prev-arrow" aria-hidden="true"><img src="../wp-content/themes/revature/imgs/left-arrow.svg"/></span>');
	html.push('<span class="sr-only">Previous</span>');
	html.push('</a>');
	html.push('<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">');
	html.push('<span class="right-arrow" aria-hidden="true"><img src="../wp-content/themes/revature/imgs/right-arrow.svg"/></span>');
	html.push('<span class="sr-only">Next</span>');
	html.push('</a>');
	html.push('</div>');
	html.push('</section>');
	return html.join('');
}
function getPreTextOfTestimonials() {
	$($('.vc-testimonial-item')[0]).addClass('active');
	var size = $('.vc-testimonial-item').length;
	var html = [];
	html.push('<section class="Testimon-bgcolor">');
	html.push('<div class="container"><div class="row"><div class="col-lg-12 col-md-12 col-sm-12"><h2>What Students Are Saying About Us. </h2></div></div></div>');
	html.push('<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">');
	html.push('<ol class="carousel-indicators">');
	for(var i = 0 ; i < size; i++) {
		html.push('<li data-target="#myCarousel" data-slide-to="' + i + '" ' + (i ? '' : 'class="active"') + '></li>');
	}
	html.push('</ol>');
	html.push('<div class="carousel-inner" role="listbox">');
	return html.join('');
}

function revatureNestingHtmlEnrichment() {
	for(var i = 0; i < revHtmlEnrichmentArray.length; i++) {
		var item = revHtmlEnrichmentArray[i];
		if(item.groupOnlyOfSameSelector) {
			$(item.findElementSelector).wrapAll(item.preText + item.postText);
			return;
		}
		var parent = $($(item.findElementSelector)[0]).parent();
		var oldHtml = parent.html();
		parent.html(item.preText + oldHtml + item.postText);
	}
}

function getBlogData(){
	var blogdata =[];
	$('.vc-pre-post-divs-rev-pro-blog').each(function(index, element) {
	   var $ele = $(element);
	   var img = $ele.find('.rev-benefit-icon').html();
	   var ordernumber = $ele.find('.rev-bebefit-number').html();
	   var titletxt = $ele.find('.rev-benefit-title-txt-vc').html();
	   var description = $ele.find('.rev-benefit-content').html();
	   blogdata.push({
		   img:img,
		   ordernumber:ordernumber,
		   titletxt:titletxt,
		   description:description
		});
		 
	});
	return blogdata;
}

function getMobileBlogHTML(data){
	var html = [];
	
	html.push('<div class="row text-left no-margin" id="revPro">');
	 
	for(var i=0; i<data.length;i++){
		var datum = data[i];
		html.push('<div class="col-lg-4 col-md-4 col-sm-12 rev-pro-blog">');
		html.push('<div class="rev-benefit-icon" style="display:none;">');
		html.push(datum.img);
		html.push('</div>');
		html.push('<h3 class="rev-benefit-title">');
		html.push('<span class="rev-bebefit-number">'+datum.ordernumber+'</span>');
		html.push('<span class="rev-benefit-title-txt-vc">'+datum.titletxt+'</span>');
		html.push('<span class="arrow">');	
		html.push('<img src="../wp-content/themes/revature/imgs/faq-down-arrow.svg">');
		html.push('</span>');
		html.push('</h3>');
		html.push('<p class="rev-benefit-content" style="display:none;">');
		html.push(datum.description);
		html.push('</p>');
		html.push('</div>');
			
	}
	
	html.push('</div>');
	return html.join('');
}

function manipulatemobileview(){
	//debugger;
	var myblogdata = getBlogData(),
		myBlogMobileContent = getMobileBlogHTML(myblogdata),
		$where = $('.rev-pro-blog-desktop-section'),
		$what = $('<section class="revpro-center visible-xs-block"></section>');
	$what.html(myBlogMobileContent);
	$what.insertAfter($where);
}