<html>
  <head>
    <title>Mapa</title>
    <style>
      #mapa {
        height: 100%
      }
    </style>
  </head>
  <body>
    <div id="mapa"></div>
    <script>

      function mapa() {
        var coordenadas = {lat: 40.6575, lng: -7.91428};

        var mapa = new google.maps.Map(document.getElementById('mapa'), {
          zoom: 15,
          center: coordenadas 
        });

        var marker = new google.maps.Marker({
          position: coordenadas,
          map: mapa,
          title: 'Meu marcador'
        });

      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZHKzluD3TQIRFcswUZ8I6dCX8Lcti9tU&callback=mapa">
    </script>
  </body>
</html>