jQuery(document).ready(function(){jQuery(".bts-img-slider > .carousel > ul").addClass("carousel-inner").attr("role","listbox"),jQuery(".bts-img-slider > .carousel > ul > li").addClass("carousel-item"),jQuery(".bts-img-slider > .carousel > ul > li:first-child").addClass("active"),jQuery("#block-socialmedia ul li a").attr("target","_blank")
	jQuery('ul.carousel-inner').each(function(){
         	var len = jQuery(this).find('li').length;        	
         	if(len < 2){
         	jQuery(this).parent().find('.left.carousel-control').hide();
         	jQuery(this).parent().find('.right.carousel-control').hide();
         }
    });

});