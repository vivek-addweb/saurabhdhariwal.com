jQuery(document).ready(function(){
  // Custom Owl image slider
  jQuery('.bts-img-slider > .carousel > ul').addClass('carousel-inner').attr('role','listbox');
  jQuery('.bts-img-slider > .carousel > ul > li').addClass('carousel-item');
  jQuery('.bts-img-slider > .carousel > ul > li:first-child').addClass('active');
  // End

  // Show slider arrows on when it has more than one slide
  jQuery('ul.carousel-inner').each(function(){
    var len = jQuery(this).find('li').length;
    if(len < 2){
      jQuery(this).parent().find('.left.carousel-control').hide();
      jQuery(this).parent().find('.right.carousel-control').hide();
    }
  });
  // End

  // Menu open new tab
  jQuery('#block-socialmedia ul li a').attr("target","_blank");
});

