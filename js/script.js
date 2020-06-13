jQuery(document).ready(function(){
  jQuery('#gvc').mouseenter(function(){
    jQuery('#vehicleNameGVC').fadeTo(750,1);
    jQuery(this).fadeTo(750,0.6);
  });
  jQuery('#gvc').mouseleave(function(){
    jQuery('#vehicleNameGVC').fadeTo(750,0);
    jQuery(this).fadeTo(750,0);
  });
  jQuery('#gvm').mouseenter(function(){
    jQuery('#vehicleNameGVM').fadeTo(750,1);
    jQuery(this).fadeTo(750,0.6);
  });
  jQuery('#gvm').mouseleave(function(){
    jQuery('#vehicleNameGVM').fadeTo(750,0);
    jQuery(this).fadeTo(750,0);
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

    jQuery('.navbar').on('show.bs.collapse', function(){
      jQuery('.navbar').css('position','absolute');
    });

    jQuery('.navbar').on('hidden.bs.collapse', function(){
      jQuery('.navbar').css('position','relative');
    });
});
