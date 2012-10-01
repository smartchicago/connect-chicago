var MapsWidgetLib = MapsWidgetLib || {};
var MapsWidgetLib = {

  mapUrl: "http://locations.weconnectchicago.org",

  doSearch: function() {
    var address = encodeURIComponent($("#search_address").val());
    window.location = MapsWidgetLib.mapUrl + "/#/?address=" + address;
    return false;
  },

  findMe: function() {
    // Try W3C Geolocation (Preferred)
    var foundLocation;
    
    if(navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function(position) {
        foundLocation = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
        MapsWidgetLib.addrFromLatLng(foundLocation);
      }, null);
    }
    else {
      alert("Sorry, we could not find your location.");
    }
  },

  addrFromLatLng: function(latLngPoint) {
    geocoder.geocode({'latLng': latLngPoint}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        if (results[1]) {
          $('#search_address').val(results[1].formatted_address);
          $('.hint').focus();
          MapsWidgetLib.doSearch();
        }
      } else {
        alert("Geocoder failed due to: " + status);
      }
    });
  }
}