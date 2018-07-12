<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="HEIMDAL">
    <meta name="theme-color" content="#716aca">
    <meta property="og:title" content="LokiMaps - Wij hebben sportfaciliteit <?php echo $naam;?> gevonden!">
    <?php
$url = 'https://raw.githubusercontent.com/Heimdalbe/HOGENTimg/master/'.$afbeelding;
$array = get_headers($url);
$string = $array[0];
if(strpos($string,"200"))
  {echo '<meta property="og:image" content="'.$url.'"><meta name="twitter:image" content="'.$url.'">';
  }
  else
  {
    echo '<meta property="og:image" content="https://maps.heimdal.be/assets/images/thumbnail.jpg"><meta name="twitter:image" content="https://maps.heimdal.be/assets/images/thumbnail.jpg">';
  }
?>
    <meta name="twitter:title" content="LokiMaps - Wij hebben sportfaciliteit <?php echo $naam;?> gevonden!">
    <meta name="twitter:description" content="LokiMaps - Wij hebben sportfaciliteit <?php echo $naam;?> gevonden!">
    <meta name="twitter:card" content="summary_large_image">
    <title>LokiMaps - Wij hebben de sportfaciliteit <?php echo $naam;?> gevonden!</title>
    <style>
        #map {
            height: 100%;
        }
    </style>
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="/assets/css/one-page-wonder.min.css" rel="stylesheet">
    <style>.badge {
  box-sizing: border-box;
 font-size: 15px;
  padding: 7px;
  display: inline-block;
margin-bottom: 15px;
  color: white;
  text-align: center;
  background-color: palevioletred;
  border-radius: 5px;
}</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container"><a class="navbar-brand" href="/">Hogent - <?php echo $naam;?></a></div>
    </nav>
    <header id="map" class="masthead text-center text-white"></header>

    <section>
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-12">
                    <div class="p-5">

                        <h2 class="display-4">Wij hebben jouw sportfaciliteit gevonden!</h2>


                        <p>Jouw sportfaciliteit bevind zich op <b>'<?php echo $adress;?>'</b>. Indien jij deze campus niet weet zijn klik <a href="<?php echo $start;?>">hier</a>.</p>
                        <p>
                            <?php echo $route;?>
                        </p>
                        <hr>
                          <p style="font-size:11px;">
                              Locatie toegevoegd door <a href="https://heimdal.be/<?php echo $door;?>"><?php echo $door;?></a> | Raporteren of verbeteren kan via <a href="http://m.me/heimdal.be">Messenger</a> of <a href="mailto:gate@heimdal.be">gate@heimdal.be</a> | <a href="https://github.com/Heimdalbe/LOKImaps/">API Example</a>
                        </p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <footer class="py-5 bg-black">
        <div class="container">
            <p class="m-0 text-center text-white small">Copyright &copy; Heimdal & HoGent</p>
        </div>
    </footer>



    <script>
      var customLabel = {
       };

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(51.043397, 3.717029),
          zoom: 18, styles: [{"featureType":"all","elementType":"labels","stylers":[{"lightness":63},{"hue":"#ff0000"}]},{"featureType":"administrative","elementType":"all","stylers":[{"hue":"#000bff"},{"visibility":"on"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"visibility":"on"}]},{"featureType":"administrative","elementType":"labels","stylers":[{"color":"#4a4a4a"},{"visibility":"on"}]},{"featureType":"administrative","elementType":"labels.text","stylers":[{"weight":"0.01"},{"color":"#727272"},{"visibility":"on"}]},{"featureType":"administrative.country","elementType":"labels","stylers":[{"color":"#ff0000"}]},{"featureType":"administrative.country","elementType":"labels.text","stylers":[{"color":"#ff0000"}]},{"featureType":"administrative.province","elementType":"geometry.fill","stylers":[{"visibility":"on"}]},{"featureType":"administrative.province","elementType":"labels.text","stylers":[{"color":"#545454"}]},{"featureType":"administrative.locality","elementType":"labels.text","stylers":[{"visibility":"on"},{"color":"#737373"}]},{"featureType":"administrative.neighborhood","elementType":"labels.text","stylers":[{"color":"#7c7c7c"},{"weight":"0.01"}]},{"featureType":"administrative.land_parcel","elementType":"labels.text","stylers":[{"color":"#404040"}]},{"featureType":"landscape","elementType":"all","stylers":[{"lightness":16},{"hue":"#ff001a"},{"saturation":-61}]},{"featureType":"poi","elementType":"labels.text","stylers":[{"color":"#828282"},{"weight":"0.01"}]},{"featureType":"poi.government","elementType":"labels.text","stylers":[{"color":"#4c4c4c"}]},{"featureType":"poi.park","elementType":"all","stylers":[{"hue":"#00ff91"}]},{"featureType":"poi.park","elementType":"labels.text","stylers":[{"color":"#7b7b7b"}]},{"featureType":"road","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels.text","stylers":[{"color":"#999999"},{"visibility":"on"},{"weight":"0.01"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"hue":"#ff0011"},{"lightness":53}]},{"featureType":"road.highway","elementType":"labels.text","stylers":[{"color":"#626262"}]},{"featureType":"transit","elementType":"labels.text","stylers":[{"color":"#676767"},{"weight":"0.01"}]},{"featureType":"water","elementType":"all","stylers":[{"hue":"#0055ff"}]}]


        });
        var infoWindow = new google.maps.InfoWindow;

            

              var id = '1';
              var name = '<?php echo $naam;?>';
              var address = '<?php echo $adress;?>';
              var type = '<?php echo $type;?>';
              var point = new google.maps.LatLng(
                  parseFloat(<?php echo $xpunt;?>),
                  parseFloat(<?php echo $ypunt;?>));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);
              var icon = customLabel[type] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label
              });   map.panTo(marker.getPosition());
    map.setCenter(marker.getPosition());
             
          
        
        }

      function doNothing() {}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnKp74xBf2DpSZC9C8deVZke0RtYYdJm0&callback=initMap">
    </script>
    <script src="/assets/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>