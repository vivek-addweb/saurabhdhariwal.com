jQuery(document).ready(function(){
  // Custom Owl image slider
  jQuery('.bts-img-slider > .carousel > ul').addClass('carousel-inner').attr('role','listbox');
  jQuery('.bts-img-slider > .carousel > ul > li').addClass('carousel-item');
  jQuery('.bts-img-slider > .carousel > ul > li:first-child').addClass('active');
  // End

  //Menu open new tab
  jQuery('#block-socialmedia ul li a').attr("target","_blank");
});

