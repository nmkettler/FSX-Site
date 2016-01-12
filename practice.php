
<!DOCTYPE html>
<html>
  <head>
    <style type="text/css">
      html, body { height: 100%; margin: 0; padding: 0; }
      #map { height: 100%; }
    </style>

  </head>
  <body>
    <div id="map"></div>
     <script>
	    var script = document.createElement('script');
		script.src = 'http://http://localhost/series/pracNav/practice.php';
		document.getElementsByTagName('head')[0].appendChild(script);
    </script>
    <script type="text/javascript">

		var map;
		function initMap() {
		  map = new google.maps.Map(document.getElementById('map'), {
		    center: {lat: -34.397, lng: 150.644},
		    zoom: 8
		  });
		}

    </script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJHRn1-8nvsnm8Qz9L1SvD7WIB1aonZH0&callback=initMap">
    </script>
  </body>
</html>

<!--batchgeo.com

API Key: AIzaSyBJHRn1-8nvsnm8Qz9L1SvD7WIB1aonZH0-->