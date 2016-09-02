// MAP //
var initMap = function() {

  var styles = style;

  // Map Init Settings
  var settings = {lat:-26.1283852,lng:28.0300712, zoom:14};

  // Map Options
  options = {
    mapTypeControl : false,
    navigationControl : true,
    streetViewControl: true,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    scrollwheel: 0,
    navigationControlOptions : {
      style : google.maps.NavigationControlStyle.LARGE,
      position : google.maps.ControlPosition.RIGHT
    },
    zoom : settings.zoom,
    center : new google.maps.LatLng(settings.lat, settings.lng),
    styles: styles
  };

  // Set map on div
  map = new google.maps.Map(document.getElementById("map"), options);

  var marker = new google.maps.Marker({
    position: new google.maps.LatLng(settings.lat, settings.lng),
    icon: $base + 'templates/cwe/assets/img/location.png',
    map: map
  });

}

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