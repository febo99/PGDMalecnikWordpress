jQuery(document).ready(function(){
  jQuery('.vehicleNameOverlay').mouseenter(function(){
    jQuery('#t').fadeTo(750,1);
  });
  jQuery('.vehicleNameOverlay').mouseleave(function(){
    jQuery('#t').fadeTo(200,0)
  });
    jQuery('.dropdown').hover(function() {
        jQuery(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(300);
      }, function() {
        jQuery(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(300);
      });
    var height = 0;
    jQuery('.articleInfo h2').each(function(){
       var currentHeight= jQuery(this).height();
        height = currentHeight > height ? currentHeight : height; 
    });
    jQuery('.articleInfo h2').css('height', height); 
});
