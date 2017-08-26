<!DOCTYPE html>
<html>
  <head>
    <style>
       #map {
        height: 400px;
        width: 80%;
       }
    </style>
  </head>
  <body style="background-image:url('images/imgg.jpg');">
      <p id="f" style="color:cyan;font-size:50px;Margin-left:200px;">Welcome To The Venture City </p>
      <button id="hi" onclick="getLocation()">Get Details about your location</button>
    <div id="map"></div>

    <script>
        var x = document.getElementById("map");
        var ff = document.getElementById("f");
        var z1,z2,temp1,temp2;
        
        function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
          }
}
        function showPosition(position) {
             z1 = (position.coords.latitude); 
             z2 = (position.coords.longitude);
             initMap();
           };
              
           
                  
      function initMap() {
        var uluru = {lat: z1, lng: z2};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: parseInt(zoo()),
          center: uluru
        });
          z3 = z1;z4=z2;
          function zoo() {
            var d = 40075004; // in meters
            var e = 400;
            var r = d / 256;
            var zoomLevel = 1;
            while ((r * e) > 2000) {
               e /= 2;
             ++zoomLevel;
             }
    
    return zoomLevel;
}
        var marker = new google.maps.Marker({
          position: uluru,
          label: "T",
          map: map
        });
          move();
      }
        function move() {
            var z3,z4;
            var z5 = [ 11.3323];
            var z6 = [ 12.1232];
            for (var i=0.5;i<10;i++)
                {
                    z3 = z3*i;
                    z4 = z4*i+1;
                    z5.push(z3);
                    z6.push(z4);
                    
                }
            mark(z5,z6);
        }
        function mark(tem,tem2)
        {
              var infowindow = new google.maps.InfoWindow();

              var marker, j;

               for (j = 0; i < tem.length; j++) {  
                 marker = new google.maps.Marker({
                 position: new google.maps.LatLng(tem[j], tem2[j]),
                 map: map
                 });

      google.maps.event.addListener(marker, 'load', (function(marker, j) {
        return function() {
          infowindow.setContent("hello world");
          infowindow.open(map, marker);
        }
      })(marker, j));
    }
        }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKfNnVFgy5M62NA5dPb5EHeqPXXlO5SHY &callback=initMap">
    </script>
<script src="js/kar.js"></script>
     <cemter>
      <marquee> <p style="color:red;font-size:50px;">Place to begin the Innovation</p></marquee></cemter>
      <div style="height:300px;width:100%;color:red">
  <a href="chat.php">    <button style="margin-left:600px;background-color:red;color:cyan;">Enter the Chat Room</button></a></div>
  </body>
</html>