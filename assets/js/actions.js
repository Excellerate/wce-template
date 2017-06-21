jQuery(document).ready(function(){

  // Activate mobile menu
  jQuery('#sidebar').sidebar({dimPage:false});
  jQuery("#sidebarButton").click(function(){
    jQuery('#sidebar').sidebar('toggle');  
  });

  // Dropdown
  jQuery('.ui.dropdown').dropdown({transition: 'slide down', on: 'hover'});

  // Video
  jQuery('.ui.embed').embed();

});